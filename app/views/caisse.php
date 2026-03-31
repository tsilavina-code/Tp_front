<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caisse <?= htmlspecialchars($caisse['id']) ?></title>
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
                    <h4 class="card-title">Caisse n°<?= htmlspecialchars($caisse['id']) ?></h4>
                    <p class="mb-2"><strong>Nom :</strong> <?= htmlspecialchars($caisse['nom']) ?></p>
                    <p class="mb-2"><strong>Emplacement :</strong> <?= htmlspecialchars($caisse['emplacement']) ?></p>
                    <ul class="list-unstyled menu-caisse">
                        <li><a href="/">Menu 1</a></li>
                        <li><a href="/">Menu 2</a></li>
                        <li><a href="/">Menu 3</a></li>
                    </ul>
                </div>
            </div>
        </aside>
        <section>
            <div class="card shadow-sm">
                <div class="card-body">
                    <h1 class="h2">Contenu</h1>
                    <p>Ici le contenu de la caisse...</p>
                    <h4 class="mt-4">Dernières ventes</h4>
                    <?php if (empty($achats)): ?>
                        <p>Aucun achat pour cette caisse.</p>
                    <?php else: ?>
                        <div class="table-responsive">
                            <table class="table table-sm table-striped">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Produit</th>
                                        <th>Quantité</th>
                                        <th>Prix unit.</th>
                                        <th>Montant</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($achats as $achat): ?>
                                        <tr>
                                            <td><?= htmlspecialchars($achat['date_achat']) ?></td>
                                            <td><?= htmlspecialchars($achat['designation']) ?></td>
                                            <td><?= htmlspecialchars($achat['quantite']) ?></td>
                                            <td><?= htmlspecialchars(number_format($achat['prix_unit'], 2, ',', ' ')) ?> €</td>
                                            <td><?= htmlspecialchars(number_format($achat['montant'], 2, ',', ' ')) ?> €</td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

    <footer class="app-footer bg-dark text-center text-white py-2">
        Copyright © Your Website 2025
    </footer>
</body>
</html>
