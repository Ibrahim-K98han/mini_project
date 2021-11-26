<h1 class="text-primary"><i class="fas fa-users"></i> All User <small style="color:gray">All User</small></h1>
<ol class="breadcrumb bg-light p-2">
    <li><a href="index.php?page=dashboard" style="text-decoration: none;"> <i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    &nbsp; &nbsp;
    <li class="active"><i class="fas fa-users"></i> All User</li>
</ol>


<div class="table-responsive">
    <table id="data" class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $db_sinfo = mysqli_query($link, "SELECT * FROM `users`");
            while ($row = mysqli_fetch_assoc($db_sinfo)) { ?>

                <tr>
                    <td><?php echo ucwords($row['name']); ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['username']; ?></td>
                    <td><img style="width: 80px;" src="images/<?php echo $row['photo']; ?>" alt=""></td>

                </tr>
            <?php

            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://kit.fontawesome.com/0ae2707536.js" crossorigin="anonymous"></script>