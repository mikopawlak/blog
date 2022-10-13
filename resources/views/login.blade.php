@extends('index')
@section('page', 'Login')
@section('content')
<li>&nbsp</li>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <li><input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus></li>
    <li><input type="password" placeholder="Password" id="password" class="form-control" name="password" required></li>
    <div class="form-group mb-3">
    <li><input type="checkbox" name="remember"> <a style="font-size: 16px">Remember Me</a></li>
    <li><button type="submit" class="btn btn-dark btn-block">Signin</button></li>
</form>
    <li>&nbsp</li>
    <li>{{ session('success') }}</li>
@endsection