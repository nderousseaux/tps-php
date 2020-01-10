@extends('layouts.app')

@section('title','Signup')

@section('main')
	@parent
	<form action="adduser" method="post">
		@csrf
		<label for="login">Login</label>              <input type="text"     id="login"    name="login"    required autofocus>
		<label for="password">Password</label>        <input type="password" id="password" name="password" required>
		<label for="confirm">Confirm password</label> <input type="password" id="confirm"  name="confirm"  required>
		<label for="nom">Nom</label> <input type="text" id="nom"  name="nom"  required>
		<label for="prenom">Prénom</label> <input type="text" id="prenom"  name="prenom"  required>
		<input type="submit" value="Signup">
	</form>
	<p>
		If you already have an account, <a href="signin">signin</a>.
	</p>
@endsection
