
<?php 

    include 'includes/admin_header.php';

?>
    <div id="wrapper">

<?php 

	include 'includes/admin_nav.php';

?>
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">

                      <h1 class="page-header">
                          Welcome To Admin
                          <small>Author</small>
                      </h1>
                    
<?php 

	if (isset($_GET['stude_id'])) {
		# code...
		$the_stude_id = $_GET['stude_id'];

		$query = "select *from student where student_id = $the_stude_id";
    	$select_student_id = mysqli_query($connection,$query);

	    while ($row = mysqli_fetch_assoc($select_student_id)) {
	        # code...
	        $student_id = $row['student_id'];
	        $student_email = $row['student_email'];
          $student_name = $row['student_name'];
          $student_ph = $row['student_ph'];
          $student_dob = $row['student_dob'];
          $student_f_name = $row['student_f_name'];     
          $gender = $row['student_gender'];     
          $student_pass = $row['student_pass'];     

	    }
	}


	if (isset($_POST['update_teacher'])) {
		# code...

		$teachername = $_POST['teachername'];
		$teacheremail = $_POST['teacheremail'];
		$teacherph = $_POST['teacherph'];
		$classname = $_POST['classname'];
		$gender = $_POST['gender'];
		$pass = $_POST['pass'];
		$pass2 = $_POST['pass2'];

		if ($pass === $pass2) {
			# code...
			echo "<script>alert(password and password 2 not match)</script>";
			exit();
		}



		$query = "update teacher set ";
		$query .= "teacher_name = '{$teachername}', ";
		$query .= "teacher_email = '{$teacheremail}', ";
		$query .= "teacher_ph = '{$teacherph}', ";
		$query .= "teacher_class_id = '{$classname}', ";
		$query .= "teacher_gender = '{$gender}', ";
		$query .= "teacher_pass = '{$pass2}', ";
		$query .= "where student_id = {$the_user_id} ";
		
		

		$update_student_query = mysqli_query($connection,$query);

		// errormsg($update_post);

		// echo "<p class='alert alert-success'>Post Updated.<a href='../post.php?p_id={$the_post_id}'>View Post</a> or<a href='posts.php'> Edit More Post</a></p>";

	}	

 ?>

<form action="" method="post" enctype="multipart/form-data">


	 <div class="row">

    <div class="col-xs-6">
      <div class="form-group">
        <label for="email">Student Name:</label>
        <input type="text" value="<?php echo $student_name ; ?>" class="form-control" required="required" name="studentname">
      </div>   
    </div>

    <div class="col-xs-6">
      <div class="form-group">
        <label for="email">Student Email:</label>
        <input type="email" value="<?php echo $student_email ; ?>" required="required" class="form-control" name="studentemail">
      </div>
    </div>
    
  </div>

    <div class="form-group">
        <label for="email">Student Phone:</label>
        <input type="number" value="<?php echo $student_ph; ?>" required="required" class="form-control" name="studentph">
    </div>
  
  <div class="row">   
    <div class="col-xs-6">
      <div class="form-group">
		<label for="postcategory">Change Class</label>
		<select class="form-control" name="classname" id="">

			<?php 

            $select_class = "SELECT * from class ORDER BY class_id DESC ";
            $run_select_class = mysqli_query($connection,$select_class);

            if (!$run_select_class) {
               # code...
              die("failed". mysqli_error($connection));
             } 

            while ($row=mysqli_fetch_array($run_select_class)) {
              # code...
              $class_id = $row['class_id'];
              $class_name = $row['class_name'];

              echo "<option value='$class_id'>$class_name</option>";
            }

           ?>
		</select>
	</div>   
    </div>

    <div class="col-xs-6">
      <div class="form-group">
        <label for="email">Student Gender:</label>
        <!-- <input type="" class="form-control" name="class"> -->
        <select name="gender" class="form-control" required="required" id="">
          <option value="<?php echo $gender ; ?>"><?php echo $gender ; ?></option>
          <option value="female">Female</option>
          <option value="male">Male</option>
          <option value="other">Other</option>
        </select>
      </div>
    </div>   
  </div>

  
      <div class="form-group">
        <label for="email">Student Password:</label><br>
        <small>Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters</small>
        <input type="password" required="required" class="form-control" name="pass" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
      </div>   

      <div class="form-group">
        <label for="email">Student comformation password:</label>
        <input type="password"  required="required" class="form-control" name="pass2">
      </div>
    	<div class="form-group text-center">
    		<input type="submit" class="btn btn-primary" name="update_student" value="Update Post">
    	</div>

</form>
  
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
<?php 

    include 'includes/admin_footer.php';

?>

