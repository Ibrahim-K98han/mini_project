<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>User Registration Form</title>
</head>

<body style="background: #f5f5f5;">

    <div class="container">
        <h1>User Registeration Form</h1>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    <div class="form-group">
                        <label form="name" class="control-label col-sm-1">Name</label>
                        <div class="col-sm-4">
                            <input class="form-control col-sm-4" id="name" type="text" name="name" placeholder="Enter your Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label form="email" class="control-label col-sm-1">Email</label>
                        <div class="col-sm-4">
                            <input class="form-control col-sm-4" id="email" type="email" name="email" placeholder="Enter your Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label form="username" class="control-label col-sm-1">Username</label>
                        <div class="col-sm-4">
                            <input class="form-control col-sm-4" id="username" type="text" name="username" placeholder="Enter your Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label form="password" class="control-label col-sm-1">Password</label>
                        <div class="col-sm-4">
                            <input class="form-control col-sm-4" id="password" type="password" name="password" placeholder="Enter your Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label form="c_password" class="control-label col-sm-1">Conf: Password</label>
                        <div class="col-sm-4">
                            <input class="form-control col-sm-4" id="c_password" type="password" name="c_password" placeholder="Enter your Confirm Password">
                        </div>
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
    </div>

</body>

</html>