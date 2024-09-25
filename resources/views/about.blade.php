@extends('layouts.client')
@section('content')
<!-- Start Banner Slider -->
<div id="inner_pade" class="banner-slider">
    <div class="container">
       <div class="row">
          <div class="col-sm-12">
             <div class="full">
                <h2>About us</h2>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!-- End Banner Slider -->

 <!-- section -->
 <section class="layout_padding about_section">
    <div class="container">
       <div class="row">
          <div class="col-md-7 p-relative r-left"data-aos="fade-right"data-aos-duration="1000">
             <div class="full back_blog text_align_center padding_right_left_15">
                <img style="width: 100%" src="{{asset('images/about/1.jpg')}}" alt="#" />
             </div>
          </div>
          <div class="col-md-5"data-aos="fade-left"data-aos-duration="1000">
             <div class="full heading_s1">
                <h3>Best Bedroom Decoration</h3>
                <div style="display: block" class="full cont_info ">
                    <i class="fa fa-map-marker"></i>
                    <span>Zayed Dunes </span>
                 </div><br><br><br>
                <p>Because we know how stressful life is, we try our best to make it easier for you..</p>
             </div>
             <div class="full">
                <a class="read_more_bt" href="{{route('contact')}}">Get A Quote</a>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- end section -->
 <!-- section -->
 <section class="layout_padding about_section">
   <div class="container">
      <div class="row">

         <div class="col-md-5"data-aos="fade-right"data-aos-duration="1000">
            <div class="full heading_s1">
               <h3>Best bathroom design</h3>
               <div style="display: block" class="full cont_info ">
                <i class="fa fa-map-marker"></i>
                <span>Mountain View Hyde park </span>
             </div><br><br><br>
               <p class="mt-3">There is a reason why they are called RESTROOMS !!</p>
            </div>
            <div class="full">
               <a class="read_more_bt" href="{{route('contact')}}">Get A Quote</a>
            </div>
         </div>

         <div class="col-md-7 p-relative r-right"data-aos="fade-left"data-aos-duration="1000">
            <div class="full back_blog text_align_center padding_right_left_15">
               <img style="width: 100%" src="{{asset('images/about/2.jpg')}}" alt="#" />
            </div>
         </div>
      </div>
   </div>
</section>
<!-- end section -->
 <!-- section -->
 <section class="layout_padding about_section">
    <div class="container">
       <div class="row">
          <div class="col-md-7 p-relative r-left"data-aos="fade-right"data-aos-duration="1000">
             <div class="full back_blog text_align_center padding_right_left_15">
                <img style="width: 100%" src="{{asset('images/about/3.jpg')}}" alt="#" />
             </div>
          </div>
          <div class="col-md-5"data-aos="fade-left"data-aos-duration="1000">
             <div class="full heading_s1">
                <h3>Best living room designs</h3>
                <div style="display: block" class="full cont_info ">
                    <i class="fa fa-map-marker"></i>
                    <span>EL Shrouk City </span>
                 </div><br><br><br>
                <p>Our living room Design… Elegance & Comfy. <br> Book your next design!</p>
             </div>
             <div class="full">
                <a class="read_more_bt" href="{{route('contact')}}">Get A Quote</a>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- end section -->


@endsection
