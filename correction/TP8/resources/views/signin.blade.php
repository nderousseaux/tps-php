@extends('layouts.app')

@section('title','Signin')

@section('main')
	@parent
	<form action="authenticate" method="post">
		@csrf
		<label for="login">Login</label>       <input type="text"     id="login"    name="login"    required autofocus>
		<label for="password">Password</label> <input type="password" id="password" name="password" required>
		<input type="submit" value="Signin">
	</form>
	<p>
		If you don't have an account, <a href="signup">signup</a> first.
	</p>
@endsection
