<!DOCTYPE html>
<html>
<head>
    <title>app page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
