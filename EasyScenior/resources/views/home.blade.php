<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Playfair+Display+SC:wght@400;700;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    /> -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Montserrat:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Link CSS here-->
    <link rel="stylesheet" href="css/Home.css" />
    <link rel="stylesheet" href="css/Global (Typography).css" />

    <title>Easy Scenior - Home</title>
</head>

<body>
    <!-- Navigation -->
    <nav class="navigation">
        <div class="logo"><a href="Home"><img src="Images/logo.png" /></a></div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
            <i class="fa fa-bars" aria-hidden="true"></i>

        </label>
        <ul class="my-auto">
            <li><a class="active label" href="Home">Home</a></li>
            <li><a href="About" class="label">About</a></li>
            <li><a href="Find Tutor" class="label">Find Tutor</a></li>
            <li><a href="#" class="label">Become Tutor</a></li>
            <li>
                <div class="dropdown">
                    <a style="cursor: pointer;">Support
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="#" class="dropDownA">Blog</a>
                        <a href="faqs" class="dropDownA">FAQs</a>
                        <a href="testimonials" class="dropDownA">Testimonials</a>
                        <hr>
                        <a href="contact" class="dropDownA">Contact Us</a>
                    </div>
                </div>
            </li>
            <div class="verticalLine"></div>
            <li><img class="img1" src="Images/Signup.svg" /><a href="register"
                    class="btnFont">Signup</a>
            <li><img src="Images/Login.svg" /><a href="login" class="btnFont">Login</a>
        </ul>
    </nav>

    <!--  Hero Section  -->
    <div class="container-fluid" id="hero_section">
        <!--  INSIDE HERO  -->
        <section class="OurContainer Main-Section">
            <!--  TEXT AND IMAGE  -->
            <div class="row">
                <!--  Col 1  -->
                <div class="col-xxl col-xl col-md col-sm-12 my-auto">
                    <h5 id="TopLabel">#
                        Easy Scene Hai
                    </h5>
                    <h1 class="TopSection" style="color: #1c4a4a">
                        A learning experience like never before
                    </h1>
                    <p class="TopSection">
                        Want help in university or need to prepare for an exam or entry test? Book sessions as per your
                        time and availability, we make education easier, accessible and affordable!
                    </p>
                    <div class="TopSection">
                        <a href="Find Tutor"><button type="button" class="btn btnPrimary btn-lg btnFont">
                                Find Tutors
                            </button></a>
                        <a href="#Works-Section"><button type="button" class="btn btnSecond btn-lg btnFont">
                                How it Works
                            </button></a>
                    </div>

                    <!--  Students Enrolled  -->
                    <div class="st-enrolled">
                        <span class="label">
                            1325 students enrolled
                        </span>
                        <span class="st-dp">
                            <img src="Images/st (3).png" />
                            <img src="Images/st (4).png" />
                            <img src="Images/st (2).png" />
                            <img src="Images/st (1).png" />
                        </span>
                        <!-- <div class="col-5 my-2" style="border: 1px solid red">
                <p class="label">1,345 students enrolled</p>
              </div>
              <div class="col" style="border: 1px solid blue">
                <img src="Images/home students enrolled.png" />
              </div> -->
                    </div>
                </div>
                <!--  Col 2  -->
                <div class="col-xxl col-xl col-md my-auto" id="hero_img">
                    <img src="Images/home hreo section image.png" />
                </div>
            </div>
        </section>
    </div>

    <!--  Categories  -->
    <section class="OurContainer Category-Section">
        <h2>
            Categories
        </h2>
        <!--  Text and Search  -->
        <div class="row">
            <div class="col-xxl-5 col-xl-5 col-md col-sm-12">
                <p>
                    Skills that take you months to learn buy our courses and learn them with in weeks.
                </p>
            </div>
            <div class="col-xxl col-xl col-lg-4 col-md-4 offset-lg-2 offset-md-1 col-sm-4 offset-sm-8 cat_search">
                <div class="input-group">
                    <input type="text" class="form-control label" id="searchForm" placeholder="Search Category"
                        aria-label="Search Category" aria-describedby="search_category" />
                    <button class="btn" type="button" id="search_category">
                        <img src="Images/search.svg" alt="search" />
                    </button>
                </div>
            </div>
        </div>
        <!--  Secondary Button  -->

        <div class="SC">
            <button type="button" class="btn btnSecond btn-lg btnFont">
                View All
            </button>
        </div>
        <div class="row">
            <!--  Card 1 -->
            <div class="col-xxl col-xl-3 col-md-6 col">
                <div class="card category_card">
                    <img src="Images/Computer Science - category.svg" class="card-img-top" alt="computer science" />
                    <div class="card-body">
                        <h4 class="card-title">
                            Computer Science
                        </h4>
                        <p class="label">4 Instructors</p>
                    </div>
                </div>
            </div>

            <!--  Card 2 -->
            <div class="col-xxl col-xl-3 col-md-6 col">
                <div class="card category_card">
                    <img src="Images/Software Engineering - category.svg" class="card-img-top"
                        alt="computer science" />
                    <div class="card-body">
                        <h4 class="card-title">
                            Software Engineering
                        </h4>
                        <p class="label">4 Instructors</p>
                    </div>
                </div>
            </div>

            <!--  Card 3 -->
            <div class="col-xxl col-xl-3 col-md-6 col">
                <div class="card category_card">
                    <img src="Images/Electrical Engineering - category.svg" class="card-img-top"
                        alt="computer science" />
                    <div class="card-body">
                        <h4 class="card-title">
                            Electrical Engineering
                        </h4>
                        <p class="label">4 Instructors</p>
                    </div>
                </div>
            </div>

            <!--  Card 4 -->
            <div class="col-xxl col-xl-3 col-md-6 col">
                <div class="card category_card">
                    <img src="Images/business Analytics - category.svg" class="card-img-top" alt="computer science" />
                    <div class="card-body">
                        <h4 class="card-title">
                            Business Analytics
                        </h4>
                        <p class="label">4 Instructors</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--  Join As a Instructor-->
    <section class="OurContainer Tutor-Section">
        <div class="row">
            <div class="col-xxl-6 col-xl-7 col-md">
                <h5># Become a Tutor
                </h5>
                <h2>
                    Join With Easy Scenior as an Instructor
                </h2>
                <p>
                    Join us to help others excel in their student life and earn some extra cash.
                </p>
                <button type="button" class="btn btnPrimary btn-lg btnFont BT">
                    Become Tutor
                </button>
            </div>
            <div class="col-xxl-3 my-auto" id="Tutor-arrow">
                <img src="Images/Home become Tutor.svg" />
            </div>
            <!-- Perks -->
            <div class="col-xxl col-xl col-md my-auto" id="offer">
                <div class="end">
                    <!-- <h5 class="vertical">You Can Offer</h5> -->
                    <img src="Images/Home mentor.svg" /><span>One to one mentorship</span><br />
                    <img src="Images/Home Test prep.svg" /><span>Entry Test preparation</span><br />
                    <img src="Images/Home Online course.svg" /><span>Online course</span><br />
                </div>
            </div>
        </div>
        <button type="button" class="btn btnPrimary btn-lg btnFont BT-md">
            Become Tutor
        </button>
    </section>

    <!-- How it works -->
    <section class="OurContainer TextCenter Works-Section" id="Works-Section">
        <h5>WORKS</h5>
        <h2>How it Works?</h2>
        <div class="row work-card">
            <div class="col-xxl col-xl col-lg col-md col-12 neumorphism">
                <img src="Images/Home Find tutor.svg" />
                <h4>Find Your Tutor</h4>
                <p>search and find best tutor that suits you</p>
            </div>
            <div class="col-xxl col-xl-2 col-lg-1 col-md col-12 work-arr my-auto">
                <img src="Images/home work arrow.svg" />
            </div>
            <div class="col-xxl col-xl col-lg col-md col-12 neumorphism">
                <img src="Images/home book session.svg" />
                <h4>Book A Session</h4>
                <p>book a session with flexible timings</p>
            </div>
            <div class="col-xxl col-xl-2 col-lg-1 col-md col-12 work-arr my-auto">
                <img src="Images/home work arrow.svg" />
            </div>
            <div class="col-xxl col-xl col-lg col-md col col-12 neumorphism">
                <img src="Images/home enjoy.svg" />
                <h4>Gain Experience</h4>
                <p>learn from experts and become better self</p>
            </div>
        </div>
    </section>

    <!--  Testimonials  -->
    <section class="OurContainer Testimonials-Section">
        <h5 class="TextCenter">TESTIMONIALS</h5>
        <h2 class="TextCenter">Customer Know The Best</h2>
        <p class="TextCenter"><a href="">View All</a></p>
        <div class="row Testimonial-cards">
            <div class="col-xxl col-xl col-md col-12 reviewCard FirstRC">
                <img class="dp" src="Images/st (1).png" />
                <h4 class="TextCenter">Mr Jones</h4>
                <img class="quote" src="Images/Quote Left.svg" />
                <p class="TextCenter">
                    Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus
                    feugiat lacus vitae neque ornare, vitae libero!
                </p>
                <img class="star end" src="Images/Full Star.svg" />
                <img class="star end" src="Images/Full Star.svg" />
                <img class="star end" src="Images/Full Star.svg" />
                <img class="star end" src="Images/Full Star.svg" />
                <img class="star end" src="Images/Full Star.svg" />
            </div>
            <div class="col-xxl col-xl col-md col-12 reviewCard SecondRC">
                <img class="dp" src="Images/st (3).png" />
                <h4 class="TextCenter">Alina Ali</h4>
                <img class="quote" src="Images/Quote Left.svg" />
                <p class="TextCenter">
                    Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus
                    feugiat lacus vitae neque ornare, vitae libero!
                </p>
                <img class="star end" src="Images/outline star.svg" />
                <img class="star end" src="Images/Full Star.svg" />
                <img class="star end" src="Images/Full Star.svg" />
                <img class="star end" src="Images/Full Star.svg" />
                <img class="star end" src="Images/Full Star.svg" />
            </div>
            <div class="col-xxl col-xl col-md col-12 reviewCard ThirdRC">
                <img class="dp" src="Images/st (4).png" />
                <h4 class="TextCenter">Mr. Ahmed</h4>
                <img class="quote" src="Images/Quote Left.svg" />
                <p class="TextCenter">
                    Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus
                    feugiat lacus vitae neque ornare, vitae libero!
                </p>
                <img class="star end" src="Images/outline star.svg" />
                <img class="star end" src="Images/outline star.svg" />
                <img class="star end" src="Images/Full Star.svg" />
                <img class="star end" src="Images/Full Star.svg" />
                <img class="star end" src="Images/Full Star.svg" />
            </div>
        </div>
    </section>

    <!--  BLOG  -->
    <section class="OurContainer Blog-Section">
        <h5 class="TextCenter">LATEST NEWS</h5>
        <h2 class="TextCenter">Educational Tips</h2>
        <p class="TextCenter"><a href="">View All</a></p>
        <div class="row">
            <!--  1  -->
            <div class="col-xxl col-xl col-md reviewCard FirstRC blog">
                <img class="mx-auto d-block" src="Images/Home Blog 1.png" height="auto" width="100%" />
                <h5 style="color: #1c4a4a">
                    Data Science and Machine Learning with Python
                </h5>
                <button type="button" class="btn btnPrimary btn-sm btnFont btnThird">
                    Read More
                </button>
                <div class="row" style="float: right;">
                    <div class="col-4 offset-1 my-auto">
                        <image src="Images/Heart.png" />
                    </div>
                    <div class="col my-auto">
                        <p style="display: inline">
                            22
                        </p>
                    </div>
                </div>
            </div>
            <!--  2  -->
            <div class="col-xxl col-xl col-md reviewCard SecondRC blog">
                <img class="mx-auto d-block" src="Images/Home Blog 2.png" height="auto" width="100%" />
                <h5 style="color: #1c4a4a">
                    Entry Test Tips and Tricks - Easy Hacks
                </h5>
                <button type="button" class="btn btnPrimary btn-sm btnFont btnThird">
                    Read More
                </button>
                <div class="row" style="float: right;">
                    <div class="col-4 offset-1 my-auto">
                        <image src="Images/Heart.png" />
                    </div>
                    <div class="col my-auto">
                        <p style="display: inline">
                            53
                        </p>
                    </div>
                </div>
            </div>
            <!--  3  -->
            <div class="col-xxl col-xl col-md reviewCard ThirdRC blog">
                <img class="mx-auto d-block" src="Images/Home Blog 3.png" height="auto" width="100%" />
                <h5 style="color: #1c4a4a">
                    Strategies for a Successful Business
                </h5>
                <button type="button" class="btn btnPrimary btn-sm btnFont btnThird">
                    Read More
                </button>
                <div class="row" style="float: right;">
                    <div class="col-4 offset-1 my-auto">
                        <image src="Images/Heart.png" />
                    </div>
                    <div class="col my-auto">
                        <p style="display: inline">
                            100
                        </p>
                    </div>
                </div>
                <!-- <span><p style="display: inline">2500</p><image src="Images/Heart.png" /></span> -->
            </div>
        </div>
    </section>
    <my-footer></my-footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script src="Js/main.js"></script>
    <!-- Link JS Here-->
</body>

</html>
