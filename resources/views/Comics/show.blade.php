@extends('Layouts.app')
@section('title', 'Comic')
@section('content')
    <section>
        <div class="container">
            <h2>Comic {{ $comic->id }}</h2>
            <div>
                <div><a href="/Comics">HomePage</a></div>
                @if (!empty($comic->thumb))
                    <img src="{{ $comic->thumb }}" alt="Comic-image">
                @else
                    <p>Nessuna immagine disponibile</p>
                @endif
            </div>
            <dl>
                <dt>Titolo</dt>
                <dd>{{ $comic->title }}</dd>


                <dt>Descrisione</dt>
                <dd>{{ $comic->description }}</dd>
                <dt>Prezzo</dt>
                <dd>{{ $comic->price }}</dd>
                <dt>Serie</dt>
                <dd> {{ $comic->series }}</dd>
                <dt>Data di pubblicazione</dt>
                <dd> {{ $comic->sale_date }}</dd>
                <dt>Tipo</dt>
                <dd> {{ $comic->type }}</dd>

            </dl>
        </div>
    </section>

@endsection
