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
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link rel="stylesheet" href="css/Global (Typography).css" />

    <link rel="stylesheet" href="" />
    <!-- Link CSS here-->

    <title>Hello, world!</title>
</head>

<body class="bg">
    <!-- Navigation -->
    <nav class="navigation">
        <div class="logo">
            <a href="Home"><img src="Images/logo.png" /></a>
        </div>
        <input type="checkbox" id="click" />
        <label for="click" class="menu-btn">
            <i class="fa fa-bars" aria-hidden="true"></i>
        </label>
        <ul class="my-auto">
            <li><a class="active label" href="Home">Home</a></li>
            <li><a href="About" class="label">About</a></li>
            <li><a href="FindATutor" class="label">Find Tutor</a></li>
            <li><a href="#" class="label">Become Tutor</a></li>
            <li>
                <div class="dropdown">
                    <a style="cursor: pointer">Support
                        <i class="fa fa-caret-down"></i>
                    </a>
                    <div class="dropdown-content">
                        <a href="#" class="dropDownA">Blog</a>
                        <a href="faqs" class="dropDownA">FAQs</a>
                        <a href="testimonials" class="dropDownA">Testimonials</a>
                        <hr />
                        <a href="contact" class="dropDownA">Contact Us</a>
                    </div>
                </div>
            </li>
            <div class="verticalLine"></div>
            <li>
                <img class="img1" src="Images/Signup.svg" /><a href="register"
                    class="btnFont">Signup</a>
            </li>
            <li>
                <img src="Images/Login.svg" /><a href="login" class="btnFont">Login</a>
            </li>
        </ul>
    </nav>

    <!--  Start  -->
    <div class="start">
        <div class="OurContainer">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item label">
                        <a href="#" style="color: #f6a2bc">Home</a>
                    </li>
                    <li class="breadcrumb-item active label" aria-current="page" style="color: #f6a2bc">
                        Library
                    </li>
                </ol>
            </nav>

            <h1>HEADING</h1>
        </div>

        <div class="whiteBg">
            <div class="OurContainer">DATA</div>
        </div>
        <my-footer></my-footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="Js/main.js"></script>
    <!-- Link JS Here-->
</body>

</html>
