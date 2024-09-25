@extends('layouts.client')
@section('content')
    @if (Session::has('done'))
        <div class="alert alert-success text-center fs-1">
            {{ Session::get('done') }}

        </div>
    @endif
    @if ($errors->any())
        <div class="class alert alert-danger fs-5 mx-auto col-9 text-center ">

            <ol>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ol>

        </div>
    @endif

    <body id="default_theme" class="contact">

        <!-- Start Banner Slider -->
        <div id="inner_pade" class="banner-slider">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="full">
                            <h2>Contact us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner Slider -->
        <section>
            <div class="container">
                <div class="row margin_top_50">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="full cont_info">
                                   <a href="https://goo.gl/maps/f8dxPgbz5DoJNMTJ8"><i class="fa fa-map-marker"></i></a>
                                    <span>47 Mohammed Youssef, Nasr City</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="full cont_info">
                                    <i class="fa fa-phone"></i>
                                    <span>Call +201001859800</span>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="full cont_info">
                                    <a href="mailto:raaf5505@gmail.com"><i class="fa fa-envelope"
                                            style="font-size: 17px;"></i></a>
                                    <span>raaf5505@gmail.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section -->
        <section class="layout_padding request_form">
            <div class="container">
                <div class="row">

                    <div class="col-md-8 offset-md-2">
                        <div class="full text_align_center">
                            <h3>Request A Call Back</h3>
                            <p>Design your life with <span style=" color: #f7b516">Shatably</span> </p>
                        </div>
                        <div class="full">
                            <form action="{{ route('store') }}" method="POST" class="form_main">
                                @csrf
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-10 offset-md-1">
                                            <div class="full field"data-aos="fade-up"data-aos-duration="1000">
                                                <input type="text" name="name"value="{{old('name')}}" placeholder="Your Name"
                                                    required="" />
                                            </div>
                                            <div class="full field"data-aos="fade-up"data-aos-duration="1050">
                                                <input type="text" name="number" value="{{old('number')}}" placeholder="Phone Number"
                                                    required="" />
                                            </div>
                                            <div class="full field"data-aos="fade-up"data-aos-duration="1100">
                                                <input type="email" name="email" value="{{old('email')}}" placeholder="Email" required="" />
                                            </div>
                                            <div class="full field"data-aos="fade-up"data-aos-duration="1150">
                                                <input type="text"name="message" value="{{old('message')}}"placeholder="Mesaage">
                                            </div>
                                            <div class="full field center"data-aos="fade-up"data-aos-duration="1200">
                                                <button>Send</button>
                                            </div>

                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end section -->
    @endsection
