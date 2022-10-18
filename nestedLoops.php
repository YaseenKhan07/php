<table border="1" width="1300">
    <?php   $number=1;
    for($funter=1;$funter<=30;$funter++){         
    ?> <tr>
        <?php 
        for($love=1;$love<=15;$love++){
        ?>
        <td>  <?php  echo($number);  ?>  </td>
        <?php  $number++;}  ?>
    </tr>
    <?php      }  ?>
    </table>




<?php   die();   ?>
<table border="1" width="200">
    <tr>
        <?php
        for($i=1;$i<=3;$i++){
            
            ?>
            <td>
                
                <?php   echo  $i;    ?>
            </td>
      <?php  }
        ?>
        
        
        
        
        
    </tr>
    
    
    
    
</table>





<?php

$i=1;
while($i<=10){
    
    
$j=1;
while($j<=10){
    
    
    echo(" ".'FUNTER');
    $j++;}
    
    
    echo('<br>');
    $i++;
}
?>