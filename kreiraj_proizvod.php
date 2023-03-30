<?php
include ("baza.php");
?>
    <style>
input[type=text], select {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 50%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 25px 45;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>

<!-- KATEGORIJA !-->
<form action="insert_proizvod.php" method="GET">
<select name="kategorija">
    <option value="">Odaberi Kategoriju</option>
    <?php 
    $query ="SELECT Naziv FROM kategorija";
    $result = $conn->query($query);
    $br = 0;
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['Naziv'];
        $br = $br + 1;
    ?>
    <?php
    //selected option
    if(!empty($Naziv) && $Naziv== $option){
    // selected option
    ?>
    <option value="<?php echo $br; ?>" selected><?php echo $option; ?> </option>
    <?php 
continue;
   }?>
    <option value="<?php echo $br; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
    ?>
</select>
<br>

<!-- ZAVRSETAK KATEGORIJE !-->

<!-- LOKACIJA !-->
<select name="lokacija">
    <option value="">Odaberi Lokaciju</option>
    <?php 
    $query ="SELECT Mjesto FROM lokacija";
    $result = $conn->query($query);
    $br = 0;
    if($result->num_rows> 0){
        while($optionData=$result->fetch_assoc()){
        $option =$optionData['Mjesto'];
        $br = $br + 1;
    ?>
    <?php
    //selected option
    if(!empty($Mjesto) && $Mjesto== $option){
    // selected option
    ?>
    <option value="<?php echo $br; ?>" selected><?php echo $option; ?> </option>
    <?php 
continue;
   }?>
    <option value="<?php echo $br; ?>" ><?php echo $option; ?> </option>
   <?php
    }}
    ?>
</select>
<br>
<!-- ZAVRSETAK LOKACIJE !-->

<!-- INPUTI !-->
<div>
    <label>
        Naziv artikla:
        <input type="text" name="Naziv"/>
    </label> <br>
    <label>
        Opis artikla:
        <input type="text" name="Opis"/>
    </label> <br>
    <label>
        Cijena artikla:
        <input type="text" name="Cijena"/>
    </label> <br>
</div>
<!-- ZAVRSETAK INPUTA !-->
<input type="submit" value="Objavi"></input>
</form>