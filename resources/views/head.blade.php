<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Stone Team - Professional Real Estate Solutions">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logostone.png') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <title>Stone Team | Premium Real Estate Services</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600|space-grotesk:500,600&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        * {
            font-family: Cairo;
        }
        :root {
            --primary-dark: #2f3241;
            --primary-light: #ffd7b3;
            --accent: #e89846;
            --dark: #17161c;
        }

        .btn-primary {
            background: linear-gradient(45deg, var(--accent), #e89846);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(232, 152, 70, 0.3);
        }

        .btn-secondary {
            background: linear-gradient(45deg, var(--primary-dark), #2f3241);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .btn-secondary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(47, 50, 65, 0.3);
        }

        .bg-hero-pattern {
            background-color: var(--dark);
        }

        .feature-card {
            background-color: var(--primary-dark);
            color: var(--primary-light);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .gradient-bg {
            background: linear-gradient(135deg, var(--primary-dark), var(--dark));
            animation: gradientAnimation 10s ease infinite;
        }

        @keyframes gradientAnimation {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .text-primary-dark {
            color: var(--primary-dark);
        }
        .text-primary-light {
            color: var(--primary-light);
        }
        .text-accent {
            color: var(--accent);
        }
        .text-dark {
            color: var(--dark);
        }
    </style>
</head>
