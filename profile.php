<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    require "model/connect.php";
    require "model/home.php";
    require "model/about.php";
    require "model/skills.php";
    require "model/education.php";
    require "model/experience.php";
    $avatar = $home['avatar'];
} else {
    header("location:login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Administration Interface</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/all.js"></script>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <a class="navbar-brand text-light" href="#">CV MANAGEMENT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-content">
            <ul class="navbar-nav ml-auto m-2">
            <li class="nav-item active">
                    <a class="btn btn-success rounded-pill m-1" href="<?php echo $username; ?>">View CV</a>
                </li>
            <li><a class="btn btn-success rounded-pill m-1" href="logout.php" role="button">Log Out</a></li>
        </ul>
        </div>
    </nav>
    <div class="container mt-5" align="center">
        <div id="avatar" class="div-avt">
            <img class="rounded-pill img-avt mx-auto" src="<?php echo $home['avatar']; ?>" style="width:200px;height:200px;" onClick="triggerClick()" id="profileDisplay">
        </div>
        <form action="updateavatar.php" method="post" enctype="multipart/form-data">
            <input type="file" name="avt" required="required" value="" onChange="displayImage(this)" id="profileImage" style="display: none;">
            <div class="til-avt mx-auto">
                <button type="submit" name="up" class="btn btn-primary">
                    Set Avatar
                </button>
            </div>
        </form>
    </div>
    <div class="container mt-5">
        <div class="h3 text-center mb-4 title">Home</div>
        <form action="processupdate.php?table=home" method="post">
            <table class="table table-hover table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td><input type="text" class="form-control" name="name" id="" value="<?php echo $home[2]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Job</th>
                        <td><input type="text" class="form-control" name="job" id="" value="<?php echo $home[3]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Link Facebook</th>
                        <td><input type="text" class="form-control" name="fb" id="" value="<?php echo $home[4]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Link Twitter</th>
                        <td><input type="text" class="form-control" name="tw" id="" value="<?php echo $home[5]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Link Google+</th>
                        <td><input type="text" class="form-control" name="gg" id="" value="<?php echo $home[6]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Link Instagram</th>
                        <td><input type="text" class="form-control" name="insta" id="" value="<?php echo $home[7]; ?>"></td>
                    </tr>
                </tbody>
            </table>
            <div class="container" align="right">
                <button type="submit" class="btn btn-primary mx-auto mr-5">Update</button>
            </div>
        </form>
    </div>
    <div class="container mt-5">
        <div class="h3 text-center mb-4 title">About</div>
        <form action="processupdate.php?table=about" method="post">
            <table class="table table-hover table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Introduce Yourself</th>
                        <td><textarea name="intro" type="text" class="form-control"><?php echo $about[1]; ?></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">Age</th>
                        <td><input name="age" type="text" class="form-control"  value="<?php echo $about[2]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Sex</th>
                        <td><input name="sex" type="text" class="form-control"  value="<?php echo $about[3]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td><input type="text" name="email" class="form-control" value="<?php echo $about[4]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Phone</th>
                        <td><input type="text" name="phone" class="form-control" value="<?php echo $about[5]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Address</th>
                        <td><input type="text" name="address" class="form-control" value="<?php echo $about[6]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Hobby</th>
                        <td><input type="text" name="hobby" class="form-control" value="<?php echo $about[7]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Language</th>
                        <td><input type="text" name="language" class="form-control" value="<?php echo $about[8]; ?>"></td>
                    </tr>
                </tbody>
            </table>
            <div class="container" align="right">
                <button type="submit" class="btn btn-primary mx-auto mr-5">Update</button>
            </div>
            
        </form>
    </div>
    <div class="container mt-5">
        <div class="h3 text-center mb-4 title">Professional Skills</div>
        <table class="table table-bordered col-11 mx-auto text-center">
            <thead class="bg-dark text-white">
                <tr class="border-dark">
                    <th>Status</th>
                    <th>Skill Name</th>
                    <th >Percent</th>                  
                    <th style="width: 23%;" class="text-center">Edit &emsp; Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                if (isset($proskills)) {
                foreach ($proskills as $proskill) {
                    ?>
                    <tr>
                    <input type="hidden" name="skill" value="proskills">
                    <td class="border-dark" scope="row"><?php echo $i; ?></td>
                    <td class="border-dark"><?php echo $proskill[1]; ?> </td>
                    <td class="border-dark"><?php echo $proskill[2].'%'; ?></td>
                    <td class="border-dark">
                    <a href="update.php?skill=proskills&id=<?php echo $proskill[3]; ?>" role="button"><i class="fas fa-pen mr-3"></i></a>
                    <a onclick="return confirm('Do you want to delete this?')" href="processdelete.php?table=proskills&id=<?php echo $proskill[3]; ?>" role="button"><i class="fas fa-trash-alt ml-3"></i></a>
                    </td>
                    </tr>
                <?php
                    $i++;} }
                ?>
                <tr>
                <form action="processadd.php?table=proskills" method="post">
                <td class="border-dark" scope="row">Add new profesional skill</td>
                <td  class="border-dark"><input type="text" class="form-control" name="skillname" id="" placeholder="Skill name"></td>
                <td  class="border-dark"><input type="number" min="0" max="100" class="form-control" name="percent" id="" placeholder="Skill percent"></td>
                <td  class="border-dark"><button type="submit" class="btn btn-primary mx-auto">Add</button></td>
                </form>
                </tr>
            <tbody>
        </table>
    </div>
    <div class="container mt-5">
        <div class="h3 text-center mb-4 title">Personal Skills</div>
        <table class="table table-bordered col-11 mx-auto text-center">
            <thead class="bg-dark text-white">
                <tr class="border-dark">
                    <th>Status</th>
                    <th>Skill Name</th>
                    <th >Percent</th>                  
                    <th style="width: 23%;" class="text-center">Edit &emsp; Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                if (isset($perskills)) {
                foreach ($perskills as $perskill) {
                    ?>
                    <tr>
                    <td class="border-dark" scope="row"><?php echo $i; ?></td>
                    <td class="border-dark"><?php echo $perskill[1]; ?> </td>
                    <td class="border-dark"><?php echo $perskill[2].'%'; ?></td>
                    <td class="border-dark">
                    <a href="update.php?skill=perskills&id=<?php echo $perskill[3]; ?>" role="button"><i class="fas fa-pen mr-3"></i></a>
                    <a onclick="return confirm('Do you want to delete this?')" href="processdelete.php?table=perskills&id=<?php echo $perskill[3]; ?>" role="button"><i class="fas fa-trash-alt ml-3"></i></a>
                    </td>
                    </tr>
                <?php
                    $i++;} }
                ?>
                <input type="hidden" name="skill" value="perskills">
                <tr>
                <form action="processadd.php?table=perskills" method="post">
                <td class="border-dark" scope="row">Add new personal skill</td>
                <td  class="border-dark"><input type="text" class="form-control" name="skillname" id="" placeholder="Skill name"></td>
                <td  class="border-dark"><input type="number" min="0" max="100" class="form-control" name="percent" id="" placeholder="Skill percent"></td>
                <td  class="border-dark"><button type="submit" class="btn btn-primary mx-auto">Add</button></td>
                </form>
                </tr>
            <tbody>
        </table>
    </div>
    <div class="container mt-5">
        <div class="h3 text-center mb-4 title">Educations</div>
        <table class="table table-bordered col-11 mx-auto text-center">
            <thead class="bg-dark text-white">
                <tr class="border-dark">
                    <th>Status</th>
                    <th>School Name</th>
                    <th >Time</th>   
                    <th >Description</th>               
                    <th style="width: 23%;" class="text-center">Edit &emsp; Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                if (isset($educations)) {
                foreach ($educations as $education) {
                    ?>
                    <tr>
                    <td class="border-dark" scope="row"><?php echo $i; ?></td>
                    <td class="border-dark"><?php echo $education[1]; ?> </td>
                    <td class="border-dark"><?php echo $education[2]; ?></td>
                    <td class="border-dark"><?php echo $education[3]; ?></td>
                    <td class="border-dark">
                    <a href="update.php?exp=education&id=<?php echo $education[4]; ?>" role="button"><i class="fas fa-pen mr-3"></i></a>
                    <a onclick="return confirm('Do you want to delete this?')" href="processdelete.php?table=education&id=<?php echo $education[4]; ?>" role="button"><i class="fas fa-trash-alt ml-3"></i></a>
                    </td>
                    </tr>
                <?php
                    $i++;} }
                ?>
                <input type="hidden" name="skill" value="perskills">
                <tr>
                <form action="processadd.php?table=education" method="post">
                <td class="border-dark" scope="row">Add new education</td>
                <td  class="border-dark"><input type="text" class="form-control" name="name" id="" placeholder="School Name"></td>
                <td  class="border-dark"><input type="text" class="form-control" name="time" id="" placeholder="Time"></td>
                <td  class="border-dark"><textarea type="text" class="form-control" name="mess" id="" placeholder="Description"></textarea></td>
                <td  class="border-dark"><button type="submit" class="btn btn-primary mx-auto">Add</button></td>
                </form>
                </tr>
            <tbody>
        </table>
    </div>
    <div class="container mt-5">
        <div class="h3 text-center mb-4 title">Experiences</div>
        <table class="table table-bordered col-11 mx-auto text-center">
            <thead class="bg-dark text-white">
                <tr class="border-dark">
                    <th>Status</th>
                    <th>Job Name</th>
                    <th >Time</th>   
                    <th >Description</th>               
                    <th style="width: 23%;" class="text-center">Edit &emsp; Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                if (isset($experiences)) {
                foreach ($experiences as $experience) {
                    ?>
                    <tr>
                    <td class="border-dark" scope="row"><?php echo $i; ?></td>
                    <td class="border-dark"><?php echo $experience[1]; ?> </td>
                    <td class="border-dark"><?php echo $experience[2]; ?></td>
                    <td class="border-dark"><?php echo $experience[3]; ?></td>
                    <td class="border-dark">
                    <a href="update.php?exp=experience&id=<?php echo $experience[4]; ?>" role="button"><i class="fas fa-pen mr-3"></i></a>
                    <a onclick="return confirm('Do you want to delete this?')" href="processdelete.php?table=experience&id=<?php echo $experience[4]; ?>" role="button"><i class="fas fa-trash-alt ml-3"></i></a>
                    </td>
                    </tr>
                <?php
                    $i++;} }
                ?>
                <input type="hidden" name="skill" value="perskills">
                <tr>
                <form action="processadd.php?table=experience" method="post">
                <td class="border-dark" scope="row">Add new experience</td>
                <td  class="border-dark"><input type="text" class="form-control" name="name" id="" placeholder="Job Name"></td>
                <td  class="border-dark"><input type="text" class="form-control" name="time" id="" placeholder="Time"></td>
                <td  class="border-dark"><textarea type="text" class="form-control" name="mess" id="" placeholder="Description"></textarea></td>
                <td  class="border-dark"><button type="submit" class="btn btn-primary mx-auto">Add</button></td>
                </form>
                </tr>
            <tbody>
        </table>
    </div>
</body>

</html>
<script>
    $(document).ready(function() {
        $('#avatar').click(function() {
            document.querySelector('#up-img').click();
        });
    });

    function triggerClick(e) {
        document.querySelector('#profileImage').click();
    }

    function displayImage(e) {
        if (e.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
            }
            reader.readAsDataURL(e.files[0]);
        }
    }
</script>