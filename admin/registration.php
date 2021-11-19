<?php
require_once '../admin/dbcon.php';

if (isset($_POST['registration'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];

    $photo = explode('.', $_FILES['photo']['name']);
    $photo = end($photo);
    $photo_name = $username . "." . $photo;

    $input_error = array();

    if (empty($name)) {
        $input_error['name'] = "The Name field is required.";
    }
    if (empty($email)) {
        $input_error['email'] = "The Email field is required.";
    }
    if (empty($username)) {
        $input_error['username'] = "The Username field is required.";
    }
    if (empty($password)) {
        $input_error['password'] = "The Password field is required.";
    }
    if (empty($c_password)) {
        $input_error['c_password'] = "The Confirm Password field is required.";
    }

    if (count($input_error) == 0) {
        $email_check = mysqli_query($link, "SELECT * FROM `users` WHERE `email` = '$email';");
        if (mysqli_num_rows($email_check) == 0) {
            $username_check = mysqli_query($link, "SELECT * FROM `users` WHERE `username` = '$username';");
            if (mysqli_num_rows($username_check) == 0) {
                if (strlen($username) > 7) {
                    if (strlen($password) > 7) {
                        if ($password == $c_password) {
                        } else {
                            $password_not_match = "Confirm Password Not Match";
                        }
                    } else {
                        $password_l = "Password More Than 8 Characters.";
                    }
                } else {
                    $username_l = "Username More Than 8 Characters.";
                }
            } else {
                $username_error = "This Username already exists";
            }
        } else {
            $email_error = "This Email address already exists";
        }
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
    <link rel="stylesheet" href="../admin/style.css">

    <title>User Registration Form</title>
</head>

<body style="background: #f5f5f5;">

    <div class="container">
        <h1>User Registeration Form</h1>
        <hr>
        <div class="row" style="margin-left: 200px;">
            <div class="col-md-12">
                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">
                        <label form="name" class="control-label col-sm-1">Name</label>
                        <div class="col-sm-4">
                            <input class="form-control col-sm-4" id="name" type="text" name="name" placeholder="Enter your Name" value="<?php if (isset($name)) {
                                                                                                                                            echo $name;
                                                                                                                                        } ?>">
                        </div>
                        <label class="error"><?php if (isset($input_error['name'])) {
                                                    echo $input_error['name'];
                                                } ?></label>
                    </div>
                    <div class="form-group">
                        <label form="email" class="control-label col-sm-1">Email</label>
                        <div class="col-sm-4">
                            <input class="form-control col-sm-4" id="email" type="email" name="email" placeholder="Enter your Email" value="<?php if (isset($email)) {
                                                                                                                                                echo $email;
                                                                                                                                            } ?>">
                        </div>
                        <label class="error"><?php if (isset($input_error['email'])) {
                                                    echo $input_error['email'];
                                                } ?></label>
                        <label class="error"><?php if (isset($email_error)) {
                                                    echo $email_error;
                                                } ?></label>
                    </div>
                    <div class="form-group">
                        <label form="username" class="control-label col-sm-1">Username</label>
                        <div class="col-sm-4">
                            <input class="form-control col-sm-4" id="username" type="text" name="username" placeholder="Enter your Username" value="<?php if (isset($username)) {
                                                                                                                                                        echo $username;
                                                                                                                                                    } ?>">
                        </div>
                        <label class="error"><?php if (isset($input_error['username'])) {
                                                    echo $input_error['username'];
                                                } ?></label>
                        <label class="error"><?php if (isset($username_error)) {
                                                    echo $username_error;
                                                } ?></label>
                        <label class="error"><?php if (isset($username_l)) {
                                                    echo $username_l;
                                                } ?></label>
                    </div>
                    <div class="form-group">
                        <label form="password" class="control-label col-sm-1">Password</label>
                        <div class="col-sm-4">
                            <input class="form-control col-sm-4" id="password" type="password" name="password" placeholder="Enter your Password" value="<?php if (isset($password)) {
                                                                                                                                                            echo $password;
                                                                                                                                                        } ?>">
                        </div>
                        <label class="error"><?php if (isset($input_error['password'])) {
                                                    echo $input_error['password'];
                                                } ?></label>
                        <label class="error"><?php if (isset($password_l)) {
                                                    echo $password_l;
                                                } ?></label>
                    </div>
                    <div class="form-group">
                        <label form="c_password" class="control-label col-sm-1">Confirm Password</label>
                        <div class="col-sm-4">
                            <input class="form-control col-sm-4" id="c_password" type="password" name="c_password" placeholder="Enter your Confirm Password" value="<?php if (isset($c_password)) {
                                                                                                                                                                        echo $c_password;
                                                                                                                                                                    } ?>">
                        </div>
                        <label class="error"><?php if (isset($input_error['c_password'])) {
                                                    echo $input_error['c_password'];
                                                } ?></label>
                        <label class="error"><?php if (isset($password_not_match)) {
                                                    echo $password_not_match;
                                                } ?></label>
                    </div>
                    <div class="form-group">
                        <label form="photo" class="control-label col-sm-1">Photo</label>
                        <div class="col-sm-4">
                            <input id="photo" type="file" name="photo" placeholder="Enter your Photo">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <input type="submit" value="Registration" name="registration" style="float:right" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
        <br>
        <br>
        <p>If you have an account? then please <a href="login.php">Login</a></p>
        <hr>
        <footer>
            <p>Copy &copy; 2021 - <?php echo date('Y') ?> All Rights Reserved Ibrahim Academy</p>
        </footer>
    </div>

</body>

</html>