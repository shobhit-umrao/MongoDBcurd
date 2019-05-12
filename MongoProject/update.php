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

    $id = $_POST["id"];
    $first/*local variable, valid in this file only*/ = $_POST["firstname"];
    $last/*local variable, valid in this file only*/ = $_POST["lastname"];
    $city/*local variable, valid in this file only*/ = $_POST["city"];
    $number/*local variable, valid in this file only*/ = $_POST["number"];
    $branch/*local variable, valid in this file only*/ = $_POST["branch"];
    $gender/*local variable, valid in this file only*/ = $_POST["gender"];
    $resident/*local variable, valid in this file only*/ = $_POST["resident"];

    

        $bulk->update(['_id'=> new MongoDB\BSON\ObjectId($id)],
        [
        'FirstName' => $first,
        'LastName' => $last,
        'City' => $city,
        'Number' => $number,
        'Branch' => $branch,
        'Gender' => $gender,
        'Resident' => $resident
        ]);
        $result = $manager->executeBulkWrite($dbName.'.'.$collectionName, $bulk);
        header("location: userlist.php");
?>