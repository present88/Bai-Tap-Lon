<!doctype html>
<html lang="en">
<?php
require "connect.php";
require "about.php";
require "skills.php";
?>

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

<body>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
    <script src="js/script.js"></script>
    <header>
        <div class="profile-page sidebar-collapse">
            <nav id="navpage" class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="400">
                <div class="container">
                    <div class="navbar-translate container-fluid"><a class="navbar-brand text-light" href="#" rel="tooltip">My Online CV</a>
                        <button class="navbar-toggler bg-light" style="float: right;" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse justify-content-end" align="right" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item"><a class="nav-link smooth-scroll text-light" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll text-light" href="#skill">Skills</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll text-light" href="#education">Education</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll text-light" href="#experience">Experience</a></li>
                            <li class="nav-item"><a class="nav-link smooth-scroll text-light" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <div class="page-content">
        <div class="bg-img container-fluid">
            <div class="avatar mx-auto">
                <img class="rounded-pill mb-4" src="image/img.jpg" alt="" width="180px" height="180px">
                <h1 class="text-light">Nguyen Viet Phuong</h1>
                <h4 class="text-light">Student,Web Developer</h4>
                <div class="container mx-auto">
                    <div class="button-container mt-5" align="center">
                        <a class=" mxh mxh-fb btn rounded-circle btn-lg ml-4 mr-4" href="#" title="Follow me on Facebook"><i class="fab fa-facebook"></i></a>
                        <a class=" mxh mxh-tw btn rounded-circle btn-lg ml-4 mr-4" href="#" title="Follow me on Twitter"><i class="fab fa-twitter"></i></a>
                        <a class=" mxh mxh-gg btn rounded-circle btn-lg ml-4 mr-4" href="#" title="Follow me on Google+"><i class="fab fa-google-plus"></i></a>
                        <a class=" mxh mxh-is btn rounded-circle btn-lg ml-4 mr-4" href="#" title="Follow me on Instagram"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content" data-spy="scroll" data-target="#myScrollspy" data-offset="20">
        <div class="section" id="about">
            <div class="container">
                <div class="h3 text-center mb-4 title">About</div>
                <div class="fabout card shadow-lg" data-aos="fade-up" data-aos-offset="10">
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
        </div>
        <div class="section" id="skill">
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
                                foreach ($proskills as $proskill) {
                                    echo '<div class="skill my-4">
                                            <b class="text-primary h6">' . $proskill[1] . '</b>
                                            <div class="progress">
                                                <div class="progress-bar ' . $color[$i % 4] . ' progress-bar-striped progress-bar-animated" role="progressbar" data-progress="' . $proskill[2] . '">
                                                    ' . $proskill[2] . '
                                                </div>
                                            </div>
                                            </div>';
                                    $i++;
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
                                foreach ($perskills as $perskill) {
                                    echo '<div class="skill my-4">
                                            <b class="text-primary h6">' . $perskill[1] . '</b>
                                            <div class="progress">
                                                <div class="progress-bar ' . $color[$i % 4] . ' progress-bar-striped progress-bar-animated" role="progressbar" data-progress="' . $perskill[2] . '">
                                                    ' . $perskill[2] . '
                                                </div>
                                            </div>
                                            </div>';
                                    $i++;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="education">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="h3 text-center mb-4 title">Education</div>
                    </div>
                </div>
                <div class="card shadow-lg" data-aos="fade-up" data-aos-offset="10">
                    <div class="row mt-4">
                        <ul class="timeline-1 col-9 mx-auto" style="text-align: justify;">
                            <li class="mt-0">
                                <h5 class="d-inline text-primary">New Web Design</h5>
                                <h5 class="float-right d-inline text-primary">21-13-2020</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            </li>
                            <li>
                                <h6 class="d-inline text-primary">New Web Design</h6>
                                <h6 class="float-right d-inline text-primary">21-13-2020</h6>
                                <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                            </li>
                            <li>
                                <h6 class="d-inline text-primary">New Web Design</h6>
                                <h6 class="float-right d-inline text-primary">21-13-2020</h6>
                                <p></p>
                            </li>
                            <li>
                                <h6 class="d-inline text-primary">New Web Design</h6>
                                <h6 class="float-right d-inline text-primary">21-13-2020</h6>
                                <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                            </li>
                            <li class="">
                                <h6 class="d-inline text-primary">New Web Design</h6>
                                <h6 class="float-right d-inline text-primary">21-13-2020</h6>
                                <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                            </li>
                            <li class="">
                                <h6 class="d-inline text-primary">New Web Design</h6>
                                <h6 class="float-right d-inline text-primary">21-13-2020</h6>
                                <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="section" id="experience">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="h3 text-center mb-4 title">Experience</div>
                    </div>
                </div>
                <div class="card shadow-lg" data-aos="fade-up" data-aos-offset="10">
                    <div class="row mt-4">
                        <ul class="timeline-2 col-9 mx-auto" style="text-align: justify;">
                            <li class="mt-0">
                                <h5 class="d-inline">New Web Design</h5>
                                <h5 class="float-right d-inline">21-13-2020</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            </li>
                            <li class="mt-0">
                                <h5 class="d-inline">New Web Design</h5>
                                <h5 class="float-right d-inline">21-13-2020</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            </li>
                            <li class="mt-0">
                                <h5 class="d-inline">New Web Design</h5>
                                <h5 class="float-right d-inline">21-13-2020</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="section" id="contact">
            <div class="container">
                <div class="formct card shadow-lg" " data-aos=" fade-up" data-aos-offset="10">
                    <div class="row justify-content-center mt-4">
                        <div class="col-12 col-md-8 col-lg-6 pb-5 mt-5">
                            <form action="mail.php" method="post">
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
                                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Your name" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-envelope text-info"></i></div>
                                                </div>
                                                <input type="email" class="form-control" id="nombre" name="email" placeholder="yourname@email.com" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group mb-2">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fa fa-comment text-info"></i></div>
                                                </div>
                                                <textarea class="form-control" placeholder="Message" required></textarea>
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
    </div>
</body>

</html>