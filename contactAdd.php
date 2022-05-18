<!--  STARTER  -->

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
    <link rel="stylesheet" href="css/ContactsLoginSignup.css" />

    <title>ContactUs</title>
  </head>
  <body class="bg">
    <div class="OurContainer">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item label">
            <a href="#" style="color: #f6a2bc"></a>
          </li>
          <li
            class="breadcrumb-item active label"
            aria-current="page"
            style="color: #f6a2bc">
          </li>
        </ol>
      </nav>
    </div>

    <div class="whiteBg">
      <div class="OurContainer">
		  
	  <div class="row">
    <div class="col-12 ">
      <img src="res\ContactSubmit.png" id="centre" >
    </div>
	
</div>

    <h4 class="contactHeading"> We will get in touch with you very soon! </h4>
    
    <button name="home" type="submit" class="btn btnPrimary btn-lg btnFont buttonLoginSignup" > <a href="home.html" class="HomeLink">Home </a></button>
	 <br/>
	</div>
</div>

    
  </body>
</html>

<?php
//including the database connection file
include('connection.php');

if(isset($_POST['ContactSubmit'])) {	
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $message = mysqli_real_escape_string($conn, $_POST['comment']);
		
	// checking empty fields
	if(empty($name) || empty($subject) || empty($email) || empty($message)) {
				
		if(empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($subject)) {
			echo "<font color='red'>Subject field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
        if(empty($message)) {
			echo "<font color='red'>Message field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
		//insert data to database	
		$result = mysqli_query($conn, "INSERT INTO user_contactus (name, email, subject, message) VALUES ('$name','$email','$subject', '$message')");
		
		//display success message
		//echo "<font color='green'>Data added successfully.";
		
	}
	
	$conn->close();
}
?>
