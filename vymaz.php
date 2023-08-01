

<!DOCTYPE html>
<html>
	<head>
		<title>Projekt Bilčík Barčáková DSD</title>
		

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

		<link rel="stylesheet" href="app.css">
	</head>

	<body>
	<div class="row align-items-center my-6">
			<div class="col-12 mb-4 px-5 py-2">
				<div>
					<img class="img-top" src="img/Webp.net-resizeimage.jpg" alt="pozadie">
					<img class="img-absolute" src="img/logo1.jpg" alt="logo">
				</div>
			</div>
		</div>
	
		
			<div class="container-relative">
				<div >
					
						<nav class="navbar">
							
							<li><a href="index.php"><i class="zmdi zmdi-assignment"></i>Formulár</a></li>
							<li><a href="vypis.php"><i class="zmdi zmdi-edit"></i>Výpis</a></li>
							<li><a href="search.php"><i class="zmdi zmdi-search"></i>Vyhľadať</a></li>
							<li><a href="try-connection.php"><i class="zmdi zmdi-wifi-alt"></i>Try connection</a></li>
						</nav>
				
				</div>
				<div class="block">
		
                        <?php
                        include("config.php");
                        include("config2.php");
                        include("config3.php");

                        $id = $_GET['id'];

						$var= mysqli_connect("$localhost","$user","$password","$db") or die ("connect error");
						if($var){
							$sql="select * from hraci where id = $id";
							$res=mysqli_query($var,$sql) or die ("registration error");
	
								while($row=mysqli_fetch_assoc($res))
								{
									$meno = $row['meno'];
									$priezvisko = $row['priezvisko'];
									$vek = $row['vek'];
									$krajina_povodu = $row['krajina_povodu'];
									$pozicia = $row['pozicia'];
									$tim = $row['tim'];
	
								echo "Záznam s nasledujúcimi údajmi bol odstránený: <br>";
								echo "Meno: <b>$meno</b><br>";
								echo "Priezvisko: <b>$priezvisko</b><br>";
								echo "Vek: <b>$vek</b><br>";
								echo "Krajina pôvodu: <b>$krajina_povodu</b><br>";
								echo "Pozícia: <b>$pozicia</b><br>";	
								echo "Tím: <b>$tim</b><br>";
								echo "<br>";
								}
	
							$sql="delete from hraci where id = $id";
							$res=mysqli_query($var,$sql) or die ("registration error");
						}
						
						//príkazy na delete druhý uzol
						$var2= mysqli_connect("$localhost2","$user2","$password2","$db2") ;
						if ($var2){
						$sql2="delete from hraci where id = $id";
						$res2=mysqli_query($var2,$sql2) or die ("registration error");
						
						} else {
							echo "<p style='color:red'><b>Nepodarilo sa pripojiť k druhému uzlu!</b></p>";
						}

						//príkazy na delete tretí uzol
						$var3= mysqli_connect("$localhost3","$user3","$password3","$db3") ;
						if ($var3){
						$sql3="delete from hraci where id = $id";
						$res3=mysqli_query($var3,$sql3) or die ("registration error");
						
						} else {
							echo "<p style='color:red'><b>Nepodarilo sa pripojiť k tretiemu uzlu!</b></p>";
						}

                        ?>        
				</div>
			</div>
		
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>




        


