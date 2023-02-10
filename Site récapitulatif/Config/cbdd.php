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


    try{
        $dbh = new PDO("mysql:host=10.10.51.98;dbname=immobilier", "louis", "root",[
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);
    } catch(PDOException $e){
        die("Erreur! ". $e->getMessage());
    }
    ?>

</body>
</html>