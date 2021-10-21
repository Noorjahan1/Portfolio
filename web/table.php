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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<style>
  a{
    text-decoration:none;
  }
</style>
<body>
  <div>
    
  </div>
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
      <td><a href='formDetails.php?id=$formm[id]' class='btn-primary p-2'>Report</a></td>
    </tr>";
    
    }
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
        ?>
  
  </tbody>
</table>
</body>
</html>