@extends('layouts.app')

@section('title','Welcome')

@section('main')
	@parent
    <p>
		Hello {{ $user }} !<br>
		Welcome on your account.
	</p>
	<ul>
		<li><a href="formpassword">Change password.</a></li>
		<li><a href="deleteuser">Delete my account.</a></li>
        <li><a href="infouser">Infos users.</a></li>
        <li><a href="ajout">Ajouter une chausette.</a></li>
	</ul>
    <p><a href="signout">Sign out.</a></p>
@endsection
