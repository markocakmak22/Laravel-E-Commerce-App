<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>@yield('title', 'E-Shop')</title>

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('images/favicon/apple-touch-icon.png') }}" />
        <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-32x32.png') }}" sizes="32x32" />
        <link rel="icon" type="image/png" href="{{ asset('images/favicon/favicon-16x16.png') }}" sizes="16x16" />
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
        <!-- Custom Fonts -->
        <link
            href="https://fonts.googleapis.com/css?family=Roboto:100,300,300i,400,400i,500,700,700i,900"
            rel="stylesheet"
        />
        <!-- Icon CSS -->
        <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <!-- Theme CSS -->
        <link href="{{ asset('css/ts.css') }}" rel="stylesheet" />
        <link href="{{ asset('js/slick/slick.css') }}" rel="stylesheet" />
        <link href="{{ asset('js/lity/lity.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/jquery-ui.css') }}" rel="stylesheet" />
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

        @yield('head')
    </head>
    <body>
        <div class="wrapper">
            @include('eshop.partials.header')
            @yield('content')
            @include('eshop.partials.footer')
        </div>
        @yield('scripts')
    </body>
</html>
