@extends('index')
@section('page', 'Register')
@section('content')
<li>&nbsp</li>
<form method="POST" action="{{ route('register') }}">
    @csrf
    <li><input type="text" placeholder="Name" id="name" class="form-control" name="name" required autofocus></li>
    <li><input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus></li>
    <li><input type="password" placeholder="Password" id="password" class="form-control" name="password" required></li>
    <div class="form-group mb-3">
    <li><button type="submit" class="btn btn-dark btn-block">Register</button></li>
</form>
@endsection