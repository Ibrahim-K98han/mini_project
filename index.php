<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student Management System</title>
</head>

<body style="background: url(images/welcome.jpg); background-repeat: no-repeat;background-size: 600px;">

    <div class="container">
        <br>
        <a class="btn btn-primary" style="float: right;" href="admin/login.php">Login</a>
        <br>
        <br>
        <h1 class="text-center">Welcome to Student Management System</h1>
        <br>

        <div class="row" style="justify-content: space-around;">
            <div class="col-sm-4 col-sm-offset-4">
                <form action="" method="POST">
                    <table class="table table-bordered">
                        <tr>
                            <td colspan="2" class="text-center"><label>Student Information</label></td>
                        </tr>
                        <tr>
                            <td><label for="choose">Choose Class</label></td>
                            <td>
                                <select class="form-control" name="choose" id="choose">
                                    <option value="">Select</option>
                                    <option value="1">1st</option>
                                    <option value="2">2nd</option>
                                    <option value="3">3rd</option>
                                    <option value="4">4th</option>
                                    <option value="5">5th</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="roll">Roll</label></td>
                            <td><input type="text" class="form-control" name="roll" pattern="[0-9]{6}" placeholder="Roll"></td>
                        </tr>
                        <tr>
                            <td class="text-center" colspan="2"><input class="btn btn-info" type="submit" value="Show Info" name="show_info"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>