@extends('layouts.frontend')

@section('content')

     <section class="banner">
         <div class="container">
             <h2 class="wow fadeInUp">About The Event</h2>
             <ul class="text-breadcumb">
                <li><a href="{{route('frontend')}}">Home</a></li>
                 <li class="separator">/</li>
                 <li>About The Event</li>
             </ul>
         </div>
     </section>

     <!-- About Area -->
     <section class="about_agency_area aaa_2" style="box-shadow: 0px 48px 62px 0px rgba(236, 234, 234, 0.35);padding-bottom:0 !important">
         <div class="round_shap"></div>
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 agency_contant">
                      <div class="icons"><i class="far fa-gem"></i></div>
                      <h4>#ICHAS2019</h4>
                      <div class="float-box-left">
                             <p>Fast, safe, comfortable, easy and efficient in conducting
                                 transactions is the reason why the Indonesia people have
                                 a great response to the non-cash payment system and this
                                 non-cash payment system has bbeen developed by banks and
                                 non-banks as payment system providers in Indonesia.<br><br>
                                 The development of the information technology followed by
                                 a higher level of bank competition has encouraged the
                                 banking or non-bank sectors to be more innovative in
                                 providing various alternative non-cash payment services
                                 in the form of transter systems and payment instruments
                                 using electronic cards that are safe, fast and efficient,
                                 and global in nature.

                            </p>
                      </div>

                      <div class="float-box-right">
                         <div class="fantasy fantasy_4">
                             <span class="icons"></span>
                             <a href="services-single.html">Important Dates</a>
                             <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, corporis eum? Debitis nulla iure, dolore suscipit nihil excepturi recusandae, perspiciatis et deserunt eius ipsum quo. Accusantium animi assumenda culpa consectetur?   Every product must make a statement and we’re ready to create it with holistic approach to design.</p>
                         </div>
                      </div>

                  </div>
              </div>
          </div>
      </section>

     <!-- About Area -->
     <section class="about_agency_area aaa_2" style="box-shadow: 0px 48px 62px 0px rgba(236, 234, 234, 0.35); padding-bottom:0 !important">
         <div class="round_shap"></div>
         <div class="container">
             <div class="row">
                 <div class="col-lg-12 agency_contant">
                     <div class="icons"><i class="far fa-gem"></i></div>
                     <h2>The Speakers</h2>

                     <section class="team_area ta_3">
                             <div class="row">
                                 <div class="col-lg-3 col-sm-6 team_items">
                                     <a href="#"><img src="images/team-1.png" alt=""></a>
                                     <a href="#" class="heding">Sadia Afsana<h6>Web Development</h6></a>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 team_items">
                                     <a href="#"><img src="images/team-2.png" alt=""></a>
                                     <a href="#" class="heding">Emran Khan<h6>Frontend Web Developer</h6></a>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 team_items">
                                     <a href="#"><img src="images/team-3.png" alt=""></a>
                                     <a href="#" class="heding">Al Mahmud<h6>UX/UI Designer</h6></a>
                                 </div>
                                 <div class="col-lg-3 col-sm-6 team_items">
                                     <a href="#"><img src="images/team-4.png" alt=""></a>
                                     <a href="#" class="heding">Mahfuz Riaz<h6>SEO at TemplateMr</h6></a>
                                 </div>
                             </div>
                         </section>
                 </div>
             </div>
         </div>
     </section>

      <!-- Pricing plan Area -->
      <section class="pricing_plan_area">
         <div class="container">
            <div class="tittle">
                 <h2>The Program</h2>
                 <ul class="nav tab_list">
                     <li><a class="nav-link active" data-toggle="pill" href="#monthly" role="tab">Day 1</a></li>
                     <li><a class="nav-link" data-toggle="pill" href="#annual" role="tab">Day 2</a></li>
                 </ul>
            </div>
             <div class="tab-content">
                 <div class="tab-pane fade show active" id="monthly" role="tabpanel">
                     <div class="row pricing_row">

                         <div class="accordion card-event wow fadeIn" id="accordionExample">
                             <div class="card">
                               <div class="card-header" id="headingOne">
                                 <h5 class="mb-0 card-title">
                                   <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     08.00 <span style="padding-right:40px;"></span> Registration
                                   </button>
                                 </h5>
                               </div>

                               <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                 <div class="card-body">
                                   <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                       terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                       skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                       Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                       single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                       helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                       proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                       craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                       probably haven't heard of them accusamus labore sustainable VHS.</p>
                                 </div>
                               </div>
                             </div>
                             <div class="card">
                               <div class="card-header" id="headingTwo">
                                 <h5 class="mb-0">
                                   <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                     10.00<span style="padding-right:40px;"></span>Keynote Speech 1
                                   </button>
                                 </h5>
                               </div>
                               <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                     <div class="card-body">
                                         <img src="images/team-1.png" class="float-left" width="250px" style="padding: 20px;margin-right:20px;">
                                         <h4>Sri Mulyani Indrawati, S.E., M.Sc.</h4>
                                         <h4 class="speaker-title">Head of Indonesia Financial Ministry</h4>
                                         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non dolorum, voluptas asperiores dolore neque quo facere suscipit officia reiciendis fuga maxime vitae quas voluptatibus quam, praesentium adipisci sint tempora harum.</p>
                                         <p class="speaker-detail">
                                             <i class="fa fa-clock"></i> 45 mins
                                             <span style="padding-right:10px"></span>
                                             <i class="fa fa-map-marker "></i> Auditorium 7th floor of Tower Building
                                         </p>
                                     </div>
                                 </div>
                             </div>
                             <div class="card">
                               <div class="card-header" id="headingThree">
                                 <h5 class="mb-0">
                                   <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                     11.00<span style="padding-right:40px;"></span>Keynote Speech 2
                                   </button>
                                 </h5>
                               </div>
                               <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                     <div class="card-body">
                                         <img src="images/team-1.png" class="float-left" width="250px" style="padding: 20px;margin-right:20px;">
                                         <h4>Agustinus Hari Tangguh Wibowo</h4>
                                         <h4 class="speaker-title">Public Relation Director of OJK </h4>
                                         <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non dolorum, voluptas asperiores dolore neque quo facere suscipit officia reiciendis fuga maxime vitae quas voluptatibus quam, praesentium adipisci sint tempora harum.</p>
                                         <p class="speaker-detail">
                                             <i class="fa fa-clock"></i> 45 mins
                                             <span style="padding-right:10px"></span>
                                             <i class="fa fa-map-marker "></i> Auditorium 7th floor of Tower Building
                                         </p>
                                     </div>
                               </div>
                             </div>
                             <div class="card">
                                 <div class="card-header" id="headingFour">
                                     <h5 class="mb-0">
                                     <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                         11.00<span style="padding-right:40px;"></span>Keynote Speech 3
                                     </button>
                                     </h5>
                                 </div>
                                 <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                         <div class="card-body">
                                             <img src="images/team-1.png" class="float-left" width="250px" style="padding: 20px;margin-right:20px;">
                                             <h4>Agustinus Hari Tangguh Wibowo</h4>
                                             <h4 class="speaker-title">Public Relation Director of OJK </h4>
                                             <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non dolorum, voluptas asperiores dolore neque quo facere suscipit officia reiciendis fuga maxime vitae quas voluptatibus quam, praesentium adipisci sint tempora harum.</p>
                                             <p class="speaker-detail">
                                                 <i class="fa fa-clock"></i> 45 mins
                                                 <span style="padding-right:10px"></span>
                                                 <i class="fa fa-map-marker "></i> Auditorium 7th floor of Tower Building
                                             </p>
                                         </div>
                                 </div>
                                 </div>
                             <div class="clearfix"></div>
                           </div>

                     </div>
                 </div>
                 <div class="tab-pane fade" id="annual" role="tabpanel">
                     <div class="row pricing_row">

                             <div class="accordion card-event" id="accordionExample2">
                                     <div class="card">
                                       <div class="card-header" id="headingOne2">
                                         <h5 class="mb-0 card-title">
                                           <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                             08.00 <span style="padding-right:40px;"></span> Registration
                                           </button>
                                         </h5>
                                       </div>

                                       <div id="collapseOne2" class="collapse show" aria-labelledby="headingOne2" data-parent="#accordionExample2">
                                         <div class="card-body">
                                           <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus
                                               terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                                               skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                                               Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                                               single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                               helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                               proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat
                                               craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                                               probably haven't heard of them accusamus labore sustainable VHS.</p>
                                         </div>
                                       </div>
                                     </div>
                                     <div class="card">
                                       <div class="card-header" id="headingTwo2">
                                         <h5 class="mb-0">
                                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="false" aria-controls="collapseTwo2">
                                             10.00<span style="padding-right:40px;"></span>Keynote Speech 1
                                           </button>
                                         </h5>
                                       </div>
                                       <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo2" data-parent="#accordionExample2">
                                             <div class="card-body">
                                                 <img src="images/team-1.png" class="float-left" width="250px" style="padding: 20px;margin-right:20px;">
                                                 <h4>Sri Mulyani Indrawati, S.E., M.Sc.</h4>
                                                 <h4 class="speaker-title">Head of Indonesia Financial Ministry</h4>
                                                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non dolorum, voluptas asperiores dolore neque quo facere suscipit officia reiciendis fuga maxime vitae quas voluptatibus quam, praesentium adipisci sint tempora harum.</p>
                                                 <p class="speaker-detail">
                                                     <i class="fa fa-clock"></i> 45 mins
                                                     <span style="padding-right:10px"></span>
                                                     <i class="fa fa-map-marker "></i> Auditorium 7th floor of Tower Building
                                                 </p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="card">
                                       <div class="card-header" id="headingThree2">
                                         <h5 class="mb-0">
                                           <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree2" aria-expanded="false" aria-controls="collapseThree2">
                                             11.00<span style="padding-right:40px;"></span>Keynote Speech 2
                                           </button>
                                         </h5>
                                       </div>
                                       <div id="collapseThree2" class="collapse" aria-labelledby="headingThree2" data-parent="#accordionExample2">
                                             <div class="card-body">
                                                 <img src="images/team-1.png" class="float-left" width="250px" style="padding: 20px;margin-right:20px;">
                                                 <h4>Agustinus Hari Tangguh Wibowo</h4>
                                                 <h4 class="speaker-title">Public Relation Director of OJK </h4>
                                                 <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non dolorum, voluptas asperiores dolore neque quo facere suscipit officia reiciendis fuga maxime vitae quas voluptatibus quam, praesentium adipisci sint tempora harum.</p>
                                                 <p class="speaker-detail">
                                                     <i class="fa fa-clock"></i> 45 mins
                                                     <span style="padding-right:10px"></span>
                                                     <i class="fa fa-map-marker "></i> Auditorium 7th floor of Tower Building
                                                 </p>
                                             </div>
                                       </div>
                                     </div>
                                     <div class="card">
                                         <div class="card-header" id="headingFour2">
                                             <h5 class="mb-0">
                                             <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour2" aria-expanded="false" aria-controls="collapseFour2">
                                                 11.00<span style="padding-right:40px;"></span>Keynote Speech 3
                                             </button>
                                             </h5>
                                         </div>
                                         <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                 <div class="card-body">
                                                     <img src="images/team-1.png" class="float-left" width="250px" style="padding: 20px;margin-right:20px;">
                                                     <h4>Agustinus Hari Tangguh Wibowo</h4>
                                                     <h4 class="speaker-title">Public Relation Director of OJK </h4>
                                                     <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non dolorum, voluptas asperiores dolore neque quo facere suscipit officia reiciendis fuga maxime vitae quas voluptatibus quam, praesentium adipisci sint tempora harum.</p>
                                                     <p class="speaker-detail">
                                                         <i class="fa fa-clock"></i> 45 mins
                                                         <span style="padding-right:10px"></span>
                                                         <i class="fa fa-map-marker "></i> Auditorium 7th floor of Tower Building
                                                     </p>
                                                 </div>
                                         </div>
                                         </div>
                                     <div class="clearfix"></div>
                                   </div>


                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- End Pricing plan Area -->


     <section class="blog_posts_area">
         <h2>The Accomodations</h2>
         <div class="row blog_inner">
             <!-- Blog_item -->
             <div class="col-lg-4 col-md-6">
                 <div class="blog_item">
                     <a href="blog-single.html" class="blog_img">
                         <img src="images/blog/blog-post-1.jpg" alt="">
                     </a>
                     <div class="blog_contant">
                         <h4>A good content strategy can help engage your consumers</h4>
                         <p>A good content strategy can help engage your consumers and position your company as an effective publisher
                                 in your industry. In turn, this will play a role in increasing brand recognition,
                                 traffic to your website, lead conversions, and customer loyalty</p>
                         <a href="#" class="theme_btn">Detail</a>
                     </div>
                 </div>
             </div>
             <!-- Blog_item -->
             <div class="col-lg-4 col-md-6">
                 <div class="blog_item">
                     <a href="blog-single.html" class="blog_img">
                         <img src="images/blog/blog-post-2.jpg" alt="">
                     </a>
                     <div class="blog_contant">
                         <h4>A good content strategy can help engage your consumers</h4>
                         <p>A good content strategy can help engage your consumers and position your company as an effective publisher in your industry. In turn, this will play a role in increasing brand recognition, traffic to your website, lead conversions, and customer loyalty</p>
                         <a href="#" class="theme_btn">Detail</a>
                     </div>
                 </div>
             </div>
             <!-- Blog_item -->
             <div class="col-lg-4 col-md-6">
                 <div class="blog_item">
                     <a href="blog-single.html" class="blog_img">
                         <img src="images/blog/blog-post-3.jpg" alt="">
                     </a>
                     <div class="blog_contant">
                         <h4>A good content strategy can help engage your consumers</h4>
                         <p>A good content strategy can help engage your consumers and position your company as an effective publisher in your industry. In turn, this will play a role in increasing brand recognition, traffic to your website, lead conversions, and customer loyalty</p>
                         <a href="#" class="theme_btn">Detail</a>
                     </div>
                 </div>
             </div>
         </div>
     </section>

     <section class="countarup_area">
         <div class="container">
             <div class="row">
                 <div class="col-lg-3 col-md-6">
                     <div class="countraup_item mt">
                         <h4>Total Invest</h4>
                         <h3>$<b class="counter">15</b>M</h3>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="countraup_item">
                         <h4>Project Done</h4>
                         <h3><b class="counter">25</b>K+</h3>

                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="countraup_item mt_2">
                         <h4>Offices</h4>
                         <h3><b>0</b><b class="counter">4</b></h3>
                     </div>
                 </div>
                 <div class="col-lg-3 col-md-6">
                     <div class="countraup_item mt_3">
                         <h4>Happy Client</h4>
                         <h3><b class="counter">90</b>K</h3>
                     </div>
                 </div>
                 <h5 class="col-lg-5 col-md-4 col-sm-6"><span><b class="counter">12</b>K+</span> DAILY STANDUPS </h5>
                 <h5 class="col-lg-2 col-md-4 col-sm-6"><span><b class="counter">1</b>M+</span> COMMITS</h5>
                 <h5 class="col-lg-5 col-md-4 col-sm-6"><span><b class="counter">10</b>K+</span> USER STORIES</h5>
             </div>
         </div>
     </section>


     <section class="pricing_plan_area">
         <div class="container">
             <div class="tittle">
                 <h2>Register Now</h2>
             </div>
             <div class="row pricing_row">
                 <div class="col-xl-4 col-md-6 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                     <div class="fantasy">
                         <span class="amount">Free</span>
                         <a href="#" class="heding">Basic, Free</a>
                         <p>Save 20% with Annual Billing</p>
                         <ul class="fantasy_list">
                             <li>Chat messenger</li>
                             <li>5 Products</li>
                             <li>25,000 Marketing Emails /mo</li>
                             <li>1 Admin User</li>
                             <li>25 Pipelines</li>
                         </ul>
                         <a href="#" class="check_btn"><i class="fas fa-check"></i></a>
                     </div>
                 </div>
                 <div class="col-xl-4 col-md-6 wow fadeIn" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                     <div class="fantasy fantasy_2">
                         <span class="amount">$25</span>
                         <a href="#" class="heding">Premium</a>
                         <p>Save 20% with Annual Billing</p>
                         <ul class="fantasy_list">
                             <li>Chat messenger</li>
                             <li>5 Products</li>
                             <li>25,000 Marketing Emails /mo</li>
                             <li>1 Admin User</li>
                             <li>25 Pipelines</li>
                         </ul>
                         <a href="#" class="check_btn"><i class="fas fa-check"></i></a>
                     </div>
                 </div>
                 <div class="col-xl-4 col-md-6 wow fadeIn" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                     <div class="fantasy fantasy_3">
                         <span class="amount">$300</span>
                         <a href="#" class="heding">Team</a>
                         <p>Save 20% with Annual Billing</p>
                         <ul class="fantasy_list">
                             <li>100 Products</li>
                             <li>75,000 Marketing Emails /mo</li>
                             <li>3 Sites</li>
                             <li>1 Admin User</li>
                             <li>100 Pipelines</li>
                             <li>Team Analytics</li>
                         </ul>
                         <a href="#" class="check_btn"><i class="fas fa-check"></i></a>
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
