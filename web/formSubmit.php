<?php
include "connection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $typeHeader=$_POST["formname"];
  if(isset($_POST["text"])&&$_POST["text"]!=="null"){
       $textt=$_POST["text"];
  }else{
      $textt="null";
  }
  if(isset($_POST["number"])&&$_POST["number"]!=="null"){
       $numb=$_POST["number"];
  }else{
      $numb="null";
  }
  if(isset($_POST["date"])&&$_POST["date"]!=="null"){
       $dte=$_POST["date"];
  }else{
      $dte="null";
  }
  if(isset($_POST["textarea"])&&$_POST["textarea"]!=="null"){
       $texttr=$_POST["textarea"];
  }else{
      $texttr="null";
  }
  
$sql = "INSERT INTO sumbitform  (FormName, text, number,date,textAraName)
VALUES ('$typeHeader','$textt','$numb','$dte', '$texttr' )";

if ($conn->query($sql) === TRUE) {
   $succes=true;
} else {
   $succes=false;
}

$conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Submission</title>
</head>
<body>
    <?php if($succes){
    
    ?>
    <div class="bg-success">
        <h1>Form Suubmitted!</h1>
    </div>
    <?php
    }else{

    ?>
       <div class="bg-danger">
        <h1>Form has not Suubmitted!</h1>
    </div>
    <?php
    }
    ?>
</body>
</html>