<?php

$servername = 'localhost';
$username = 'root'; 
$password = ''; 
$dbname = 'regue'; 

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e) {
    die("Connexion echoue : " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


        if (!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($mot_de_passe)) {
            die("Adresse email ou mo de passe invalide.");
        }


        $checkSql = "SELECT * FROM index WHERE email = :email";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->bindParam(':email', $email, PDO::PARAM_STR);
        $checkStmt->execute();
       
        if ($checkStmt->rowCount() > 0) {
            $row = $checkStmt->fetch(PDO::FETCH_ASSOC);

            if ($mot_de_passe === $row['mot_de_passe']) {
                $_SESSION['email'] = $email;
                header('Location: index.php');
                exit();
            } else {
                echo "Erreur : Identifiants incorrects.";
            }
        }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="contenair">
     <!-- FORMULAIRE -->
      <form action="index.php" method="post">
         <h3>Connexion</h3>
         <input type="email" placeholder="Email"><br>
         <input type="password" placeholder="Mot de passe"><br>
         <input type="button" value="Connexion" name="Connexion"><br>
         <a href="#">Mot de passe oublie ?</a>
         <p>To create an account.<a href="#">Click here</a></p>
      </form>
    </div>
</body>
</html>

