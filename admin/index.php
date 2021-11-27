<?php
session_start();
require_once './dbcon.php';
if (!isset($_SESSION['user_login'])) {
    header('location:login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap4.min.css">

    <script type="text/javascript" src="../js/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="../js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="../js/script.js"></script>


    <title>SMS</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" style="color:gray">SMS</a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: flex-end;">
                <ul class="nav navbar-right col-sm-5">
                    <li><a style="text-decoration:none; color:gray" href="logout.php"><i class="fa fa-user"></i> Welcome: Ibrahim Khan</a></li>
                    <li style="margin-left: 20px;"><a style="text-decoration:none; color:gray" href="logout.php"><i class="fa fa-user-plus"></i> Add User</a></li>
                    <li style="margin-left: 20px;"><a style="text-decoration:none; color:gray" href="index.php?page=user-profile"><i class="fa fa-user"></i> Profile</a></li>
                    <li style="margin-left: 20px;"><a style="text-decoration:none; color:gray" href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <div class="list-group">
                    <a href="index.php?page=dashboard" class="list-group-item list-group-item-action active" aria-current="true">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                    <a href="index.php?page=add-student" class="list-group-item list-group-item-action"><i class="fas fa-user-plus"></i> Add Student</a>
                    <a href="index.php?page=all-student" class="list-group-item list-group-item-action"><i class="fas fa-user-graduate"></i> All Student</a>
                    <a href="index.php?page=all-users" class="list-group-item list-group-item-action"><i class="fas fa-users"></i> All Users</a>
                </div>
            </div>
            <div class="col-sm-9">
                <div class="content" style="min-height: 700px;">
                    <?php


                    if (isset($_GET['page'])) {
                        $page = $_GET['page'] . '.php';
                    } else {
                        $page = "dashboard.php";
                    }

                    if (file_exists($page)) {
                        require_once $page;
                    } else {
                        require_once '404.php';
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer-area" style="background: #3CA9EB; text-align:center; padding:20px 0; color:#fff;">
        <p style="margin: 0;">Copyright &copy; 2021 Student Management System. All Right Are Reserved</p>
    </footer>
</body>


<script src="https://kit.fontawesome.com/0ae2707536.js" crossorigin="anonymous"></script>

</html>