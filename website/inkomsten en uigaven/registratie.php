<!DOCTYPE html>
<html lang="en">
<head>
<?php   
        //databank gegevens

        $servername = "127.0.0.1";
        $username = "root";
        $password = "usbw";
        $dbname = "inkomsten_uitgaven";

        // Maak je connectie
        $conn = new mysqli($servername, $username, $password, $dbname);

        // controle van je connectie
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        else
        {
            echo "alles ok<br>";

        }

        ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<?php 


If ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $achternaam   = $_POST['naam'];
    $voornaam  = $_POST['voornaam'];
    $email      = $_POST['email'];
    $wachtwoord = $_POST['wachtwoord'];
    $gb = $_POST['gb'];
   


     $query = "INSERT INTO `inkomsten_uitgaven`.`gebruikers` (`gebruikersnaam`,`naam`,`voornaam`,`email`,`wachtwoord`)" .
                    "  VALUES ('" .
                    "" . $_POST["gb"] . "' " .
                    ",'" . $_POST["naam"] . "' " .
                    ",'" . $_POST["voornaam"] . "' " .
                    ",'" . $_POST["email"] . "','" . $_POST["wachtwoord"] . "')";
     


  if ($conn->query($query) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}
     


$conn->close();

}
?>

<H1>registratie  of <a href="index.php"> log in</a></h2>
</H1>
<form name="form" action="registratie.php" method="post">
  <p>gebruikers naam</p>
  <input type="text" name="gb" id="subject" value="">

  <p>voornaam</p>
  <input type="text" name="voornaam" id="subject" value="">
  <p>achternaam</p>
  <input type="text" name="naam" id="subject" value="">
  <p>email</p>
  <input type="email" name="email" id="subject" value="">



  <p>wachtwoord</p>
  <input type="password" name="wachtwoord" id="subject" value=""><br>  
  <p>opnieuw wachtwoord</p>
  <input type="password" name="subject" id="subject" value=""><br>

  <input type="submit" >  
  
  
</form>

</body>
</html>