@extends('layouts.app')

@section('page-title', 'Aggiungi studente')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Aggiungi uno studente</h1>
                    <a class="btn btn-primary" href="{{route('students.index')}}">Torna alla home</a>
                </div>
            </div>
            <form action="{{route('students.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="name" class="form-control" id="nome">
                </div>
                <div class="form-group">
                    <label for="cognome">Cognome</label>
                    <input type="text" name="surname" class="form-control" id="cognome">
                </div>
                <div class="form-group">
                    <label for="matricola">Matricola</label>
                    <input type="number" name="registration_number" class="form-control" id="matricola">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>

                <button type="submit" class="btn btn-primary">Aggiungi</button>

            </form>

        </div>

    </div>


@endsection
