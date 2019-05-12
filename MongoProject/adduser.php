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
    include 'dbname.php';/*Including the database and collection name from other file */
    $bulk = new MongoDB\Driver\Bulkwrite; /*Declaring variable for BulkWrite Function*/

    /*declaring variables with values from the form for  use in this very file*/
    $first/*local variable, valid in this file only*/ = $_POST["firstname"];
    $last/*local variable, valid in this file only*/ = $_POST["lastname"];
    $city/*local variable, valid in this file only*/ = $_POST["city"];
    $number/*local variable, valid in this file only*/ = $_POST["number"];
    $branch/*local variable, valid in this file only*/ = $_POST["branch"];
    $gender/*local variable, valid in this file only*/ = $_POST["gender"];
    $resident/*local variable, valid in this file only*/ = $_POST["resident"];

    $temp=[
        '_id'=> new MongoDB\BSON\ObjectId,/*Not necessary but a precautionary measure to aoid exceptions*/
        'FirstName' => $first,
        'LastName' => $last,
        'City' => $city,
        'Number' => $number,
        'Branch' => $branch,
        'Gender' => $gender,
        'Resident' => $resident
        ];

    $bulk->insert($temp);
    $result = $manager->executeBulkWrite($dbName.'.'.$collectionName, $bulk);
    header("location: userlist.php");

?>  