<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Fornecedores</h1>

    {{-- @dd($fornecedores); --}}

    {{-- @isset($fornecedores)
        @if (count($fornecedores) >= 1 && count($fornecedores) < 5)
            <h1> Temos poucos fornecedores cadastrados </h1>
        @elseif(count($fornecedores) >= 5)
            <h1> Temos Muitos fornecedores cadastrados </h1>
        @else
            <h1>Não temos fornecedores cadastrados</h1>
        @endif
    @endisset --}}

    {{-- @empty($fornecedores)
        <h1>Não temos fornecedores cadastrados</h1>
    @endempty

    @foreach ($fornecedores as $item)
        {{$item}} . <br>
    @endforeach --}}

        

</body>

</html>
