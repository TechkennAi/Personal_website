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
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Emmanuel Williams | website</title>
</head>

<body class="overflow-x-hidden">

    <!-- Nav section -->
    <nav style="border-bottom-left-radius:3rem ;  border-bottom-right-radius:3rem; background:var(--accent) " class=" navbar px-2 container navbar-expand-lg fw-bold fixed-top mb-5 ">
        <div class=" container">
            <div>
                <a href="index.php">
                    <img src="images/logo.png" class="rounded-circle" alt="">

                </a>
            </div>
            <div style="display: flex; flex-direction:row; justify-content:center;">
                <a href="https://x.com/Klassy_Williams?t=b6_Jh7gZhAun7-Dg9A1Rtw&s=08" class=" text-white nav-link mt-1">
                    <i class="bi bi-twitter text-dark "></i>
                </a>
                <a href="mailto:nuelbowilliams@gmail.com" class=" text-white nav-link mt-1">
                    <i class="bi bi-envelope text-dark"></i>
                </a>

                <a href="https://www.linkedin.com/in/emmanuel-williams-112332302?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class=" text-white nav-link mt-1">
                    <i class="bi bi-linkedin  text-dark"></i>
                </a>
            </div>

            <!-- Hamburger menu button-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <i class="bi bi-list text-warning"></i>
            </button>
            <!-- Hamburger menu ends -->



            <div class="collapse mt-2 navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto mx-2" style=" gap:0.51rem">


                    <li class="nav-item">
                        <a data-bs-toggle="modal" data-bs-target="#works" style="background: rgba(8, 47, 76);" class="text-white btn btn-md nav-link link-warning">My Works</a>
                    </li>
                    <li class="nav-item">
                        <a data-bs-toggle="modal" data-bs-target="#publications" style="background: rgba(8, 47, 76);" class="text-white btn btn-md nav-link link-warning">My Publications</a>
                    </li>
                    <li class=" nav-item">
                        <a data-bs-toggle="modal" data-bs-target="#chat" style="background: rgba(8, 47, 76);" class="text-white btn btn-md nav-link link-warning">Leave a message</a>
                    </li>



                </ul>
            </div>


        </div>

    </nav>

    <!-- Nav section Ends -->



    <!-- Showcase Section -->
    <section class=" text-center shadow px-2 text-sm-justify " data-aos="zoom-in" data-aos-delay="200">

        <style>
            .carousel-item {
                height: 65rem;
                background-color: black;
                ;
                color: white;
                position: relative;
            }

            .contain {
                position: absolute;
                bottom: 0;
                left: 0;
                right: 0;
                margin-bottom: 150px;

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
        </style>
        <div id="myCarousel" class="carousel slide " data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>


            </ol>
            <div class="carousel-inner">
                <!-- 1 -->
                <div class="carousel-item active p-5 " data-interval="200">
                    <div class="overlay-image" style="background-image:url(images/longbanner.jpg)">

                    </div>
                    <div class="contain p-5">
                        <blockquote class="blockquote">
                            <p class="display-2"> Advancing Human Rights and Justice
                            </p>
                        </blockquote>
                        <figcaption class=" text-light mt-2 blockquote-footer">
                            Expertise, <cite title="Source Title"> Advocacy, and Impact</cite>
                        </figcaption>
                        <div>
                            <a href="contact.php" style="    background: rgba(8, 47, 76);" class="btn link-light btn-lg">Get in touch</a>

                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="carousel-item  " data-interval="200">
                    <div class="overlay-image" style="background-image:url(images/person1.jpg)"></div>
                    <div class="contain p-5">
                        <blockquote class="blockquote">
                            <p class="display-2"> Advancing Human Rights and Justice
                            </p>
                        </blockquote>
                        <figcaption class=" text-light mt-2 blockquote-footer">
                            Expertise, <cite title="Source Title"> Advocacy, and Impact</cite>
                        </figcaption>
                        <div>
                            <a href="contact.php" style="    background: rgba(8, 47, 76);" class="btn link-light btn-lg">Get in touch</a>

                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- Showcase Section -->
    <main class="px-2">
        <div style="   background: rgba(247, 245, 240);" class=" px-2">
            <hr>
            <hr>
            <hr>
            <hr>
        </div>

        <!-- Introduction -->

        <!-- Introduction -->
        <!-- Modals -->

        <div class="modal fade " data-aos="fade-down" id="enroll2" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content ">
                    <div class="modal-header ">
                        <h2 style="color: rgba(8, 47, 76);">Drop a message</h2>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                    </div>

                    <div class="modal-body  text-dark">
                        <div style="display: flex;" class="mt-2">
                            <div class="col  col-lg">
                                <div class="card " style="background-color: rgba(247, 245, 240);">
                                    <hr>
                                    <div class="card-body text-center">

                                        <p class="fst-italic "><i class="bi bi-geo-alt"></i></p>
                                        <h3 class="card-title mb-3 mt-3 ">Locate Me</h3>
                                        <p class="card-text text-center">
                                            18 Orok Ita Lane, Big Qua Town, Calabar Municipality, Cross River State,Nigeria
                                        </p>
                                        <p class="fst-italic "><i class="bi bi-phone"></i></p>
                                        <h3 class="card-title mb-3 mt-3 ">Call Me</h3>
                                        <p class="card-text text-center">
                                            +234 815 919 6343
                                        </p>

                                        <p><i class="bi bi-envelope"></i></p>
                                        <a href="mailto:nuelbowilliams@gmail.com" style="background-color: rgba(8, 47, 76);" class="btn btn-lg text-white">Email Here</a>

                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn text-white btn-lg" style="background: rgba(8, 47, 76);" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade " data-aos="fade-down" id="chat" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content ">
                    <div class="modal-header ">

                        <h2 style="color: rgba(8, 47, 76);">Drop a message</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body  text-dark">

                        <form method="post" class="p-3" style="background:rgba(247, 245, 240);">

                            <div class="  row form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Full Name</label>
                                    <input type="text" class="form-control" name="name" id="inputPassword4" placeholder="Name">
                                </div>
                            </div>
                            <div class=" mt-2 form-group">
                                <label for="inputAddress">Address</label>
                                <input type="text" class="form-control" name="address" id="inputAddress" placeholder="1234 Main St">
                            </div>

                            <div class=" mt-2 form-group">
                                <label for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" name="question" rows="3"></textarea>
                            </div>
                            <div class=" mt-2 row form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" name="city" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <input type="text" name="state" class="form-control" name="state" id="inputZip">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" name="zip" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="form-group">

                            </div>
                            <button type="submit" class="btn mt-2 btn-primary">Send</button>
                        </form>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn text-white btn-lg" style="background: rgba(8, 47, 76);" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade " data-aos="fade-down" id="works" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content ">
                    <div class="modal-header ">
                        <h2 style="color: rgba(8, 47, 76);">Sample Works in progress</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body  text-dark">
                        <div class="img-fluid w-100" style="background: url(images/conference.jpg);"></div>
                        <div class="spinner-grow" role="status">
                        </div>
                        <br>
                        <span class="sr-only"> Loading...</span>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn text-white btn-lg" style="background: rgba(8, 47, 76);" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade " data-aos="fade-down" id="publications" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content ">
                    <div class="modal-header ">
                        <h2 style="color: rgba(8, 47, 76);">My Publications in progress</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body  text-dark">
                        <div class="img-fluid w-100" style="background: url(images/conference.jpg);"></div>
                        <div class="spinner-grow" role="status">
                        </div>
                        <br>
                        <span class="sr-only"> Loading...</span>

                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn text-white btn-lg" style="background: rgba(8, 47, 76);" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modals -->




        <section class="  text-dark" data-aos="zoom-in" data-aos-delay="200">
            <div class="p-2" style="background: rgba(247, 245, 240);" data-aos="fade-right">
                <h2 class="">
                    About me
                </h2>
                <hr>
                <hr>
                <p class="lead">

                    Welcome to my personal website. I am Emmanuel Boniface Williams, an International Human rights and Transitional Justice lawyer with a profound dedication to advancing justice and human rights on a global scale. As a legal intern at the African Union Department for Political Affairs, Peace, and Security, I engage with esteemed organizations and international forums to drive impactful change.

                </p>
            </div>
            <div class="row d-sm-flex flex-row">

                <div class="col-md mt-3" data-aos="fade-down">
                    <img src="images/longbanner.jpg " alt="" class="img-fluid  shadow p-3 mb-5 rounded w-100">
                    <div class="p-2 my-2" style="background-color: rgba(247, 245, 240)" data-aos="fade-down">
                        <h3 class="mt-3">
                            My Mission
                        </h3>
                        <hr>
                        <hr>
                        <p class="lead">My mission is to drive transformative change through robust advocacy, expert legal analysis, and dedicated engagement in human rights and transitional justice. I strive to contribute to global efforts by promoting justice, equity, and effective legal frameworks that safeguard human dignity.
                        </p>
                    </div>
                    <img src="images/person_submit.jpg" class="img-fluid mt-4 shadow p-3 mb-5 rounded w-100" alt="" data-aos="fade-down">






                    <!-- Accordion section -->
                    <div class="row-md  py-2 ">


                        <h3 class="mt-2" style="background-color: rgba(247, 245, 240); color:rgba(8, 47, 76);">My Colaborations</h3>
                        <div class="col-lg bg-dark my-2 p-2  text-center" data-aos="fade-down" data-aos-delay="100">
                            <a href="" class=" nav-link text-white">The African Lantern NGO</a>
                        </div>
                        <div class="col-lg bg-dark my-2 p-2 text-center" data-aos="fade-down" data-aos-delay="200">
                            <a href="" class="nav-link text-white">Craft<span class="fw-bold" style="color: gold;">Ex</span></a>
                        </div>

                    </div>
                    <!-- Accordion section -->


                    <!-- Speaking Engagement -->
                    <div class="p-2 " style="background:rgba(247, 245, 240);" data-aos=" fade-up">
                        <hr>
                        <hr>
                        <h2 style="color:rgba(8, 47, 76);"> Speaking Engagements</h2>
                        <p class="lead">

                            As an experienced International Human Rights and Transitional Justice lawyer, I am passionate about sharing insights and knowledge on critical global issues. I have engaged with diverse audiences across international forums and have a unique ability to break down complex legal and human rights concepts into accessible, thought-provoking discussions.

                        </p>
                        <btn data-bs-toggle="collapse" data-bs-target="#consult2" class=" btn btn-light  link-dark">
                            <i class="bi bi-chevron-down"></i> Read More
                        </btn>

                        <div class="collapse mt-2" style="background:rgba(247, 245, 240);" id="consult2" data-aos="fade-down">
                            <p class="lead">
                                Booking me for speaking engagements means bringing a speaker who not only informs but also inspires action. I am skilled at leading workshops, moderating panels, and delivering keynote speeches that spark dialogue on human rights, justice, and social transformation. My expertise spans topics like transitional justice, legal advocacy, human rights protection, and global equity, making me an ideal choice for conferences, seminars, and educational events dedicated to justice and human rights.
                            </p>
                            <a href="contact.php" style="background-color: rgba(8, 47, 76);;" class="btn text-light btn-lg">Get in touch</a>
                        </div>

                    </div>
                    <!-- Speaking Engagement -->






                </div>

                <div class="col-md mt-4 ">
                    <div class="p-3" style="background-color: rgba(247, 245, 240);" data-aos="fade-up">
                        <h2 class="">
                            Emmanuel Boniface Williams
                        </h2>
                        <p class="lead">
                            I am Emmanuel Boniface Williams, an accomplished Human rights and Transitional Justice lawyer with extensive experience in both national and international arenas. Currently, I serve as a legal intern at the African Union Department for Political Affairs, Peace, and Security. My previous roles include significant contributions to the West African Transitional Justice Centre, the International Transitional Justice Centre, and the National Human Rights Commission of Nigeria. My academic background and leadership experiences have equipped me with a profound understanding of legal frameworks and transitional justice processes.

                        </p>
                        <a style="background:rgba(8, 47, 76);" class="btn text-light btn-lg" data-bs-toggle="modal" data-bs-target="#enroll2"> Get in touch</a><!-- Button trigger modal -->

                    </div>

                    <!-- Accordion section -->
                    <div class="row-md  py-2 ">

                        <img src="images/conference.jpg" class="img-fluid shadow p-3 w-100" alt="">
                        <h3 class="mt-2" style="background-color: rgba(247, 245, 240); color:rgba(8, 47, 76);">My Values</h3>
                        <div class="col-lg bg-dark my-2 p-2  text-center" data-aos="fade-down" data-aos-delay="100">
                            <a href="" class=" nav-link text-white">Justice</a>
                        </div>
                        <div class="col-lg bg-dark my-2 p-2 text-center" data-aos="fade-down" data-aos-delay="200">
                            <a href="" class="nav-link text-white">Integrity</a>
                        </div>
                        <div class="col-lg bg-dark my-2 p-2 text-center" data-aos="fade-down" data-aos-delay="300">
                            <a href="" class="nav-link text-white">Advocacy</a>
                        </div>
                        <div class="col bg-dark my-2 p-2 text-center" data-aos="fade-down" data-aos-delay="200">
                            <a href="" class="nav-link text-white">Global Impact</a>
                        </div>
                    </div>
                    <!-- Accordion section -->


                    <!-- Consulting -->
                    <div class="p-2 mt-3" style="background:rgba(247, 245, 240);">
                        <hr>
                        <hr>
                        <h2 style="color:rgba(8, 47, 76);">Consultations Services</h2>
                        <p class="lead">
                            With extensive experience in both national and international legal systems, I bring a wealth of knowledge and practical expertise in human rights and transitional justice. Having worked with esteemed institutions such as the African Union, the National Human Rights Commission of Nigeria, and various Transitional Justice Centres, I possess a deep understanding of legal frameworks, policy advocacy, and justice mechanisms.

                        </p>
                        <btn data-bs-toggle="collapse" data-bs-target="#consult" class=" btn btn-light  link-dark">
                            <i class="bi bi-chevron-down"></i> Read More
                        </btn>
                        <div class="collapse mt-2" style="background:rgba(247, 245, 240);" id="consult">
                            <p class="lead">
                                Individuals and organizations seeking consultations can benefit from my proven ability to analyze complex legal issues, design tailored advocacy strategies, and provide sound legal guidance that drives meaningful change. Whether it’s navigating human rights law, transitional justice processes, or formulating impactful advocacy campaigns, I offer clear, strategic, and actionable advice. My goal is to support organizations in achieving their objectives while promoting justice, equity, and human dignity on a global scale.
                            </p>
                            <a href="contact.php" style="background-color: rgba(8, 47, 76);;" class="btn text-light btn-lg">Get in touch</a>
                        </div>
                    </div>
                    <!-- Consulting -->


                    <!-- Contact -->
                    <div class="row mt-5">
                        <div class="col  col-lg">
                            <div class="card " style="background-color: rgba(247, 245, 240);">
                                <hr>
                                <div class="card-body text-center">

                                    <p class="fst-italic "><i class="bi bi-geo-alt"></i></p>
                                    <h3 class="card-title mb-3 mt-3 ">Locate Me</h3>
                                    <p class="card-text text-center">
                                        18 Orok Ita Lane, Big Qua Town, Calabar Municipality, Cross River State,Nigeria
                                    </p>
                                    <p class="fst-italic "><i class="bi bi-phone"></i></p>
                                    <h3 class="card-title mb-3 mt-3 ">Call Me</h3>
                                    <p class="card-text text-center">
                                        +234 815 919 6343
                                    </p>

                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                    <!-- Contact -->

                </div>


        </section>




        <div style="   background: rgba(247, 245, 240);" class="px-4">
            <hr>
            <hr>
            <hr>
            <hr>
        </div>
    </main>


    <!-- Footer -->
    <footer style="background:rgba(8, 47, 76)" class="p-5  text-white  text-left position-relative">
        <section class="container">
            <div class="row">
                <!-- The African Lantern -->
                <div class="col-md " style=" background:rgba(8, 47, 76) ">
                    <div class=" card text-light" style="background:rgba(8, 47, 76)">
                        <div class="card-body text-md-start">
                            <div class=" mb-3"> <!-- In bootswtrap it is possible to use the h1 tag as a class -->
                                <h3 class="card-title text-light mb-3">
                                    <img src="images/logo.png" class="img-fluid w-50 rounded-circle" alt="" data-aos="zoom-in" data-aos-delay="200">
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
                                    Newsletter
                                </h3>

                                <form method="post" class="form-control ">
                                    <div class="row">
                                        <div class=" col mb-3">
                                            <label for="email" class=" form-control form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                            <button style="background:rgba(8, 47, 76)" class="btn btn-lg text-light mt-3 btn-sm" type="submit">Subscribe</button>
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
    <!-- Footer -->
















    <!--  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js">

    </script>

    <script>
        AOS.init();
    </script>
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