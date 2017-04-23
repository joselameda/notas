<?php
    include("conect.php");
    include("header.php");
    
    for ($i=1; $i <=1000 ; $i++) {   
        if ($i%3==0 && $i%5==0) {
            $color="red";
       }else {
                if ($i%5==0) {
            $color="blue";
            }
            else {
                   if ($i%3==0) {
                $color="green";
             }
             else {
                 $color="black";
             }
         }          
      } 
      if (primo($i)) {
        echo"<h1 style=\"color:$color\">$i Es Primo</h1> ";
      }
      else{
        echo"<h1 style=\"color:$color\">$i NO Primo</h1> ";

      }
}




  function primo($num)
{
    $cont=0;
    for($i=2;$i<=$num;$i++)
    {
        if($num%$i==0)
        {
            if(++$cont>1)
                return false;
        }
    }
    return true;
}
    include("footer.php");

?>

