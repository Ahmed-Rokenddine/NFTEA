<?php 
//Database Connection
include('./php/dbconnection.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="Description" content="NFT Website">
    <title>NFT - ART FOR everyone</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>
<header>
	<img class="flight" src="img/NFTEAR LOGO.gif "
		 width="65" 
         height="auto" alt="Logo NFTEA">
		<div class="bx bx-menu" id="menu-icon"></div>
		<ul class="navbar">
			<li><a href="index.php">Home</a></li>
			<li><a href="Collection.php">Collection</a></li>
			<li><a href="Profil.php">Profil</a></li>
			<li><a href="Statistiques.php">Statistiques</a></li>
		</ul>
		
		
	</header>

	<!--Home section--->
	<section class="home3" id="home">
		
	</section>
   
<?php
	
	 
	//servername
$servername = "localhost";
//username
$username = "root";
//empty password
$password = "";
//database is the database name
$dbname = "phpcrud";
 
// Create connection by passing these connection parameters
$conn = new mysqli($servername, $username, $password, $dbname);
 
//sql query to find the maximum salary
	$sql = "SELECT MIN(Prix) FROM tblusers";
	$sqlImage = "SELECT * FROM tblusers WHERE Prix = '$sql'";
	$resultImg = mysqli_query($con, $sqlImage);

	while($row = mysqli_fetch_row($resultImg)){
		echo $row["nftname"];
	}
	
	
	


			
	
	
	 ?>
	
  
   
	
    <div class="gridcomplex">
        
       
        
        <div class="giffed textbloom">
		<h4>Totale des Nft Ajouté sur la plateforme</h4>
           <img class="cli"src="img/giphy.gif" alt="decoration image" width="100%" alt=""> 
           <div class="textgiffed">
		   <?php



$sql = "SELECT * FROM tblusers";

$result = mysqli_query($con, $sql);

$num_rows = mysqli_num_rows($result);

printf("%d\n", $num_rows);

?>
		   </div>
		   
        </div>
		<div class=" textbloom">
		<h4>Lister la NFT la plus cher</h4>
        <?php
	
	echo "Pour un prix de :";
	
	$sql = "SELECT MAX(Prix) FROM tblusers";
	$maxPrix = $con->query($sql);

	while ($price = mysqli_fetch_array($maxPrix)) {
		
		
		$reseve = $price['MAX(Prix)'];echo $price['MAX(Prix)'];
		
	}
	$sqlImage = "SELECT * FROM tblusers WHERE Prix = '$reseve'";
	
	$result = $con->query($sqlImage);
	
	while ($row = mysqli_fetch_array($result)) {
		echo "<br />";
		echo "La NFT la plus chere est :- ";
		echo $row['nftname']; 
		echo "<br />";
		echo "<br />";
		echo '<img class="clipped" alt="most expensive NFT" src="./nftpics/'.$row['nftpic'].'" width="100%">';
		
		 
	}
	
		
		?>
		</div>
		<div class=" textbloom" >
		<h4>Lister la NFT la Moins cher</h4>
		<?php
	
	echo "Pour un prix de :";
	
	$sql = "SELECT  MIN(Prix) FROM tblusers";
	$minPrix = $con->query($sql);

	while ($price = mysqli_fetch_array($minPrix)) {
		
		
		$reseve = $price['MIN(Prix)'];echo $price['MIN(Prix)'];
		
	}
	$sqlImage = "SELECT * FROM tblusers WHERE Prix = '$reseve'";
	
	$result = $con->query($sqlImage);
	
	while ($row = mysqli_fetch_array($result)) {
		echo "<br />";
		echo "La NFT la moins chere est :- ";
		echo $row['nftname']; 
		echo "<br />";
		echo "<br />";
		echo '<img class="clipped" alt="cheepest NFT" src="./nftpics/'.$row['nftpic'].'" width="100%">';
		
		 
	}
	
		
		?>
		</div>
    </div>
   

	<!--footer--->
	<section id="contact">
		<div class="footer">
			<div class="main">
				<div class="list">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						
					</ul>
				</div>

				<div class="list">
					<h4>Support</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Help</a></li>
						
					</ul>
				</div>

				<div class="list">
					<h4>Contact Info</h4>
					<ul>
						<li><a href="#">98 West 21th Street</a></li>
						<li><a href="#">New York NY 10016</a></li>
						<li><a href="#">+(123)-123-1234</a></li>
						<li><a href="#">info@NFTEA.com</a></li>
						
					</ul>
				</div>

				<div class="list">
					<h4>Connect</h4>
					<div class="social">
						<a href="#"><i class='bx bxl-facebook' ></i></a>
						<a href="#"><i class='bx bxl-instagram-alt' ></i></a>
						<a href="#"><i class='bx bxl-twitter' ></i></a>
						<a href="#"><i class='bx bxl-linkedin' ></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="end-text">
			<p>Copyright ©2022 All rights reserved | NFTEA</p>
		</div>
	</section>

	<!--link to js--->
	<script type="text/javascript" src="script.js"></script>

</body>
</html>