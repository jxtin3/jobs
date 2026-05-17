<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/header.css') }}"> --}}
</head>

<body>
    <nav class="navbar">
        <x-nav-link href="/">Home</x-nav-link>
        <x-nav-link href="/jobs">Jobs</x-nav-link>
    </nav>

    {{ $slot }}
</body>

</html>