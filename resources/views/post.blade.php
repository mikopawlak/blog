@extends('index')
@section('page',$data->title)
@section('content')
<li>&nbsp</li>
<li><span>&nbsp {{ $data->content }}</span></li>
@auth
<li>&nbsp</li>
@if(Auth::user()->type == 1 || Auth::user()->type == 2 )
<li><a class="green" href="../edit/{{ $data->id }}">[ edit ] </a></li>  
@endif
@endauth
@endsection