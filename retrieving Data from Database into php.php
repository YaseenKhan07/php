<?php
$db=mysqli_connect("localhost","id19758450_neoneo","123/123/123/Qq","id19758450_neo");
$result=mysqli_query($db, "SELECT id, first_name, last_name, email, address, phone, gender FROM user ORDER BY id");

$length=$result->num_rows;
if($length>0){
?>   
<table border="1" width="800">
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Gender</th>
    
    
  <?php  
    for($i=0; $i<$length;$i++){
       
        $row=mysqli_fetch_assoc($result);
   ?>
        <tr>
            
            <td><?php  echo $row['id']  ?></td>
            <td><?php  echo $row['first_name']  ?></td>
            <td><?php  echo $row['last_name']  ?></td>
            <td><?php  echo $row['email']  ?></td>
            <td><?php  echo $row['address']  ?></td>
            <td><?php  echo $row['phone']  ?></td>
            <td><?php  echo $row['gender']  ?></td>
            
        </tr>
        
        
        <?php
        
        
        
    }
    ?></table>
    <?php
}
?>