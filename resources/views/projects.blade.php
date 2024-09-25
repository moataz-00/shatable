@extends('layouts.client')
@section('content')
    <!-- Start Banner Slider -->
    <div id="inner_pade" class="banner-slider">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="full">
                        <h2>3D Designs</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Slider -->
    <!-- section -->


    <!-- Button trigger modal -->




    <section class="layout_padding what_we_do">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="full decorate_blog">
                        <img style="width: 100%" src="{{ asset('images/project0/1.jpg') }}" alt="#" />
                        <a type="button" class="decorate_blog_bt" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <div style="display: block" class="full cont_info ">
                                <i class="fa fa-map-marker"></i>
                                <span style="font-size: 10px">Hyde Park</span>
                             </div>
                        </a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div style="width: 130%;height:400px" class="modal-content">

                                    <div class="modal-body">
                                        <div id="carouselExampleFade" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project0/1.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project0/2.jpg') }}">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project0/3.jpg') }}">
                                                </div>

                                            </div>
                                            <button style="position: absolute;border:0px;margin-top:10%"
                                                class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button style="position:absolute;border:0px;margin-top:10%"
                                                class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full decorate_blog text-center">
                        <img style="width: 100%" src="{{ asset('images/project1/1.jpg') }}" alt="#" />
                        <a type="button" class="decorate_blog_bt" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                            <div style="display: block" class="full cont_info ">
                    <i class="fa fa-map-marker"></i>
                    <span style="font-size: 10px">Fifth Settlement</span>
                 </div>
                        </a>
                        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div style="width: 130%;height:400px" class="modal-content">

                                    <div class="modal-body">
                                        <div id="carouselExampleFade1" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project1/1.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project1/2.jpg') }}">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project1/3.jpg') }}">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project1/4.jpg') }}">
                                                </div>

                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project1/5.jpg') }}">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project1/6.jpg') }}">
                                                </div>

                                            </div>
                                            <button style="position: absolute;border:0px;margin-top:10%"
                                                class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade1" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button style="position:absolute;border:0px;margin-top:10%"
                                                class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade1" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full decorate_blog">
                        <img style="width: 100%" src="{{ asset('images/project2/1.jpg') }}" alt="#" />
                        <a type="button" class="decorate_blog_bt" data-bs-toggle="modal"
                            data-bs-target="#exampleModal2">
                            <div style="display: block" class="full cont_info ">
                    <i class="fa fa-map-marker"></i>
                    <span style="font-size: 10px">Villette Sodic</span>
                 </div>
                        </a>
                        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div style="width: 130%;height:400px" class="modal-content">

                                    <div class="modal-body">
                                        <div id="carouselExampleFade2" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project2/1.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project2/2.jpg') }}">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project2/3.jpg') }}">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project2/4.jpg') }}">
                                                </div>


                                            </div>
                                            <button style="position: absolute;border:0px;margin-top:10%"
                                                class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button style="position:absolute;border:0px;margin-top:10%"
                                                class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full decorate_blog">
                        <img style="width: 100%" src="{{ asset('images/project3/1.jpg') }}" alt="#" />
                        <a type="button" class="decorate_blog_bt" data-bs-toggle="modal"
                            data-bs-target="#exampleModal3">
                            <div style="display: block" class="full cont_info ">
                    <i class="fa fa-map-marker"></i>
                    <span style="font-size: 10px">Palm hills Avenue</span>
                 </div>
                        </a>
                        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div style="width: 130%;height:400px" class="modal-content">

                                    <div class="modal-body">
                                        <div id="carouselExampleFade3" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project3/1.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project3/2.jpg') }}">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project3/3.jpg') }}">
                                                </div>

                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project3/4.jpg') }}">
                                                </div>

                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project3/5.jpg') }}">
                                                </div>

                                            </div>
                                            <button style="position: absolute;border:0px;margin-top:10%"
                                                class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade3" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button style="position:absolute;border:0px;margin-top:10%"
                                                class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade3" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
             <div class="row">
                <div class="col-md-3">
                    <div class="full decorate_blog">
                        <img style="width: 100%" src="{{ asset('images/project4/1.jpg') }}" alt="#" />
                        <a type="button" class="decorate_blog_bt" data-bs-toggle="modal"
                            data-bs-target="#exampleModal4">
                            <div style="display: block" class="full cont_info ">
                    <i class="fa fa-map-marker"></i>
                    <span style="font-size: 10px">Stone Residence</span>
                 </div>
                        </a>
                        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div style="width: 130%;height:400px" class="modal-content">

                                    <div class="modal-body">
                                        <div id="carouselExampleFade4" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project4/1.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project4/2.jpg') }}">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project4/3.jpg') }}">
                                                </div>

                                            </div>
                                            <button style="position: absolute;border:0px;margin-top:10%"
                                                class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade4" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button style="position:absolute;border:0px;margin-top:10%"
                                                class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade4" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full decorate_blog">
                        <img style="width: 100%" src="{{ asset('images/project5/1.jpg') }}" alt="#" />
                        <a type="button" class="decorate_blog_bt" data-bs-toggle="modal"
                            data-bs-target="#exampleModal5">
                            <div style="display: block" class="full cont_info ">
                    <i class="fa fa-map-marker"></i>
                    <span style="font-size: 10px">  Zayed Dunes </span>
                 </div>
                        </a>
                        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div style="width: 130%;height:400px" class="modal-content">

                                    <div class="modal-body">
                                        <div id="carouselExampleFade5" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project5/1.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project5/2.jpg') }}">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project5/3.jpg') }}">
                                                </div>

                                            </div>
                                            <button style="position: absolute;border:0px;margin-top:10%"
                                                class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade5" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button style="position:absolute;border:0px;margin-top:10%"
                                                class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade5" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full decorate_blog">
                        <img style="width: 100%" src="{{ asset('images/project6/1.jpg') }}" alt="#" />
                        <a type="button" class="decorate_blog_bt" data-bs-toggle="modal"
                            data-bs-target="#exampleModal6">
                            <div style="display: block" class="full cont_info ">
                    <i class="fa fa-map-marker"></i>
                    <span style="font-size: 10px"> Misk Store </span>
                 </div>
                        </a>
                        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel6"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div style="width: 130%;height:400px" class="modal-content">

                                    <div class="modal-body">
                                        <div id="carouselExampleFade6" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project6/1.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project6/2.jpg') }}">
                                                </div>

                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project6/3.jpg') }}">
                                                </div>

                                            </div>
                                            <button style="position: absolute;border:0px;margin-top:10%"
                                                class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade6" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button style="position:absolute;border:0px;margin-top:10%"
                                                class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade6" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="col-md-3">
                    <div class="full decorate_blog">
                        <img style="width: 100%" src="{{ asset('images/project7/1.jpg') }}" alt="#" />
                        <a type="button" class="decorate_blog_bt" data-bs-toggle="modal"
                            data-bs-target="#exampleModal7">
                            <div style="display: block" class="full cont_info ">
                    <i class="fa fa-map-marker"></i>
                    <span style="font-size: 10px">  Fifth Settlement  </span>
                 </div>
                        </a>
                        <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel7"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div style="width: 130%;height:400px" class="modal-content">

                                    <div class="modal-body">
                                        <div id="carouselExampleFade7" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project7/1.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project7/2.jpg') }}">
                                                </div>


                                            </div>
                                            <button style="position: absolute;border:0px;margin-top:10%"
                                                class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade7" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button style="position:absolute;border:0px;margin-top:10%"
                                                class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade7" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>





            {{-- <div class="row">
                <div class="col-md-3">
                    <div class="full decorate_blog">
                        <img style="width: 100%" src="{{ asset('images/project8/1.jpg') }}" alt="#" />
                        <a type="button" class="decorate_blog_bt" data-bs-toggle="modal"
                            data-bs-target="#exampleModal8">
                            <div style="display: block" class="full cont_info ">
                    <i class="fa fa-map-marker"></i>
                    <span style="font-size: 10px">  Zayed Dunes </span>
                 </div>
                        </a>
                        <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel8"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div style="width: 130%;height:400px" class="modal-content">

                                    <div class="modal-body">
                                        <div id="carouselExampleFade8" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project8/1.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project8/2.jpg') }}">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project8/3.jpg') }}">
                                                </div>

                                            </div>
                                            <button style="position: absolute;border:0px;margin-top:10%"
                                                class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade8" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button style="position:absolute;border:0px;margin-top:10%"
                                                class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade8" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="full decorate_blog">
                        <img style="width: 100%" src="{{ asset('images/project9/1.jpg') }}" alt="#" />
                        <a type="button" class="decorate_blog_bt" data-bs-toggle="modal"
                            data-bs-target="#exampleModal9">
                            <div style="display: block" class="full cont_info ">
                    <i class="fa fa-map-marker"></i>
                    <span style="font-size: 10px">Misk Store </span>
                 </div>
                        </a>
                        <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel9"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div style="width: 130%;height:400px" class="modal-content">

                                    <div class="modal-body">
                                        <div id="carouselExampleFade9" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project9/1.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project9/2.jpg') }}">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project9/3.jpg') }}">
                                                </div>

                                            </div>
                                            <button style="position: absolute;border:0px;margin-top:10%"
                                                class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade9" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button style="position:absolute;border:0px;margin-top:10%"
                                                class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade9" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                 <div class="col-md-3">
                    <div class="full decorate_blog">
                        <img style="width: 100%" src="{{ asset('images/project10/1.jpg') }}" alt="#" />
                        <a type="button" class="decorate_blog_bt" data-bs-toggle="modal"
                            data-bs-target="#exampleModal10">
                            <div style="display: block" class="full cont_info ">
                    <i class="fa fa-map-marker"></i>
                    <span style="font-size: 10px">Fifth Settlement </span>
                 </div>
                        </a>
                        <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel10"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div style="width: 130%;height:400px" class="modal-content">

                                    <div class="modal-body">
                                        <div id="carouselExampleFade10" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project10/1.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project10/2.jpg') }}">
                                                </div>

                                            </div>
                                            <button style="position: absolute;border:0px;margin-top:10%"
                                                class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade10" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button style="position:absolute;border:0px;margin-top:10%"
                                                class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade10" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>



                <div class="col-md-3">
                    <div class="full decorate_blog">
                        <img style="width: 100%" src="{{ asset('images/project11/1.jpg') }}" alt="#" />
                        <a type="button" class="decorate_blog_bt" data-bs-toggle="modal"
                            data-bs-target="#exampleModal11">
                            <div style="display: block" class="full cont_info ">
                    <i class="fa fa-map-marker"></i>
                    <span style="font-size: 10px">Zayed Dunes </span>
                 </div>
                        </a>
                        <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel11"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div style="width: 130%;height:400px" class="modal-content">

                                    <div class="modal-body">
                                        <div id="carouselExampleFade11" class="carousel slide carousel-fade"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project11/1.jpg') }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project11/2.jpg') }}">
                                                </div>
                                                <div class="carousel-item">
                                                    <img style="width: 100%;height:360px"
                                                        src="{{ asset('images/project11/3.jpg') }}">
                                                </div>

                                            </div>
                                            <button style="position: absolute;border:0px;margin-top:10%"
                                                class="carousel-control-prev" type="button"
                                                data-bs-target="#carouselExampleFade11" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button style="position:absolute;border:0px;margin-top:10%"
                                                class="carousel-control-next" type="button"
                                                data-bs-target="#carouselExampleFade11" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div> --}}

        </div>
    </section>
    <!-- end section -->
@endsection
