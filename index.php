<!DOCTYPE html>
<html>
<body>

<?php
$firstName = "Anil";
$secondName = "Ghale";

function createUserName($firstName,$secondName)
		{
        	echo "@".strtolower($firstName.$secondName);
        
        }
        
        createUserName($firstName,$secondName);
        
        
  $num1 = 5.6;
  $num2 = 5;
  
  
  function calculateSum($num1,$num2)
     {
     	echo "<br>" .round($num1+$num2);
     
     }
     
     calculateSum($num1,$num2);

?>

</body>
</html>
