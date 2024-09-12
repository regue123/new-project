<?php

$servername = 'localhost';
$username = 'root'; 
$password = ''; 
$dbname = 'regue'; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $id_rdv = $_POST['id_rdv'];
    $name = $_POST['name'];
    $prename = $_POST['prename'];
    $mobile = $_POST['mobile'];
    $date = $_POST['date'];
    $horaire = $_POST['horaire'];
   
    $checkSql = "SELECT * FROM book WHERE id_rdv = :id_rdv, name = :name, prename = :prename, mobile = :mobile, date = :date, horaire = :horaire";
    $checkStmt = $conn->prepare($checkSql);
    $checkStmt-> bindparam(':id_rdv', $id_rdv, ':name', $name, ':prename', $prename, ':mobile', $mobile, ':date', $date, ':horaire', $horaire, PDO::PARAM_STR);
    $checkStmt->execute();

    if ($stmt->execute()) {
        echo "enregistrement reussi !";
    } else {
        echo "Erreur : " . $stmt->error;
    }
    echo "Rendez-vous enregistré avec succès !";
    $stmt->close();
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book appointment</title>
    <link rel="stylesheet" href="css/stylesbook.css">
</head>
<body>
        
     <div class="container">
        <div>
            <h3>Prendre rendez-vous</h3>
            <form action="" method="post">
              <input type="text" placeholder="Name" name="name" required="" class="nom">
              <input type="text" placeholder="Prename" name="prename" required="" class="prenom">
              <input type="tel" placeholder="Mobile" name="mobile" required="" class="tel">
              <input type="date" name="date" required="" class="date">
              <input type="time" placeholder="horaire" name="horaire" required="" class="horaire">
              <button class="submit-btn">Valider</button>
            </form>
        </div>
          
</body>
</html>