<!-- layout.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet1 Laravel 9 CRUD</title>
    <link href="{{ asset('BS4/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        @yield('content')
    </div>
    <script src="{{ asset('BS4/js/jquery.js') }}" type="text/js"></script>
    <script src="{{ asset('BS4/js/popper.js') }}" type="text/js"></script>
    <script src="{{ asset('BS4/js/bootstrap.min.js') }}" type="text/js"></script>
</body>

</html>
