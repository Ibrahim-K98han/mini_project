<h1 class="text-primary"> <i class="fa fa-user"></i> User Profile</h1>
<ol class="breadcrumb bg-light p-2">
    <li><a href="index.php?page=dashboard" style="text-decoration: none;"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
    &nbsp; &nbsp;
    <li class="active"> <i class="fa fa-user"></i> Profile</li>
</ol>
<?php
$session_user = $_SESSION['user_login'];

$user_data = mysqli_query($link, "SELECT * FROM `users` WHERE `username` = '$session_user'");
$user_row = mysqli_fetch_assoc($user_data);


?>
<div class="row">
    <div class="col-sm-6">
        <table class="table table-bordered">
            <tr>
                <td>User ID</td>
                <td><?= $user_row['id']; ?></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><?= ucwords($user_row['name']); ?></td>
            </tr>
            <tr>
                <td>User Name</td>
                <td><?= $user_row['username']; ?></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><?= $user_row['email']; ?></td>
            </tr>
            <tr>
                <td>Status</td>
                <td><?= ucwords($user_row['status']); ?></td>
            </tr>
            <tr>
                <td>Signup Date</td>
                <td><?= $user_row['datetime']; ?></td>
            </tr>
        </table>
        <a href="" style="text-decoration: none; float:right; color:#fff;" class="btn btn-sm btn-info">Edit Profile</a>
    </div>
    <div class="col-sm-6">
        <a href="">
            <img class="img-thumbnail" width="300" src="images/<?= $user_row['photo'] ?>" alt="">
        </a>
        <br><br>
        <?php
        if (isset($_POST['upload'])) {
            $photo = explode('.', $_FILES['photo']['name']);
            $photo = end($photo);
            $photo_name = $session_user . "." . $photo;

            $upload = mysqli_query($link, "UPDATE `users` SET `photo`='$photo_name' WHERE `username` = '$session_user'");
            if ($upload) {
                move_uploaded_file($_FILES['photo']['tmp_name'], 'images/' . $photo_name);
            }
        }
        ?>
        <form action="" enctype="multipart/form-data" method="POST">
            <label for="photo">Profile Picture</label>
            <input type="file" name="photo" require="" id="photo">
            <br><br><br>
            <input class="btn btn-sm btn-info" style="color:white" type="submit" name="upload" value="Upload">
        </form>
    </div>
</div>