<header class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4 ">
        <a class="navbar-brand" href="#"><img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link border rounded text-uppercase mx-3" href="{{ route('home') }}">Home</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border rounded text-uppercase mx-3" href="{{ route('comics.index') }}">Lista dei
                        Comics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link border rounded text-uppercase mx-3" href="{{ route('comics.create') }}">Aggiungi
                        un nuovo
                        Comic</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
