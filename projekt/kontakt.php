<!DOCTYPE html>
<html lang="pl">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Szkoła Tańca Alfa</title>
	
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="strona.css">
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
					
					<li class="nav-item">
						<a class="nav-link" href="cennik.php"> Cennik </a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link " href="galeria.html"> Galeria </a>
					</li>
					
					<li class="nav-item active">
						<a class="nav-link" href="kontakt.html"> Kontakt </a>
					</li>
				
				</ul>
			
				
			
			</div>
		
		</nav>
	
	</header>
	<main>
		
		<section class="strona">
		
			<div class="container mt-3 ">
			<header>
			<h2>Informacje kontaktowe</h2>
			</header>
		
	<div >
	<h5>Szkoła Tańca Alfa - Kraków</h5>
	ulica Rakowicka 35<br>
	31-510 Kraków
	<br><br>
	Tel: 510 432 123<br>
	E-mail: recepcja@szkolatancaalfa.pl<br><br>
	
	Godziny otwarcia rejestracji:<br>
	PON-PT: 8:00 - 22:00<br>
	SOB: 9:00 - 16:00<br>
	
	
	</div>
	<div>
	<br><h2>Masz pytania?</h2>
	<h5>Skontaktuj się z Nami!</h5>
	<div class="form1 mb-3 col-12" >
	<form action="contact.php" method="post">
	  <label for="name">Imię i nazwisko:</label><br>
	  <input type="text"  name="name" placeholder="Imię i nazwisko" class="col-12" required><br>
	 <label for="email">E-mail:</label><br>
	  <input type="email"  name="email" placeholder="E-mail" class="col-12" required><br>
	  	  <label for="temat">Temat:</label><br>
	   <input type="text"  name="subject" placeholder="Temat" class="col-12" required><br>
	     <label for="tresc">Treść wiadomości:</label><br>
		 <textarea  name="message" cols="40" row="10" maxlength="200" style=" width:500px; height:150px" placeholder="Treść wiadomości" class="col-12" required></textarea><br>
	
		 <input type="submit"  style="width:100px" value="Wyślij">
	</form>
	</div>
</div>
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