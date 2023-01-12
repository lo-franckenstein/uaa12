<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php


        // Nom du serveur
        $servername = "10.10.51.98";

        // Nom de la base de donnée
        $bddname = "immobilier";

        // Utilisateur
        $username = "louis";

        // Mots de passe
        $password = "root";


        try {
            $connection = new PDO("mysql:host=" .$servername. ";dbname=" .$bddname, $username, $password);
            die("La connexion avec la base de donnée " .$bddname. " a été réussie... (Je me suis connecté sous le nom de " .$username. ").");
        } catch (PDOException $e) {
            die("Voici l'erreur: " . $e->getMessage());
        };
    
            


    ?>

</body>
</html>