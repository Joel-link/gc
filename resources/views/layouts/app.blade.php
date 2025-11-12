<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Génie Consultant</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @stack('styles') <!-- Doit être ici -->
</head>
<body>
    @yield('content') <!-- Doit exister pour afficher les vues enfants -->
</body>
</html>
