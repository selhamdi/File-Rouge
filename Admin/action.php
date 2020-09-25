<?php

//action.php

include('database_connection.php');

if($_POST['action'] == 'edit')
{
 $data = array(
  ':image'  => $_POST['image'],
  ':name'  => $_POST['name'],
  ':prix'   => $_POST['prix'],
  ':description'   => $_POST['description'],
  ':category'   => $_POST['category'],
  ':id'    => $_POST['id']
 );

 $query = "
 UPDATE recette 
 SET image = :image, 
 name = :name, 
 prix = :prix,
 description = :description,
 category = :category
 WHERE id = :id
 ";
 $statement = $connect->prepare($query);
 $statement->execute($data);
 echo json_encode($_POST);
}

if($_POST['action'] == 'delete')
{
 $query = "
 DELETE FROM recette 
 WHERE id = '".$_POST["id"]."'
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 echo json_encode($_POST);
}


?>