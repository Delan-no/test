<?php
try {
    $dsn = "mysql:host=localhost;dbname=album_app_mvc;charset=utf8mb4";
    $db_username = "root";
    $db_password = "";
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $pdo = new \PDO($dsn, $db_username, $db_password, $options);

    //Nous informer quand il y a une erreur
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    // Nous renvoyer toutes les données sous forme de tableau associatif
    // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    // requête à envoyer
    $sql = "SELECT * FROM `users`;";
    // lancer la requête 
    /**PDO::FETCH: renvoi les résultats de recherche sous forme de tableau associatif avec les nom de colonne (champ) comme clé */
    // foreach (($pdo->query($sql, PDO::FETCH_ASSOC)) as $user) {
    //     echo $user['id'] . "  " . $user['user_name'] . "<br>";
    // }


    $uname = "Kotcho";
    $upassword = password_hash("123", PASSWORD_ARGON2I);

    // marqueurs de substitution(?)
    // marqueurs nommés
    $sql2 = " INSERT INTO `users`(`user_name`, `user_password`) VALUES (?, ?);";
    // préparer la requête pour assurer la sécurité
    $stmt = $pdo->prepare($sql2);
    // exécution de la requête préparée
    $userAdded = $stmt->execute([$uname, $upassword]);
    
    if ($userAdded) {
        echo "utilisateur ajouté";
    }else{
        echo "echec d'ajout";
    }


} catch (PDOException $error) {

    exit("Erreur de connexion: " . $error->getMessage() . $error->getLine());
}
