<!--
User Permissions
0 - Standard user
1 - Mod
2 - Admin
-->

@extends('index')
@section('content')
<li>&nbsp</li>
@foreach($data as $user)
<form method="POST" action="{{ route('grant') }}">
@csrf
<li><p class="d-inline-block" style="max-width: 50%">> ID: {{ $user->id }} NAME: {{ $user->name }} |  </p>
@if($user->type == '1')
<button class="btn-console green" name="grant" type="submit" value="RM:{{ $user->id }}">Remove mod</button>
@else
@if($user->type == '0')
<button class="btn-console green" name="grant" type="submit" value="GM:{{ $user->id }}">Grant mod</button>
@endif
@endif
</li>
</form>
@endforeach
@endsection