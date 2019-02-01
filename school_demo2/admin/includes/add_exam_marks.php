

<?php 

  if(isset($_GET['add_exam_marks'])){


    $get_exam_mark_id = $_GET['add_exam_marks'] ;

    $get_student_id = "select * from student where student_id ='$get_exam_mark_id'";
    $run_get_student_id = mysqli_query($connection,$get_student_id);

    if(!$run_get_student_id){
      die("failed" . mysqli_error($connection));
    }

    while($row = mysqli_fetch_array($run_get_student_id)){
      $student_id = $row['student_id'];
      $student_class_id = $row['student_class_id'];
    }

    ?>


<?php 
    
    if (isset($_POST['add_exam'])) {
    # code...

    $exam_id = $_POST['exam_id'];
    $sb1 = $_POST['sb1'];
    $sb2 = $_POST['sb2'];
    $sb3 = $_POST['sb3'];
    $sb4 = $_POST['sb4'];
    $sb5 = $_POST['sb5'];
    $sb6 = $_POST['sb6'];
    $sb7 = $_POST['sb7'];
    $sb8 = $_POST['sb8'];

    $exam_id = trim($exam_id);
    $sb1 = trim($sb1);
    $sb2 = trim($sb2);
    $sb3 = trim($sb3);
    $sb4 = trim($sb4);
    $sb5 = trim($sb5);
    $sb6 = trim($sb6);
    $sb7 = trim($sb7);
    $sb8 = trim($sb8);

    $exam_id = mysqli_real_escape_string($connection, $exam_id);
    $sb1 = mysqli_real_escape_string($connection, $sb1);
    $sb2 = mysqli_real_escape_string($connection, $sb2);
    $sb3 = mysqli_real_escape_string($connection, $sb3);
    $sb4 = mysqli_real_escape_string($connection, $sb4);
    $sb5 = mysqli_real_escape_string($connection, $sb5);
    $sb6 = mysqli_real_escape_string($connection, $sb6);
    $sb7 = mysqli_real_escape_string($connection, $sb7);
    $sb8 = mysqli_real_escape_string($connection, $sb8);
    

    $query = "INSERT into marks (exam_marks_class_id,exam_marks_stud_id,exam_marks_exm_id,sb1,sb2,sb3,sb4,sb5,sb6,sb7,sb8,exam_marks_add_date) ";
    $query.= "values ('$student_class_id','$student_id','$exam_id','$sb1','$sb2','$sb3','$sb4','$sb5','$sb6','$sb7','$sb8',NOW())";

    $select_class_query = mysqli_query($connection,$query);

    if (!$select_class_query) {
      # code...
      die(" Failed" .mysqli_error($connection));
    }


  }


 ?>

<form action="" method="post">
    <div class="row">
      <div class="col-xs-8"><div class="form-group">
        <!-- <label for="email">Mantion Exam:</label> -->
        <select name="exam_id"  id="" class="form-control">
          <option value="">Mantion Exam</option>
          

          <?php 

            $select_exam = "SELECT * from exam ORDER BY exam_id DESC ";
            $run_select_exam = mysqli_query($connection,$select_exam);

            if (!$run_select_exam) {
               # code...
              die("failed". mysqli_error($connection));
             } 

            while ($row=mysqli_fetch_array($run_select_exam)) {
              # code...
              $exam_id = $row['exam_id'];
              $exam_name = $row['exam_name'];

              echo "<option value='$exam_id'>$exam_name</option>";
            }

           ?>

        </select>
      </div>
    </div>
  </div>

    <div class="row">
      
      <div class="col-xs-1"><div class="form-group">
        <label for="email">SB 1 :</label>
        <input type="text" class="form-control" name="sb1">  
      </div></div>
      <div class="col-xs-1"><div class="form-group">
        <label for="email">SB 2 :</label>
        <input type="text" class="form-control" name="sb2">  
      </div></div>
      <div class="col-xs-1"><div class="form-group">
        <label for="email">SB 3 :</label>
        <input type="text" class="form-control" name="sb3">  
      </div></div>
      <div class="col-xs-1"><div class="form-group">
        <label for="email">SB 4 :</label>
        <input type="text" class="form-control" name="sb4">  
      </div></div>
      <div class="col-xs-1"><div class="form-group">
        <label for="email">SB 5 :</label>
        <input type="text" class="form-control" name="sb5">  
      </div></div>
      <div class="col-xs-1"><div class="form-group">
        <label for="email">SB 6 :</label>
        <input type="text" class="form-control" name="sb6">  
      </div></div>
      <div class="col-xs-1"><div class="form-group">
        <label for="email">SB 7 :</label>
        <input type="text" class="form-control" name="sb7">  
      </div></div>
      <div class="col-xs-1"><div class="form-group">
        <label for="email">SB 8 :</label>
        <input type="text" class="form-control" name="sb8">  
      </div>
    </div>
    </div>  
    <br>
    <div class="row text-center">
        <div class="col-xs-8"><button type="submit" name="add_exam" class="btn btn-success">Submit</button></div>
       
      </div>  
  
</form>


<?php


    }



 ?>