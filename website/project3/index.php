<!DOCTYPE html>
<html>

  <?php  

$servername = "127.0.0.1";
$username = "root";
$password = "usbw";
$dbname = "project3";
$debug = true;

// Maak je connectie
$conn = new mysqli($servername, $username, $password, $dbname);

// controle van je connectie
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else
{
    if ($debug){
    echo "alles ok<br>";
    }
}

?>
<head>
	<title>inlog pagina</title>
</head>
<body>
	<?php
If ($_SERVER["REQUEST_METHOD"] == "POST") {
    if  ($_POST["code"] == ""){
        if ($debug){
             echo "foutje";
            }
            else{
                header("location:index.php?fout=allesInvullen");
                echo "alle velden invullen aub";
            }
    }
    else{
        // variabelen zijn niet leeg --> controle naar databank
        //$sqlControle = "SELECT `gebruiker`.`idgebruiker` FROM `toetswebdesign`.`gebruiker` WHERE gebruikernaam = `" . $_POST["login"] . "` and wachtwoord = `" . $_POST["ww"] . "`";
        $sqlControle = "SELECT `klant`.`code` FROM `project3`.`klant` WHERE `klant`.`code` = '" . $_POST["code"] . "'";
        if ($debug) echo $sqlControle;

        $restulaatControle = $conn->query($sqlControle);

        if ($restulaatControle->num_rows > 0){
            while($row = $restulaatControle->fetch_assoc()){
                //header("location:enkelAdmin.php");
                    $id = $row["code"];

                   header('location:klant.php?ID=' . $id);
                    
                }
        }
        else{
            echo "niet gevonden";
        }
    }
}
   

?>
<form method="Post">

	<input type="text" name="code">
	<input type="submit" name="verzenden">




</form>


</body>
</html>