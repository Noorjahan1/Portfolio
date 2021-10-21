<?php
// define variables and set to empty values

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $typeHeader=$_POST["formname"];
  if(isset($_POST["text"])){
       $textt=$_POST["text"];
  }
  if( isset($_POST["number"])){
        $numberr=$_POST["number"];
       
  }
  if(isset($_POST["date"])){
      $dat=$_POST["date"];
      
  }
  
  if( isset($_POST["textarea"])){
      $textarea=$_POST["textarea"];
      
  }  
  }
  if(isset($textt)){
 echo "<p>$textt</p><input type='text'></input>";
  }
  if(isset($numberr)){
   echo "<p>$numberr</p><input type='number'></input>";
  }
  if(isset($dat)){
   echo "<p>$dat</p><input type='date'></input>";
  }
  if(isset($textarea)){
   echo "<p>$textarea</p><textarea ></textarea>";
  }


// Create connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formbuilder";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
  
  $sql = "INSERT INTO forms (FormName,textName,numberName,dateName,textAraName)
       VALUES ('$typeHeader','$textt','$numberr','$dat','$textarea')";
}
if ($conn->query($sql) === TRUE) {
  header("location:table.php?");
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
