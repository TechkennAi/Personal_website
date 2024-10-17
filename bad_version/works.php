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
    <title>Boniface Blog</title>
</head>

<body>

    <!-- Nav section -->
    <nav class="navbar navbar-expand-lg fw-bold  fixed-top shadow p-3 mb-5 " style="box-shadow: 4px; background:rgba(8, 47, 76); ">
        <div class="container">
            <a href="index.php">
                <img src="images/logo.png" class="rounded-circle" alt="">
            </a>
            <!-- Hamburger menu button-->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                <i class="bi bi-list text-light"></i>
            </button>
            <!-- Hamburger menu ends -->



            <div class="collapse mt-2 navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto mx-2" style=" gap:0.51rem">

                    <li class="nav-item">
                        <a href="works.php" class="nav-link link-light">My Works</a>
                    </li>
                    <li class="nav-item">
                        <a href="publications.php" class="nav-link link-light">My Publications</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php" class="nav-link link-light">Contact Me</a>
                    </li>

                </ul>
            </div>


        </div>

    </nav>
    <!-- Nav section Ends -->



    <!-- Showcase Section -->
    <section class=" text-center text-sm-justify ">

        <style>
            .carousel-item {
                height: 60rem;
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
                    <div class="overlay-image" style="background-image:url(images/person_certified.jpg)">

                    </div>
                    <div class="contain p-5">
                        <blockquote class="blockquote">
                            <p class="display-2"> Advancing Human Rights and Justice
                            </p>
                        </blockquote>
                        <figcaption class=" text-light mt-2 blockquote-footer">
                            Expertise, <cite title="Source Title"> Advocacy, and Impact</cite>
                        </figcaption>
                        <div style="display: flex; flex-direction:row; gap:3rem; justify-content:center">
                            <a href="involved.php" style="    background: rgba(8, 47, 76);" class="btn link-light btn-lg">Get in touch</a>
                            <a href="involved.php" class="btn btn-lg btn-warning">Donate</a>
                        </div>
                    </div>
                </div>
                <!-- 2 -->
                <div class="carousel-item  p-5" data-interval="200">
                    <div class="overlay-image" style="background-image:url(images/person_speech.jpg)"></div>
                    <div class="contain p-5">
                        <blockquote class="blockquote">
                            <p class="display-2"> Advancing Human Rights and Justice
                            </p>
                        </blockquote>
                        <figcaption class=" text-light mt-2 blockquote-footer">
                            Expertise, <cite title="Source Title"> Advocacy, and Impact</cite>
                        </figcaption>
                        <div style="display: flex; flex-direction:row; gap:3rem; justify-content:center">
                            <a href="involved.php" style="    background: rgba(8, 47, 76);" class="btn link-light btn-lg">Get in touch</a>
                            <a href="involved.php" class="btn btn-lg btn-warning">Donate</a>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
    <!-- Showcase Section -->
    <div style="   background: rgba(247, 245, 240);" class="p-4">
        <hr>
        <hr>
        <hr>
        <hr>
    </div>
    <main class="container">

        <!-- Introduction -->

        <!-- Introduction -->





        <section id="mentorship" class="p-5  text-dark ">
            <div class="p-2" style="background: rgba(247, 245, 240);">
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

                <div class="col-md mt-3">
                    <img src="images/longbanner.jpg " alt="" class="img-fluid  shadow p-3 mb-5 rounded w-100">
                    <div class="p-2 my-2" style="background-color: rgba(247, 245, 240)">
                        <h3 class="mt-3">
                            My Mission
                        </h3>
                        <hr>
                        <hr>
                        <p class="lead">My mission is to drive transformative change through robust advocacy, expert legal analysis, and dedicated engagement in human rights and transitional justice. I strive to contribute to global efforts by promoting justice, equity, and effective legal frameworks that safeguard human dignity.
                        </p>
                    </div>
                    <img src="images/person_submit.jpg" class="img-fluid mt-4 shadow p-3 mb-5 rounded w-100" alt="">
                    <div style="display: flex;">
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

                </div>

                <div class="col-md mt-4 ">
                    <div style="background-color: rgba(247, 245, 240);">
                        <h2 class="">
                            Emmanuel Boniface Williams
                        </h2>
                        <p class="lead">
                            I am Emmanuel Boniface Williams, an accomplished Human rights and Transitional Justice lawyer with extensive experience in both national and international arenas. Currently, I serve as a legal intern at the African Union Department for Political Affairs, Peace, and Security. My previous roles include significant contributions to the West African Transitional Justice Centre, the International Transitional Justice Centre, and the National Human Rights Commission of Nigeria. My academic background and leadership experiences have equipped me with a profound understanding of legal frameworks and transitional justice processes.

                        </p>
                        <a style="background:rgba(8, 47, 76);" class="btn text-light btn-lg" data-bs-toggle="modal" data-bs-target="#enroll2"> Get in touch</a><!-- Button trigger modal -->
                    </div>
                    <!-- Accordion section -->
                    <div style="background:rgba(247, 245, 240);">
                        <section class="p-5 mt-5" id="questions">
                            <div class="container">
                                <hr>
                                <hr>
                                <hr>
                                <h2 class="text-center mt-5" style="color:rgba(8, 47, 76);">My values</h2>
                                <div class="accordion accordion-flush py-4" id="questions">
                                    <!-- First item -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#question-one">
                                                <p class="lead fw-bold">Justice</p>
                                            </button>
                                        </h2>
                                        <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
                                            <div class="accordion-body">
                                                We believe in the power of individuals to shape their own futures. By providing youth with the right tools, resources, and opportunities, we empower them to take charge of their lives and career paths. Our approach fosters self-confidence, resilience, and leadership, enabling young people to become agents of positive change within their communities.

                                            </div>
                                        </div>
                                    </div>
                                    <!-- First item -->

                                    <!-- Second Item -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#question-two">
                                                <p class="lead fw-bold">Integrity</p>

                                            </button>
                                        </h2>
                                        <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#questions">
                                            <div class="accordion-body">
                                                Education is the cornerstone of progress, and we are committed to making quality learning accessible to all. Through vocational training, career counseling, and mentorship, we provide students with practical skills and knowledge. We believe that education should not only inform but inspire, equipping youth to pursue fulfilling careers and contribute meaningfully to society.


                                            </div>
                                        </div>
                                    </div>
                                    <!-- Second Item -->

                                    <!-- Third Item -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#question-three">
                                                <p class="lead fw-bold">Advocacy</p>
                                            </button>
                                        </h2>
                                        <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#questions">
                                            <div class="accordion-body">
                                                Innovation drives growth, and we encourage creativity and forward-thinking in everything we do. By fostering a culture of innovation, we help young people develop new ideas and solutions that address challenges in their communities. Our programs emphasize adaptability, critical thinking, and entrepreneurship, preparing youth to thrive in an ever-evolving global environment.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Third Item -->

                                    <!-- Fourth Item -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#question-four">
                                                <p class="lead fw-bold">Global Impact</p>
                                            </button>
                                        </h2>
                                        <div id="question-four" class="accordion-collapse collapse" data-bs-parent="#questions">
                                            <div class="accordion-body">
                                                We recognize the strength of collective action and prioritize building strong, supportive communities. Our initiatives aim to create networks of peers, mentors, and leaders that foster collaboration and mutual growth. By working together, we can create an environment where everyone’s potential is realized, and collective success benefits the entire community.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Fourth Item -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#question-five">
                                                <p class="lead fw-bold">Honesty</p>
                                            </button>
                                        </h2>
                                        <div id="question-five" class="accordion-collapse collapse" data-bs-parent="#questions">
                                            <div class="accordion-body">
                                                Sustainability is central to our mission, not only in terms of environmental responsibility but also in creating lasting impact. We focus on long-term solutions that empower youth to be self-reliant and resilient. By promoting sustainable practices in education, innovation, and community development, we aim to ensure a prosperous and balanced future for generations to come.
                                            </div>
                                        </div>

                                    </div>
                                </div>




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


                    <!-- Speaking Engagement -->
                    <div class="p-2 mt-5" style="background:rgba(247, 245, 240);">
                        <hr>
                        <hr>
                        <h2 style="color:rgba(8, 47, 76);"> Speaking Engagements</h2>
                        <p class="lead">

                            As an experienced International Human Rights and Transitional Justice lawyer, I am passionate about sharing insights and knowledge on critical global issues. I have engaged with diverse audiences across international forums and have a unique ability to break down complex legal and human rights concepts into accessible, thought-provoking discussions.

                        </p>
                        <btn data-bs-toggle="collapse" data-bs-target="#consult2" class=" btn btn-light  link-dark">
                            <i class="bi bi-chevron-down"></i> Read More
                        </btn>
                        <div class="collapse mt-2" style="background:rgba(247, 245, 240);" id="consult2">
                            <p class="lead">
                                Booking me for speaking engagements means bringing a speaker who not only informs but also inspires action. I am skilled at leading workshops, moderating panels, and delivering keynote speeches that spark dialogue on human rights, justice, and social transformation. My expertise spans topics like transitional justice, legal advocacy, human rights protection, and global equity, making me an ideal choice for conferences, seminars, and educational events dedicated to justice and human rights.
                            </p>
                            <a href="contact.php" style="background-color: rgba(8, 47, 76);;" class="btn text-light btn-lg">Get in touch</a>
                        </div>
                    </div>
                    <!-- Speaking Engagement -->



                    <div class="modal fade" id="enroll2" tabindex="-1" aria-labelledby="enrollLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="text-success">Mentorship Scheme</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-dark">
                                    <h3> Sector Specific Mentorship </h3>
                                    <p class="lead">
                                        Our Sector-Specific Mentorship program connects students with experienced professionals in industries like technology, agriculture, engineering, and design. These mentors offer targeted guidance, sharing practical knowledge, career insights, and hands-on experience specific to each student’s field. This tailored approach helps students sharpen their industry-relevant skills, make informed career decisions, and build strong professional networks. Whether navigating technical challenges or exploring entrepreneurial opportunities, students receive the support they need to excel in their chosen careers, ensuring they are well-prepared for real-world success in their specific sectors. </p>

                                    <h3>
                                        Holistic Career Guidance
                                    </h3>
                                    <p class="lead">
                                        Mentors play a crucial role in shaping the student’s career journey. From helping students navigate challenges to celebrating their achievements, our mentors are there every step of the way. They provide:

                                        <span class="text-success"> Career insights:</span> Drawing from their own experiences and industry knowledge, mentors share valuable advice about career options, industry trends, and emerging opportunities within specific sectors.
                                        Skills development: Mentors assess each student’s vocational strengths and help them build on these through targeted guidance, ensuring they gain the competencies needed to excel.

                                        <span class="text-success">Networking opportunities: </span> Mentors open doors by connecting students with relevant professionals, organizations, and job opportunities. This gives students access to a network that can help them advance in their careers.

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


        </section>


        <!-- Contact -->

    </main>
    <div style="   background: rgba(247, 245, 240);" class="p-4">
        <hr>
        <hr>
        <hr>
        <hr>
    </div>
    <!-- Contact us -->

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

                                <form method="post" class="form-control ">
                                    <div class="row">
                                        <div class=" col mb-3">
                                            <label for="email" class=" form-control form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
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
    <!-- Footer -->





















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