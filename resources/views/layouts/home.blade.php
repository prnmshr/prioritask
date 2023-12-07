<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prioritask</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    @vite(['resources/css/app.css', 'resources/css/style.css'])
</head>

<body>
    <div class="sidebar">
        <div class="logo"><img src="{{ Vite::asset('resources/images/logos/tasks (2).png') }}" class="logo-img"
                alt="logo"></div>
        <a href="{{ route('home') }}" class="icon"><img
                src="{{ Vite::asset('resources/images/icons/to-do-list.png') }}" alt="Icon 1"></a>
        <a href="#" class="icon"><img src="{{ Vite::asset('resources/images/icons/check.png') }}"
                alt="Icon 2"></a>
        <a href="#" class="icon"><img src="{{ Vite::asset('resources/images/icons/idea.png') }}"
                alt="Icon 3"></a>
        <a href="#" class="icon"><img src="{{ Vite::asset('resources/images/icons/profile-user.png') }}"
                alt="Icon 4"></a>
        <a href="#" class="icon back" onclick="goBack()">@yield('back')</a>
    </div>

    <main>
        <h1 class="title">@yield('header')</h1>
        <div class="container">@yield('content')</div>

        @yield('modal')

    </main>

    <footer>
        <h1 class="footer">Copyright &copy; C23-PS082 Capstone Dicoding x SIB</h1>
    </footer>

    {{--  SCRIPT  --}}
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>
