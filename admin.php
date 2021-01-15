<?php
session_start();
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    require "connect.php";
    require "home.php";
    require "about.php";
    require "skills.php";
    require "education.php";
    require "experience.php";
} else {
    header("location:login.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
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
        <a class="navbar-brand" href="#">My CV</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5" align="center">
        <div id="avatar" class="div-avt">
            <img class="rounded-pill img-avt mx-auto" src="image/present.JPG" style="width:200px;height:200px;" onClick="triggerClick()" id="profileDisplay">
        </div>
        <form action="updateavatar.php" method="post" enctype="multipart/form-data">
            <input type="file" name="avt" value="" onChange="displayImage(this)" id="profileImage" style="display: none;">
            <div class="til-avt mx-auto">
                <button type="submit" name="up" class="btn btn-primary">
                    Set Avatar
                </button>
            </div>
        </form>
    </div>
    <div class="container mt-5">
        <div class="h3 text-center mb-4 title">Home</div>
        <form action="" method="post">
            <table class="table table-hover table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Name</th>
                        <td><input type="text" class="form-control" name="fname" id="" value="<?php echo $home[2]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Job</th>
                        <td><input type="text" class="form-control" name="fname" id="" value="<?php echo $home[3]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Link Facebook</th>
                        <td><input type="text" class="form-control" name="lname" id="" value="<?php echo $home[4]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Link Twitter</th>
                        <td><input type="text" class="form-control" name="class" id="" value="<?php echo $home[5]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Link Google+</th>
                        <td><input type="text" class="form-control" name="addr1" id="" value="<?php echo $home[6]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Link Instagram</th>
                        <td><input type="text" class="form-control" name="addr2" id="" value="<?php echo $home[7]; ?>"></td>
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
        <form action="" method="post">
            <table class="table table-hover table-bordered">
                <tbody>
                    <tr>
                        <th scope="row">Introduce Yourself</th>
                        <td><textarea type="text" class="form-control" name="fname" id="" value="   "><?php echo $about[1]; ?></textarea></td>
                    </tr>
                    <tr>
                        <th scope="row">Age</th>
                        <td><input type="text" class="form-control" name="fname" id="" value="<?php echo $about[2]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Sex</th>
                        <td><input type="text" class="form-control" name="lname" id="" value="<?php echo $about[3]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Email</th>
                        <td><input type="text" class="form-control" name="class" id="" value="<?php echo $about[4]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Phone</th>
                        <td><input type="text" class="form-control" name="addr1" id="" value="<?php echo $about[5]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Address</th>
                        <td><input type="text" class="form-control" name="addr2" id="" value="<?php echo $about[6]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Hobby</th>
                        <td><input type="text" class="form-control" name="addr2" id="" value="<?php echo $about[7]; ?>"></td>
                    </tr>
                    <tr>
                        <th scope="row">Language</th>
                        <td><input type="text" class="form-control" name="addr2" id="" value="<?php echo $about[8]; ?>"></td>
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
                    <th text-center">Status</th>
                    <th text-center">Skill Name</th>
                    <th >Percent</th>                  
                    <th style="width: 23%;" class="text-center">Edit &emsp; Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                foreach ($proskills as $proskill) {
                    ?>
                    <tr>
                    <input type="hidden" name="skill" value="proskills">
                    <td class="border-dark" scope="row"><?php echo $i; ?></td>
                    <td class="border-dark"><?php echo $proskill[1]; ?> </td>
                    <td class="border-dark"><?php echo $proskill[2].'%'; ?></td>
                    <td class="border-dark">
                    <a href="update.php?skill=perskills&id=<?php echo $perskill[3]; ?>" role="button"><i class="fas fa-pen mr-3"></i></a>
                    <a onclick="return confirm('Do you want to delete this skill?')" href="processdelete.php?user=" role="button"><i class="fas fa-trash-alt ml-3"></i></a>
                    </td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
                <tr>
                <td class="border-dark" scope="row">Add new profesional skill</td>
                <td  class="border-dark"><input type="text" class="form-control" name="class" id="" placeholder="Skill name"></td>
                <td  class="border-dark"><input type="number" class="form-control" name="class" id="" placeholder="Skill percent"></td>
                <td  class="border-dark"><button type="submit" class="btn btn-primary mx-auto">Add</button></td>
                </tr>
            <tbody>
        </table>
    </div>
    <div class="container mt-5">
        <div class="h3 text-center mb-4 title">Personal Skills</div>
        <table class="table table-bordered col-11 mx-auto text-center">
            <thead class="bg-dark text-white">
                <tr class="border-dark">
                    <th text-center">Status</th>
                    <th text-center">Skill Name</th>
                    <th >Percent</th>                  
                    <th style="width: 23%;" class="text-center">Edit &emsp; Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i=1;
                foreach ($perskills as $perskill) {
                    ?>
                    <tr>
                    <td class="border-dark" scope="row"><?php echo $i; ?></td>
                    <td class="border-dark"><?php echo $perskill[1]; ?> </td>
                    <td class="border-dark"><?php echo $perskill[2].'%'; ?></td>
                    <td class="border-dark">
                    <a href="update.php?skill=perskills&id=<?php echo $perskill[3]; ?>" role="button"><i class="fas fa-pen mr-3"></i></a>
                    <a onclick="return confirm('Do you want to delete this skill?')" href="processdelete.php?user=" role="button"><i class="fas fa-trash-alt ml-3"></i></a>
                    </td>
                    </tr>
                <?php
                    $i++;
                }
                ?>
                <input type="hidden" name="skill" value="perskills">
                <tr>
                <td class="border-dark" scope="row">Add new personal skill</td>
                <td  class="border-dark"><input type="text" class="form-control" name="class" id="" placeholder="Skill name"></td>
                <td  class="border-dark"><input type="number" class="form-control" name="class" id="" placeholder="Skill percent"></td>
                <td  class="border-dark"><button type="submit" class="btn btn-primary mx-auto">Add</button></td>
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