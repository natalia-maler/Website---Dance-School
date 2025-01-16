<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Szkoła Tańca Alfa</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="cennik.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet">
	
	
	
</head>

<body>

	<header>
	
		<nav class="navbar navbar-dark bg-strona navbar-expand-lg">
		
		<img src="img/logo.jpg" width="50" height="50" class="d-inline-block mr-1 align-bottom" alt="logo"> Szkoła Tańca Alfa.pl
		
			<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="Przełącznik nawigacji">
				<span class="navbar-toggler-icon"></span>
			</button>
		
			<div class="collapse navbar-collapse ml-1" id="mainmenu">
			
				<ul class="navbar-nav mr-auto">
				
					<li class="nav-item ">
						<a class="nav-link " href="stronaglowna.php"> Strona główna </a>
					</li>
					
					<li class="nav-item ">
						<a class="nav-link" href="kursy.html"> Kursy </a>
					</li>
						<li class="nav-item ">
						<a class="nav-link" href="instruktorzy.php"> Instruktorzy </a>
					</li>
			
					<li class="nav-item">
						<a class="nav-link" href="grafik.html"> Rozkład zajęć </a>
					</li>
					
					<li class="nav-item active">
						<a class="nav-link" href="cennik.php"> Cennik </a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link " href="galeria.html"> Galeria </a>
					</li>
					
					<li class="nav-item ">
						<a class="nav-link" href="kontakt.html"> Kontakt </a>
					</li>
				
				</ul>
			
				
			
			</div>
		
		</nav>
	
	</header>
	<main>
		
		<section class="strona">
		
			<div class="container">
				<h1>Zakup karnetów jest możliwy tylko na recepcji</h1>
				<h3>Zajęcia grupowe:</h3>
			
			
			
			<?php
$server='localhost';
$user='natalia.maler';
$password='myFQTPpsql';
$db='natalia.maler';

$conn=mysqli_connect($server,$user,$password,$db);


// Sprawdzenie połączenia
if (!$conn) {
    die("Błąd połączenia z bazą danych: " . mysql_error());
}

       $sql = "SELECT * FROM cennik_grupowe";
$result = mysqli_query($conn, $sql);
  echo "<div class='row mt-3' >";
if (mysqli_num_rows($result) > 0) {
    // Wyświetlanie danych dla każdego wiersza
    while($row = mysqli_fetch_assoc($result)) {
	echo "<div class='col-12 col-sm-6 col-md-4 mt-2'>";
        echo "<div class='srodek' style='background-color: white;'>";
        echo "<span class='naglowek'>".$row["nazwa"]."</span><br>";
        echo "<span class='cena'>".$row["cena"]."</span>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "Brak danych w bazie.";
}

echo "</div>";
echo "<h3>"."Zajęcia indywidualne:"."</h3>";



       $sql1 = "SELECT * FROM cennik_indywidualne";
$result1 = mysqli_query($conn, $sql1);
  echo "<div class='row mt-3' >";
if (mysqli_num_rows($result1) > 0) {
    // Wyświetlanie danych dla każdego wiersza
    while($row1 = mysqli_fetch_assoc($result1)) {
	echo "<div class='col-12 col-sm-6 col-md-6 mt-2'>";
        echo "<div class='srodek' style='background-color: white;'>";
        echo "<span class='naglowek'>".$row1["nazwa"]."</span><br>";
        echo "<span class='cena'>".$row1["cena"]."</span>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "Brak danych w bazie.";
}

echo "</div>";
mysqli_close($conn);
?>
					
				
					
				</div>	
		</section>
		
	</main>
	<footer>
								
	<p>Copyright © 2023 Szkoła Tańca Alfa</p>
		<p>Wszelkie prawa zastrzeżone</p>
	
	</footer>
	
	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>