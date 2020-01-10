@extends('template')

@section('titre')
    Login
@endsection

@section('contenu')
    {!! Form::open(['url' => 'login']) !!}
        {!! From::text('nom', null, ['placeholder' => 'Identifiant']) !!}
        {!! From::password('mdp', null, ['placeholder' => 'mot de passe']) !!}
        {!! From::submit('Envoyer !') !!}
    {!! From::close() !!}
@endsection

