<?php

$host = 'localhost';
$dbname = 'regue'; 
$user = 'root'; 
$password = ''; 

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
       
        if (isset($_POST['save1'])) {
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $stmt = $pdo->prepare("INSERT INTO patient (email, password) VALUES (:email, :password)");
            $stmt->execute(['email' => $email, 'password' => $password]);
            echo "Compte créé avec succès !";
        }

        if (isset($_POST['save2'])) {
            $region = $_POST['region'];
            $town = $_POST['town'];
            $quarter = $_POST['quarter'];
            $email = $_POST['email']; 

            $stmt = $pdo->prepare("UPDATE patient SET region = :region, town = :town, quarter = :quarter WHERE email = :email");
            $stmt->execute(['region' => $region, 'town' => $town, 'quarter' => $quarter, 'email' => $email]);
            echo "Localisation enregistrée avec succès !";
            echo'
                <script>
                
                    Form1.style.left = "-450px"; 
                    Form2.style.left = "0";
                    progress.style.width = "240px";
                </script>
            ';
        }

        if (isset($_POST['save3'])) {
            $name = $_POST['name'];
            $old = $_POST['old'];
            $mobile = $_POST['mobile'];
            $email = $_POST['email'];

            $stmt = $pdo->prepare("UPDATE patient SET name = :name, old = :old, mobile = :mobile WHERE email = :email");
            $stmt->execute(['name' => $name, 'old' => $old, 'mobile' => $mobile, 'email' => $email]);
            echo "Informations personnelles enregistrées avec succès !";
        }
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Formulaire d'inscription-patient</title>
    <link rel="stylesheet" href="css/stylesform.css">
  
</head>
<body>
    <div class="container">

        <form action="#" method="POST" id="Form1">
            <h3>CREATE AN ACCOUNT</h3>
            <input type="email" placeholder="Email" name="email" required>
            <input type="password" placeholder="Password" name="password" required>
            <div class="btn-box">
            <button type="button" id="Next1">Next</button>
            </div>
        </form>

        <form action="#" method="POST" id="Form2">
            <h3>LOCALISATION</h3>
            <input type="hidden" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            <input type="text" placeholder="Region" name="region" required>
            <input type="text" placeholder="Town" name="town" required>
            <input type="text" placeholder="Quarter" name="quarter" required>
            <div class="btn-box">
                <button type="button" id="Back1">Back</button>
                <button type="button" id="Next2">Next</button>
            </div>
        </form>

        <form action="#" method="POST" id="Form3">
            <h3>PERSONNAL INFOS</h3>
            <input type="hidden" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
            <input type="text" placeholder="Name" name="name" required>
            <input type="number" placeholder="Old" name="old" required>
            <input type="tel" placeholder="Mobile No." name="mobile" required>
            <div class="btn-box">
                <button type="button" id="Back2">Back</button>
                <button type="submit"  name="save3">Submit</button>
            </div>
        </form>

        <div class="step-row">
            <div id="progress"></div>
            <div class="step-col"><small>Step 1</small></div>
            <div class="step-col"><small>Step 2</small></div>
            <div class="step-col"><small>Step 3</small></div>
        </div>

    </div>

<script>
    var Form1 = document.getElementById("Form1");
    var Form2 = document.getElementById("Form2");
    var Form3 = document.getElementById("Form3");
    
    var Next1 = document.getElementById("Next1");
    var Next2 = document.getElementById("Next2");
    var Back1 = document.getElementById("Back1");
    var Back2 = document.getElementById("Back2");
    
    var progress = document.getElementById("progress");

    Next1.onclick = function() {
        Form1.style.left = "-450px"; 
        Form2.style.left = "0";
        progress.style.width = "240px"; 
    }

    Back1.onclick = function() {
        Form1.style.left = "0"; 
        Form2.style.left = "450px";
        progress.style.width = "0"; 
    }

    Next2.onclick = function() {
        Form2.style.left = "-450px";
        Form3.style.left = "0";
        progress.style.width = "360px"; 
    }

    Back2.onclick = function() {
        Form2.style.left = "0"; 
        Form3.style.left = "450px"; 
        progress.style.width = "240px"; 
    }
</script>

</body>
</html>
