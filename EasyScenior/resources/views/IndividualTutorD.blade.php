<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - Tutors Details</title>

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

    <link href='{{ asset('css/DashboardGlobal.css') }}' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/Global (Typography).css') }}" />
    <script src=" {{ asset('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js') }}"></script>
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
                    <img src="{{ asset('Images/logo.png') }}" id="logo" />
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
                        <img src="{{ asset('Images/users/st (3).png') }}" class="profile_image" alt="">
                        <h4>Username</h4>
                        <p>
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
            @php
                use App\Models\Users;
                use App\Models\Categories;
                use App\Models\TutorRatings;
                $user = $TutorDetails[0]->tutorusername;
                $img = Users::SELECT('userImage')
                    ->WHERE('username', $TutorDetails[0]->tutorusername)
                    ->get();
                $fullname = Users::SELECT('fullname')
                    ->WHERE('username', $TutorDetails[0]->tutorusername)
                    ->get();
                $maj = Categories::SELECT('cat_name')
                    ->WHERE('cat_ID', $TutorDetails[0]->major)
                    ->get();
                $rating = TutorRatings::SELECT('rating')
                    ->WHERE('tutor', $TutorDetails[0]->tutorusername)
                    ->get();
                
            @endphp
            <div class="col">
                <div class="DashContainer">
                    <div class="row">
                        <div class="col-xl col-lg-12">
                            <a class="d-block" href="{{ url('DashTutors') }}"><img
                                    src="{{ asset('Images/Goback.svg') }}" /></a>

                            <h3 style="padding-top:2em">{{ $maj[0]->cat_name }}</h3>
                            <div style="flaot:left; margin:1em 0em;">
                                <h5>Rating</h5>
                                @if (!$rating->isEmpty())
                                    @php
                                        $FS = $rating[0]->rating;
                                        $NF = 5 - $FS;
                                    @endphp
                                    @for ($i = 0; $i < $FS; $i++)
                                        <img class="star" src="{{ asset('Images/Full Star.svg') }}" />
                                    @endfor
                                    @for ($i = 0; $i < $NF; $i++)
                                        <img class="star" src="{{ asset('Images/outline star.svg') }}" />
                                    @endfor
                                @else
                                    <h5>N/A</h5>
                                @endif

                            </div>
                            <h5 class="py-3" style="color:#1b1c1e;">{{ $fullname[0]->fullname }} <span
                                    style="color:#F6A2BC;">||</span>
                                <p class="d-inline">{{ $TutorDetails[0]->institute }}</p>
                            </h5>

                            <div style="padding-top:2em">
                                <button class="btn btnPrimary btn-sm btnFont D" onClick="details()">
                                    <span id="RSmall">Detail </span>
                                </button>
                                <button class="btn btnSecond btn-sm btnFont R"
                                    onClick="getMessage('{{ $TutorDetails[0]->tutorusername }}')">

                                    <span id="RSmall">Reviews</span>
                                </button>
                            </div>
                            <div id="R" style="margin-bottom: 3em">

                            </div>
                            <div id="D">
                                <h4 style="padding-top:1em">Description</h4>
                                <p style="text-align: justify;">{{ $TutorDetails[0]->introduction }}</p>
                                {{-- <p id="msg2"></p> --}}
                                <h4 style="padding-top:1em">Expertise</h4>
                                <p style="text-align: justify;">{{ $TutorDetails[0]->expertise }}</p>
                            </div>
                        </div>

                        <div class="col-xl col-lg-12 py-4">
                            <img src="{{ asset('Images/users/' . $img[0]->userImage) }}"
                                class="Timg mx-auto d-block" />
                            <div class="card">
                                <h4 class="text-center">Rs 1000</h4>
                                <hr>
                                <div><b>Instructor</b>
                                    <span style="float: right;">{{ $fullname[0]->fullname }}</span>
                                </div>
                                <hr>
                                <div><b>Package</b>
                                    <span style="float: right;">{{ $fullname[0]->fullname }}</span>
                                </div>
                                <hr>
                                <div><b>Language</b>
                                    <span style="float: right;">English/Urdu</span>
                                </div>
                                <a href="" class="mx-auto d-block"><button class="btn btnPrimary btn-lg btnFont"
                                        style="margin-top:3em;">Book a
                                        Session</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script type='text/javascript' src="{{ asset('Js/sidebar.js') }}"></script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function getMessage(Tname) {
            //console.log(Tname);
            $.ajax({

                type: 'POST',
                url: "/getmsg/" + Tname,
                data: '_token = <?php echo csrf_token(); ?>',
                success: function(data) {
                    var i = 0;
                    var d;
                    for (i = 0; i < data.count; i++) {
                        //console.log(data.msg);
                        $('#R').append(
                            '<img src="{{ asset('Images/Quote Left.svg') }}" class="quote Rv"/><div class="Rv" style="margin-bottom:1em;">' +
                            data.msg.findratings[i]
                            .content + '<div>');
                    }
                    $('#D').hide();
                    $('#R').show();
                    $('.R').toggleClass('btnSecond');
                    $('.R').toggleClass('btnPrimary');
                    $('.D').toggleClass('btnPrimary');
                    $('.D').toggleClass('btnSecond');
                },
                error: (error) => {
                    console.log(JSON.stringify(error));
                }
            });
        }

        function details() {
            $('.R').toggleClass('btnSecond');
            $('.R').toggleClass('btnPrimary');
            $('.D').toggleClass('btnPrimary');
            $('.D').toggleClass('btnSecond');
            $('#D').show();
            $('#R').hide();
            $('.Rv').hide();
        }
    </script>

</body>

</html>
