<!DOCTYPE HTML>
<html>
<head>
    <title>PDO - Create a Record - PHP CRUD Tutorial</title>
      
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
          
</head>
<body>
  
    <!-- container -->
    <div class="container">
   
        <div class="page-header">
            <h1>Create Product</h1>
        </div>
      
        <?php
if($_POST){
 
    // include database connection
    include 'database_connection.php';
 
    try{
     
        // insert query
        $query = "INSERT INTO recette SET image=:image,name=:name, prix=:prix, description=:description, category=:category";
 
        // prepare query for execution
        $stmt = $con->prepare($query);
 
        // posted values
        $image=htmlspecialchars(strip_tags($_POST['image']));
        $name=htmlspecialchars(strip_tags($_POST['name']));
        $prix=htmlspecialchars(strip_tags($_POST['prix']));
        $description=htmlspecialchars(strip_tags($_POST['description']));
        $category=htmlspecialchars(strip_tags($_POST['category']));
        
 
        // bind the parameters
        $stmt->bindParam(':image', $image);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':prix', $prix);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':category', $category);
        
         
        // Execute the query
        if($stmt->execute()){
            echo "<div class='alert alert-success'>Record was saved.</div>";
        }else{
            echo "<div class='alert alert-danger'>Unable to save record.</div>";
        }
         
    }
     
    // show error
    catch(PDOException $exception){
        die('ERROR: ' . $exception->getMessage());
    }
}
?>
 
<!-- html form here where the product information will be entered -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <table class='table table-hover table-responsive table-bordered'>
    <tr>
            <td>Image</td>
            <td><input type='text' name='image' class='form-control' /></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' class='form-control' /></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type='text' name='prix' class='form-control' /></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input name='description' class='form-control'></textarea></td>
        </tr>
        <tr>
            <td>categorie</td>
            <td><input name='category' class='form-control'></textarea></td>
        </tr>
       
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save' class='btn btn-primary' />
                <a href='index.php' class='btn btn-danger'>Back to read products</a>
            </td>
        </tr>
    </table>
</form>
       
    </div> <!-- end .container -->
      
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
   
<!-- Latest compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</body>
</html>