<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <title>Document</title>
</head>

<body>
    
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>

<?php include 'navbar.php'; ?>
    <section class="homepage" id="home"><!-- homepage section-->

        <div class="heading"><!-- heading -->
            
            <div class="content">



            
            
        <div class="imageheading">
            <img src="image/kevin.jpg" alt="">
        </div>

                <!-- <h3>Web Developer</h3> -->
                <h1 class="ml10">
                    <span class="text-wrapper">
                        <span class="letters">Kevin Gangoso</span>
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
            <button class="btn active" onclick="filterSelection('all')"> Show all</button>
            <button class="btn" onclick="filterSelection('web')"> Web Developer</button>
            <button class="btn" onclick="filterSelection('database')"> Database</button>
            <button class="btn" onclick="filterSelection('languages')"> Languages</button>
            <button class="btn" onclick="filterSelection('framework')"> Framework</button>
        </div>

        <!-- Portfolio Gallery Grid -->
        <div class="row">
            <div class="column web">
                <div class="content">
                <img src="image/html.png" alt="html" style="width:70px">
                <h4>HTML 5</h4>
                </div>
            </div>
            <div class="column web">
                <div class="content">
                <img src="image/css.png" alt="css" style="width:70px">
                <h4>CSS</h4>
                </div>
            </div>
            <div class="column languages">
                <div class="content">
                <img src="image/csharp.png" alt="c#" style="width:70px">
                <h4>C#</h4>
                </div>
            </div>
            <div class="column web">
                <div class="content">
                <img src="image/php.png" alt="php" style="width:70px">
                <h4>PHP</h4>
                </div>
            </div>
            <div class="column database">
                <div class="content">
                <img src="image/sql.png" alt="mysql" style="width:70px">
                <h4>MySQL</h4>
                </div>
            </div>
            <div class="column framework">
                <div class="content">
                <img src="image/bootstrap.png" alt="bootstrap" style="width:70px">
                <h4>Bootstrap</h4>
                </div>
            </div>
        <!-- END GRID -->
        </div>

        <!-- END MAIN -->
        </div>

        </section><!-- end of skills section -->


        <section class="projects" id="project"><!-- Awards & Certificationsme section -->



        </section><!-- Awards & Certifications section -->





        <!-- footer -->
            <!-- Footer -->
            <footer class="text-center text-white" style="background-color: #3A3B3C" id="contact">
                <!-- Grid container -->
                <div class="container">
                <!-- Section: Links -->
                <section class="mt-5">
                    <!-- Grid row-->
                    <div class="row text-center d-flex justify-content-center pt-5">
                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white" style="text-decoration: none;">About us</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white" style="text-decoration: none;">Products</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white" style="text-decoration: none;">Awards</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white" style="text-decoration: none;">Help</a>
                        </h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2">
                        <h6 class="text-uppercase font-weight-bold">
                        <a href="#!" class="text-white" style="text-decoration: none;">Contact</a>
                        </h6>
                    </div>
                    <!-- Grid column -->
                    </div>
                    <!-- Grid row-->
                </section>
                <!-- Section: Links -->

                <hr class="my-5" />

                <!-- Section: Text -->
                <section class="mb-5">
                    <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <p>Contect No. : 09212223818 </p>
                        <p>Email: kevin.gangoso@gmail.com</p>
                    </div>
                    </div>
                </section>
                <!-- Section: Text -->

                <!-- Section: Social -->
                <section class="text-center mb-5">
                    <a href="https://www.facebook.com/kevin.gangoso.9" class="text-white me-4" style="text-decoration: none;">
                    <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://myaccount.google.com/?utm_source=OGB&utm_medium=app" class="text-white me-4" style="text-decoration: none;">
                    <i class="bi bi-envelope"></i>
                    </a>
                    <a href="https://www.instagram.com/ei_aoo/" class="text-white me-4" style="text-decoration: none;">
                    <i class="bi bi-instagram"></i>
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
                © 2024 Copyright:
                <a class="text-white" href="https://www.facebook.com/kevin.gangoso.9"
                    >Kevingangoso.com</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
            <!-- End of .container -->
        <!-- end of footer -->
        
    </body>


    <script>
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

         // Skills button 
        filterSelection("all")
        function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
        }

        function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
        }
        }

        function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
            arr1.splice(arr1.indexOf(arr2[i]), 1);     
            }
        }
        element.className = arr1.join(" ");
        }


        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function(){
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
        }

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

        // name animation heading
        // Wrap every letter in a span
        var textWrapper = document.querySelector('.ml10 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline()
        .add({
            targets: '.ml10 .letter',
            rotateY: [-90, 0],
            duration: 1300,
            delay: (el, i) => 45 * i
        }).add({
            targets: '.ml10',
            opacity: 1,
            duration: 2000,
            easing: "easeOutExpo",
            delay: 2000
        });
   
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    </script>

</html>