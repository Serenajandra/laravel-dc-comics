@extends('Layouts.app')
@section('title', 'Aggiungi un nuovo Comic')
@section('content')

    <div class="container bg-light mt-4">
        <h2 class="m-3 text-center">Inserisci un nuovo Comic</h2>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="form-group">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="form-group">
                <label for="description">Descrizione</label>
                <textarea class="form-control" id="description" name="description" rows="10"></textarea>
            </div>
            <div>
                <label for="series">Serie</label>
                <input class="form-control" type="text" id="series" name="series">
            </div>
            <div class="form-group">
                <label for="sale_date">Data di pubblicazione</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="form-group">
                <label for="type">Tipo</label>
                <select class="form-control" name="type" id="type">
                    <option value="">seleziona la serie</option>
                    <option value="comic book">Comic Book</option>
                    <option value="graphic novel">Graphic Novel</option>
                </select>
            </div>
            <div>
                <button class="btn btn-success" type="submit">Salva</button>
            </div>
        </form>
    </div>
@endsection
