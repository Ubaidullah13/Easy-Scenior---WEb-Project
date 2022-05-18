<!--  STARTER  -->

<?php
include('connection.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Playfair+Display+SC:wght@400;700;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/Global (Typography).css" />

    <link rel="stylesheet" href="css/About.css" />
    <!-- Link CSS here-->

    <title>About</title>
  </head>
  <body class="bg">
    <div class="OurContainer">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item label">
            <a href="#" style="color: #f6a2bc">Home</a>
          </li>
          <li
            class="breadcrumb-item active label"
            aria-current="page"
            style="color: #f6a2bc"
          >
            About
          </li>
        </ol>
      </nav>

      <h1>About Us</h1>
    </div>

    <div class="whiteBg">
      <!--  Top Video  -->
      <!-- <div class="OurContainer top"> -->
      <section class="OurContainer mx-auto d-block">
        <div class="row">
          <div class="col-sm"></div>
          <div class="col-sm vid">
            <img src="res/About vid.png" />
          </div>
        </div>
      </section>
      <!-- </div> -->
<?php
$queryAbout = "SELECT * FROM about";
$dataAbout = mysqli_query($conn,$queryAbout);
$resultWelcome = mysqli_fetch_assoc($dataAbout);
?>
      <!--  Welcome  -->
      <section class="OurContainer welcome">
        <div class="row">
          <div class="col-md col-sm-12 order-2 order-md-1 my-auto">
            <div
              id="QuoteImage"
              style="
                background-image: url('<?php echo $resultWelcome['Image'] ?>');
              "
            >
              <h4>
                Learning is the only thing the mind never exhausts, never fears,
                and never regrets
              </h4>
            </div>
          </div>
          <div class="col-md col-sm-12 offset-md-1 order-1 order-md-2 my-auto">
            <h5>#WELCOME</h5>
            <h2>
              <?php echo $resultWelcome['Heading'] ?>
            </h2>
            <p>
              <?php echo $resultWelcome['Paragraph'] ?>
            </p>
            <button type="button" class="btn btnPrimary btn-lg btnFont">
              Start Exploring
            </button>
          </div>
        </div>
      </section>

<?php
$resultStory = mysqli_fetch_assoc($dataAbout);
?>
      <!--  Our Story  -->
      <section class="OurContainer story">
        <div class="row">
          <div class="col-lg col-sm-12 my-auto">
            <h5>#HISTORY</h5>
            <h2><?php echo $resultStory['Heading'] ?></h2>
            <p>
            <?php echo $resultStory['Paragraph'] ?>
            </p>
            <button type="button" class="btn btnPrimary btn-lg btnFont">
              Contact Us
            </button>
          </div>
          <!--  Owners  -->
          <div
            class="col-sm-10 col-lg col-md-8 my-md-auto offset-sm-2"
            id="owners"
          >
            <!--  1  -->
            <div class="row">
              <div class="col-lg col-sm col-xl offset-md order-lg-1 order-md-2">
                <img src="res/About owner (1).png" />
              </div>
              <div
                class="col-lg col-sm col-xxl col-xl my-auto order-lg-2 order-md-1`"
              >
                <h4 style="text-align: start">Layla El-Faouly</h4>
              </div>
            </div>
            <!--  2  -->
            <div class="row">
              <div
                class="col-lg col-sm col-xl offset-md my-auto order-lg-1 order-md-2"
              >
                <h4 style="text-align: end">Marc Specter</h4>
              </div>
              <div class="col-lg col-sm col-xl order-lg-2 order-md-1">
                <img src="res/About owner (3).png" />
              </div>
            </div>
            <!--  3  -->
            <div class="row">
              <div class="col-lg col-sm col-xl offset-md order-lg-1 order-md-2">
                <img src="res/About owner (2).png" />
              </div>
              <div class="col-lg col-sm col-xl my-auto order-lg-2 order-md-1">
                <h4 style="text-align: start">Yelena Belova</h4>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--  Features  -->
      <section class="OurContainer features">
        <div class="row">
          <!-- 1  -->
<?php
$resultFeatures = mysqli_fetch_assoc($dataAbout);
?>
          <div class="col-xxl col-xl col-md reviewCard FirstRC f">
            <img src="<?php echo $resultFeatures['Image'] ?>" class="mx-auto d-block" />
            <h4 class="TextCenter"><?php echo $resultFeatures['Heading'] ?></h4>
            <p>
              <?php echo $resultFeatures['Paragraph'] ?>
            </p>
          </div>
          <!-- 2  -->
<?php
$resultFeatures = mysqli_fetch_assoc($dataAbout);
?>
          <div class="col-xxl col-xl col-md reviewCard FirstRC f">
            <img src="<?php echo $resultFeatures['Image'] ?>" class="mx-auto d-block" />
            <h4 class="TextCenter"><?php echo $resultFeatures['Heading'] ?></h4>
            <p>
              <?php echo $resultFeatures['Paragraph'] ?>
            </p>
          </div>
          <!-- 3  -->
<?php
$resultFeatures = mysqli_fetch_assoc($dataAbout);
?>
          <div class="col-xxl col-xl col-md reviewCard FirstRC f">
            <img src="<?php echo $resultFeatures['Image'] ?>" class="mx-auto d-block" />
            <h4 class="TextCenter"><?php echo $resultFeatures['Heading'] ?></h4>
            <p>
              <?php echo $resultFeatures['Paragraph'] ?>
            </p>
          </div>
        </div>
      </section>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <script src=""></script>
    <!-- Link JS Here-->
  </body>
</html>
