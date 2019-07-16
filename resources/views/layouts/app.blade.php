<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <title>BP website @section('title')</title>
</head>
<body>
    @include('inc.navbar')


    <div class="container">
    
    @yield('content')
    
    </div>




</body>
</html>