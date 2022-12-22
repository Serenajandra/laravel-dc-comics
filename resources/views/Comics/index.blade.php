@extends('Layouts.app')
@include('Layouts.partials.header')
@section('title', 'Tutti i comics')
@section('content')
    <div class="container">
        <h2 class="text-center">
            Tutti i nostri Comics
        </h2>
        <table class="table table-striped">
            <thead>

                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Dettagli</th>

                </tr>
            </thead>
            <tbody>


                @foreach ($Comics as $comic)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->price }}</td>
                        <td> <a class="btn btn-success" href="{{ route('Comics.show', $comic->id) }}">Link</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
