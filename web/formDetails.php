<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Details</title>
</head>
<style>
  p{
    color:blue;
    font-size:25px;
  }
  .form-control{
    width:40%;
  }
  h2{
    color:red;
  }
</style>
<body>
    <?php
     $ida= $_GET["id"];
     $sql="SELECT * FROM forms WHERE id=$ida";
     $result = $conn->query($sql);
  while($row = $result->fetch_assoc()) {
    
    ?>
      <div class='container mt-5'> 
       <h2> <?php $row["FormName"] ?></h2>
       <form action="formSubmit.php?" method="POST">
         <p>Form NAme</p>
         <input typ="text" name="formname" value=<?php echo "$row[FormName]"; ?>></input>
         <?php if($row["textName"]!=="null"){
        echo"<p>  $row[textName]</p>
        <input type='text' class='form-control' name='text'></input>
        </br>";
        }?>
        <?php if($row["numberName"]!=="null"){
          echo "<p> $row[numberName]</p>
        <input type='number' class='form-control' name='number'></input>
        </br>";}?>
        <?php if($row["dateName"]!=="null"){
          echo "<p> $row[dateName]</p>
        <input type='date' class='form-control' name='date'></input>
        </br>";}?>
        <?php if( $row["textAraName"]!=="null"){
          echo "<p>  $row[textAraName]</p>
               <textarea class='form-control' name='textarea'></textarea>
        </br>
        ";     }
        ?>
        <?php
         
         };

        
        ?>
           <button type='submit' class='btn-primary'>Submit</button>
        </form>
        </div>
</body>
</html>