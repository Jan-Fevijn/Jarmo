<!DOCTYPE html>
<html>
<head>
	<title>admin pagina</title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="css/stijl.css">
<?php 
$servername = "127.0.0.1";
        $username = "root";
        $password = "usbw";
        $dbname = "project1";
        $debug = true;

        


        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        else
        {
            if ($debug){
                echo "alles ok";
            }

        }

    $sql = "SELECT * FROM `project1`.`alleinfoverrichtingen`;";


    $resultaat = $conn->query($sql);

    

        $resultaat = $conn->query($sql);

    if ($resultaat->num_rows > 0) {


        echo ( "<table>".

            "<tr >".
            
            "<th>"."datum"."</th>"."<th>"."bedrag"."</th>"."<th>"."omschrijving"."</th>"."<th>"."naam"."</th>"."<th>"."voornaam"."</th>"
            
           ."</tr>"
        
        );
        while($row = $resultaat->fetch_assoc()){

           echo( "<tr>"."<td>".$row["datum"]."</td>"."<td>".$row["bedrag"]."</td>".
            "<td>".$row["omschrijving"]."</td>"."<td>".$row["naam"]."</td>"."<td>".$row["voornaam"]."</td>"."</tr>");
}
				echo "</table>";


}


 ?>
</body>
</html>