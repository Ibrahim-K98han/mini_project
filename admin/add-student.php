<h1 class="text-primary">Add Student <small style="color:gray">Add New Student</small></h1>
<ol class="breadcrumb bg-light p-2">
    <li><a href="index.php?page=dashboard" style="text-decoration: none;">Dashboard</a></li>
    <li class="active">Add Student</li>
</ol>

<div class="row">
    <div class="col-sm-6">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" name="name" placeholder="Student Name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="roll">Student Roll</label>
                <input type="text" name="roll" placeholder="Student Roll" id="roll" class="form-control" pattern="[0-9]{6}">
            </div>
            <div class="form-group">
                <label for="city">City</label>
                <input type="text" name="city" placeholder="City" id="city" class="form-control">
            </div>
            <div class="form-group">
                <label for="pcontact">PContact</label>
                <input type="text" name="pcontact" placeholder="01*********" id="pcontact" class="form-control" pattern="01[1/5/6/7/8/9][0-9]{8}">
            </div>
            <div class="form-group">
                <label for="class">Class</label>
                <select name="" id="class" class="form-control" name="class">
                    <option value="">Select</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                    <option value="5th">5th</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="picture">Picture</label>
                <input type="file" name="picture" id="picture">
            </div>
            <div class="form-group">
                <input type="submit" value="Add Student" name="add-student" class="btn btn-info" style="float: right;">
            </div>
        </form>
    </div>
</div>