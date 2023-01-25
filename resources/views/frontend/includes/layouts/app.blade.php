<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@hasSection('template_title')@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
        <meta content="" name="description">
        <meta content="" name="keywords">

        <!-- Favicons -->
        <link href="assets/img/favicon.png" rel="icon">
        <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google Fonts -->
        <link href="https://fonts.gstatic.com" rel="preconnect">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="{{asset('frontend/assets/')}}/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('frontend/assets/')}}/owlcarousel/owl.theme.default.min.css">    
    <link href="{{asset('frontend/assets/')}}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('frontend/assets/')}}/css/animate.css" rel="stylesheet">
    <link href="{{asset('frontend/assets/')}}/css/style.css" rel="stylesheet">
    <link href="{{asset('frontend/assets/')}}/css/responsive.css" rel="stylesheet"> 
  </head>

  

        {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>
 

        @yield('head')
        @include('scripts.ga-analytics')
    </head>
    <body>
        <div id="app">

            @include('frontend.includes.layouts.header')

            <main class="py-4">

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            @include('partials.form-status')
                        </div>
                    </div>
                </div>

                @yield('content')

            </main>

            @include('frontend.includes.layouts.footer')
        </div> 
    <script src="{{asset('frontend/assets/')}}/js/jquery.min.js"></script>
    <script src="{{asset('frontend/assets/')}}/owlcarousel/owl.carousel.js"></script>
    <script src="{{asset('frontend/assets/')}}/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('frontend/assets/')}}/js/main.js"></script>
 </html>