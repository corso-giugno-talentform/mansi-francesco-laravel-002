<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <p>Ti ha scritto questo utente: {{ $data['firstname'] }} {{ $data['lastname'] }}</p>
    @if (isset($data['nome_prodotto']))
        <p>Il prodotto richiesto è {{ $data['nome_prodotto'] }}</p>
    @endisset
</body>

</html>
