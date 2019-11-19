@extends('base')

@section('title', 'Backend')

@section('top-links')
    @auth
        <a href="/patients">Patient</a>
        <a href="/backend">Kalender</a>
        <a href="/backend">Dokumentation</a>
        <a href="/">Frontend</a>
    @endauth
@endsection


@section('main')
    Willkommen im Backend!
@endsection
