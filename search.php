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
				<div>
					
						<nav class="navbar">
						
							<li><a href="index.php"><i class="zmdi zmdi-assignment"></i>Formulár</a></li>
							<li><a href="vypis.php"><i class="zmdi zmdi-edit"></i>Výpis</a></li>
							<li><a href="search.php"><i class="zmdi zmdi-search"></i>Vyhľadať</a></li>
							<li><a href="try-connection.php"><i class="zmdi zmdi-wifi-alt"></i>Try connection</a></li>
						
						</nav>
				
				</div>
				<div class="block-vypis">
					
						<?php
                            include("config.php");
                           
                            $var= mysqli_connect("$localhost","$user","$password","$db") or die ("connect error");

                            if(isset($_POST['search']))
                            {
                                $valueToSearch = $_POST['valueToSearch'];
                                $query = "SELECT * FROM `hraci` WHERE CONCAT(`id`, `meno`, `priezvisko`, `vek`, `krajina_povodu`, `pozicia`, `tim`) LIKE '%".$valueToSearch."%'";
                            	$res=mysqli_query($var,$query) or die ("registration error");
                                
                            }
                            else {
                                $query = "SELECT * FROM `hraci`";
    	                        $res=mysqli_query($var,$query) or die ("registration error");
                            }
						?>

						<h1 class="mb-4">Vyhľadávanie v databáze</h1>
                        <form action="search.php" method="post">
                        	<input type="text" name="valueToSearch" placeholder="">
						
							<input type="submit" class="btn btn-success mx-2" name="search" value="Hľadaj">

							<a href="search.php" class="btn btn-warning mx-2" role="button">Reset</a>
							<p><br></p>
						</form>
						<table class="table table-striped">
							<thead class="thead-dark">
								<tr>
								
								<th scope="col">Meno</th>
								<th scope="col">Priezvisko</th>
								<th scope="col">Vek</th>
								<th scope="col">Krajina pôvodu</th>
								<th scope="col">Pozícia</th>
								<th scope="col">Tím</th>
								<th scope="col"></th>
								<th scope="col"></th>
								</tr>
							</thead>
						<tbody>
						<?php

							while($row=mysqli_fetch_assoc($res))
							{
							
							$meno = $row['meno'];
							$priezvisko = $row['priezvisko'];
							$vek = $row['vek'];
							$krajina_povodu = $row['krajina_povodu'];
							$pozicia = $row['pozicia'];
							$tim = $row['tim'];

							echo "<tr>
							<td>".$meno."</td> 
							<td>".$priezvisko."</td>
							<td>".$vek."</td>
							<td>".$krajina_povodu."</td>
							<td>".$pozicia."</td>
							<td>".$tim."</td>";

							echo "<td>";								
								echo "<a class='btn btn-primary' href='./edit-form.php?id= " .$row['id'] ."'> Upraviť</a>";
							echo "</td>";
							echo "<td>";	
								echo "<a class='btn btn-danger' href='./vymaz.php?id= ".$row['id'] ."' onclick='return confirm (`Si si istý, že chceš zmazať daný záznam?`)'> Odstrániť </a>";	
							echo "</td>";
							
							}
						?>
						</tbody>
						</table>
				</div>
		
				
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>



