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



// Pobranie wartości licznika

$result = mysqli_query($conn,"SELECT count FROM visitors");
$row = mysqli_fetch_assoc($result);
$count = $row['count'];
$count++;
mysqli_query($conn,"UPDATE visitors SET count=$count");
// Wyświetlenie wartości licznika
echo "Liczba odwiedzających: " . $count;

// Zamknięcie połączenia
mysqli_close($conn);
?>