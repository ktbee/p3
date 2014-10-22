<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'My Web Site')</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    @yield('head')
</head>

<body>
    @yield('content')

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    @yield('footer')

</body>
</html>