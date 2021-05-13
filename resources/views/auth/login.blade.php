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
                <h6 class="h4 text-center mt-3">Welcome Back!</h6>

                <div class="card-body">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Email or Phone</label>
                            <input type="email" name="email" class="form-control rounded-10 shadow-none">
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="password" name="password" class="form-control rounded-10 shadow-none">
                        </div>
                        <div class="block mb-4">
                            <label for="remember_me" class="inline-flex items-center">
                                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                            </label>
                        </div>
                        <div class="mb-3">
                            <span><a href="#" class="text-decoration-none text-muted">forgot passward?</a></span>
                            <input type="submit" value="Login" class="btn btn-dark float-end">
                        </div>
                        <div class="mb-3">
                            <span class="text-center h6"><a href="{{ route('register') }}" class="text-decoration-none text-dark">i'm new</a> </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
