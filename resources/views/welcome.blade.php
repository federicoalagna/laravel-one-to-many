<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div>
        <h1>Benvenuto nel Back Office</h1>
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('projects.index') }}">Gestione Progetti</a>
    </div>
</body>

</html>
