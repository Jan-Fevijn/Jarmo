<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/stijl.css">
  <?php  

$servername = "127.0.0.1";
$username = "root";
$password = "usbw";
$dbname = "uitleen_games";
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
	<title>my games</title>
</head>
<body>

	<p>dit zijn mijn games</p>
<?php

$sql = "SELECT idinfo_games,uitgevers, game_naam, game_omschrijving FROM info_games";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

echo "<table>";


echo "<tr>";
echo "<th>id: </th>";
echo "<th>Name: </th>";
echo "<th> omschrijving : </th>";
echo "<th> uitgever :</th>";
echo "</tr>";

  while($row = $result->fetch_assoc()) {
    echo "<tr> <td>" . $row["idinfo_games"]. "</td><td> " . $row["game_naam"]. " </td> <td>" . $row["game_omschrijving"]. " </td><td>" . $row["uitgevers"] ." </tr></td><br>";

  }

    echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>
</body>
</html>