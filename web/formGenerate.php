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
  if(isset($typeHeader)){
    $t=$typeHeader;
  }else{
    $t="null";
  }
  if(isset($textt)){
    $tt=$textt;
  }else{
    $tt="null";
  }
  if(isset($numberr)){
    $n=$numberr;
  }else{
    $n="null";
  }
  if(isset($dat)){
    $d=$dat;
  }else{
    $d="null";
  }
  if(isset($textarea)){
    $tr=$textarea;
  }else{
    $tr="null";
  }

  $sql = "INSERT INTO forms (FormName,textName,numberName,dateName,textAraName)
       VALUES ('$t','$tt','$n','$d','$tr')";
}
if ($conn->query($sql) === TRUE) {
  header("location:table.php?");
 
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
