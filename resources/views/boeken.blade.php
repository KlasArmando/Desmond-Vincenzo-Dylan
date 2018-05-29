<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Boekenlijst</h1>
<table align="left">
    <tr>
        <th>Titel</th>
        <th>Auteur</th>
    </tr>
    @foreach($boeken as $boek)
        <tr>
            <td>{{$boek->Titel}}</td>
            <td>{{$boek->Auteur}}</td>
            @endforeach
        </tr>
</table>
</body>
</html>
