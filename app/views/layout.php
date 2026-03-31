<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($title ?? 'Caisse Supermarket') ?></title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<div class="app-shell">
    <header class="app-header bg-primary text-white py-2">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="fs-5 fw-bold">TD - SI-IHM - ETU4338-4433</div>
            <a class="text-white text-decoration-none" href="/">Changer Caisse</a>
        </div>
    </header>

    <main class="container-fluid app-main py-3">
        <?= $content ?? '' ?>
    </main>

    <footer class="app-footer bg-dark text-center text-white py-2">
        Copyright © Your Website 2025
    </footer>
</div>
</body>
</html>
