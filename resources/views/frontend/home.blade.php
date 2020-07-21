@extends('layouts.frontend')

@section('content')
    <!-- Banner Area -->
    <section class="banner_area" id="parallax">
        <img src="images/bannar-shap-1.png" alt="" class="layer layer_1" data-depth="0.10">
        <img src="images/bannar-shap-2.png" alt="" class="layer layer_2" data-depth="0.35">
         <div class="container text-center">
             {{-- <h2 class="wow fadeInUp">We Are Creative Agency, Create &amp; Make Your Dream</h2> --}}
             <img src="images/brand.png" alt="" class="image-banner" width="600px">
             <h2 class="wow fadeInUp">Universitas Mercu Buana, Jakarta</h2>
             <h3 class="wow fadeInUp" data-wow-delay="0.3s">30 - 31 July 2019</h3>
             <a href="#" class="theme_btn wow fadeInUp" data-wow-delay="0.5s">Sign In / Register</a>
             <a class="popup-youtube video_btn theme_btn wow fadeInUp" data-wow-delay="0.5s" href="https://player.vimeo.com/video/142874198" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">Video<i class="fa fa-play-circle "></i></a>
             {{-- <img src="images/bannar-img.png" alt="" class="bannar_img wow fadeInRight"> --}}
         </div>
     </section>
     <!-- End Banner Area -->

     <!-- About Area -->
     <section class="about_agency_area aaa_2" style="box-shadow: 0px 48px 62px 0px rgba(236, 234, 234, 0.35);padding-bottom:0 !important">
         <div class="round_shap"></div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 agency_contant">
                      <div class="icons"><i class="far fa-gem"></i></div>
                      <h4>#ICHAS2019</h4>
                      <div class="float-box-left">
                             <h2>About ICHAS</h2>
                             <p>
                                International Conference of Humanities and Applied Science (ICHAS) 2019 is
                                the 3rd annual event which is held by International Class on Management and
                                Informatics Department of Universitas Mercu Buana, Jakarta, Indonesia.<br>
                                The International Conference and Seminar will be themed “Cashless Society:
                                The Drawbacks of Modern Transaction” which consist of sub-theme, as follows:</p>
                                <ol>
                                    <li>Non-Cash Movement by Indonesian Government</li>
                                    <li>Shifting Paradigms in Payments Behaviour</li>
                                </ol>
                            <a href="#" class="theme_btn wow fadeInUp" data-wow-delay="0.5s">Read More</a>
                      </div>

                      <div class="float-box-right">
                         <div class="fantasy fantasy_4">
                             <span class="icons"></span>
                             <a href="services-single.html">Important Dates</a>
                             <p>Abstract Submission Deadline : <b>05 May 2019</b><br>
                            Acceptance Notification : <b>19 May 2019</b><br>
                            Full Paper Submission Deadline : <b>25 June 2019</b><br>
                            Confirmation and Registration : <b>27 June - 10 July 2019</b></p>
                         </div>
                      </div>

                  </div>
              </div>
          </div>
      </section>

      <section class="fantasy_area">
         <div class="row fantasy_inner">
             <div class="container">
                 <div class="col-xl-12 col-lg-12 row fantasy_items">
                     <div class="col-lg-4 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                         <div class="fantasy">
                             <span class="icons"><i class="far fa-clone"></i></span>
                             <h4>Seminar Program</h4>
                             <p>Every product must make a statement and we’re ready to create it with holistic approach to design.</p>
                             <a href="#" class="theme_btn wow fadeInUp" data-wow-delay="0.5s">Read More</a>
                         </div>
                     </div>
                     <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                         <div class="fantasy fantasy_2">
                             <span class="icons"><i class="fa fa-moon-o"></i></span>
                             <h4>Conference Program</h4>
                             <p>We translate your business goals <br> and objectives into insightful UX, remarkable UI and distinctive </p>
                             <a href="#" class="theme_btn wow fadeInUp" data-wow-delay="0.5s">Read More</a>
                         </div>
                     </div>
                     <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                         <div class="fantasy fantasy_2">
                             <span class="icons"><i class="fa fa-moon-o"></i></span>
                             <h4>The Pricing</h4>
                             <p>We translate your business goals <br> and objectives into insightful UX, remarkable UI and distinctive </p>
                             <a href="#" class="theme_btn wow fadeInUp" data-wow-delay="0.5s">Read More</a>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <!-- Contact Us Area -->
     <section class="contact_us text-center">
         <div class="container">
             <div class="contact_inner">
                 <h2>Our Sponsors</h2>
                 <img src="images/sponsor1.svg" class="img-sponsor">
                 <img src="images/sponsor2.svg" class="img-sponsor">
                 <img src="images/sponsor3.svg" class="img-sponsor">
                 <img src="images/sponsor4.svg" class="img-sponsor">
                 <img src="images/sponsor5.svg" class="img-sponsor">
             </div>
         </div>
     </section>
     <!-- End Contact Us Area -->

@endsection
