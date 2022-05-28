<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Dashboard - Tutors</title>

    <link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css' rel='stylesheet'>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
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
    <link href='css/DashboardGlobal.css' rel='stylesheet'>
</head>

<body class='snippet-body'>
    {{-- <input type="checkbox" id="check"> --}}
    <!--header area start-->
    <div class="main">
        <header>
            <div class="row">
                <div class="col my-auto">
                    {{-- <label for="check">
                    <i class="fas fa-bars" id="sidebar_btn"></i>
                </label> --}}
                    <img src=" Images/logo.png" id="logo" />
                </div>
                <div class="col my-auto text-end">
                    <a href="#" id="logout"><button type="button" class="btn btnPrimary btn-lg btnFont">
                            Logout
                        </button></a>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="col-xl-2 col-md-3">
                <div class="sideBar">
                    <div class="profile_info text-center">
                        <img src="Images/users/st (3).png" class="profile_image" alt="">
                        <h4>Maria David</h4>
                        <a href="javascript:void(0);" class="icon hide" onclick="side()">

                            <i onclick="myFunction(this)" class="fa fa-plus-circle" id="hide"> Menu
                            </i>
                        </a>
                    </div>
                    <div id="menus">
                        <a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
                        <a href="#"><i class="fas fa-calendar"></i><span>Sessions</span></a>
                        <a class="active" href="DashTutors"><i class="fas fa-male"></i><span>Find a
                                Tutor</span></a>
                        <a href="DashCourses"><i class="fas fa-th"></i><span>Find
                                Courses</span></a>
                        <a href="#"><i class="fas fa-chalkboard-teacher"></i><span>Become Tutor</span></a>
                        <a href="#"><i class="fas fa-gear"></i><span>Profile</span></a>
                    </div>
                </div>
            </div>
            <!--sidebar end-->
            <div class="col">
                <div class="DashContainer">

                    <h3 style="text-align: center; color:#1C4A4A; padding-top:2em" id="RHeadSmall">Book a Session</h3>
                    @php
                        use App\Models\Users;
                        use App\Models\Categories;
                    @endphp
                    <div class="row">
                        <!-- First Row -->
                        @for ($i = 0; $i < count($findTutor); $i++)
                            @php
                                // Select Full name from user
                                $img = Users::SELECT('userImage')
                                    ->WHERE('username', $findTutor[$i]->tutorusername)
                                    ->get();
                                $fullName = Users::SELECT('fullname')
                                    ->WHERE('username', $findTutor[$i]->tutorusername)
                                    ->get();
                                
                                // Select Categories
                                $major = Categories::SELECT('cat_name')
                                    ->WHERE('cat_ID', $findTutor[$i]->major)
                                    ->get();
                                
                            @endphp
                            <div class="col-xl-6 col-md-12 col-sm-12">
                                <div class="row TutorBorder">
                                    <!--here-->

                                    <div class="col-12 col-sm-5 my-auto text-center">
                                        <img src="Images/users/{{ $img[0]->userImage }}" class="TutorImage" />
                                    </div>
                                    <div class="col-12 col-sm-7 cen">
                                        <br />
                                        <a href="/DashTutorsDetails/{{ $findTutor[$i]->tutorusername }}"
                                            class="click">
                                            <h4>{{ $fullName[0]->fullname }}</h4>
                                        </a>
                                        <h5>{{ $major[0]->cat_name }}</h5>
                                        <p>{{ $findTutor[$i]->institute }}</p>
                                        <span class="label" style="color: #f6a2bc">Rating: 5 stars</span>
                                    </div>
                                </div>
                            </div>
                        @endfor
                        <!-- Row End -->
                    </div>


                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script type='text/javascript' src="Js/sidebar.js"></script>
</body>

</html>
