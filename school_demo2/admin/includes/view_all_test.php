<table class="table table-bordered table-hover">
    <thead>
        <th>ID</th>
        <th>Class</th>
        <th>Subject Name</th>
       
        <!-- <th>Status</th> -->
        
    </thead>
    <tbody>


        <?php

            $query = "select *from test";
            $select_users = mysqli_query($connection,$query);

            while ($row = mysqli_fetch_assoc($select_users)) {
                # code...
                $test_id = $row['test_id'];
                $test_name = $row['test_name'];
                $test_date = $row['test_date'];
                
                echo "<tr>";
                echo "<td>{$test_id}</td>";
                echo "<td>{$test_name}</td>";
                echo "<td>{$test_date}</td>";
                
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


 ?>
