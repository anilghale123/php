<?php
   if($_SERVER['REQUEST_METHOD'] == "GET" )
       {
        echo "you are so stupid!";
       }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
        <form  method="GET">  
              <input name="userNAme" />
              <button type="submit">Send</button>  
             
        </form>
 
         <!-- <form method="POST">    
            <input name="userNAme">
            <input name="passWord">
            <button>Send</button> 
            //no transparency at browser high level abstraction   embed at body //if change arrive use POST
                default method get embed at browser //if no change use GET  if no security concern use GET
      // by default it is submit
        </form> 
      
            </form>    -->
</body>
</html>