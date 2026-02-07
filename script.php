<?php
$db = new PDO(
    "mysql:host=192.168.60.144;dbname=giacomo_redi_itis;charset=utf8mb4",
    "giacomo_redi",
    "strariperebbero.dassistenza.",
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, // PHP Data Object, una tupla diventa un oggetto
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Gli errori di sql vengono gestiti come eccezioni
    ]
);
