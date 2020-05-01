<!DOCTYPE html>
<html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



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
    echo "<!-- alles ok -->";
    }
}

?>
<head>
	<title>inlog pagina</title>
</head>
<body>
	<?php


If ($_SERVER["REQUEST_METHOD"] == "GET") {
    if ($_GET["code"] == ""){
        if ($debug){
             echo "<!-- foutje -->";


            }
            else{
                header("location:index.php?fout=allesInvullen");
                echo "alle velden invullen aub";
            }
    }
    else{
        // variabelen zijn niet leeg --> controle naar databank
        //$sqlControle = "SELECT `gebruiker`.`idgebruiker` FROM `toetswebdesign`.`gebruiker` WHERE gebruikernaam = `" . $_POST["login"] . "` and wachtwoord = `" . $_POST["ww"] . "`";
        $sqlControle = "SELECT `klant`.`code` FROM `project3`.`klant` WHERE `klant`.`code` = '" . $_GET["code"] . "'";
        if ($debug) echo $sqlControle;

        $restulaatControle = $conn->query($sqlControle);

        if ($restulaatControle->num_rows > 0){
            while($row = $restulaatControle->fetch_assoc()){
                //header("location:enkelAdmin.php");
                    $id = $row["code"];

                   header('location:klant.php?code=' . $id);
                    
                }
        }
        else{
            echo "niet gevonden";
        }
    }
}
   

?>
<form method="Get">

	<p>code ingeven</p>
	<input type="text" class="form-control" name="code">

	<input type="submit" class="btn .btn-primary" name="verzenden">


  </form>
</div>



</form>


</body>
</html>