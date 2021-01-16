<?php
if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $username = strtolower($username);
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
    <link rel="stylesheet" href="css/style.css">
</head>

<body data-spy="scroll" data-target="#navpage" data-offset="20">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
    <script src="js/script.js"></script>
    <script src="js/ajax-3.3.1.min.js"></script>
    <?php
    session_start();
    if(isset($_SESSION['username']))
    {
        $nav='<a class="nav-link" href="admin.php">Admin</a>';
    }
    else
    {
        $nav='<a class="nav-link" href="login.php">Login</a>';
    }
    if (isset($home)) {
        $avatar = $home['avatar'];
        $name = $home['name'];
        $job = $home['job'];
        $fb = $home['fb'];
        $tw = $home['tw'];
        $gg = $home['gg'];
        $insta = $home['insta'];
    } else {
        $avatar = "image/default.png";
        $name = "Not Have This User";
        $job = $fb = $tw = $gg = $insta = '';
    }
    ?>
    <header id="home">
        <nav id="navpage" class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid">
                <div class="container-fluid"><a class="navbar-brand text-light" href="#">My Online CV</a>
                    <button class="navbar-toggler bg-light float-right" type="button" data-toggle="collapse" data-target="#navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <div class="container-fluid">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="#skill">Skills</a></li>
                            <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                            <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                            <li class="nav-item"><?php echo $nav; ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <?php
        if (isset($about)) {
            $intro = $about['intro'];
            $age = $about['age'];
            $sex = $about['sex'];
            $email = $about['email'];
            $phone = $about['phone'];
            $address = $about['address'];
            $hobby = $about['hobby'];
            $language = $about['language'];
        } else {
            $intro = $age = $sex = $email = $phone = $address = $hobby = $language = '';
        }
        ?>
        <div class="bg-img container-fluid">
            <div class="avatar mx-auto">
                <img class="rounded-pill mb-4" src="<?php echo $avatar; ?>" alt="" width="180px" height="180px">
                <h1 class="text-light"><?php echo $name; ?></h1>
                <h4 class="text-light"><?php echo $job; ?></h4>
                <div class="container mx-auto">
                    <div class="button-container mt-5" align="center">
                        <a class=" mxh mxh-fb btn rounded-circle ml-4 mr-4" href="<?php echo $fb; ?>" title="Follow me on Facebook"><i class="fab fa-facebook fa-2x"></i></a>
                        <a class=" mxh mxh-tw btn rounded-circle ml-4 mr-4" href="<?php echo $tw; ?>" title="Follow me on Twitter"><i class="fab fa-twitter fa-2x"></i></a>
                        <a class=" mxh mxh-gg btn rounded-circle ml-4 mr-4" href="<?php echo $gg; ?>" title="Follow me on Google+"><i class="fab fa-google-plus fa-2x"></i></a>
                        <a class=" mxh mxh-is btn rounded-circle ml-4 mr-4" href="<?php echo $insta; ?>" title="Follow me on Instagram"><i class="fab fa-instagram fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section class="section" id="about">
        <div class="container">
            <div class="h3 text-center mb-4 title">About</div>
            <div class="bg-about card shadow-lg">
                <div class="row">
                    <div class="col-lg-6 col-md-12 mt-5 mb-5">
                        <div class="card-body">
                            <div class="h4 mt-0 title mb-3">About Me</div>
                            <p><?php echo $intro ?></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 mt-5 mb-5">
                        <div class="card-body">
                            <div class="h4 mt-0 title mb-3">Basic Information</div>
                            <div class="row">
                                <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
                                <div class="col-sm-8"><?php echo $age ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4"><strong class="text-uppercase">Sex:</strong></div>
                                <div class="col-sm-8"><?php echo $sex ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                                <div class="col-sm-8"><?php echo $email ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
                                <div class="col-sm-8"><?php echo $phone ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
                                <div class="col-sm-8"><?php echo $address ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4"><strong class="text-uppercase">Hobby:</strong></div>
                                <div class="col-sm-8"><?php echo $hobby ?></div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
                                <div class="col-sm-8"><?php echo $language ?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="skill">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="h3 text-center mb-4 title">Skills</div>
                </div>
            </div>
            <div class="card shadow-lg" data-aos="fade-up" data-aos-offset="10">
                <div class="row">
                    <div class="col-md-6 border-right">
                        <div class="h5 text-center mt-3">Professional Skills</div>
                        <hr class="bg-warning">
                        <div class="card-body">
                            <?php
                            $i = 0;
                            if (isset($proskills)) {
                                foreach ($proskills as $proskill) {
                                    echo '<div class="skill my-4">
                                                <b class="text-primary h6 text-uppercase">' . $proskill[1] . '</b>
                                                <div class="progress">
                                                    <div class="progress-bar ' . $color[$i % 4] . ' progress-bar-striped progress-bar-animated" role="progressbar" data-progress="' . $proskill[2] . '">
                                                        ' . $proskill[2] . '
                                                    </div>
                                                </div>
                                                </div>';
                                    $i++;
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="col-md-6 border-left">
                        <div class="h5 text-center mt-3">Personal Skills</div>
                        <hr class="bg-warning">
                        <div class="card-body">
                            <?php
                            $i = 0;
                            if (isset($perskills)) {
                                foreach ($perskills as $perskill) {
                                    echo '<div class="skill my-4">
                                                <b class="text-primary h6 text-uppercase">' . $perskill[1] . '</b>
                                                <div class="progress">
                                                    <div class="progress-bar ' . $color[$i % 4] . ' progress-bar-striped progress-bar-animated" role="progressbar" data-progress="' . $perskill[2] . '">
                                                        ' . $perskill[2] . '
                                                    </div>
                                                </div>
                                                </div>';
                                    $i++;
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="education">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="h3 text-center mb-4 title">Education</div>
                </div>
            </div>
            <div class="bg-education card shadow-lg">
                <div class="row mt-4">
                    <ul class="timeline-1 col-9 mx-auto pb-0" style="text-align: justify;">
                        <?php
                        if (isset($educations)) {
                            foreach ($educations as $education) {
                                echo '<li>
                                        <h5 class="d-inline text-primary">' . $education[1] . '</h5>
                                        <h5 class="float-right d-inline text-primary">' . $education[2] . '</h5>
                                        <p>' . $education[3] . '</p>
                                    </li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section" id="experience">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="h3 text-center mb-4 title">Experience</div>
                </div>
            </div>
            <div class="bg-experience card shadow-lg">
                <div class="row mt-4">
                    <ul class="timeline-2 col-9 mx-auto" style="text-align: justify;">
                        <?php
                        if (isset($experiences)) {
                            foreach ($experiences as $experience) {
                                echo '<li>
                                        <h5 class="d-inline text-primary">' . $experience[1] . '</h5>
                                        <h5 class="float-right d-inline text-primary">' . $experience[2] . '</h5>
                                        <p>' . $experience[3] . '</p>
                                    </li>';
                            }
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="section pb-5" id="contact">
        <div class="container">
            <div class="bg-contact card shadow-lg" style="height: 530px;">
                <div class="row justify-content-center mt-5">
                    <div class="col-12 col-md-8 col-lg-6 pb-5 mt-5">
                        <div class="container-fluid">
                            <form action="sendmail.php" method="post">
                                <div class="card border-primary" style="border-radius: 15px;">
                                    <div class="card-header p-0">
                                        <div class="bg-info text-white text-center py-2" style="border-radius: 15px 15px 0 0;">
                                            <h3><i class="fa fa-envelope"></i> Contact me</h3>
                                            <p class="m-0">enter your infomation</p>
                                        </div>
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-user text-info"></i></div>
                                                </div>
                                                <input type="text" class="form-control" name="name" placeholder="Your name" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                                </div>
                                                <input type="email" class="form-control" name="email" placeholder="yourname@email.com" required>
                                                <input type="hidden"  name="cvmail" value="<?php echo $email; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                                </div>
                                                <textarea class="form-control" name="message" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" value="Send" class="btn btn-info btn-block rounded-lg py-2">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container text-center">
            <a class="btn mxh-fb" href="<?php echo $fb; ?>"><i class="fab fa-facebook fa-2x " aria-hidden="true"></i></a>
            <a class="btn mxh-tw" href="<?php echo $tw; ?>"><i class="fab fa-twitter fa-2x " aria-hidden="true"></i></a>
            <a class="btn mxh-gg" href="<?php echo $gg; ?>"><i class="fab fa-google-plus fa-2x" aria-hidden="true"></i></a>
            <a class="btn mxh-is" href="<?php echo $is; ?>"><i class="fab fa-instagram fa-2x " aria-hidden="true"></i></a>
            <div>
                <h4 class="mt-5 mb-3"><?php echo $name; ?></h4>
                <p>CV online</p>
            </div>
        </div>
    </footer>
</body>

</html>