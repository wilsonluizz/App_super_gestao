<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Gestão - @yield('titulo') </title>

    <link rel="stylesheet" href="{{asset ('css/estilo_basico.css')}}">
</head>
<body>
    @include('site.layouts.partial_views.topo')
    @yield('conteudo')
</body>
</html>