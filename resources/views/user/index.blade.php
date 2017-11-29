@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ __('user.Bienvenue sur le calculateur RuneScape')}}</h1>

        <img src="{{asset('rsIndex.jpg')}}" alt="Bienvenue sur le site"/>
    </div>
@endsection