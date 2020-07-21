@extends('layouts.frontend')

@section('content')

     <section class="banner">
         <div class="container">
             <h2 class="wow fadeInUp">The Pricing</h2>
             <ul class="text-breadcumb">
                 <li><a href="{{route('frontend')}}">Home</a></li>
                 <li class="separator">/</li>
                 <li>The Pricing</li>
             </ul>
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
