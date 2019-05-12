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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Add Record · FrontEnd NoSQL</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-static/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Sign form custom style starts here -->
    <style>
body {
  background-color: #f5f5f5;
}

.form-signin {
  width: 100%;
  max-width: 420px;
  padding: 15px;
  margin: auto;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group > input,
.form-label-group > label {
  height: 3.125rem;
  padding: .75rem;
}

.form-label-group > label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0; /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  pointer-events: none;
  cursor: text; /* Match the input under the label */
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: 1.25rem;
  padding-bottom: .25rem;
}

.form-label-group input:not(:placeholder-shown) ~ label {
  padding-top: .25rem;
  padding-bottom: .25rem;
  font-size: 12px;
  color: #777;
}

/* Fallback for Edge
-------------------------------------------------- */
@supports (-ms-ime-align: auto) {
  .form-label-group > label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */
@media all and (-ms-high-contrast: none), (-ms-high-contrast: active) {
  .form-label-group > label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}

    </style>
    <!-- Sign In form custom style ends here -->

  </head>
  <body>

<!-- Navigation bar Starts here -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> 
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php"><h5>Home</h5></a>
            </li>
            &nbsp;
            <li class="nav-item active">
                <a class="nav-link" href="form.php"><h5>Add Record</h5></a>
            </li>
            &nbsp;
            <li class="nav-item">
                <a class="nav-link" href="userlist.php"><h5>Database</h5></a>
            </li>
            &nbsp;
            <li class="nav-item">
                <a class="nav-link" href="userlist2.php"><h5>Database 2</h5></a>
            </li>
            &nbsp;
            <li class="nav-item">
                <a class="nav-link" href="#"><h5>Account</h5></a>
            </li>
            &nbsp;
            &nbsp;
            <li class="nav-item">
            <a class="nav-link" href="login.php"><h5>Sign in</h5></a>
          </li>
          &nbsp;
          <li class="nav-item">
            <a class="nav-link" href="index.php?logout='1'"><h5>Logout</h5></a>
            </li>
            &nbsp;
            <li class="nav-item">
                <a class="nav-link" href="userlist.php"><h5>Editing in Progress</h5></a>
            </li>
        </ul>

        <!-- search functionality starts here -->
            <!-- <form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        <!-- search functionality ends here -->
  </div>
</nav>
<!-- Navigation Bar Ends here -->
<br>
<br>
<br>
<!-- Sign In form starts here -->
<!-- Sign In from ends here -->


<!-- Form starts here -->
<form class="form-signin" action="adduser.php" method="POST">
<div class="text-center ">
    <h1 class="h3 font-weight-normal">Adding a Record...</h1>
  </div>
  <div class="form-label-group">
    <input type="text" id="inputFirstname" name="firstname"class="form-control" placeholder="First Name" required autofocus>
    <label for="inputFirstname">First Name</label>
  </div>

  <div class="form-label-group">
    <input type="text" name="lastname" id="inputLastname" class="form-control" placeholder="Last Name" required>
    <label for="inputLastname">Last Name</label>
  </div>

  <div class="form-label-group">
    <input type="text" id="inputCity" name="city"class="form-control" placeholder="City" required>
    <label for="inputCity">City</label>
  </div>

  <div class="form-label-group">
    <input type="text" name="number" id="inputNumber" class="form-control" placeholder="Mob No." required>
    <label for="inputNumber">Mob No.</label>
  </div>
  <div class="form-label-group">
    <select class="form-control" name="branch" required>
        <option value=NULL selected disabled hidden>Branch</option>   
        <option value="Computer Science & Engineering">CSE</option>
		<option value="Information Technology">IT</option>
    </select>
    </div>
    <div class="form-label-group">
    <select class="form-control" name="gender" required>
        <option value=NULL selected disabled hidden>Gender</option>
        <option value="Male">Male</option>
		<option value="Female">Female</option>
    </select>
    </div>
    <div class="form-label-group">
    <select class="form-control" name="resident" required>
    <option value=NULL selected disabled hidden>Residential Status</option>
        <option value="Day Scholar">Day Scholar</option>
		<option value="Hosteller">Hosteller</option>
    </select>
    </div>
    <br>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Add Record</button>
  <p class="    text-center">
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
  <p class="mt-5 text-muted text-center">&copy; Shobhit Umrao</p>
</form>




<!-- Form ends here -->















<!-- <main role="main" class="container">
  <div class="jumbotron">
    <h1>Navbar example</h1>
    <p class="lead">This example is a quick exercise to illustrate how the top-aligned navbar works. As you scroll, this navbar remains in its original position and moves with the rest of the page.</p>
    <a class="btn btn-lg btn-primary" href="/docs/4.3/components/navbar/" role="button">View navbar docs &raquo;</a>
  </div>
</main> -->










<!-- Scripts Starts here -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Scripts End here -->
</body>
</html>
