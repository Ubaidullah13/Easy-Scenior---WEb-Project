<?php
include('connection.php');
?>
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
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  <!-- Link CSS here-->
  <link rel="stylesheet" href="css/Home.css" />
  <link rel="stylesheet" href="css/Global (Typography).css" />

  <title>Easy Scenior - Home</title>
</head>

<body>
  <?php
$queryHero = "SELECT * FROM home";
$dataHero = mysqli_query($conn,$queryHero);
$resHero = mysqli_fetch_assoc($dataHero);
?>

  <!-- Navigation -->
  <nav class="navigation">
    <div class="logo"><a href="Home.php"><img src="res/logo.png" /></a></div>
    <input type="checkbox" id="click">
    <label for="click" class="menu-btn">
      <i class="fa fa-bars" aria-hidden="true"></i>

    </label>
    <ul class="my-auto">
      <li><a class="active label" href="Home.php">Home</a></li>
      <li><a href="About.php" class="label">About</a></li>
      <li><a href="FindATutor.html" class="label">Find Tutor</a></li>
      <li><a href="#" class="label">Become Tutor</a></li>
      <li>
        <div class="dropdown">
          <a style="cursor: pointer;">Support
            <i class="fa fa-caret-down"></i>
          </a>
          <div class="dropdown-content">
            <a href="#" class="dropDownA">Blog</a>
            <a href="faqs.php" class="dropDownA">FAQs</a>
            <a href="#" class="dropDownA">Testimonials</a>
            <hr>
            <a href="contact.php" class="dropDownA">Contact Us</a>
          </div>
        </div>
      </li>
      <div class="verticalLine"></div>
      <li><img class="img1" src="res/Signup.svg"/><a href="register.html" class="btnFont">Signup</a>
      <li><img src="res/Login.svg"/><a href="login.html" class="btnFont">Login</a>
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
            <?php echo $resHero['SubHeading'] ?>
          </h5>
          <h1 class="TopSection" style="color: #1c4a4a">
            <?php echo $resHero['Heading'] ?>
          </h1>
          <p class="TopSection">
            <?php echo $resHero['Paragraph'] ?>
          </p>
          <div class="TopSection">
            <a href="FindATutor.html"><button type="button" class="btn btnPrimary btn-lg btnFont">
              Find Tutors
            </button></a>
            <a href="#Works-Section"><button type="button" class="btn btnSecond btn-lg btnFont">
              How it Works
            </button></a>
          </div>

          <?php
$TotalQuery = "SELECT * FROM user";
$StData = mysqli_query($conn,$TotalQuery);
$TotalSt = mysqli_num_rows($StData);
?>
          <!--  Students Enrolled  -->
          <div class="st-enrolled">
            <span class="label">
              <?php echo "$TotalSt" ?>
              students enrolled
            </span>
            <span class="st-dp">
              <img src="res/st (3).png" />
              <img src="res/st (4).png" />
              <img src="res/st (2).png" />
              <img src="res/st (1).png" />
            </span>
            <!-- <div class="col-5 my-2" style="border: 1px solid red">
                <p class="label">1,345 students enrolled</p>
              </div>
              <div class="col" style="border: 1px solid blue">
                <img src="res/home students enrolled.png" />
              </div> -->
          </div>
        </div>
        <!--  Col 2  -->
        <div class="col-xxl col-xl col-md my-auto" id="hero_img">
          <img src="res/home hreo section image.png" />
        </div>
      </div>
    </section>
  </div>

  <?php
$resSecond = mysqli_fetch_assoc($dataHero);
?>
  <!--  Categories  -->
  <section class="OurContainer Category-Section">
    <h2>
      <?php echo $resSecond['Heading'] ?>
    </h2>
    <!--  Text and Search  -->
    <div class="row">
      <div class="col-xxl-5 col-xl-5 col-md col-sm-12">
        <p>
          <?php echo $resSecond['Paragraph'] ?>
        </p>
      </div>
      <div class="col-xxl col-xl col-lg-4 col-md-4 offset-lg-2 offset-md-1 col-sm-4 offset-sm-8 cat_search">
        <div class="input-group">
          <input type="text" class="form-control label" id="searchForm" placeholder="Search Category"
            aria-label="Search Category" aria-describedby="search_category" />
          <button class="btn" type="button" id="search_category">
            <img src="res/search.svg" alt="search" />
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
    <?php
