<table class="table table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Email</th>
        <th>Phone no</th>
        <th>DOB</th>
        <!-- <th>Delete</th> -->
        <th>Edit</th>
        <!-- <th>Status</th> -->
        
    </thead>
    <tbody>


        <?php

            $query = "select *from student";
            $select_users = mysqli_query($connection,$query);

            while ($row = mysqli_fetch_assoc($select_users)) {
                # code...
                $student_id = $row['student_id'];
                $student_email = $row['student_email'];
                $student_name = $row['student_name'];
                $student_ph = $row['student_ph'];
                $student_dob = $row['student_dob'];
                $student_f_name = $row['student_f_name'];
              
                
                echo "<tr>";
                echo "<td>{$student_id}</td>";
                echo "<td>{$student_name}</td>";
                echo "<td>{$student_f_name}</td>";
                echo "<td>{$student_email}</td>";
                echo "<td>{$student_ph}</td>";
                echo "<td>{$student_dob}</td>";
                // echo "<td><img src='../images/{$user_image}'  width='100' alt='image' >'</td>";
                // echo "<td><a href ='users.php?change_to_sub=$user_id'>Subscriber</a></td>";
                echo "<td><a href ='marks.php?source=add_exam_marks&add_exam_marks=$student_id'>Add Exam Marks</a></td>";
                echo "<td><a href ='test.php?source=add_test_marks&add_test_marks=$student_id'>Add Test Marks</a></td>";
                // echo "<td><a href ='student.php?delete=$student_id'>Delete</a></td>";
                echo "<td><a href ='edit_student.php?stude_id=$student_id'>Edit</a></td>";
                // echo "<td><a href ='student.php?change_to_admin=$student_id'>Verify</a></td>";
                echo "</tr>";
            }                            
        ?>

    </tbody>
</table>


<?php 


    // if(isset($_GET['add_exam_marks'])){

    //   include("includes/add_exam_marks.php");
    // }


    if (isset($_GET['change_to_sub'])) {
        # code...

        $the_user_id = $_GET['change_to_sub'];

        $query = "update users set user_role = 'subscriber' where user_id = $the_user_id ";
        $approve_query = mysqli_query($connection,$query);
        header("Location: users.php");
 
    }

    if (isset($_GET['delete'])) {
        # code...

        $user_id = $_GET['delete'];

        $query = "delete from users where user_id = {$user_id}";
        $delete_query = mysqli_query($connection,$query);
        header("Location: users.php");

    }

 ?>
