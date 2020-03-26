<?php   
include "config.php"
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
  $sql = "SELECT DISTINCT naamklas FROM klas";

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
    <input type="hidden" naam="actie" value="leerlingkeuze">
    <select name="leerling">
        <option>Maak je keuze</option>
<?php
If ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["KlasKeuze"]) and $_POST["KlasKeuze"] <> "Maak je keuze") {
        $sql = "SELECT leerlingKlasID, naamLeerling,naamKlas FROM info_leerlingen where naamKlas = '" . $_POST["KlasKeuze"] . "'";
    
        $resultaat = $conn->query($sql);

        if ($resultaat->num_rows > 0) {

            
            while($row = $resultaat->fetch_assoc()){


                echo  "<option value='" . $row["leerlingKlasID"] . "'>" . $row["naamLeerling"] . "</option>";
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