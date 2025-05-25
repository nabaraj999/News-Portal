<!DOCTYPE html>
<html lang="en">
@props(['title', 'description', 'keywords'])

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{ $description ?? '' }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <title>Jawaaf News | {{ $title ?? 'Home' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" type="image/x-icon">

    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">

    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.7.2-web/css/all.min.css') }}">
</head>

<body>
    <x-frontend-header />

    <main>
        {{ $slot }}
    </main>

    <x-frontend-footer />
</body>

</html>
