<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/details.css">
    <style>
      .submit {
 
 width: 50%;
 line-height: 40px;
 border: none;
 border-radius: 20px;
 font-size: 0.85rem;
 color: #fff;
 background: #518f2d;
 transition: all 0.5s;
 outline: none;
 margin-top: 50px;
}

.submit:hover {
 background: #36611e;
 box-shadow: 0px 4px 60px -15px #36611e;
 cursor: pointer;
}
</style>

</head>

<?php
include 'db.php';
if(isset($_GET['id']))
{

  $query = "select * FROM recette WHERE id = ".$_GET['id'];
  $result = $con->query($query);
  while($row = $result->fetch_assoc()) {

?>

<div class="main-content">
<div class="navigation">Meilleur Recette Sur Gourmand</div>

  <div class="pie-image" style="background-image: url('../images/<?php echo $row["image"] ?>');"></div>
  <div class="pie-recipe">
    <div class="pie-recipe__title">
      <div class="pie-name"><?php echo $row["name"] ?></div>
      <div class="pie-serving">
        <p>Makes one 9½-inch pie</p>
      </div>
    </div>
    <div class="pie-recipe__ingredients">
      <div class="pie-recipe__ingredients__item">
      <div class="pie-recipe__subtitle">instructions</div>
        <ul>
          <li><?php echo $row["description"] ?></li>
        </ul>
        <form action="" method="post"> 
          <input type="hidden" name="idP" value="<?php echo $_GET['id'] ?>">
          <input type="hidden" name="idU" value="<?php echo  $_GET['idU'] ?>">
        <button type="submit" name="panierAdd" class="submit">Ajouter au Panier</button>
        </form>
      </div>
      
    </div>
    
</div>
  </div>

  <?php

}
}
?>

<?php include ('../Traitement/panier.php') ?>

