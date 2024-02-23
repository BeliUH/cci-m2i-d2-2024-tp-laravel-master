@extends('layouts.app')

@section('title', 'Créer un membre')

@section('content')
    <form action="{{ route('Membres.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="provider_name">Name</label>
        <input type="text"
               name="provider_name"
               id="provider_name"
               value="{{old('provider_name')}}">
        <br>

        <label for="provider_pw">Pass word</label>
        <input type="text"
               name="provider_pw"
               id="provider_pw"
               value="{{old('provider_pw')}}">
        <br>

        <label for="provider_email">Email</label>
        <input type="email"
               name="provider_email"
               id="provider_email"
               value="{{old('provider_email')}}">

        <br>
        <input type="submit" value="Valider">
    </form>
@endsection
