


<form action="" method="post">
  
  
    
      <div class="form-group">
        <label for="email">Add :</label>
        <select name="" id="">
          <option value=""></option>
          <option value=""></option>
        </select>
      </div>
      <div class="form-group">
        <label for="email">Add :</label>
        <select name="" id="">
          <option value=""></option>
          <option value=""></option>
        </select>
      </div>
      <div class="form-group">
        <label for="email">Add :</label>
        <select name="" id="">
          <option value=""></option>
          <option value=""></option>
        </select>
      </div>
      <div class="form-group">
        <label for="email">Add :</label>
        <select name="" id="">
          <option value=""></option>
          <option value=""></option>
        </select>
      </div>
      <div class="form-group">
        <label for="date">Add Date:</label>
        <input type="date" class="form-control" name="class">  
      </div>

    <br>
    <div class="row">
        <div class="col-xs-2"><button type="submit" name="add_exam" class="btn btn-success">Submit</button></div>
       
      </div>  
  
</form>

<?php 
    
    if (isset($_POST['add_exam'])) {
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