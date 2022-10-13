@extends('index')
@section('page',$data->title)
@section('content')
<li>&nbsp</li>
<form method="POST" action="{{ route('edit', $data->id) }}">
    @csrf
<li><input class="form-control" id='title' name='title' value="{{ $data->title }}"></li>
<li><textarea class="edit-textarea" id='text' name='text'>&nbsp {{ $data->content }}</textarea></li>
@auth
<li>&nbsp</li>
<li><button class="btn-console green" type="submit" name="btn" value="save">[ save ]</button><button class="btn-console red" type="submit" name="btn" value="remove">[ remove ]</button></li>
@endauth
</form>
@endsection