<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    @vite('resources/js/app.js')
    <title>Document</title>
</head>

<body>
    @include('Layouts.partials.header')
    <main>
        <section class="banner">
            <h1 class="text-center bg-dark mt-4 text-light py-4">DC Comics List</h1>
            <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
        </section>
    </main>
</body>

</html>
