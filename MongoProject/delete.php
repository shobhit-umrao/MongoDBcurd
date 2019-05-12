<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<?php
    include 'dbname.php';
    $bulk = new MongoDB\Driver\BulkWrite;

    $id = $_GET["id"];

    $bulk->delete(['_id' => new MongoDB\BSON\ObjectId($id)]);

    $result = $manager->executeBulkWrite($dbName.'.'.$collectionName, $bulk);
    header("location: userlist.php");


?>