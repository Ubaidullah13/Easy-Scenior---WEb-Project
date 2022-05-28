<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Tutor Dashboard</title>

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
                    <a href="logout" id="logout"><button type="button" class="btn btnPrimary btn-lg btnFont">
                            Logout
                        </button></a>
                </div>
            </div>
        </header>
        @php
            use App\Models\Users;
            $fullname = Users::SELECT('fullname')
                ->WHERE('username', Session::get('user')['username'])
                ->get();
            $status = Users::SELECT('status')
                ->WHERE('username', Session::get('user')['username'])
                ->get();
        @endphp
        <div class="row">
            <div class="col-xl-2 col-md-3">
                <div class="sideBar">
                    <div class="profile_info text-center">
                        <img src="Images/users/st (3).png" class="profile_image" alt="">
                        <h4>
                            {{ $fullname[0]->fullname }}
                        </h4>

                        <p> {{ Str::upper($status[0]->status) }}
                        <p>
                            <a href="javascript:void(0);" class="icon hide" onclick="geeksforgeeks()">

                                <i onclick="myFunction(this)" class="fa fa-plus-circle" id="hide"> Menu
                                </i>
                            </a>
                    </div>
                    <div id="menus">
                        <a class="active" href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a>
                        <a href="#"><i class="fas fa-calendar"></i><span>Sessions</span></a>
                        <a href="#"><i class="fas fa-male"></i><span>Find a Tutor</span></a>
                        <a href="#"><i class="fas fa-th"></i><span>Find Courses</span></a>
                        <a href="#"><i class="fas fa-chalkboard-teacher"></i><span>Become Tutor</span></a>
                        <a href="#"><i class="fas fa-gear"></i><span>Profile</span></a>
                    </div>
                </div>
            </div>
            <!--sidebar end-->
            <div class="col">
                <div class="DashContainer">

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
