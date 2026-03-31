<?php
require __DIR__ . '/../vendor/autoload.php';

// Configuration et services (DB etc.)
require __DIR__ . '/../app/config/config.php';
require __DIR__ . '/../app/config/services.php';

// Emplacement des vues
Flight::set('flight.views.path', __DIR__ . '/../app/views');

// Routes
require __DIR__ . '/../app/config/routes.php';

// Démarrer l'application
Flight::start();