$cat = "SELECT * FROM category ORDER BY RAND() LIMIT 4";
$catData = mysqli_query($conn,$cat);
?>
    <div class="row">
      <!--  Card 1 -->
      <div class="col-xxl col-xl-3 col-md-6 col">
        <div class="card category_card">
          <img src="res/Computer Science - category.svg" class="card-img-top" alt="computer science" />
          <div class="card-body">
            <h4 class="card-title">
              <?php 
                $res = mysqli_fetch_assoc($catData);
                echo $res["cat_name"];?>
            </h4>
            <p class="label">4 Instructors</p>
          </div>
        </div>
      </div>

      <!--  Card 2 -->
      <div class="col-xxl col-xl-3 col-md-6 col">
        <div class="card category_card">
          <img src="res/Software Engineering - category.svg" class="card-img-top" alt="computer science" />
          <div class="card-body">
            <h4 class="card-title">
              <?php                 
              $res = mysqli_fetch_assoc($catData);
              echo $res["cat_name"];?>
            </h4>
            <p class="label">4 Instructors</p>
          </div>
        </div>
      </div>

      <!--  Card 3 -->
      <div class="col-xxl col-xl-3 col-md-6 col">
        <div class="card category_card">
          <img src="res/Electrical Engineering - category.svg" class="card-img-top" alt="computer science" />
          <div class="card-body">
            <h4 class="card-title">
              <?php                 
              $res = mysqli_fetch_assoc($catData);
              echo $res["cat_name"];?>
            </h4>
            <p class="label">4 Instructors</p>
          </div>
        </div>
      </div>

      <!--  Card 4 -->
      <div class="col-xxl col-xl-3 col-md-6 col">
        <div class="card category_card">
          <img src="res/business Analytics - category.svg" class="card-img-top" alt="computer science" />
          <div class="card-body">
            <h4 class="card-title">
              <?php                 
              $res = mysqli_fetch_assoc($catData);
              echo $res["cat_name"];?>
            </h4>
            <p class="label">4 Instructors</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
$resTutor = mysqli_fetch_assoc($dataHero);
?>
  <!--  Join As a Instructor-->
  <section class="OurContainer Tutor-Section">
    <div class="row">
      <div class="col-xxl-6 col-xl-7 col-md">
        <h5>#
          <?php echo $resTutor['SubHeading'] ?>
        </h5>
        <h2>
          <?php echo $resTutor['Heading'] ?>
        </h2>
        <p>
          <?php echo $resTutor['Paragraph'] ?>
        </p>
        <button type="button" class="btn btnPrimary btn-lg btnFont BT">
          Become Tutor
        </button>
      </div>
      <div class="col-xxl-3 my-auto" id="Tutor-arrow">
        <img src="res/Home become Tutor.svg" />
      </div>
      <!-- Perks -->
      <div class="col-xxl col-xl col-md my-auto" id="offer">
        <div class="end">
          <!-- <h5 class="vertical">You Can Offer</h5> -->
          <img src="res/Home mentor.svg" /><span>One to one mentorship</span><br />
          <img src="res/Home Test prep.svg" /><span>Entry Test preparation</span><br />
          <img src="res/Home Online course.svg" /><span>Online course</span><br />
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
        <img src="res/Home Find tutor.svg" />
        <h4>Find Your Tutor</h4>
        <p>search and find best tutor that suits you</p>
      </div>
      <div class="col-xxl col-xl-2 col-lg-1 col-md col-12 work-arr my-auto">
        <img src="res/home work arrow.svg" />
      </div>
      <div class="col-xxl col-xl col-lg col-md col-12 neumorphism">
        <img src="res/home book session.svg" />
        <h4>Book A Session</h4>
        <p>book a session with flexible timings</p>
      </div>
      <div class="col-xxl col-xl-2 col-lg-1 col-md col-12 work-arr my-auto">
        <img src="res/home work arrow.svg" />
      </div>
      <div class="col-xxl col-xl col-lg col-md col col-12 neumorphism">
        <img src="res/home enjoy.svg" />
        <h4>Gain Experience</h4>
        <p>learn from experts and become better self</p>
      </div>
    </div>
  </section>

  <?php
