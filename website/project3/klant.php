<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">



  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>




<?php 

$servername = "127.0.0.1";
$username = "root";
$password = "usbw";
$dbname = "project3";
$debug = false;

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
	<title>klant pagina</title>
</head>
<body>
<?php 


      $sqlControle = "SELECT `klant`.`naam` FROM `project3`.`klant` WHERE `klant`.`code` = '" . $_GET["code"] . "'";
        if ($debug) echo $sqlControle;

        $restulaatControle = $conn->query($sqlControle);

        if ($restulaatControle->num_rows > 0){
            while($row = $restulaatControle->fetch_assoc()){
                //header("location:enkelAdmin.php");
               

           			$naam = $row["naam"];
              
                   echo "<div >" . $naam . "</div>";
                    
                }
        }
        else{
            echo "niet gevonden";
        }
        

?>

<style>

  body {
    font: 20px Montserrat, sans-serif;
    line-height: 1.8;
    color: #f5f6f7;
  }
  p {font-size: 16px;}
  .margin {margin-bottom: 45px;}
  .bg-1 { 
    background-color: #1abc9c; /* Green */
    color: #ffffff;
  }
  .bg-2 { 
    background-color: #474e5d; /* Dark Blue */
    color: #ffffff;
  }
  .bg-3 { 
    background-color: #ffffff; /* White */
    color: #555555;
  }
  .bg-4 { 
    background-color: #2f2f2f; /* Black Gray */
    color: #fff;
  }
  .container-fluid {
    padding-top: 70px;
    padding-bottom: 70px;
  }
  .navbar {
    padding-top: 15px;
    padding-bottom: 15px;
    border: 0;
    border-radius: 0;
    margin-bottom: 0;
    font-size: 12px;
    letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
    color: #1abc9c !important;
  }
  </style>


<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><?php echo "<div >" . $naam . "</div>"; ?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
      </ul>
    </div>
  </div>
</nav>

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
  <h3 class="margin">welke broden heb ik gekocht in het verleden?</h3>
  <?php 


      $sqlControle = "SELECT `broodtype`.`broodnaam` FROM `project3`.`broodtype` WHERE `broodtype`.`idbroodtype` = '" . "1" . "'";
        if ($debug) echo $sqlControle;

        $restulaatControle = $conn->query($sqlControle);

        if ($restulaatControle->num_rows > 0){
            while($row = $restulaatControle->fetch_assoc()){
                //header("location:enkelAdmin.php");
               

           			$broodnaam = $row["broodnaam"];
                }
        }
        else{
            echo "niet gevonden";
        }
        

?>
  
</div>

<!-- Second Container -->
<div class="container-fluid bg-2 text-center">
  <h3 class="margin">Saldo?</h3>
  
  

</div>

<!-- Third Container (Grid) -->
<div class="container-fluid bg-3 text-center">    
  <h3 class="margin">Where To Find Me?</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      
    </div>
    <div class="col-sm-4"> 
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
     
    </div>
    <div class="col-sm-4"> 
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
     
    </div>
  </div>
</div>



</body>
</html>