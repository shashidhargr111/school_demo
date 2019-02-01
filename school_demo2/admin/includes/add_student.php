
<form action="" method="post">

  <div class="row">

    <div class="col-xs-6">
      <div class="form-group">
        <label for="email">Student Name:</label>
        <input type="class" class="form-control" required="required" name="studentname">
      </div>   
    </div>

    <div class="col-xs-6">
      <div class="form-group">
        <label for="email">Student Email:</label>
        <input type="email" class="form-control" name="studentemail">
      </div>
    </div>
    
  </div>

      <div class="form-group">
        <label for="email">Student Phone:</label>
        <input type="text" class="form-control"  required="required" name="studentphone">
      </div>    

  <div class="row">   
    <div class="col-xs-6">
      <div class="form-group">
        <label for="email">Student DOB:</label>
        <input type="date" class="form-control" required="required" name="studentdob">
      </div>   
    </div>

    <div class="col-xs-6">
      <div class="form-group">
        <label for="email">Student Gender:</label>
        <!-- <input type="" class="form-control" name="class"> -->
        <select name="gender" class="form-control" required="required" id="">
          <option value="">Select a Gender</option>
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
        <input type="password" required="required" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" name="pass" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
      </div>   

      <div class="form-group">
        <label for="email">Student conformation password:</label>
        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required="required" class="form-control" name="pass2">
      </div>

  <!--  -->
  
  
  
  
  

  <div class="row text-center">
      <button type="submit" name="add_class" class="btn btn-success">Submit</button>        
  </div> 

</form>

<?php 
    
    if (isset($_POST['add_class'])) {
    # code...

    echo $studentname = trim(mysqli_real_escape_string($connection,$_POST['studentname']));
    echo $studentemail = trim(mysqli_real_escape_string($connection,$_POST['studentemail']));
    echo $studentphone = trim(mysqli_real_escape_string($connection,$_POST['studentphone']));
    echo $studentdob = trim(mysqli_real_escape_string($connection,$_POST['studentdob']));
    echo $gender = trim(mysqli_real_escape_string($connection,$_POST['gender']));
    echo $pass = trim(mysqli_real_escape_string($connection,$_POST['pass']));
    echo $pass2 = trim(mysqli_real_escape_string($connection,$_POST['pass2']));
 
    $query = "INSERT into student (student_name,student_email,student_pass,student_dob,student_ph,student_gender,student_created_date) values ('$studentname','$studentemail','$studentphone','$studentdob','$gender','$pass',NOW())";

    $select_class_query = mysqli_query($connection,$query);

    if (!$select_class_query) {
      # code...
      die(" Failed" .mysqli_error($connection));
    }
  }
 ?>