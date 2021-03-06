<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12 col-12 main-section">
            <a href="/cart">
                <button type="button" class="btn btn-info" >
                    {{--<i class="fa fa-shopping-cart" ></i> Cart <span class="badge badge-pill badge-danger">{{ count(session('cart')) }}</span>--}}
                    <i class="fa fa-shopping-cart" ></i> Cart <span class="badge badge-pill badge-danger"></span>
                </button>
            </a>
        </div>
    </div>
</div>

<div class="container page">
    @yield('content')
</div>

@yield('scripts')

</body>
</html>