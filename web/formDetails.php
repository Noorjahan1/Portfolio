<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Details</title>
</head>
<body>
    <?php
     $ida= $_GET["id"];
     $sql="SELECT * FROM forms WHERE id=$ida";
     $result = $conn->query($sql);
     while($row = $result->fetch_assoc()) {
         
       echo " <form><p>  $row[textName]</p>
        <input type='text'></input>
        </br>
        <p> $row[numberName]</p>
        <input type='number'></input>
        </br>
        <p> $row[dateName]</p>
        <input type='date'></input>
        </br>
        <p> $row[textAraName]</p>
       <textarea></textarea>
        </br>
       
        </form>"
      ;
  }
 
       
    
    ?>
    
</body>
</html>