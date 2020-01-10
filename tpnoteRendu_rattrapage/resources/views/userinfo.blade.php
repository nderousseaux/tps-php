@extends('layouts.app')

@section('title','Welcome')

@section('main')
	@parent
    <p>{{ $user }}</p>
    <p>{{ $nom }}</p>
    <p>{{ $prenom }}</p>
    <p><a href="signout">Sign out.</a></p>
@endsection
