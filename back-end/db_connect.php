<?php
$host = 'localhost';        // Hôte (souvent localhost pour un environnement de développement)
$db   = 'devAvcr';   // Nom de votre base de données
$user = 'root';// Nom d'utilisateur de la base de données
$pass = '';// Mot de passe de la base de données
$charset = 'utf8mb4';       // Encodage

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Mode d'erreur : Lancer des exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Mode de récupération par défaut : Tableau associatif
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Désactiver l'émulation des requêtes préparées pour plus de sécurité
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
     // Connexion réussie, $pdo est l'objet de connexion que vous utiliserez pour les requêtes.
     echo "Connexion à la base de données réussie avec PDO!";

} catch (\PDOException $e) {
     // En cas d'erreur de connexion, affiche le message d'erreur
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

// Pour fermer la connexion (facultatif, car PHP le fait automatiquement à la fin du script)
// $pdo = null;

?>