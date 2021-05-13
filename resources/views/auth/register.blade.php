{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Cws-academy</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<style>
    body{
        background-image: url(assets/images/background.svg);
        background-size:cover;
        background-position: center;
        background-attachment: fixed;
    }
    .bg-overlay{
        background-color: rgba(104, 104, 104, 0.411);
    }
</style>
<body>
    <div class="container-fluid bg-overlay d-flex justify-content-center align-items-center" style="height: 100vh">
        <div class="col-lg-5 col-md-6 col-sm-8 col-11 mx-auto px-lg-5">
            <div class="card border-0 cws-shadwo rounded-25">
                <h6 class="h4 text-center mt-3">Welcome to CWS-academy!</h6>
                <p class="small text-center">Sign Up and Start Learning!</p>

                <div class="card-body">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control rounded-10 shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control rounded-10 shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control rounded-10 shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control rounded-10 shadow-none">
                        </div>
                        <div class="mb-3">
                            <input type="submit" value="Login" class="btn btn-dark float-end">
                        </div>
                        <div class="clearfix"></div>
                        <div class="mb-3">
                            <span class="text-center h6"><a href="{{ route('login') }}" class="text-decoration-none text-dark">already have an account!</a> </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
