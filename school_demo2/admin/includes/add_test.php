


<form action="" method="post">
  
  <div class="row">
    <div class="col-xs-6">
      <div class="form-group">
        <label for="email">Add Class:</label>
        <input type="class" class="form-control" name="class">
      </div>
    </div>
  </div>

    <br>
    <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-2"><button type="submit" name="add_student" class="btn btn-success">Submit</button></div>
       
      </div>  
  
</form>

<?php 
    
    if (isset($_POST['add_student'])) {
    # code...

    $class = $_POST['class'];
    $class = trim($class);
    $class = mysqli_real_escape_string($connection, $class);
    

    $query = "INSERT into class (class_name,class_created_date) values ('$class',NOW())";

    $select_class_query = mysqli_query($connection,$query);

    if (!$select_class_query) {
      # code...
      die(" Failed" .mysqli_error($connection));
    }
  }
 ?>