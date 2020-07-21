@extends('layouts.frontend')

@section('content')

     <section class="banner">
         <div class="container">
             <h2 class="wow fadeInUp">Seminar</h2>
             <ul class="text-breadcumb">
                 <li><a href="{{route('frontend')}}">Home</a></li>
                 <li class="separator">/</li>
                 <li>Seminar</li>
             </ul>
         </div>
     </section>

     <section class="blog_posts_area" style="box-shadow: 0px 48px 62px 0px rgba(236, 234, 234, 0.35);padding-bottom:0 !important">
        <div class="row blog_inner">
            <!-- Blog_item -->
            <div class="col-lg-4 col-md-6">
                <div class="blog_item">
                    <a href="blog-single.html" class="blog_img">
                        <img src="images/blog/blog-post-1.jpg" alt="">
                    </a>
                    <div class="blog_contant">
                        <h4>The Title Keynote Speech 1</h4>
                        <p>A good content strategy can help engage your consumers and position your company as an effective publisher
                                in your industry. In turn, this will play a role in increasing brand recognition,
                                traffic to your website, lead conversions, and customer loyalty</p><br>
                        <p><strong>Speaker : </strong></p>
                        <p>Sri Mulyani Indrawati, S.E., M.Sc.</p>
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
                        <h4>The Title Keynote Speech 2</h4>
                        <p>A good content strategy can help engage your consumers and position your company as an effective publisher in your industry. In turn, this will play a role in increasing brand recognition, traffic to your website, lead conversions, and customer loyalty</p><br>
                        <p><strong>Speaker : </strong></p>
                        <p>Sri Mulyani Indrawati, S.E., M.Sc.</p>
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
                        <h4>The Title Keynote Speech 3</h4>
                        <p>A good content strategy can help engage your consumers and position your company as an effective publisher in your industry. In turn, this will play a role in increasing brand recognition, traffic to your website, lead conversions, and customer loyalty</p><br>
                        <p><strong>Speaker : </strong></p>
                        <p>Sri Mulyani Indrawati, S.E., M.Sc.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing_plan_area">
        <div class="container">
           <div class="tittle">
                <h2>The Rundown</h2>
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
