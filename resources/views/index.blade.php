@extends('layouts.client')
@section('content')

    <body id="default_theme" class="home_page1">

        <!-- Start Banner Slider -->
        <div class="banner-slider">
            <div class="container-fluid">
                <div class="row">
                    <div id="slider_main" class="carousel slide" data-ride="carousel">
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="full">
                                    <div class="left_blog_top">
                                        <h3>Finishing<br>Services</h3>
                                        <p>We start the implementation process fom A <span style="color: #f7b516"><i
                                                    class="fa fa-arrow-right" aria-hidden="true"></i> </span>Z</p>
                                        <a class="bt_main" href="{{ route('contact') }}">Contact Us</a>
                                    </div>
                                    <div class="right_blog_top">
                                        <img src="img/slide1_right.png" alt="#" />
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="full">
                                    <div class="left_blog_top">
                                        <h3>2D/3D designs<br></h3>
                                        <p>Reflect your vision on how the space would look</p>
                                        <a class="bt_main" href="{{ route('contact') }}">Contact Us</a>
                                    </div>
                                    <div class="right_blog_top">
                                        <img style="width: 100% ;height:570px" src="{{asset('img/1.webp')}}" alt="#" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide_arrow">
                            <span>
                                <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </a>
                                <a class="carousel-control-next" href="#slider_main" data-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Slider -->
        <!-- section -->

        <div class="container mt-5  "data-aos="fade-up" data-aos-duration="1000">

            <div class="row text-center mt-5">
                <div style="box-shadow: 0 0px 4px 0px rgba(0,0,0,.10);" class="col-md-3 col-sm-12 mt-5 ">

                    <p class="mt-5"><i class="fa fa-users fs-1" aria-hidden="true"></i>
                    <div class="fs-2 fw-bold text-secondary">Happy Clients</div> <br>

                    <div  style="color: #f7b516" class="fs-3">+<span data-purecounter-start="0" data-purecounter-end="100"
                            class="purecounter">0</span></div>
                    </p>
                </div>

                <div style="box-shadow: 0 0px 4px 0px rgba(0,0,0,.10);" class="col-md-3 col-sm-12 mt-5 ">

                    <p class="mt-5"><i class="fa fa-tasks fs-1" aria-hidden="true"></i>
                    <div class="fs-2 fw-bold text-secondary">Projects</div> <br>

                    <div style="color: #f7b516" class="fs-3">+<span data-purecounter-start="0" data-purecounter-end="75"
                            class="purecounter">0</span></div>
                    </p>
                </div>

                <div style="box-shadow: 0 0px 4px 0px rgba(0,0,0,.10);" class="col-md-3 col-sm-12 mt-5 ">

                    <p class="mt-5"><i class="fa fa-headphones fs-1" aria-hidden="true"></i>
                    <div class="fs-2 fw-bold text-secondary">Hours Of Support</div> <br>

                    <div style="color: #f7b516" class="fs-3">+<span data-purecounter-start="0" data-purecounter-end="120"
                            class="purecounter">0</span></div>
                    </p>
                </div>

                <div style="box-shadow: 0 0px 4px 0px rgba(0,0,0,.10);" class="col-md-3 col-sm-12 mt-5  ">

                    <p class="mt-5"><i class="fa fa-cogs  fs-1" aria-hidden="true"></i>
                    <div class="fs-1 fw-bold text-secondary">Hard Workers</div> <br>

                    <div style="color: #f7b516" class="fs-3">+<span data-purecounter-start="0" data-purecounter-end="40"
                            class="purecounter">0</span></div>
                    </p>
                </div>

            </div>
        </div>


        <!-- end section -->

        <!-- section -->
        <section class="layout_padding what_we_do">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full heading_s1">
                            <h3>3D DESIGNS</h3>
                            <p>your dream <span style="color: #f7b516">home</span> finally comes to life !</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="full decorate_blog">
                            <img src="{{ asset('images/project1/1.jpg') }}" alt="#" />
                            <div class="decorate_blog_bt" href="">A Little Bit Of Classic</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="full decorate_blog">
                            <img src="{{ asset('images/project2/1.jpg') }}" alt="#" />
                            <div class="decorate_blog_bt" href="">Modern Reception</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="full decorate_blog">
                            <img src="{{ asset('images/project3/1.jpg') }}" alt="#" />
                            <div class="decorate_blog_bt" href="">Luxurious Reception</div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="full decorate_blog">
                            <img src="{{ asset('images/project1/4.jpg') }}" alt="#" />
                            <div class="decorate_blog_bt" href="">Luxury and Simplicity</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="full">
                            <a class="read_more_bt float-right" href="{{ route('projects') }}">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->


