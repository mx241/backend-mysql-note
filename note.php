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





<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){


    $host="localhost";
    $userh="root";
    $passh="";
    $DB="note";
    $m="mohamed";

    $note12 = $_POST['input'];

    $conn= new mysqli($host , $userh , $passh , $DB);

    $stm="INSERT INTO r VALUES ('$note12');";

    $conn->query($stm);

}


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

<br>
<br>
<br>
    <form>
        
    <h2> YOUR TASKS </h2>
     
    <link rel="stylesheet" href="1.css" />

    
</form>
</body>
</html>

<?php
$sql = "SELECT user FROM r";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<h4>" . $row["user"] . "<h4>";

        
    
        echo "<h3>" .  "................................................................................" . "<h3>";

    }
    
}


    ?>

