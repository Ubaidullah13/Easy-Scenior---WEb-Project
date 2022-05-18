<!--  STARTER  -->

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Playfair+Display+SC:wght@400;700;900&family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="css/Global (Typography).css" />

  <link rel="stylesheet" href="css\faqs.css" />
  <!-- Link CSS here-->

  <title>FAQs</title>
</head>

<body class="bg">
  <div class="OurContainer">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item label">
          <a href="#" style="color: #f6a2bc">Home</a>
        </li>
        <li class="breadcrumb-item active label" aria-current="page" style="color: #f6a2bc">
          FAQs
        </li>
      </ol>
    </nav>

    <h1>FAQs</h1>
  </div>

  <div class="whiteBg">
    <div class="OurContainer">

  
    <div class="row">
        <img src="res\FAQ.svg" class="img">
    </div>

  
  <?php  

    include('connection.php');

    $counter=1;
    $query = "select * from faqs";
    $data = mysqli_query($conn,$query);
    $total = mysqli_num_rows($data);

    if($total != 0)
  {

  while(($result = mysqli_fetch_assoc($data)))
  {
     
    echo '<div class="accordion accordion-flush" id="accordionFlushExample">'.
          '<div class="accordion-item">'.
           '<h2 class="accordion-header" id="flush-heading'.$counter.'">'.
             '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse'.$counter.'" aria-expanded="false" aria-controls="flush-collapse'.$counter.'">'.
              $result['question'].
              '</button>'.
               '</h2>'.
               '<div id="flush-collapse'.$counter.'" class="accordion-collapse collapse" aria-labelledby="flush-heading'.$counter. 
               '" data-bs-parent="#accordionFlushExample">'.
               ' <div class="accordion-body"> '.
               $result['answer'].       
              '</div>'.
              '</div>'.
           '</div>'.
        '</div>';

      $counter++;
  }
}

    ?>
    <div class="padding">
</div>

      
      </div>
    </div>
  





  <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
  crossorigin="anonymous"
></script>
</body>
</html>