<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=emmanuel_williams', 'root', '');

$result = $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$form_errors = [];
$newsletter_Email = '';
$newsletter_errors = [];
$success = [];
$success_subscribe = [];
$email = '';
$name = '';
$address = '';
$question = '';
$city = '';
$state = '';
$zip = '';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    # code...

    $email = $_POST['email'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $question = $_POST['question'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $date = date('Y-m-d H:m:s');

    if (!$email) {
        $form_errors[] = 'Input your email';
    }

    if (!$name) {
        $form_errors[] = 'Input your name';
    }

    if (!$address) {
        $form_errors[] = 'Input your address';
    }

    if (!$question) {
        $form_errors[] = 'Input your question';
    }
    if (!$city || !$state || !$zip) {
        $form_errors[] = 'I need to know your location';
    }


    if (empty($form_errors)) {
        # code...


        $statement = $pdo->prepare("INSERT INTO blog_form (email, name, address, question, city, state, zip, create_date)
     VALUES(:name, :email, :address, :question, :city, :state, :zip, :date) #Insert into products these values");

        $statement->bindValue(':email', $email);
        $statement->bindValue(':name', $name);
        $statement->bindValue(':address', $address);
        $statement->bindValue(':question', $question);
        $statement->bindValue(':city', $city);
        $statement->bindValue(':state', $state);
        $statement->bindValue(':zip', $zip);
        $statement->bindValue(':date', $date);
        $statement->execute();

        $success[] = "Successfully submitted into the database";
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    # code...

    $newsletter_Email = $_GET['newsletter'] ?? null;
    $date = date('Y-m-d H:m:s');

    if (!$newsletter_Email) {
        $newsletter_errors[] = 'Input your email';
    }
    if (!empty($newsletter_Email)) {
        $statement = $pdo->prepare("INSERT INTO newsletter (email, create_date) VALUE (:newsletter, :date )");
        $statement->bindValue(':newsletter', $newsletter_Email);
        $statement->bindValue(':date', $date);
        $statement->execute();
        $succes_subscribe[] = 'Review Sent';
    }
}


?>








<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/bootstrap-5.0.2-dist/css/
        bootstrap.css">
    <!-- Carousel css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <title>Lantern Initiatives</title>
</head>

<body>

    <!-- Nav section -->

    </nav>
    <!-- Nav section Ends -->


    <!-- Showcase Section -->
    <section class="px-5 text-center">

        <style>
            body {
                background-color: rgba(255, 218, 8, 0.063);
            }


            .carousel-item {
                height: 62rem;
                background-color: #000;
                color: white;
                position: relative;
            }

            .contain {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                margin-bottom: 18rem;

            }

            .overlay-image {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                top: 0;
                background-position: center;
                background-size: cover;

                opacity: 0.5;
            }

            .overlayimage {
                height: 90vh;
                background-position: center;
                background-size: cover;

            }
        </style>
        <div id="myCarousel" class="carousel slide " data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>


            </ol>
            <div class="carousel-inner">
                <!-- 1 -->
                <div class="carousel-item active p-5 " data-interval="300">
                    <div class="overlay-image shadow p-3 mb-5 bg-body" style="background-image:url(images/longbanner.jpg)">

                    </div>
                    <div class="contain p-5">
                        <a href="#blog" class="btn btn-lg btn-warning text-white">Blog Images</a>
                    </div>
                </div>
                <!-- 2 -->
                <div class="carousel-item  p-5" data-interval="200">
                    <div class="overlay-image" style="background-image:url(images/person_submit.jpg)"></div>
                    <div class="contain p-5">
                        <div class="contain">
                            <blockquote class="blockquote">
                                <p class="display-2"> Advancing Human Rights and Justice
                                </p>
                            </blockquote>
                            <figcaption class=" text-light mt-2 blockquote-footer">
                                Expertise, <cite title="Source Title"> Advocacy, and Impact</cite>
                            </figcaption>
                            <div style="">
                                <a href="contact.php" style="    background: rgba(8, 47, 76);" class="btn link-light btn-lg">Get in touch</a>

                            </div>
                        </div>
                        <a href="#blog" class="btn btn-lg btn-warning text-white">Blog Images</a>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <div class="p-5">
        <a href="index.php" class="btn btn-primary">Back Home</a>
    </div>
    <!-- Showcase Section -->
    <!--events-->
    <section id="blog" class="p-5  text-dark ">
        <hr>
        <div class="row align-items-center justify-content-between">
            <h1 class="text-center text-success" id="programs">View The African Lantern Blog</h1>

            <button class="btn fw-bold btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#enroll"><i class="bi bi-chevron-down"></i> View Blog Images</button><!-- Button trigger modal -->
            <!-- Pop up modal -->
            <div class="modal fade" id="enroll" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h2 class="text-success">No Blog Content</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body text-dark">
                            <div class="row">
                                <div class="col">
                                    <img src="images/person_submit.jpg" class="w-100" alt="">
                                </div>
                                <div class="col-md">
                                    <img src="images/person_speech.jpg" class="w-100" alt="">
                                </div>
                                <div class="col-md">
                                    <img src="images/person_certified.jpg" class="w-100" alt="">
                                </div>
                                <div class="col-md">
                                    <img src="images/person_submit.jpg" class="w-100" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <br>
        <hr>
    </section>
    <!-- events-->
    <!-- Showcase Section -->

    </main>

    <!-- Footer section -->
    <footer style="background:rgba(8, 47, 76)" class="p-5  text-white  text-left position-relative">
        <section class="container">
            <div class="row">
                <!-- The African Lantern -->
                <div class="col-md " style=" background:rgba(8, 47, 76) ">
                    <div class=" card text-light" style="background:rgba(8, 47, 76)">
                        <div class="card-body text-md-start">
                            <div class=" mb-3"> <!-- In bootswtrap it is possible to use the h1 tag as a class -->
                                <h3 class="card-title text-light mb-3">
                                    <img src="images/logo.png" class="img-fluid w-50 rounded-circle" alt="">
                                </h3>
                                <p class="mt-3">
                                    18 Orok Ita Lane, Big Qua Town, Calabar Municipality, Cross River State,Nigeria
                                </p>
                                <p class="mt-3">
                                    Cross River, Calabar,
                                    Nigeria
                                </p>
                                <p class="mt-3">

                                    Phone: +234 816 797 5442

                                </p>
                                <p class="mt-3">
                                    Email: nuelbowilliams@gmail.com
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Useful Links -->
                <div class="col-md" style="background:rgba(8, 47, 76)">
                    <div class=" card  text-light" style="background:rgba(8, 47, 76)">
                        <div class="card-body text-md-start">
                            <div class=" mb-3"> <!-- In bootswtrap it is possible to use the h1 tag as a class -->
                                <h3 class="card-title  mb-3">
                                    Useful Links
                                </h3>
                                <div class="row">
                                    <a href="#about" class=" text-white nav-link mt-3">
                                        <i class="bi bi-chevron-right"></i> About Me
                                    </a>

                                    <a href="publications.php" class=" text-white nav-link mt-1">
                                        <i class="bi bi-chevron-right"></i>Publications
                                    </a>
                                    <a href="publications.php" class=" text-white nav-link mt-1">
                                        <i class="bi bi-chevron-right"></i> Project
                                    </a>
                                    <a href="contact.php" class=" text-white nav-link mt-1">
                                        <i class="bi bi-chevron-right"></i> Contact Me
                                    </a>
                                </div>

                                <!-- footer social links -->
                                <div style="display: flex; flex-direction:row; justify-content:center;">
                                    <a href="https://x.com/Klassy_Williams?t=b6_Jh7gZhAun7-Dg9A1Rtw&s=08" class=" text-white nav-link mt-1">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                    <a href="mailto:nuelbowilliams@gmail.com" class=" text-white nav-link mt-1">
                                        <i class="bi bi-envelope"></i>
                                    </a>

                                    <a href="https://www.linkedin.com/in/emmanuel-williams-112332302?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class=" text-white nav-link mt-1">
                                        <i class="bi bi-linkedin"></i>
                                    </a>
                                </div>
                                <!-- footer social links -->

                            </div>
                        </div>
                    </div>

                </div>



                <!-- Join newsletter -->
                <div class="col-md  ">
                    <div class="card  text-light" style="background:rgba(8, 47, 76)">
                        <div class="card-body text-start text-sm-start">
                            <div class=" mb-3"> <!-- In bootswtrap it is possible to use the h1 tag as a class -->
                                <h3 class="card-title  mb-3">
                                    Join our Newsletter
                                </h3>

                                <form method="get" class="form-control ">
                                    <?php if (!empty($newsletter_errors)) : ?>

                                        <div class="alert alert-info text-danger">
                                            <?php foreach ($newsletter_errors as $error) :  ?>
                                                <div>
                                                    <?php echo $error; ?>
                                                </div>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                        </div>


                                        <?php if ($success_subscribe) : ?>

                                            <div class="alert bg-success text-white">
                                                <?php foreach ($success_subscribe as $succeed) :  ?>
                                                    <div>
                                                        <?php echo $succeed; ?>
                                                    </div>
                                                <?php endforeach; ?>
                                            <?php endif; ?>

                                            </div>
                                            <div class="row">
                                                <div class=" col mb-3">
                                                    <label for="email" class=" form-control form-label">Email address</label>
                                                    <input type="email" class="form-control" name="newsletter" id="exampleFormControlInput1" placeholder="name@example.com">
                                                    <button class="btn btn-success mt-3 btn-sm" type="submit">Subscribe</button>
                                                </div>
                                            </div>
                                </form>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <div class="p-3 text-white text-center position-relative">
            <div class="container">


                <p class="lead">All Rights Reserved</p>


                <a href="#" class="position-absolute bottom-0 end-0 p-1 text-success">
                    <i class="bi bi-arrow-up-circle h1"></i>
                </a>

            </div>
        </div>
    </footer>
    <!-- Footer section -->



















    <!-- Bootstrap Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Bootstrap Javascript -->

    <!-- Jquery Javascript -->
    <script src="javascript/jquery3.7.1.min.js"></script>
    <!-- Jquery Javascript -->
    <!-- Owl Carousel -->
    <script src="javascript/owl.carousel.min.js"></script>
    <!-- Owl Carousel -->

    <!-- Custom Javascript -->
    <script src="javascript/main.js"></script>
    <!-- Custom Javascript -->
</body>

</html>