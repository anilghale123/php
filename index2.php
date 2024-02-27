<?php
      #this is echo to print something on browser
      # echo "hello world";

      #concept about variables
     // $name = "Bhopendra jogi";  #this is string
     // $age = 56;    #this is number integer
    //  $height = 5.6; #this is double float
    //  $isHungry = true; #this is boolean
      
     // echo "<h1>{$name}</h1>";
     // echo $age;
     // echo '<br>';
      #echo $isHungry;
     // var_dump($isHungry);  #data type + value representation imp icase of array


      #arrays concept
      #types: indexed array, associative array, 

      #indexed array
    //   $students = ["ramesh", "neelisha", "adison"];
    
      function dump($value)
      {
        echo "<pre>";  #this tag give the data as same format as it is there
      var_dump($value);
      echo "<pre>";  #smooth to looookk
      }
      
     

      #associative array  -> associate key instead of index value like 0 1 instead we use specified key to represent

    //   $details = ["firstName" => "Anil", "lastName" => "lalBahadur"];
      
      
      $food = ["samosa", "tea", "chowmin", "momo"];
      foreach ($food as $key) {
        echo "$key <br>";
      }


      for($i = 0; $i < count($food); $i++)
      {
        echo $food[$i] . "<br>";
         
    }



         echo "hello k xa estai xa ni yar ";

?>