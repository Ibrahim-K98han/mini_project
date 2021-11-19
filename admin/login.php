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
                        <input type="text" placeholder="Username" name="username" required="" class="form-control">
                    </div>
                    <br>
                    <div>
                        <input type="password" placeholder="Password" name="password" required="" class="form-control">
                    </div>
                    <br>
                    <div>
                        <input type="submit" style="float: right;" value="Login" name="login" class="btn btn-info pull-right">
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>