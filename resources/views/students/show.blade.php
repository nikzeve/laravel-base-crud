@extends('layouts.app')

@section('page-title', 'Studente')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Scheda studente</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>COGNOME</th>
                            <th>MATRICOLA</th>
                            <th>EMAIL</th>
                        </tr>
                    </thead>
                    <tbody>

                            <tr>
                                <td>{{$studente->id}}</td>
                                <td>{{$studente->name}}</td>
                                <td>{{$studente->surname}}</td>
                                <td>{{$studente->registration_number}}</td>
                                <td>{{$studente->email}}</td>
                            </tr>

                    </tbody>
                </table>
            </div>

        </div>

    </div>


@endsection
