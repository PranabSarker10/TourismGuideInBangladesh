<?php require_once('inc/top.php');?>
<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
//$date = date('Y/m/d H:i:s');

$query = "INSERT INTO comment (name, email, comment) VALUES('$name', '$email', '$message')";
if(mysqli_query($con, $query)){
    header('location: ../Review.php');
}
else
    echo "ERROR";
?>