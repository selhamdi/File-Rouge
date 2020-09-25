<?php 
include 'db.php';

if (isset($_POST["panierAdd"])) {

    $idP=$_POST['idP'];
    $idU=$_POST['idU'];
    
 
        $sql = "Insert into panier (idP,idU) values ('$idP','$idU')";
        
        if (mysqli_query($con, $sql)) {
            
            header("location:panier.php?idU=$idU");
        
        } 
    }

?>