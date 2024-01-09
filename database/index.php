<?php

function printThis($value)
{
    
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}

// Database connection parameters
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'user';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

print_r($conn);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select data from the database
$result = mysqli_query($conn, "SELECT * FROM student");

// Check if the query was successful
if ($result) {
    // Fetch data and print it
    while ($row = mysqli_fetch_assoc($result)) {
        printThis($row);
    }

    // Free result set
    mysqli_free_result($result);
} else {
    // Print an error message if the query fails
    echo "Error: " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);







// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "user";





//     function printThis($value)
// {
//     echo "<pre>";
//     echo "$value";
//     echo "</pre>";
// }


// $conn = mysqli_connect('localhost','root','','user');

// //select data from database
// $result = mysqli_query($conn,"select * from student");
// // printThis($result);
// // $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);



// while($row = mysqli_fetch_assoc(($result))){
//     printThis($row);
// }  

