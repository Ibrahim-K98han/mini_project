<h1 class="text-primary"> <i class="fas fa-tachometer-alt"></i> Dashboard <small style="color:gray">Statics Overview</small></h1>
<ol class="breadcrumb bg-light p-2">
    <li class="active"> <i class="fas fa-tachometer-alt"></i> Dashboard</li>
</ol>
<div class="row">
    <div class="col-sm-4">
        <div class="bg-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fas fa-user-graduate" style="font-size: 80px; color:#fff; margin-left:20px; margin-top:20px;"></i>
                    </div>
                    <div class="col-xs-9">
                        <div class="pull-right">
                            <h2 style="font-size: 45px; color:#fff; margin-left:200px;">10</h2>
                        </div>
                        <div class="pull-right">
                            <p style="margin-left: 200px; color:#fff;"> All Student</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a href="" style="text-decoration: none;">
            <div class="panel-footer" style="border: 1px solid blue; padding:10px;">
                <span class="pull-left">All Student</span>
                <span class="pull-right"><i class="fa fa-arrow-cirlce-o-right"></i> </span>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <div class="bg-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fas fa-user-graduate" style="font-size: 80px; color:#fff; margin-left:20px; margin-top:20px;"></i>
                    </div>
                    <div class="col-xs-9">
                        <div class="pull-right">
                            <h2 style="font-size: 45px; color:#fff; margin-left:200px;">10</h2>
                        </div>
                        <div class="pull-right">
                            <p style="margin-left: 200px; color:#fff;"> All Student</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a href="" style="text-decoration: none;">
            <div class="panel-footer" style="border: 1px solid blue; padding:10px;">
                <span class="pull-left">All Student</span>
                <span class="pull-right"><i class="fa fa-arrow-cirlce-o-right"></i> </span>
            </div>
        </a>
    </div>
    <div class="col-sm-4">
        <div class="bg-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fas fa-user-graduate" style="font-size: 80px; color:#fff; margin-left:20px; margin-top:20px;"></i>
                    </div>
                    <div class="col-xs-9">
                        <div class="pull-right">
                            <h2 style="font-size: 45px; color:#fff; margin-left:200px;">10</h2>
                        </div>
                        <div class="pull-right">
                            <p style="margin-left: 200px; color:#fff;"> All Student</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <a href="" style="text-decoration: none;">
            <div class="panel-footer" style="border: 1px solid blue; padding:10px;">
                <span class="pull-left">All Student</span>
                <span class="pull-right"><i class="fa fa-arrow-cirlce-o-right"></i> </span>
            </div>
        </a>
    </div>
</div>
<hr>
<h3>New Students</h3>
<div class="table-responsive">
    <table id="data" class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>City</th>
                <th>Contact</th>
                <th>Photo</th>
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
                    <td><?php echo ucwords($row['city']); ?></td>
                    <td><?php echo $row['pcontact']; ?></td>
                    <td><img style="width: 80px;" src="student_images/<?php echo $row['photo']; ?>" alt=""></td>
                </tr>
            <?php

            }
            ?>
        </tbody>
    </table>
</div>

<script src="https://kit.fontawesome.com/0ae2707536.js" crossorigin="anonymous"></script>