<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <link rel="icon" type="image/x-icon" href="image/kevin.jpg">
    <link rel="stylesheet" href="indexs.css">
    <link rel="stylesheet" href="navbar.css">
    <title>Kevin Gangoso</title>
</head>

<body>

    <!-- Navbar --> 
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <ul>
        <li><a href="#home" class="nav-link scrollto"><i class="bx bx-home"></i> <span>Home</span></a></li>
        <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
        <li><a href="#skills" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Skills</span></a></li>
        <li><a href="#project" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Project</span></a></li>
        <li><a href="#Job" class="nav-link scrollto"><i class="bx bx-server"></i><span>Job Experience</span></a></li>
        <li><a href="#contactme" class="nav-link scrollto"><i class="bx bx-server"></i><span>Contact Me</span></a></li>
        <!-- <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li> -->
        <!--<li><a href="#" class="nav-link scrollto" style="text-decoration: none;" href="./CV.pdf" download="Resume"><i class="bx bx-home"></i> <span><i class="bi bi-download"></i> My Resume</span></a></li>-->
      </ul>
    </div>
    <span class="navbutton" style="font-size:40px;cursor:pointer" onclick="openNav()">&#9776;</span>
    <!-- End of Navbar -->



    


    <section class="homepage" id="home"><!-- homepage section-->

        <div class="heading"><!-- heading -->
            
            <div class="content">



            
    
        <div class="imageheading">
            <img src="image/kevin.jpg" alt="">
        </div>

                <!-- <h3>Web Developer</h3> -->
                <h1 class="ml10">
                    <span class="text-wrapper">
                        <span class="letter">Kevin Gangoso</span>
                    </span>
                </h1>


                <a href="#about"  style="text-decoration: none;"><button class="btna"><!-- Start About Me button -->
                    <span>About Me <i class="bi bi-arrow-right-circle"></i></span>
                </button></a><!-- About Me end button-->

            </div>


        </div> <!-- end of homepage -->
    </section><!-- End of Heading section -->




    <section class="about" class="d-flex align-items-center" id="about"><!-- about me section -->

        <div class="row">
            <div class="sectiontitle">
                <h2 class="about">About</h2>
                <hr>
            </div>    

            <div class="aboutimg col-lg-5 mt-3">
                <img src="image/kevin.jpg" alt="">
            </div>

            
            <div class="col-lg-6 pt-4 pt-lg-0 content">
                <div class="row">
                    <!-- Left column -->
                    <div class="col-md-6">
                        <ul>
                            <li><strong>Name: </strong> Kevin Tribugenia Gangoso</li>
                            <li><strong>Birthday: </strong> September 16, 2001</li>
                            <li><strong>Phone No.: </strong> 09212223818</li>
                        </ul>
                    </div>
                    
                    <!-- Right column -->
                    <div class="col-md-6">
                        <ul>
                            <li><strong>Address: </strong> 179 Phase 2 Dimson Compound, Bagong Tanyag Taguig City</li>
                            <li><strong>Age: </strong> 22</li>
                            <li><strong>Email: </strong> Kevin.gangoso@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <p class="col-md-12">
                    Seek challenges in life to improve and develop my skills, enhance my knowledge, and use what I have learned. 
                    Stepping outside one's comfort zone allows one to develop new abilities, hone current ones, and get a greater comprehension of a range of topics and situations. 
                    This proactive strategy develops resilience, adaptability, and inventiveness in addition to enhancing personal and professional qualities.
                </p>
            </div>
        </div>




    </section><!-- end of about me section-->


        <section class="skill" id="skills"><!-- skills section -->

        <!-- MAIN (Center website) -->
        <div class="main">
        

        <h2 style="text-align: center;">Skills</h2>
        <hr>

        <div id="myBtnContainer" style="text-align: center;">
            <button class="btns" onclick="filterSelection('all')"> Show all</button>
            <button class="btns" onclick="filterSelection('web')"> Web Developer</button>
            <button class="btns" onclick="filterSelection('database')"> Database</button>
            <button class="btns" onclick="filterSelection('languages')"> Languages</button>
            <button class="btns" onclick="filterSelection('framework')"> Framework</button>
        </div>

        <!-- Portfolio Gallery Grid -->
        <div class="row">
            <div class="column web">
                <div class="content">
                <img src="image/html.png" alt="html">
                <h4>HTML 5</h4>
                </div>
            </div>
            <div class="column web">
                <div class="content">
                <img src="image/css.png" alt="css">
                <h4>CSS</h4>
                </div>
            </div>
            <div class="column web">
                <div class="content">
                <img src="image/javascript.png" alt="javascript">
                <h4>javascript</h4>
                </div>
            </div>
            <div class="column languages">
                <div class="content">
                <img src="image/csharp.png" alt="c#">
                <h4>C#</h4>
                </div>
            </div>
            <div class="column web">
                <div class="content">
                <img src="image/php.png" alt="php">
                <h4>PHP</h4>
                </div>
            </div>
            <div class="column database">
                <div class="content">
                <img src="image/sql.png" alt="mysql">
                <h4>MySQL</h4>
                </div>
            </div>
            <div class="column framework">
                <div class="content">
                <img src="image/bootstrap.png" alt="bootstrap">
                <h4>Bootstrap</h4>
                </div>
            </div>
            <div class="column framework">
                <div class="content">
                <img src="image/tailwind.png" alt="tailwind">
                <h4>Tailwind</h4>
                </div>
            </div>
        <!-- END GRID -->
        </div>

        <!-- END MAIN -->
        </div>

        </section><!-- end of skills section -->


       <section class="projects" id="project"><!-- project section -->
    <div class="container">
        <div class="row">
        <h2 class="card-title">My Projects</h2><br><br>
            <div class="card-group">
                <div class="card m-2">
                    <div class="card">
                    <img src="image/Grocer.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption">
                        <a href="https://grocereaststore.000webhostapp.com/GrocerEastStore/user/index.php" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-outline-primary">Live Demo</button></a>
                    </div>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">Grocer Ease Store 2023-2034 <br> User Interface</h5>
                    <!-- <p class="card-text">During our Capstone Project, We create a WebApp that can customer buy online and search product.</p> -->
                    </div>
                </div>
                <div class="card m-2">
                    <div class="card">
                        <img src="image/admin1.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <a href="https://grocereaststore.000webhostapp.com/GrocerEastStore/user/admin/adminlogin.php" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-outline-primary">Live Demo</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">Grocer Ease Store 2023-2034 <br> Admin Interface</h5>
                    </div>
                </div>
                <div class="card m-2">
                    <div class="card">
                    <img src="image/contispayment.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption">
                            <a href="https://dop2.contis.ph/multidop.php" target="_blank" rel="noopener noreferrer"><button type="button" class="btn btn-outline-primary">Live Demo</button></a>
                        </div>
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">Help to Establish Payment each Store of Conti's 2024</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- Project section -->

        <!-- Job Experience section -->
        <section class="Job" id="Job">
            <div class="container">
                <h2>Job Experience</h2> <br>
                <div class="card">
                    <div class="card-header">
                        <h3>Conti’s Specialty Foods Inc. Intern. <br> Jan. 2024 - april 2024</h3> 
                    </div>
                    <div class="row p-3">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                            <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Network Administrator</h3>
                                <p class="card-text">> Troubleshooting Internet <br>
                                > Test & Configuration of CCTV IP Address <br>
                                > Host & Creating a Map to Monitor the Internet of Store <br>
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Web Development</h3>
                                <p class="card-text">
                                > Help to Establish the payment of Conti’s Website <br>
                                > Separate their Company's Store Payment <br>
                                > Display Code for Every Stores
                                </p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </section>
        <!-- Job Experience section -->


        <!-- contact me  -->
        <section class="contactme" id="contactme">
        <div class="container">

        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Call Me</h3>
                    <p class="card-text">09212223818</p>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Email Me</h3>
                    <p class="card-text">kevin.gangoso@gmail.com</p>
                </div>
                </div>
            </div>
        </div>
