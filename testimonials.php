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

    <!-- Link CSS here-->
    <link rel="stylesheet" href="css/Home.css" />
    <link rel="stylesheet" href="css/testimonial.css" />

    <title>Testimonials</title>
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
         User Testimonials
          </li>
        </ol>
      </nav>

      <h1>Hear from our Students</h1>
    </div>

    <div class="whiteBg">
      <div class="OurContainer">
        <section class="OurContainer Testimonials-Section">
            <h5 class="TextCenter">TESTIMONIALS</h5>
            <h2 class="TextCenter">Customer Know The Best</h2>



            <div class="row Testimonial-cards">
            <?php
$querytest = "SELECT * from testimonials";
$datatest = mysqli_query($conn,$querytest);
// $resultWelcome = mysqli_fetch_assoc($datatest);
?>


                          
     <?php
                  while($resultWelcome = mysqli_fetch_assoc($datatest)){               

        
               echo '<div class="col-xxl-6 col-xl-6 col-md-6 col-12 reviewCard FirstRC size" >

                   <img class="dp" src="'.$resultWelcome['Image'].'"/>
                   <h4 class="TextCenter">'.$resultWelcome['user'].'</h4>
                   <img class="quote" src="res/Quote Left.svg" />
                   <p class="TextCenter">'.$resultWelcome['content'].'?></p>
                   <img class="star end" src="res/Full Star.svg" />
                   <img class="star end" src="res/Full Star.svg" />
                <img class="star end" src="res/Full Star.svg" />
                <img class="star end" src="res/Full Star.svg" />
                <img class="star end" src="res/Full Star.svg" />
              </div>';
                  }

 ?>
                          

            

  
        
      </div>
      
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
