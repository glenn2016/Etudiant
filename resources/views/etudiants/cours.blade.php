<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Numero</th>
                <th>Nom</th>
                <th>Duree</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cours as $cour)
                <tr>
                    <td>{{$cour[0]}}</td>
                    <td>{{$cour[1]}}</td>
                    <td>{{$cour[2]}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>