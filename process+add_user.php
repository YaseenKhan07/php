<?php  
$db=mysqli_connect("localhost","id19758450_neoneo","123/123/123/Qq","id19758450_neo");


if(isset($_POST['first_name'])){
   
  
   $first_name = $_POST['first_name'];
   $last_name  = $_POST['last_name'];
   $email      = $_POST['email'];
   $address    = $_POST['address'];
   $phone      = $_POST['phone'];
   $password   = $_POST['password'];
   $gender     = $_POST['gender'];
   
   
   $result=mysqli_query($db, "INSERT INTO user VALUES (NULL, '$first_name', '$last_name', '$email', '$address', '$phone', '$password', '$gender')");
   if($result){?>
   
   <script>
       window.location='index.php?action=inserted';
   </script>
   
   <?php
   }
   
   
}else{
    echo"Error in Insertion";
    
    
};







?>