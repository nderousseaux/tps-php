@extends('layouts.app')

@section('title','Ajouter')

@section('main')
	@parent
    <p>
		Ajout de chaussettes
	</p>
    <form action="ajout" method="post">
        @csrf
        <label for="longueur">longueur: </label>
        <select id="longueur" name="longueur" required autofocus>
            <option value="small">Small</option>
            <option value="medium" selected>Medium</option>
            <option value="large">Large</option>
        </select><br>
        <label for="etat">etat: </label>
        <select id="etat" name="etat" required autofocus>
            <option value="bad">Bad</option>
            <option value="average">Average</option>
            <option value="good" selected>Good</option>
        </select><br>
        <label for="matiere">matiere: </label><input type="text" id="matiere"  name="matiere" required><br>
        <label for="description">description: </label> <textarea id="description"  name="description"></textarea><br>
        <input type="submit" value="Create">

    <p><a href="admin/welcome">Retour</a></p>
@endsection
