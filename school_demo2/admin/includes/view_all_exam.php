<table class="table table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>name</th>
        <th>date</th>
       
        <!-- <th>Status</th> -->
        
    </thead>
    <tbody>


        <?php

            $query = "select *from exam";
            $select_users = mysqli_query($connection,$query);

            while ($row = mysqli_fetch_assoc($select_users)) {
                # code...
                $exam_id = $row['exam_id'];
                $exam_name = $row['exam_name'];
                $exam_date = $row['exam_date'];
                
                
              
                
                echo "<tr>";
                echo "<td>{$exam_id}</td>";
                echo "<td>{$exam_name}</td>";
                echo "<td>{$exam_date}</td>";
                
                // echo "<td><img src='../images/{$user_image}'  width='100' alt='image' >'</td>";
                // echo "<td><a href ='users.php?change_to_sub=$user_id'>Subscriber</a></td>";
                // echo "<td><a href ='student.php?delete=$subject_id'>Delete</a></td>";
                // echo "<td><a href ='student.php?source=edit_user&edit_user=$subject_id'>Edit</a></td>";
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
