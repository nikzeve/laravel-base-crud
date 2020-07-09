@extends('layouts.app')

@section('page-title', 'Lista studenti')


@section('content')
    @foreach ($studenti as $studente)
        <p>{{$studente->name}}</p>
    @endforeach

@endsection
