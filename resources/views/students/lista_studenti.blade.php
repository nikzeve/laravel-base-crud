@extends('layouts.app')

@section('page-title', 'Lista studenti')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Lista Studenti</h1>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOME</th>
                            <th>COGNOME</th>
                            <th>OPZIONI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($studenti as $studente)
                            <tr>
                                <td>{{$studente->id}}</td>
                                <td>{{$studente->name}}</td>
                                <td>{{$studente->surname}}</td>
                                <td>
                                    <a class="btn btn-info"href="{{route('students.show', ['student' => $studente->id])}}">Informazioni</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>


@endsection
