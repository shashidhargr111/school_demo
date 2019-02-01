


<form action="" method="post">
  
  
  <div class="form-group">
        <label for="email">Add Exam:</label>
        <input type="text" class="form-control" name="exam">
  </div>

  <!-- <div class="form-group">
        <label for="email">Date:</label>
        <input type="date" class="form-control" name="date">
  </div> -->

    <br>
    <div class="row text-center">
        <button type="submit" name="add_exam" class="btn btn-success">Submit</button>
       
      </div>  
  
</form>

<?php 
    
    if (isset($_POST['add_exam'])) {
    # code...

    $exam = $_POST['exam'];
    // $date = $_POST['date'];
    $exam = trim($exam);
    // $date = trim($date);
    $exam = mysqli_real_escape_string($connection, $exam);
    // $date = mysqli_real_escape_string($connection, $date);
    

    $query = "INSERT into exam (exam_name,exam_date) values ('$exam',NOW())";

    $select_class_query = mysqli_query($connection,$query);

    if (!$select_class_query) {
      # code...
      die(" Failed" .mysqli_error($connection));
    }


  }
 ?>