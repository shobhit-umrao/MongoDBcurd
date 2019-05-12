<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>DELETE · FrontEnd NoSQL</title>

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
            <li class="nav-item ">
                <a class="nav-link" href="index.php"><h5>Home</h5></a>
            </li>
            &nbsp;
            <li class="nav-item">
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
<br>
<br>
<br>
<!-- Sign In form starts here -->
<!-- Sign In from ends here -->
<main role="main" class="container">
  <div class="jumbotron">
    <h1 align='center'> D E L E T E </h1>
    <p align='center' class="lead">
    <br>
    There is a function to call to remove a document from the collection. 
    The program calling the function would supply one or more values 
    (“firstname”, “lastname”, and/or “number”) to identify the document via filter, 
    and then this document would be removed from the collection. 
    After this function is called, the  collection should contain 
    all of the documents it had before, except for the one just deleted.
    <br>
    <br>
    Sharing two snapshots of my own 'DELETE' code
    <br>
    <br>
    <img src="delete1.png">
    <br>
    Data Sent to MongoDB
    <br>
    <br>
    <br>
    <br>
    <img src="delete2.png">
    <br>
    Delete Function
    </p>
    
    </p>
    <br>
    <p align='center'>
    <a data-toggle="tooltip" title="HOME !" class="btn btn-lg btn-primary" href="index.php" role="button">HOME</a>
    </p>
  </div>
</main>
<!-- script for hover messages -->
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
<!-- Scripts Starts here -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- script for hover messages -->
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
});
</script>
<!-- Scripts End here -->
</body>
</html>