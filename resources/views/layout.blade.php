<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  @yield('title')   </title>

    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <link  href="{{asset('css/layout.css')}}" rel="stylesheet" >




</head>
<body>

@section('body')

    @yield('content') <h1>hello</h1>




@yield('abc')<h2>thois is2</h2>
</body>
</html>