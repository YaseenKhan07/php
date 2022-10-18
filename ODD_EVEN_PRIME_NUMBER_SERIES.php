<?php


//See is a list of primer number below 

for( $funter = 2; $funter <= 100; $funter++ )
{  for( $love = 2; $love < $funter; $love++ )
{  if( $funter % $love == 0 )
{  break;  }   }
if( $love == $funter )
echo ($funter."<br>");   }







die();

/*EVEN Number Series 0-100*/
for($i=1;$i<=100;$i++){
    if($i%2!=0){
        continue;
    }echo $i."_";
}







die();
/*ODD Number Series 0-100*/
for($i=1;$i<=100;$i++){
    if($i%2==0){
        continue;
    }echo $i."_";
}





?>