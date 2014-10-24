<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'My Web Site')</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    @yield('head')
</head>

<body>
<div class="container">
    @yield('content')

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    

    @yield('footer')
</div>
</body>
</html>