$queryTestimonial = "SELECT * FROM testimonial ORDER BY RAND() LIMIT 3";
$dataTestimonial = mysqli_query($conn,$queryTestimonial);
$resTestimonial = mysqli_fetch_assoc($dataTestimonial);
?>
  <!--  Testimonials  -->
  <section class="OurContainer Testimonials-Section">
    <h5 class="TextCenter">TESTIMONIALS</h5>
    <h2 class="TextCenter">Customer Know The Best</h2>
    <div class="row Testimonial-cards">
      <div class="col-xxl col-xl col-md col-12 reviewCard FirstRC">
        <img class="dp" src="res/st (1).png" />
        <h4 class="TextCenter">Mr Jones</h4>
        <img class="quote" src="res/Quote Left.svg" />
        <p class="TextCenter">
          Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus
          feugiat lacus vitae neque ornare, vitae libero!
        </p>
        <img class="star end" src="res/Full Star.svg" />
        <img class="star end" src="res/Full Star.svg" />
        <img class="star end" src="res/Full Star.svg" />
        <img class="star end" src="res/Full Star.svg" />
        <img class="star end" src="res/Full Star.svg" />
      </div>
      <div class="col-xxl col-xl col-md col-12 reviewCard SecondRC">
        <img class="dp" src="res/st (3).png" />
        <h4 class="TextCenter">Alina Ali</h4>
        <img class="quote" src="res/Quote Left.svg" />
        <p class="TextCenter">
          Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus
          feugiat lacus vitae neque ornare, vitae libero!
        </p>
        <img class="star end" src="res/outline star.svg" />
        <img class="star end" src="res/Full Star.svg" />
        <img class="star end" src="res/Full Star.svg" />
        <img class="star end" src="res/Full Star.svg" />
        <img class="star end" src="res/Full Star.svg" />
      </div>
      <div class="col-xxl col-xl col-md col-12 reviewCard ThirdRC">
        <img class="dp" src="res/st (4).png" />
        <h4 class="TextCenter">Mr. Ahmed</h4>
        <img class="quote" src="res/Quote Left.svg" />
        <p class="TextCenter">
          Lorem ipsum dolor sit amet, consectet adipiscing elit. Phasellus
          feugiat lacus vitae neque ornare, vitae libero!
        </p>
        <img class="star end" src="res/outline star.svg" />
        <img class="star end" src="res/outline star.svg" />
        <img class="star end" src="res/Full Star.svg" />
        <img class="star end" src="res/Full Star.svg" />
        <img class="star end" src="res/Full Star.svg" />
      </div>
    </div>
  </section>

  <?php
$queryBlog = "SELECT * FROM blogs ORDER BY RAND() LIMIT 3";
$dataBlog = mysqli_query($conn,$queryBlog);
?>

  <!--  BLOG  -->
  <section class="OurContainer Blog-Section">
    <h5 class="TextCenter">LATEST NEWS</h5>
    <h2 class="TextCenter">Educational Tips</h2>
    <p class="TextCenter"><a href="">View All</a></p>
    <div class="row">
      <!--  1  -->
      <?php
$resBlog = mysqli_fetch_assoc($dataBlog);
?>
      <div class="col-xxl col-xl col-md reviewCard FirstRC blog">
        <img class="mx-auto d-block" src="<?php echo $resBlog['titleImage'] ?>" height="auto" width="100%" />
        <h5 style="color: #1c4a4a">
          <?php echo $resBlog['title'] ?>
        </h5>
        <button type="button" class="btn btnPrimary btn-sm btnFont btnThird">
          Read More
        </button>
        <div class="row" style="float: right;">
          <div class="col-4 offset-1 my-auto">
            <image src="res/Heart.png" />
          </div>
          <div class="col my-auto">
            <p style="display: inline">
              <?php echo $resBlog['likes'] ?>
            </p>
          </div>
        </div>
      </div>
      <!--  2  -->
      <?php
$resBlog = mysqli_fetch_assoc($dataBlog);
?>
      <div class="col-xxl col-xl col-md reviewCard SecondRC blog">
        <img class="mx-auto d-block" src="<?php echo $resBlog['titleImage'] ?>" height="auto" width="100%" />
        <h5 style="color: #1c4a4a">
          <?php echo $resBlog['title'] ?>
        </h5>
        <button type="button" class="btn btnPrimary btn-sm btnFont btnThird">
          Read More
        </button>
        <div class="row" style="float: right;">
          <div class="col-4 offset-1 my-auto">
            <image src="res/Heart.png" />
          </div>
          <div class="col my-auto">
            <p style="display: inline">
              <?php echo $resBlog['likes'] ?>
            </p>
          </div>
        </div>
      </div>
      <!--  3  -->
      <?php
$resBlog = mysqli_fetch_assoc($dataBlog);
?>
      <div class="col-xxl col-xl col-md reviewCard ThirdRC blog">
        <img class="mx-auto d-block" src="<?php echo $resBlog['titleImage'] ?>" height="auto" width="100%" />
        <h5 style="color: #1c4a4a">
          <?php echo $resBlog['title'] ?>
        </h5>
        <button type="button" class="btn btnPrimary btn-sm btnFont btnThird">
          Read More
        </button>
        <div class="row" style="float: right;">
          <div class="col-4 offset-1 my-auto">
            <image src="res/Heart.png" />
          </div>
          <div class="col my-auto">
            <p style="display: inline">
              <?php echo $resBlog['likes'] ?>
            </p>
          </div>
        </div>
        <!-- <span><p style="display: inline">2500</p><image src="res/Heart.png" /></span> -->
      </div>
    </div>
  </section>
  <my-footer></my-footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

    <script src="Js/main.js"></script>
  <!-- Link JS Here-->
</body>

</html>