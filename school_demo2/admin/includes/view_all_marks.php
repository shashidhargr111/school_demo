<table class="table table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Class</th>
        <th>Subject Name</th>
        <th>sb1</th>
        <th>sb2</th>
        <th>sb3</th>
        <th>sb4</th>
        <th>sb5</th>
        <th>sb6</th>
        <th>sb7</th>
       
        <!-- <th>Status</th> -->
        
    </thead>
    <tbody>


        <?php

            $query = "select *from marks";
            $select_users = mysqli_query($connection,$query);

            while ($row = mysqli_fetch_assoc($select_users)) {
                # code...
                $exam_marks_id = $row['exam_marks_id'];
                $exam_marks_class_id = $row['exam_marks_class_id'];
                $exam_marks_stud_id = $row['exam_marks_stud_id'];
                $sb1 = $row['sb1'];
                $sb1 = $row['sb2'];
                $sb1 = $row['sb3'];
                $sb1 = $row['sb4'];
                $sb1 = $row['sb5'];
                $sb1 = $row['sb6'];
                $sb1 = $row['sb7'];

                
                echo "<tr>";
                echo "<td>{$exam_marks_id}</td>";
                echo "<td>{$exam_marks_class_id}</td>";
                echo "<td>{$exam_marks_stud_id}</td>";
                echo "<td>{$sb1}</td>";
                echo "<td>{$sb2}</td>";
                echo "<td>{$sb3}</td>";
                echo "<td>{$sb4}</td>";
                echo "<td>{$sb5}</td>";
                echo "<td>{$sb6}</td>";
                echo "<td>{$sb7}</td>";
                
                
                // echo "<td><img src='../images/{$user_image}'  width='100' alt='image' >'</td>";
                // echo "<td><a href ='users.php?change_to_sub=$user_id'>Subscriber</a></td>";
                echo "<td><a href ='student.php?delete=$subject_id'>Delete</a></td>";
                echo "<td><a href ='student.php?source=edit_user&edit_user=$subject_id'>Edit</a></td>";
                echo "</tr>";
            }                            
        ?>

    </tbody>
</table>


<?php 


    if (isset($_GET['change_to_admin'])) {
        # code...

        $the_user_id = $_GET['change_to_admin'];

        $query = "update student set user_role = 'admin' where user_id = $the_user_id ";
        $unapprove_query = mysqli_query($connection,$query);
        header("Location: users.php");

    }
    
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
