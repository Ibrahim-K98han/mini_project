<h1 class="text-primary"><i class="fas fa-user-graduate"></i> All Students <small style="color:gray">All Students</small></h1>
<ol class="breadcrumb bg-light p-2">
    <li><a href="index.php?page=dashboard" style="text-decoration: none;"> <i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    &nbsp; &nbsp;
    <li class="active"><i class="fas fa-user-graduate"></i> All Student</li>
</ol>


<div class="table-responsive">
    <table id="data" class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Class</th>
                <th>City</th>
                <th>Contact</th>
                <th>Photo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $db_sinfo = mysqli_query($link, "SELECT * FROM `student_info`");
            while ($row = mysqli_fetch_assoc($db_sinfo)) { ?>

                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo ucwords($row['name']); ?></td>
                    <td><?php echo $row['roll']; ?></td>
                    <td><?php echo $row['class']; ?></td>
                    <td><?php echo ucwords($row['city']); ?></td>
                    <td><?php echo $row['pcontact']; ?></td>
                    <td><img style="width: 80px;" src="student_images/<?php echo $row['photo']; ?>" alt=""></td>
                    <td>

                        <a href="index.php?page=update-student&id=<?php echo base64_encode($row['id']); ?>" class="btn btn-xs btn-success"><i class="far fa-edit"></i> Edit</a>

                        <a href="delete_student.php?id=<?php echo base64_encode($row['id']); ?>" class="btn btn-xs btn-danger"><i class="fas fa-trash"></i> Delete</a>
                    </td>
                </tr>
            <?php

            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://kit.fontawesome.com/0ae2707536.js" crossorigin="anonymous"></script>