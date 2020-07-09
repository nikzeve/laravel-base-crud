@extends('layouts.app')

@section('page-title', 'Studente')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1>Scheda studente</h1>
                    <a class="btn btn-primary" href="{{route('students.index')}}">Torna alla home</a>
                </div>

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
                                <td>{{$student->id}}</td>
                                <td>{{$student->name}}</td>
                                <td>{{$student->surname}}</td>
                                <td>{{$student->registration_number}}</td>
                                <td>{{$student->email}}</td>
                            </tr>

                    </tbody>
                </table>
            </div>

        </div>

    </div>


@endsection
