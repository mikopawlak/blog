@extends('index')
@section('page',$data->title)
@section('content')
<li>&nbsp</li>
<li><span>&nbsp {{ $data->content }}</span></li>
@auth
<li>&nbsp</li>
<li><a class="green" href="../edit/{{ $data->id }}">[ edit ] </a></li>   
@endauth
@endsection