<?php

include("baza.php");
include("stranice/meni.html");

$sql = "SELECT * FROM proizvodi WHERE Kategorija_id = 2";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
	// ZAVRSAVA PHP
?>
	<div class="container">
<?php
  while($row = mysqli_fetch_assoc($result)) {
  	echo '<div style="background-color: red; width: 200px; float:left; display: inline-flex; margin:10px; padding:20px;"> ';
    echo "Naziv: " . $row["Naziv"]. " - Opis: " . $row["Opis"]. "Cijena: " . $row["Cijena"]. "";
    echo '</div>';
  }
 // ZAVRSAVA PHP
 ?>
</div>
 <?php
} else {
  echo "0 results";
}

mysqli_close($conn);
?>