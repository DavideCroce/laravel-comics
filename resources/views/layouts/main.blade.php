<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>DC Comics</title>
</head>

<body>
    @include('includes.header')
    <div class="jumbotron">
        <div class="jb-image" style="background-image: url('{{ asset('images/jumbotron.jpg')}}')"></div>
    </div>
    <main>
        @yield('content')
        @include('includes.other-links')
    </main>
    <footer>
        @include('includes.top-footer')
        @include('includes.bottom-footer')
    </footer>
</body>

</html>