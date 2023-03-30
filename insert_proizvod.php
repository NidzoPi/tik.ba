<?php 
include ("baza.php");

$kategorija = $_GET["kategorija"];
$lokacija = $_GET["lokacija"];
$Naziv = $_GET["Naziv"];
$Opis = $_GET["Opis"];
$Cijena = $_GET["Cijena"];

$sql = "INSERT INTO proizvodi (kategorija_id, lokacija_id, Naziv, Opis, Cijena)
VALUES ('$kategorija', '$lokacija','$Naziv','$Opis','$Cijena')";

if (mysqli_query($conn, $sql)) {
  echo "Uspješno ste objavili svoj artikal! Hvala!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
