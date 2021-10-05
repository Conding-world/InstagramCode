<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = "Rajneesh";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection


?>
<!DOCTYPE html>

<html>

<body>

<?php

ECHO "Hello World!<br>";

echo "Hello World!<br>";

EcHo "Hello World!<br>";

?>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>gaming YouTubers insta group</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
</head>
<body>

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
    </tr>
  </thead>
<?php 


$selectQuery = "SELECT * FROM `Data` ";
$selectResult = mysqli_query($conn,$selectQuery);

#$content = mysqli_fetch_assoc($selectResult) ;

#echo $content['Name'];

#echo $content['Password'];

while($content = mysqli_fetch_assoc($selectResult)){

?>
<tr>
      <td> <?php echo $content['Name']; ?></td>
      <td> <?php echo $content['Password']; ?></td>
    </tr>

<?php
}
?>
  
    
    
  </tbody>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</body>
</html>
