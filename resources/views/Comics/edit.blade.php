@extends('Layouts.app')
@section('title', 'Aggiungi un nuovo Comic')
@section('content')

    <div class="container bg-light mt-4">
        <h2 class="m-3 text-center">Modifica {{ $comic->title }}</h2>

        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">
            @method('PUT')
            @csrf
            @if ($errors->any())
                <div class="alert alert-warning">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $comic->title) }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                    name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                @error('thumb')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" value="{{ old('price', $comic->price) }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid    @enderror" id="description" name="description"
                    value="{{ old('description') }}" rows="10">{{ $comic->description }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="series">Serie</label>
                <input class="form-control @error('series') is-invalid @enderror" type="text" id="series"
                    name="series" value="{{ old('series', $comic->series) }}">
                @error('series')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="sale_date">Data di pubblicazione</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                    name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                @error('series')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Tipo</label>
                <select class="form-control" name="type" id="type">
                    <option value="">seleziona la serie</option>
                    <option value="comic book" @selected(old('type', $comic->type) === 'comic book')>Comic Book</option>
                    <option value="graphic novel" @selected(old('type', $comic->type) === 'graphic novel')>Graphic Novel</option>
                </select>
            </div>
            <div>
                <button class="btn btn-success" type="submit">Salva</button>
            </div>
        </form>
    </div>
@endsection
