<?php

// Helper de rendu simplifié (vues complètes avec <!DOCTYPE html>)
Flight::map('render', function ($template, $data = []) {
    extract($data, EXTR_SKIP);
    require __DIR__ . '/../views/' . $template . '.php';
});

Flight::route('/', function () {
    $stmt = Flight::db()->query('SELECT * FROM Caisse ORDER BY id');
    $caisses = $stmt->fetchAll(PDO::FETCH_ASSOC);
    Flight::render('dashboard', ['caisses' => $caisses]);
});

Flight::route('/caisse/@id', function ($id) {
    $db = Flight::db();

    $stmt = $db->prepare('SELECT * FROM Caisse WHERE id = :id');
    $stmt->execute(['id' => $id]);
    $caisse = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$caisse) {
        Flight::halt(404, 'Caisse introuvable');
    }

    $stmt = $db->prepare('SELECT a.*, p.designation FROM Achat a JOIN Produit p ON a.produit_id = p.id WHERE a.caisse_id = :id ORDER BY a.date_achat DESC LIMIT 20');
    $stmt->execute(['id' => $id]);
    $achats = $stmt->fetchAll(PDO::FETCH_ASSOC);

    Flight::render('caisse', [
        'caisse' => $caisse,
        'achats' => $achats,
    ]);
});
