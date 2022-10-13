@extends('index')
@section('content')
<li>&nbsp</li>
<li>> Listing 10 newest posts...</li>
<li>&nbsp</li>
@foreach($data as $posts)
<li><a href="post/{{ $posts->id }}">> {{ $posts->title }}</a></li>
<li><span class="d-inline-block text-truncate" style="max-width: 50%">&nbsp {{ $posts->content }}</span></li>
@endforeach
@endsection