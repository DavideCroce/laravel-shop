<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="https://www.freeiconspng.com/thumbs/retail-store-icon/retail-shop-icon-3.png">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Shop</title>
</head>

<body>
    @include('includes.header')

    <main>
        <div class="jumbotron" style="background-image: url({{ asset('img/jumbotron.jpg') }})">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
    @yield('additional_scripts')
</body>

</html>
