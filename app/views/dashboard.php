<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Caisse</title>
    <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header class="app-header bg-primary text-white py-2">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="fs-5 fw-bold">TD - SI-IHM - ETU4338-4433</div>
            <a class="text-white text-decoration-none" href="/">Changer Caisse</a>
        </div>
    </header>

    <main class="container-fluid app-main py-3">
        <aside>
            <div class="card shadow-sm mb-3">
                <div class="card-body">
                    <h4 class="card-title">Caisse n°X</h4>
                    <ul class="list-unstyled menu-caisse">
                        <?php foreach ($caisses as $c): ?>
                            <li><a href="/caisse/<?= $c['id'] ?>"><?= htmlspecialchars($c['nom']) ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </aside>
        <section>
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="h2">Contenu principal</h1>
                    <p>Voici le contenu central de la caisse.</p>
                    <p>Choisissez une caisse dans le menu pour voir la liste des achats.</p>
                </div>
            </div>
        </section>
    </main>

    <footer class="app-footer bg-dark text-center text-white py-2">
        Copyright © Your Website 2025
    </footer>
</body>
</html>
