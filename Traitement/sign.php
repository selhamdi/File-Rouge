<?php 
 session_start();
include 'db.php';

if (isset($_POST["butsave"])) {

	    $FullName=$_POST['FullName'];
		$Email=$_POST['Email'];
		$Pasword=$_POST['Pasword'];
	    $passwordHash = md5($Pasword);
	 
        $duplicate=mysqli_query($con,"select * from users where Email='$Email'");

		if (mysqli_num_rows($duplicate)>0)
		{
            $Message= "User Déjà inscrit";
            
        }
		

        else{
			$sql = "Insert into users (FullName, Email, Pasword, Status) values ('$FullName','$Email','$passwordHash','user')";
            
			if (mysqli_query($con, $sql)) {
				$Message= "Inscription Realisé";
			
			} 
			
        }
	}
	

   
    if(isset($_POST['butlog']))
    {
		    
            $query="select * from users where FullName='".$_POST['FullName']."' and Pasword='".$_POST['Pasword']."'";
            $result=mysqli_query($con,$query);
          
            if ($result->num_rows > 0) {
     
                // output data of each row
                while($row = $result->fetch_assoc()) {

                $_SESSION['ID']=$row["UserID"];
                $_SESSION['User']=$_POST['FullName'];
			   
            }
            header("location:index.php");
           
       }
       else
       {
           $Message= "Échec de l'enregistrement";
       }
    
    }
?>
