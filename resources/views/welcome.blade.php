<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Trademark Registration Center</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *, :after, :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg, video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .flex {
            display: flex
        }


        .hidden {
            display: none
        }


        .justify-center {
            justify-content: center
        }

        .text-sm {
            font-size: .875rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .min-h-screen {
            min-height: 100vh
        }


        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }


        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }


        @media (min-width: 640px) {

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }


            .sm\:pt-0 {
                padding-top: 0
            }


        }


        @media (prefers-color-scheme: dark) {


            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

        }

        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button1 {
            background-color: #002ead;
            color: white;
            border: 2px solid #002ead;
        }

        .button1:hover {
            background-color: #ffbf00;
            color: white;
            border: 2px solid #ffbf00;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
        .test {
            background-image: url('images/rm.jpg');
            background-size: 100% 100%;
        }
    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>
</head>
<body class="antialiased">
<h1 style="text-align: center;"> {{$Status}}</h1> <!--Display the submission status-->

<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0 test">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block" style="position: fixed;">
            @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Q & A</a>
                <a href="{{ url('/mytrademarks') }}" class="text-sm text-gray-700 underline">My Trademarks</a>

            @else

                <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Q & A</a>

                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif



        <form method="get" action="{{ url('/search/create') }}" enctype="multipart/form-data">
        @csrf
        <button type="submit" class="button button1">
            <span>
            Search in the Database
                </span>
        </button>
    </form>

    <form method="get" action="{{ url('registerTrademark/create') }}" enctype="multipart/form-data">
        @csrf
        <button type="submit" class="button button1">
        <span>
        Register a New Trademark
            </span>
        </button>
    </form>
</div>

</body>
</html>
