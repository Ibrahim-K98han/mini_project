<?php
require_once './dbcon.php';
session_start();
if (isset($_SESSION['user_login'])) {
    header('location:index.php');
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username_check = mysqli_query($link, "SELECT * FROM `users` WHERE `username` = '$username'");
    if (mysqli_num_rows($username_check) > 0) {
        $row = mysqli_fetch_assoc($username_check);
        if ($row['password'] == md5($password)) {
            if ($row['status'] == 'active') {
                $_SESSION['user_login'] = $username;
                header('location:index.php');
            } else {
                $status_inactive = "Your Status Inactive.";
            }
        } else {
            $wrong_password = "This Password Wrong";
        }
    } else {
        $username_not_found = "This User Name Not Found";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>Student Management System</title>
</head>

<body style="background: #f5f5f5;">
    <div class="container">
        <h1 class="text-center">Student Management System</h1>
        <br>
        <div class="row" style="justify-content: space-around;">
            <div class="col-sm-4 col-sm-offset-4">
                <h2 class="text-center">Admin Login Form</h2>
                <form action="login.php" method="POST">
                    <div>
                        <input type="text" placeholder="Username" name="username" required="" class="form-control" value="<?php if (isset($username)) {
                                                                                                                                echo $username;
                                                                                                                            } ?>">
                    </div>
                    <br>
                    <div>
                        <input type="password" placeholder="Password" name="password" required="" class="form-control" value="<?php if (isset($password)) {
                                                                                                                                    echo $password;
                                                                                                                                } ?>">
                    </div>
                    <br>
                    <div>
                        <span><a href="../index.php">Back</a></span>
                        <input type="submit" style="float: right;" value="Login" name="login" class="btn btn-info pull-right">
                    </div>
                </form>
            </div>
        </div>
        <?php
        if (isset($username_not_found)) {
            echo '<div class="alert alert-danger col-sm-4" style="margin-left: 425px; margin-top:40px;">' . $username_not_found . '  </div>';
        }
        ?>
        <?php
        if (isset($wrong_password)) {
            echo '<div class="alert alert-danger col-sm-4" style="margin-left: 425px; margin-top:40px;">' . $wrong_password . '  </div>';
        }
        ?>
        <?php
        if (isset($status_inactive)) {
            echo '<div class="alert alert-danger col-sm-4" style="margin-left: 425px; margin-top:40px;">' . $status_inactive . '  </div>';
        }
        ?>

    </div>

</body>

</html>