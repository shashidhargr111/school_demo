<table class="table table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Father Name</th>
        <th>Email</th>
        <th>Phone no</th>
        <th>DOB</th>
        <th>Delete</th>
        <th>Edit</th>
        <!-- <th>Status</th> -->
        
    </thead>
    <tbody>


        <?php

            $query = "select *from teacher";
            $select_users = mysqli_query($connection,$query);

            while ($row = mysqli_fetch_assoc($select_users)) {
                # code...
                $teacher_id = $row['teacher_id'];
                $teacher_name = $row['teacher_name'];
                $teacher_email = $row['teacher_email'];
                $teacher_dob = $row['teacher_dob'];
                $teacher_ph = $row['teacher_ph'];
                
              
                
                echo "<tr>";
                echo "<td>{$teacher_id}</td>";
                echo "<td>{$teacher_name}</td>";
                echo "<td>{$teacher_email}</td>";
                echo "<td>{$teacher_dob}</td>";
                echo "<td>{$teacher_ph}</td>";
                // echo "<td>{$student_dob}</td>";
                // echo "<td><img src='../images/{$user_image}'  width='100' alt='image' >'</td>";
                // echo "<td><a href ='users.php?change_to_sub=$user_id'>Subscriber</a></td>";
                // echo "<td><a href ='student.php?delete=$student_id'>Delete</a></td>";
                // echo "<td><a href ='student.php?source=edit_user&edit_user=$student_id'>Edit</a></td>";
                // echo "<td><a href ='student.php?change_to_admin=$student_id'>Verify</a></td>";
                echo "</tr>";
            }                            
        ?>

    </tbody>
</table>


<?php 


    // if (isset($_GET['change_to_admin'])) {
    //     # code...

    //     $the_user_id = $_GET['change_to_admin'];

    //     $query = "update student set user_role = 'admin' where user_id = $the_user_id ";
    //     $unapprove_query = mysqli_query($connection,$query);
    //     header("Location: users.php");

    // }
    
  
 ?>
