<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{--  Favicon  --}}
    <link rel="icon" type="image/png" href="{{ Vite::asset('resources/images/logos/tasks (2).png') }}">

    <title>Prioritask</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    @vite(['resources/css/app.css', 'resources/css/style.css'])
</head>

<body>

    <div class="d-flex justify-content-center logo-auth">
        <img src="{{ Vite::asset('resources/images/logos/login-logo.png') }}" alt="">
    </div>


    <div class="d-flex justify-content-center">
        <div class="card">
            <div class="d-flex justify-content-center">
                <h1 class="title-auth">Register</h1>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('')" />
                    <x-text-input id="name" class="form-control block mt-1 w-full" type="text" name="name"
                        :value="old('name')" required autofocus autocomplete="name" placeholder="Username" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-input-label for="email" :value="__('')" />
                    <x-text-input id="email" class="form-control block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autocomplete="username" placeholder="Email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('')" />

                    <x-text-input id="password" class="form-control block mt-1 w-full" type="password" name="password"
                        required autocomplete="new-password" placeholder="Password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-input-label for="password_confirmation" :value="__('')" />

                    <x-text-input id="password_confirmation" class="form-control block mt-1 w-full" type="password"
                        name="password_confirmation" required autocomplete="new-password"
                        placeholder="Confirm password" />

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="d-flex justify-content-center mt-4">

                    <button type="submit" class="btn btn-green" style="color: rgba(95, 111, 82, 0.80); width:100%; margin-inline: 0 !important;">
                        {{ __('REGISTER') }}
                    </button>

                </div>

                <div class="d-flex justify-content-center mt-6">
                    <a class="underline text-sm hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="color: rgba(95, 111, 82, 0.60);"
                        href="{{ route('login') }}">
                        {{ __('Already have account?') }}
                    </a>
                </div>
            </form>
        </div>
    </div>

    <footer>
        <h1 class="footer" style="margin-inline-start: 0 !important;">Copyright &copy; C523-PS082 Capstone Dicoding x SIB</h1>
    </footer>

    {{--  SCRIPT  --}}
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>
