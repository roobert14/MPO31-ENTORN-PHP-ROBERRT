<?php
session_start();

/**
 * Retorna una connexió PDO amb la base de dades.
 */
function db(): PDO
{
    // Reutilitzem la connexió si ja existeix.
    static $pdo = null;

    if ($pdo !== null) {
        return $pdo;
    }

    // Carreguem les dades de connexió.
    $config = require ('config.local.php') ;

    // Construïm el DSN.
    $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset=utf8mb4";

    // Creem la connexió PDO.
    $pdo = new PDO(
        $dsn,
        $config['user'],
        $config['password'],
        [
            // Els errors SQL generen excepcions.
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

            // Els resultats es retornen com arrays associatius.
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    return $pdo;
}