<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parking Tickets</title>
    @vite(['resources/js/app.js', 'resources/css/app.scss'])
</head>
<body class="bg-light">

    <x-layouts.navigation />

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ $slot }}

</body>
</html>