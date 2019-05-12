<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
include 'dbname.php';

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if (empty($password_2)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }


  $filterTemp = [ '$or' => [ ['Username' => $username], ['EmailID' => $email] ] ];

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
    $query = new MongoDB\Driver\Query($filterTemp);
    $result = $manager->executeQuery($dbNameLR.'.'.$collectionNameLR, $query);
    $row = $result->toArray();
    var_dump(count($row));
    echo "<br>";


  // Finally, register user if there are no errors in the form
  if (count($row) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database
    $bulk = new MongoDB\Driver\Bulkwrite; /*Declaring variable for BulkWrite Function*/
  	$temp=[
      '_id'=> new MongoDB\BSON\ObjectId,/*Not necessary but a precautionary measure to aoid exceptions*/
      'Username' => $username,
      'EmailID' => $email,
      'Password' => $password,
      ];

    $bulk->insert($temp);
    $result = $manager->executeBulkWrite($dbNameLR.'.'.$collectionNameLR, $bulk);
  	$_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    //var_dump($result);
  	header('location: index.php');
  }
}

// ...

// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
        $password = md5($password);
        
        $filterTemp2 =  [
            'Username' => $username,
            'Password' => $password
        ];
        
        $query = new MongoDB\Driver\Query($filterTemp2);

        $results = $manager->executeQuery($dbNameLR.'.'.$collectionNameLR, $query);
        $row = $results->toArray();/*to convert the result, to an array of documents*/
        //var_dump(count($row));
        if (count($row) == 1) {
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in... <br>(Press F5 to remove this message)";
          //var_dump($results);
          header('location: index.php');
        }else {
        array_push($errors, "Wrong username/password combination");
        echo '<script language="javascript">';
        echo 'alert("Wrong username/password combination")';
        echo '</script>';
        }
    }
  }
  
  ?>