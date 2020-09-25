<?php

include 'db.php';
if(isset($_GET['id']) && isset($_GET['idP']) && isset($_GET['idU']))
{

    $id=$_GET['id'];
    $idP=$_GET['idP'];
    $idU=$_GET['idU'];


$sql="delete from panier where id=$idP and idP=$id";

if ($con->query($sql) === TRUE) {
 
    header("Location:panier.php?idU=$idU");
} 

else {
    header("Location:panier.php?idU=$idU");
}

$con->close();
}
?>