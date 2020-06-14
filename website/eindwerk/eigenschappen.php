<!DOCTYPE HTML>
<html>
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

<head>
  <title>eindwerk jarmo</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">Eindwerk <span class="logo_colour">Jarmo Van Moeffaert</span></a></h1>
          
        </div>
      </div>
      <nav>
        <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="info.php">meer info</a></li>
            <li><a href="page.php">rooster van mijn eindwerk</a></li>
           <li><a href="telaat.php">telaat pagina</a></li>
            
            <li><a href="contact.php">Contact Us</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          
          <h3><?php date_default_timezone_set("Europe/Brussels"); echo "vandaag is " . date("d-m-Y") . "<br>"; ?></h3>
          
        </div>
        <div class="sidebar">
          <h3>Useful Links</h3>
          <ul>
            <li><a href="https://kaas-sgr25.smartschool.be/">smartschool</a></li>
          </ul>
        </div>
      </div>
      <div class="content">
        <?php

$sql = "SELECT leerlingID,naamLeerling,hoeveel_keer_telaat FROM leerling";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row

echo "<table>";


echo "<tr>";
echo "<th>id: </th>";
echo "<th>Name: </th>";
echo "<th>te laat gekomen</th>";
echo "</tr>";

  while($row = $result->fetch_assoc()) {
    echo "<tr> <td>" . $row["leerlingID"]. "</td><td> " . $row["naamLeerling"]."</td><td>" . $row["hoeveel_keer_telaat"] . " </td> </tr><br>";

  }

    echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>
       
       <p></p>
      </div>
    </div>
    <footer>
      <p>Copyright &copy; CSS3_colour2 | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
