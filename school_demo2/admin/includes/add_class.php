


<form action="" method="post">
  
  <div class="row">
    <div class="col-xs-6">
      <div class="form-group">
        <label for="email">Add Class<small style="color: red;">*</small>:</label><br>
        <small>example( class-2 )</small>
        <input type="class" class="form-control" name="class" required="required">
      </div>
    </div>
    <div class="col-xs-2">
      <div class="form-group">
        <label for="email">Add Section<small style="">(optionl)</small>:</label><br>
        <small>example( A to G )</small>
        <input type="class_section" pattern="[A-G]{1}" class="form-control" name="class_section">
      </div>
    </div>
  </div>
    <br>
  <div class="row">
      <div class="col-xs-2"></div>
        <div class="col-xs-2">
          <button type="submit" name="add_class" class="btn btn-success">Submit</button>
      </div>      
  </div>  
  
</form>

<?php 
    
    if (isset($_POST['add_class'])) {
    # code...

    $class = $_POST['class'];
    $class_section = $_POST['class_section'];
    $class = trim($class);
    $class_section = trim($class_section);
    $class = mysqli_real_escape_string($connection, $class);
    $class_section = mysqli_real_escape_string($connection, $class_section);


    $query = "SELECT * from class where class_name = '$class' AND class_section = '$class_section' ";
    $select_class_query = mysqli_query($connection,$query);
    $check = mysqli_num_rows($select_class_query);

    if ($check==1) {
      # code...
      echo "<script>alert('Class is already Created')</script>";
      exit();
    }

    $query = "INSERT into class (class_name,class_section,class_created_date) values ('$class','$class_section',NOW())";

    $select_class_query = mysqli_query($connection,$query);

    if (!$select_class_query) {
      # code...
      die(" Failed" .mysqli_error($connection));
    }
  }
 ?>