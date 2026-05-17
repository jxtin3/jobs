<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
</head>
<body>

<header>
    <!-- <nav class="navbar">
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/contact') }}">Contact</a>
        <a href="{{ url('/services') }}">Services</a>
        <a href="{{ url('/blog') }}">Blog</a>
    </nav> -->

    <nav>
        <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
        <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">About</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">Contact</a>
        <a href="/services" class="{{ request()->is('services') ? 'active' : '' }}">Services</a>
        <a href="/blog" class="{{ request()->is('blog') ? 'active' : '' }}">Blog</a>
    </nav>
</header>
<!-- <hr> -->

</body>
</html>