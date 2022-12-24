@extends('Layouts.app')
@section('title', 'Aggiungi un nuovo Comic')
@section('content')
    <div class="container bg-light mt-4">
        <h2 class="m-3 text-center">Inserisci un nuovo Comic</h2>

        @if ($errors->any())
            <div class="alert alert-info">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}">

                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                    name="thumb" value="{{ old('title') }}">
                @error('thumb')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" value="{{ old('title') }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                    rows="10" value="{{ old('title') }}"></textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="series">Serie</label>
                <input class="form-control @error('series') is-invalid @enderror" type="text" id="series"
                    name="series" value="{{ old('title') }}">
                @error('series')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="sale_date">Data di pubblicazione</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                    name="sale_date" value="{{ old('title') }}">
                @error('sale_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="type">Tipo</label>
                <select class="form-control @error('type') is-invalid @enderror" name="type" id="type">
                    <option value="">seleziona la serie</option>
                    <option value="comic book @selected(old('type') === 'comic book')">Comic Book</option>
                    <option value="graphic novel" @selected(old('type') === 'graphic novel')>Graphic Novel</option>
                </select>
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <button class="btn btn-success" type="submit">Salva</button>
            </div>
        </form>
    </div>
@endsection
