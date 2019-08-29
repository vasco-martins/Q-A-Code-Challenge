<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head')
</head>
<body>

    <nav class="navbar navbar-light bg-primary  mx-auto">
        <a class="navbar-brand mx-auto text-white" href="/">
            Q&A
        </a>
    </nav>

    <div class="container mr-auto">
        @yield('content')
    </div>

<script src="{{ secure_asset('js/app.js')}}" charset="utf-8"></script>
</body>
</html>
