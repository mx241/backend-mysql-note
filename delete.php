<?php

$host="localhost";
    $userh="root";
    $passh="";
    $DB="note";
    $m="mohamed";



    $conn= new mysqli($host , $userh , $passh , $DB);


$stmt="DELETE FROM r;";

$conn->query($stmt);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="stylesheet" href="note.css" />
</head>
<body>

    <div class="container">
        <div class="form">
    <form action="note.php" method="post">
        <input type="text" name="input" placeholder="enter your task here"/>
        <input type="submit" class="add" value="Add Task" />
        <br>
         <br>
          <br>
          </div>
        </form>

   <form action="delete.php" method="post" >

    <input type="submit" class="qq"  name="delete" value="Delete all notes">

   </form>

    <link rel="stylesheet" href="1.css" />

    
</form>
</body>
</html>

