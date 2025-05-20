<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Vous avez un nouveau message Ubikom Digital</title>

</head>

<body>

    <p>Nom : {{ $data['name'] }}</p>

    <p>Téléphone : {{ $data['phone'] }}</p>

    <p>E-mail : {{ $data['email'] }}</p>

    <p>Ville : {{ $data['ville'] }}</p>

    <p>Details : {{ $data['message'] }}</p>

    <p>Je souhaite : {{ $data['besoin'] }}</p>

    <p>Logement : {{ $data['logement'] }}</p>

    <p>Votre besoin : {{ $data['type'] }}</p>

    <p>Profil : {{ $data['profile'] }}</p>

    <p>Passe la nuit ? : {{ $data['nuit'] }}</p>

    <p>Budget : {{ $data['budget'] }}</p>

</body>

</html>