<br>

            <form action="mail.php" id="contact" method="post">
                <div class="row g-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Name" name="name" aria-label="Name" required>
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" placeholder="Email" name="email" aria-label="Email" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="message" placeholder="Message" rows="3" required></textarea>
                    </div>
                </div>
                <button type="submit" name="send" class="btn btn-primary" id="contact-submit">Submit</button>
            </form>

        </div>
        </section>
        <!-- contact me  -->



        <!-- footer -->
            <!-- Footer -->
            <footer class="text-center text-white" style="background-color: #3A3B3C" id="contact">
                <!-- Grid container -->
                <div class="container">


                <hr class="my-5" />

                <!-- Section: Text -->
                <section class="mb-5">
                    <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <!-- <p>Contect No. : 09212223818 </p>
                        <p>Email: kevin.gangoso@gmail.com</p> -->
                        <a style="text-decoration: none;" href="./CV.pdf" download="Resume"><p><i class="bi bi-download"></i> My Resume </p></a>
                    </div>
                    </div>
                </section>
                <!-- Section: Text -->

                <!-- Section: Social -->
                <section class="text-center mb-5">
                    <a href="https://www.facebook.com/kevin.gangoso.9" class="text-white me-4" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-facebook"></i>
                    </a>
                    <!--<a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSGKZRMftfWXSXLchLVMdKgQChzHnSzRHzdPQlFMxHWTXQHrMTcQtBNkbnqswXSSvxkvczDz" class="text-white me-4" style="text-decoration: none;">-->
                    <!--<i class="bi bi-envelope"></i>-->
                    <!--</a>-->
                    <a href="https://www.instagram.com/ei_aoo/" class="text-white me-4" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/in/kevin-gangoso-37b9102aa/" class="text-white me-4" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="https://github.com/ktgangoso" class="text-white me-4" style="text-decoration: none;" target="_blank" rel="noopener noreferrer">
                    <i class="bi bi-github"></i>
                    </a>
                    <!-- <a href="" class="text-white me-4">
                    <i class="fab fa-linkedin"></i>
                    </a> -->
                    <!-- <a href="" class="text-white me-4">
                    <i class="fab fa-github"></i>
                    </a> -->
                </section>
                <!-- Section: Social -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div
                    class="text-center p-3"
                    style="background-color: rgba(0, 0, 0, 0.2)"
                    >
                © 2024 Design By:
                <a class="text-white" href="https://grocereaststore.000webhostapp.com/portfolio/#home"
                    >Kevin Gangoso</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
            <!-- End of .container -->
        <!-- end of footer -->
        
    </body>

    <script src="script.js"></script>
</html>