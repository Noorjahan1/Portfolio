<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
</head>
<body>
    <div class="bg-success">
         <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Form Name</th>
      <th scope="col">Action</th>
     
    </tr>
     </thead>
    <tbody>
        <?php
          $sql = "SELECT * from forms";
      
      $result = $conn->query($sql);
if ($result->num_rows > 0) {
  foreach($result as $formm){
        echo "<tr>
      <th >$formm[id]</th>
      <td><a href='details.php'>$formm[FormName]</a></td>
      <td><a href='formDetails.php?id=$formm[id]'>Report</a></td>
    </tr>";
    
    }
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        ?>
    </div>
  </tbody>
</table>
</body>
</html>