<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $typeHeader=$_POST["formname"];
  if(isset($_POST["text"])){
       $text=$_POST["text"];
  }
  if( isset($_POST["number"])){
        $number=$_POST["number"];
  }
  if(isset($_POST["date"])){
      $date=$_POST["date"];
  }
  
  if( isset($_POST["textarea"])){
      $textarea=$_POST["textarea"];
  }
  
  
  
  
  
  }
  if(isset($text)){
 echo "<p>$text</p><input type='text'></input>";
  }
  if(isset($number)){
   echo "<p>$number</p><input type='number'></input>";
  }
  if(isset($date)){
   echo "<p>$date</p><input type='date'></input>";
  }
  if(isset($textarea)){
   echo "<p>$textarea</p><textarea ></textarea>";
  }


?>
