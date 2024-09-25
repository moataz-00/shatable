<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shatably</title>

    <!-- site icons -->
    <link rel="icon" href="{{ asset('img/fevicon.png') }}" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />


    <!-- site css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <!-- colors css -->
    <link rel="stylesheet" href="{{ asset('css/colors.css') }}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />



    <!--aos-->
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}" />

</head>
<body>


    <!-- header -->
    <div id="mySidenav" class="sidenav">
        <ul class="menu_sidebar">
            <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
            <li><a href="{{ route('home') }}">01. Home</a></li>
            <li><a href="{{ route('about') }}">02. About</i></a></li>
            <li><a href="{{ route('projects')}}">03. 3D Designs</a></li>

            <li><a href="{{ route('contact') }}">04. Contact Us</a></li>
        </ul>
    </div>
    <header class="header">
        <div class="header_top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="full">
                            <span class="toggle_icon" style="cursor:pointer" onclick="openNav()"><img
                                    src="img/menu_icon.png" alt="#" /></span>
                            <div style="margin-left: 10px" class="logo_circle">
                                <a href="{{route('home')}}"><img style="width: 60%" class="img-responsive" src="img/logo.jpg"
                                        alt="#" /></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="float-right">
                            <ul class="top_links">
                                <li><a href="{{ route('admin') }}"><img src="images/profile_icon.png" alt="#" /></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- end header -->

    <main>
        @yield('content')
    </main>


    <!-- cpy -->
    <div class="cpy">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full center">
                        <ul class="social_icon">
                            <li><a href="https://www.facebook.com/ShatablyByYoussefAdel"><i
                                        class="fa fa-facebook-f"></i></a></li>
                            <li><a href=" https://wa.me/+201001859800"><i class="fa fa-whatsapp"></i></a></li>
                            {{-- <li><a href="#"><i class="fa fa-linkedin"></i></a></li> --}}
                            <li><a href="https://instagram.com/shatably__?igshid=MTIyMzRjYmRlZg=="><i
                                        class="fa fa-instagram"></i></a></li>

                        </ul>
                    </div>
                    <div class="full text_align_center">
                        <p>© 2012 All Rights Reserved. <a
                                href="{{route('home')}}">SHATABLY</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end cpy -->

    <!--counter-->
    <script src="{{ asset('js/purecounter_vanilla.js') }}"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- menumaker -->
    <script src="{{ asset('js/menumaker.js') }}"></script>
<!--wow-->
{{-- <script src="{{ asset('js/wow.js') }}"></script> --}}
    <!-- Revolution Loaling Fonts and Icons  -->
    <link rel="stylesheet" href="{{ asset('js/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') }}">
    <!-- aos -->
    <script src="{{ asset('js/aos.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/app copy.js') }}"></script>
</body>
</html>
