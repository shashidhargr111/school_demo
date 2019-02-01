<?php 

include 'includes/admin_header2.php';

  if (isset($_POST['login'])) {
    # code...

    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = trim($username);
    $password = trim($password);


    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $query = "select * from admin where admin_email = '{$username}' ";
    $select_user_query = mysqli_query($connection,$query);

    while ($row = mysqli_fetch_array($select_user_query)) {
      # code...
      // $db_id = $row['user_id'];
      $db_stud_email = $row['admin_email'];
      $db_stud_pass = $row['admin_pass'];

    
    }
    
    if ($username === $db_stud_email && $password === $db_stud_pass ) {
      # code...

      $_SESSION['username'] = $db_stud_email;

      // echo "login";

      
      header("Location: home.php");

    }  else {

      echo "wrong pass";

      // header("Location: ../index.php");
    }
  }

  ?>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
         <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                
                <a class="navbar-brand" href="index.php">School Demo</a>
            </div>
        </nav>

    <br>
    <br>
    <br>
    <br>

    <!-- Page Content -->
    <div class="container">
  <div class="form-gap"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="text-center">


              <h3><i class="fa fa-user fa-2x"></i></h3>
              <h2 class="text-center"> Admin Login</h2>
              <div class="panel-body">

        <form action="index.php" autocomplete="off" method="post">
            <div class="form-group">
                <input name="username" type="text" placeholder="Enter Username" class="form-control">  
            </div>

            <div class="input-group">
                <input name="password" type="password" placeholder="Enter Password" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-primary" name="login" type="submit" >Submit</button>
                </span>
            </div>

        </form>
        <br>
        
              </div><!-- Body-->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</div>

