<?php   
        //databank gegevens

        $servername = "127.0.0.1";
        $username = "root";
        $password = "usbw";
        $dbname = "eindwerk";

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
<html>
<head>
	<title>ta laat leerlingen</title>
</head>
<body>
<p>kies een leerkracht</p>
<select name="leerkracht">
  <option>Maak je keuze</option>
  <?php
  $sql = "SELECT DISTINCT naam FROM leerkracht";

$resultaat = $conn->query($sql);

if ($resultaat->num_rows > 0) {

    
    while($row = $resultaat->fetch_assoc()){

       
        echo "<option  value='". $row["naam"] ."'>" . $row["naam"] . "</option>";
    }
    
}
else{
    //echo ($sql);
    echo "<option>niets gevonden</option>";
}
?>


</select>
<input type="submit"></input>
</body>
</html>