<!-- section -->
{{-- <section class="layout_padding what_we_do">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="full heading_s1">
                    <h3>FINISHING SERVICES</h3>
                    <p>your dream <span style="color: #f7b516">home</span> finally comes to life !</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="full decorate_blog">
                    <img src="{{ asset('images/project1/1.jpg') }}" alt="#" />
                    <div class="decorate_blog_bt" href="">A Little Bit Of Classic</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="full decorate_blog">
                    <img src="{{ asset('images/project2/1.jpg') }}" alt="#" />
                    <div class="decorate_blog_bt" href="">Modern Reception</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="full decorate_blog">
                    <img src="{{ asset('images/project3/1.jpg') }}" alt="#" />
                    <div class="decorate_blog_bt" href="">Luxurious Reception</div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="full decorate_blog">
                    <img src="{{ asset('images/project1/4.jpg') }}" alt="#" />
                    <div class="decorate_blog_bt" href="">Luxury and Simplicity</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="full">
                    <a class="read_more_bt float-right" href="{{ route('finish') }}">Read More</a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- end section -->



        <!-- section -->
        <section class="layout_padding about_section"data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-7 p-relative r-left">
                                    <div class="full back_blog text_align_center padding_right_left_15">
                                        <img src="images/about_img.png" alt="#" />
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="full heading_s1">
                                        <h3>About</h3>
                                        <ul style="list-style: none">
                                            <li>Interior Design Studio</li>
                                            <li>Since 2012

                                        </ul><br><br>
                                        <p>With a goal to design homes that are truly welcoming and comfortable. <br>
                                            Shatably was
                                            founded in 2012 as a sub company of <span style=" color: #f7b516">Mohamed Adel
                                            </span>Real Estate
                                            Investment Company.
                                            Fusing elegance and convenience with an artistic touch, we present our clients
                                            with the home they have always dreamed of, and even better. </p>
                                    </div>
                                    <div class="full">
                                        <a class="read_more_bt" href="{{ route('about') }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- section -->
        <section class="layout_padding design_layout">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="full">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="full heading_s1">
                            <h3>Best<br>Decorating for<br>Your home</h3>
                            <p class="fs-3">now you can <span style="color: #f7b516"> contact</span> us.
                                facebook,instagram and whatsapp <br> or leave a message. </p>
                        </div>
                        <div class="full">
                            <a class="read_more_bt" href="{{ route('contact') }}">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
        <!-- section -->
        <section class="layout_padding" data-aos="fade-up" data-aos-duration="1200">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full heading_s1">
                            <h3>Latest News</h3>
                            <p>Our process at <span style="color: #f7b516">Shatably</span> is as simple and seamless as it
                                can be!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="blog_style">
                            <div class="full news_blog">
                                <img width="100%" style="height: 450px" src="{{ asset('images/news3.jpg') }}"
                                    alt="#" />
                            </div>
                            <div class="full post_colum">
                                <ul>
                                    <li>Post By : Shatably</li>

                                </ul>
                            </div>
                            <div class="full">
                                <h3>Compound El Patio Shrouk</h3>
                                <p>Book your next Design! <br> Luxurious Modern Living room by Shatably..</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="blog_style">
                            <div class="full news_blog">
                                <img width="100%" style="height: 450px" src="{{ asset('images/news2.jpg') }}"
                                    alt="#" />
                            </div>
                            <div class="full post_colum">
                                <ul>
                                    <li>Post By : Shatably</li>

                                </ul>
                            </div>
                            <div class="full">
                                <h3>Compound El Patio Shrouk</h3>
                                <p>Interior design for a bed room in Compound El Patio Shrouk , simplicity and modern in one
                                    design..</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- section -->
        <section class="layout_padding" data-aos="fade-up" data-aos-duration="1400">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full heading_s1 text_align_center">
                            <h3>Reviews</h3>
                        </div>
                        <div class="testimonial_slider">
                            <div class="full">
                                <div class="client_slider_main2">
                                    <div id="testimonial2" class="client_slider_main">
                                        <div class="item">
                                            <div class="row"data-aos="fade-up" data-aos-duration="1200">
                                                <div class="col-md-3">
                                                    <div class="full">
                                                        <div class="center"> <img class="rounded-circle" style="width: 50%"
                                                                src="{{ asset('images/reviews/1.jpg') }}"
                                                                alt="#" /> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9" >
                                                    <div class="full">
                                                        <div class="testi_head">
                                                            <h4>Ahmed Abd El Rahman</h4>
                                                            <p style="color: #f7b516">Client</p>
                                                        </div>
                                                    </div>
                                                    <div class="full testi_slide">
                                                        <p><img src="images/layout_img/quate_left_test.png"
                                                                alt="#" />I am totally recommend shatabli , they
                                                            provide a very good service with a competitive price
                                                            Never miss the chance to deal with them..</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item mt-5">
                                            <div class="row"data-aos="fade-up" data-aos-duration="1200">
                                                <div class="col-md-3">
                                                    <div class="full">
                                                        <div class="center"> <img class="rounded-circle" style="width: 50%"
                                                                src="{{ asset('images/reviews/2.jpg') }}"
                                                                alt="#" /> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="full">
                                                        <div class="testi_head">
                                                            <h4>Eslam Ezzat</h4>
                                                            <p style="color: #f7b516">Client</p>
                                                        </div>
                                                    </div>
                                                    <div class="full testi_slide">
                                                        <p><img src="images/layout_img/quate_left_test.png"
                                                                alt="#" />the most recomended solution to feel
                                                            comfartable and satisfied is to deal with one of the top leading
                                                            professional companies in the market which always exceeds the
                                                            customer's expectations level by giving the most amazing designs
                                                            with the highst quality materials and the most affordable prices
                                                            .. .. nothing is more proffessional to deal with.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item mt-5">
                                            <div class="row"data-aos="fade-up" data-aos-duration="1200">
                                                <div class="col-md-3">
                                                    <div class="full">
                                                        <div class="center"> <img class="rounded-circle" style="width: 50%"
                                                                src="{{asset('images/reviews/3.jpg')}}"
                                                                alt="#" /> </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="full">
                                                        <div class="testi_head">
                                                            <h4>Roger Saba</h4>
                                                            <p style="color: #f7b516">Client</p>
                                                        </div>
                                                    </div>
                                                    <div class="full testi_slide">
                                                        <p><img src="images/layout_img/quate_left_test.png"
                                                                alt="#" />Excellent service in terms of quality
                                                            finishing and meeting the set delivery date..</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->







    </body>
@endsection
