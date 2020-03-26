<?php   
        //databank gegevens

        $servername = "127.0.0.1";
        $username = "root";
        $password = "usbw";
        $dbname = "extra";

        // Maak je connectie
        $conn = new mysqli($servername, $username, $password, $dbname);

        // controle van je connectie
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        else
        {
            echo "<!-- alles ok<br>-->";

        }
        ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="POST">
<input type="text" name="naam"><br>
<select name="KlasKeuze">
  <option>Maak je keuze</option>
  <?php
  $sql = "SELECT DISTINCT naamKlas FROM klas";

$resultaat = $conn->query($sql);

if ($resultaat->num_rows > 0) {

    
    while($row = $resultaat->fetch_assoc()){

       
        echo "<option  value='". $row["naamKlas"] ."'>" . $row["naamKlas"] . "</option>";
    }
    
}
else{
    //echo ($sql);
    echo "<option>niets gevonden</option>";
}
?>


</select>
<input type="submit"></input>
</form>
<p></p>
<form action="index.php" method="POST" >
    <input type="hidden" naam="actie" value="klaskeuze">
    <select name="klas">
        <option>Maak je keuze</option>
<?php
If ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["klaskeuze"]) and $_POST["klaskeuze"] <> "Maak je keuze") {
        $sql = "SELECT idklas, naamKlas FROM klas where naamKlas = '" . $_POST["klaskeuze"] . "'";
    
        $resultaat = $conn->query($sql);

        if ($resultaat->num_rows > 0) {

            
            while($row = $resultaat->fetch_assoc()){


                echo  "<option value='" . $row["idklas"] . "'>" . $row["naamKlas"] . "</option>";
            }
            
        }
        else{
            //echo ($sql);
            echo "niets gevonden";
        }
    }

}
?>
    </select>
    <input type="submit" value="verzend winkel">
</form>
</body>
</html>