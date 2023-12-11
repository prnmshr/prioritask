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
                <h1 class="title-auth">Login</h1>
            </div>
            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('')" />
                    <x-text-input id="email" class="form-control block mt-1 w-full" type="email" name="email"
                        :value="old('email')" required autofocus autocomplete="username" placeholder="Email" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('')" />

                    <x-text-input id="password" class="form-control block mt-1 w-full" type="password" name="password"
                        required autocomplete="current-password" placeholder="Password" />

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                            name="remember">
                        <span class="ms-2 text-sm" style="color: rgba(95, 111, 82, 0.80); !important">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="d-flex justify-content-center mt-4">

                    <button type="submit" class="btn btn-green"
                        style="color: rgba(95, 111, 82, 0.80); width:100%; margin-inline: 0 !important;">
                        {{ __('LOGIN') }}
                    </button>



                </div>
                <h5 class="title-auth" style="font-size: 12px !important; margin-bottom:-10 !important; margin-top:20px !important;">Don't have account?</h5>
                <div class="d-flex justify-content-center mt-6">
                    @if (Route::has('register'))
                        <a class="text-sm  hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="color: rgba(95, 111, 82, 0.70); font-size: 18px;"
                            href="{{ route('register') }}">
                            {{ __('Sign up to Prioritask') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>

    {{--  SCRIPT  --}}
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

</body>
