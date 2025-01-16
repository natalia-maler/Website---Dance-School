<!DOCTYPE html>
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



// Pobranie danych z formularza
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name1 = $_POST['name'];
$email1 = $_POST['email'];
$subject1 =$_POST['subject'];
$message1 = $_POST['message'];

// Zapis danych do bazy danych
$sql = "INSERT INTO contacts1 (name, email,subject,message) VALUES ('$name1', '$email1','$subject1', '$message1')";
}
$errorMessage = null;
$successMessage = null;


if ($_POST) {
    $name1 = isset($_POST['name']) ? filter_var($_POST['name'], FILTER_SANITIZE_STRING) : null;
    $email1 = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;
	 $subject1 = isset($_POST['subject']) ? filter_var($_POST['subject'], FILTER_SANITIZE_STRING) : null;
    $message1 = htmlspecialchars($_POST['message']);

    if (empty($name1) || empty($email1) || empty($message1) || empty($subject1)) {
        $errorMessage = 'Wypełnij wszystkie pola!';
    }
     if ($conn->query($sql) === TRUE) {
         $successMessage = 'Wiadomość została wysłana';

    } 
	
}
mysqli_close($conn);
?>
	
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
			<div class="container mt-3">
	<?php if ($errorMessage) : ?>
                <div class="alert alert-danger"><?php echo $errorMessage; ?></div>
            <?php endif; ?>

            <?php if ($successMessage) : ?>
                <div class="alert alert-success"><?php echo $successMessage; ?></div>
            <?php endif; ?>
			<?php
			if ($_POST) {
			echo "Imię Nazwisko:  " .$name1 = $_POST['name']."<br>";
			echo "E-mail:  " .$email1 = $_POST['email']."<br>";
			echo  "Temat:  ".$subject1 =$_POST['subject']."<br>";
			echo "Treść wiadomości:    ".$message1 = $_POST['message']."<br>";
			}
			
			?>
			<div class="mb-3" style="border:1px solid black; height:50px; width:100px; display: inline-block;align-items:center;background-color:white">
		<a href="kontakt.html" >Powrót</a>
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
