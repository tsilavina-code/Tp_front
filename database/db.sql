CREATE DATABASE IF NOT EXISTS caisse_supermarket;

-- Table Produit
CREATE TABLE IF NOT EXISTS Produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    designation VARCHAR(255) NOT NULL,
    prix DECIMAL(10,2) NOT NULL CHECK (prix >= 0),
    quantite_stock INT NOT NULL DEFAULT 0 CHECK (quantite_stock >= 0),
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table Caisse
CREATE TABLE IF NOT EXISTS Caisse (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL UNIQUE,
    emplacement VARCHAR(255) NULL,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table Achat
CREATE TABLE IF NOT EXISTS Achat (
    id INT AUTO_INCREMENT PRIMARY KEY,
    caisse_id INT NOT NULL,
    produit_id INT NOT NULL,
    quantite INT NOT NULL CHECK (quantite > 0),
    prix_unit DECIMAL(10,2) NOT NULL CHECK (prix_unit >= 0),
    montant DECIMAL(12,2) AS (quantite * prix_unit) STORED,
    date_achat DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (caisse_id) REFERENCES Caisse(id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY (produit_id) REFERENCES Produit(id) ON DELETE RESTRICT ON UPDATE CASCADE
);

-- Indexes de performance
CREATE INDEX idx_achat_caisse ON Achat(caisse_id);
CREATE INDEX idx_achat_produit ON Achat(produit_id);
