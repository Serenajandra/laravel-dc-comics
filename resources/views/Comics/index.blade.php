@extends('Layouts.app')

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
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>


                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->price }}</td>
                        <td> <a class="btn btn-warning" href="{{ route('comics.edit', $comic->id) }}">Modifica</a></td>
                        <td> <a class="btn btn-success" href="{{ route('comics.show', $comic->id) }}">Dettagli</a></td>
                        <td>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Cancella</button>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
