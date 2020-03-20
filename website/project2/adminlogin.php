<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h2>aanmelden of <a href="registratie.php">registreren</a></h2>
<form name="form" action="" method="POST">
  <p>gebruikers naam</p>
  <input type="text" name="gb" id="subject" value="">
  <p>wachtwoord</p>
  <input type="password" name="wachtwoord" id="subject" value=""><br>
  <input type="submit" >
  <?php  

$servername = "127.0.0.1";
$username = "root";
$password = "usbw";
$dbname = "";
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


If ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["gb"] == "" Or $_POST["wachtwoord"] == ""){
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
        $sqlControle = "SELECT `gebruikers`.`idgebruikers` FROM `inkomsten_uitgaven`.`gebruikers` WHERE `gebruikers`.`gebruikersnaam` = '" . $_POST["gb"] . "' and `gebruikers`.`wachtwoord` = '" . $_POST["wachtwoord"] . "'";
        if ($debug) echo $sqlControle;

        $restulaatControle = $conn->query($sqlControle);

        if ($restulaatControle->num_rows > 0){
            while($row = $restulaatControle->fetch_assoc()){
                //header("location:enkelAdmin.php");
                    $id = $row["idgebruikers"];

                   header('location:bekijken.php?ID=' . $id);
                    
                }
        }
        else{
            echo "niet gevonden";
        }
    }
}
      
     
  ?>
  </input>

</form>

</body>
</html>