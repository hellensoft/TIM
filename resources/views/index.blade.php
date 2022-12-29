@extends('Layouts.MasterLayout')
@section('page_title','Home')
@section('page_contents')
  <!-- Slider Area Start Here -->
  @include('Layouts.homeSlider')
  <!-- Slider Area End Here -->

    <!-- Service Area Start Here -->
    <div class="service-three-area">
      <div class="container-fluid">
          <div class="row no-gutter">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="single-item">
                      <div class="single-service">
                          <div class="item-icon">
                              <i class="flaticon-piggy-bank"></i>
                              <h3><a href="#">CERTIFIED MANAGERS</a></h3>
                          </div>
                          <div class="service-content">
                              <p>
                                  Highest category of membership awarded by the TIM.  Our Members represent strategic leadership in corporate initiatives.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="single-item">
                      <div class="single-service">
                          <div class="item-icon">
                              <i class="flaticon-graph"></i>
                              <h3><a href="#">MEMBERSHIP</a></h3>
                          </div>
                          <div class="service-content">
                              <p>
                                  As your lifelong career partner, TIM Membership will equip you with the tools, resources and support network you need to reach your full potential.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                  <div class="single-item">
                      <div class="single-service">
                          <div class="item-icon">
                              <i class="flaticon-avatar"></i>
                              <h3><a href="#">QUALIFICATIONS</a></h3>
                          </div>
                          <div class="service-content">
                              <p>
                                  Proven to boost earning potential, TIM qualifications deliver professional pathways for learners at all levels.
                              </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Service Area End Here -->
          <!-- Feature Service Start Here -->
          <div class="service-two-area">
              <div class="container">
                  <div class="row">
                      <div class="section-title section-title-center">
                          <h2>About Our Commuity</h2>
                          <p>Growing the skillsets of Managers and Leaders, A growth mindset leads to exploring possibilities which influences our actions/behaviors.</p>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="single-service">
                              <div class="item-icon pull-left"><i class="flaticon-money-1"></i></div>
                              <div class="item-content media-body">
                                  <h3><a href="#">TIM Women</a></h3>
                                  <p>Rimply dummy text printinertg and type setting industryy's standard dumr since printer took a galley.</p>
                              </div>
                          </div>
                          {{-- <div class="single-service">
                              <div class="item-icon pull-left"><i class="flaticon-open-book"></i></div>
                              <div class="item-content media-body">
                                  <h3><a href="#">Education Loan</a></h3>
                                  <p>Rimply dummy text printinertg and type setting industryy's standard dumr since printer took a galley.</p>
                              </div>
                          </div> --}}
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="single-service">
                              <div class="item-icon pull-left"><i class="flaticon-avatar"></i></div>
                              <div class="item-content media-body">
                                  <h3><a href="#">Future Leaders</a></h3>
                                  <p>Rimply dummy text printinertg and type setting industryy's standard dumr since printer took a galley.</p>
                              </div>
                          </div>
                          {{-- <div class="single-service">
                              <div class="item-icon pull-left"><i class="flaticon-get-money"></i></div>
                              <div class="item-content media-body">
                                  <h3><a href="#">Tax Planning</a></h3>
                                  <p>Rimply dummy text printinertg and type setting industryy's standard dumr since printer took a galley.</p>
                              </div>
                          </div> --}}
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                          <div class="single-service">
                              <div class="item-icon pull-left"><i class="flaticon-notes"></i></div>
                              <div class="item-content media-body">
                                  <h3><a href="#">TIM Race To Inclusion</a></h3>
                                  <p>Rimply dummy text printinertg and type setting industryy's standard dumr since printer took a galley.</p>
                              </div>
                          </div>
                          {{-- <div class="single-service">
                              <div class="item-icon pull-left"><i class="flaticon-atomic"></i></div>
                              <div class="item-content media-body">
                                  <h3><a href="#">Comodities Trading</a></h3>
                                  <p>Rimply dummy text printinertg and type setting industryy's standard dumr since printer took a galley.</p>
                              </div>
                          </div> --}}
                      </div>
                  </div>
              </div>
          </div>
          <!-- Feature Service End Here -->
  <!-- People Choose Services Start here -->
  <div class="people-choose-services">
      <span class="banner-logo"><img class="img-responsive" src="img/banner-logo.png" alt="banner-logo"></span>
      <div class="choose-services">
          <div class="choose-services-wrapper">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                          <div class="people-choose-content">
                              <h3 style="color:#ffffff;">TRANSFORMING MANAGERS INTO CONCIOUS LEADERS</h3>
                              <p>
                                  The Tanzanian Institute of Managers is a professional membership organization established in 2021. 
                                  Its purpose is the promotion of management competencies throughout Tanzania. 
                                  The Institute recognizes that good management is the single most influential factor in the success of any enterprise.
                              </p>
                              <a class="ghost-btn" href="#">Read More<i class="fa fa-angle-right"></i></a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="people-image"><img class="img-responsive" src="img/section9.jpg" alt="section9"></div>
  </div>
  <!-- People Choose Services End here -->

  <!-- Counter Section Start Here -->
  {{-- <div class="counter-area overlay-dark" style="background-image: url('img/section5.jpg');">
      <div class="container">
          <div class="counter-title">
              <h2>We are always ahead. <br>Professional Solutions for Your Business.</h2>
          </div>
          <div class="row">
              <div class="counter-content">
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 counter1-box wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".20s">
                      <h3 class="counter" data-num="1520">1520</h3>
                      <p>All Employees</p>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 counter1-box wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".40s">
                      <h3 class="counter" data-num="1160">1160</h3>
                      <p>Happy Clients</p>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 counter1-box wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".60s">
                      <h3 class="counter" data-num="1905">1905</h3>
                      <p>Satisfaction</p>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 counter1-box wow fadeInDown" data-wow-duration=".5s" data-wow-delay=".80s">
                      <h3 class="counter" data-num="1440">1440</h3>
                      <p>Cases completed</p>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}
  <!-- Counter Section End Here -->

  {{-- <!-- Banner One Start Here -->
  <div class="banner-one-area">
      <div class="container">
          <div class="banner-content">
              <h2><span>To help entrepreneurs get their act together</span> before they talk to investors.</h2>
          </div>
      </div>
  </div>
  <!-- Banner One End Here --> --}}

  <!-- Our Latest News Start Here -->
  <div class="latest-news-one-area bg-accent">
      <div class="container">
          <div class="section-title">
              <h2>Upcoming Events {{ date('Y') }}</h2>
          </div>
          <div class="row">
              <div class="fn-carousel" data-loop="true" data-items="3" data-margin="0" data-autoplay="false" data-autoplay-timeout="10000" data-smart-speed="2000" data-dots="false" data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false" data-r-x-small-dots="true" data-r-x-medium="2" data-r-x-medium-nav="false" data-r-x-medium-dots="true" data-r-small="2" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3" data-r-medium-nav="true" data-r-medium-dots="false">
                  <div class="single-news">
                      <div class="item-image">
                          <img class="image-responsive" src="img/news/news1.jpg" alt="news">
                          <span class="date">26<sup>th</sup> - 27<sup>th</sup> January 2023</span>
                      </div>
                      <div class="item-info">
                          <h3><a href="#">Sales Titan Conference.</a></h3>
                          <span class="favourite"><i class="fa fa-heart-o" aria-hidden="true"></i>Favourite: 02</span>
                          <span class="comments"><i class="fa fa-comments-o" aria-hidden="true"></i>Comments: 04</span>
                      </div>
                  </div>
                  <div class="single-news">
                      <div class="item-image">
                          <img class="image-responsive" src="img/news/news2.jpg" alt="news">
                          <span class="date">23<sup>rd</sup> - 24<sup>th</sup> February 2023</span>
                      </div>
                      <div class="item-info">
                          <h3><a href="#">Tanzania Labour Laws Society Hybrid Conference .</a></h3>
                          <span class="favourite"><i class="fa fa-heart-o" aria-hidden="true"></i>Favourite: 02</span>
                          <span class="comments"><i class="fa fa-comments-o" aria-hidden="true"></i>Comments: 04</span>
                      </div>
                  </div>
                  <div class="single-news">
                      <div class="item-image">
                          <img class="image-responsive" src="img/news/news3.jpg" alt="news">
                          <span class="date">23<sup>rd</sup> - 24<sup>th</sup> March 2023</span>
                      </div>
                      <div class="item-info">
                          <h3><a href="#">Zanzibar Labour Law Society Hybrid Conference .</a></h3>
                          <span class="favourite"><i class="fa fa-heart-o" aria-hidden="true"></i>Favourite: 02</span>
                          <span class="comments"><i class="fa fa-comments-o" aria-hidden="true"></i>Comments: 04</span>
                      </div>
                  </div>
                  <div class="single-news">
                      <div class="item-image">
                          <img class="image-responsive" src="img/news/news4.jpg" alt="news">
                          <span class="date">06<sup>th</sup> - 07<sup>th</sup> September 2023</span>
                      </div>
                      <div class="item-info">
                          <h3><a href="#"> Global Leaders Conference 2023.</a></h3>
                          <span class="favourite"><i class="fa fa-heart-o" aria-hidden="true"></i>Favourite: 02</span>
                          <span class="comments"><i class="fa fa-comments-o" aria-hidden="true"></i>Comments: 04</span>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Our Latest News End Here -->
  <!-- Our Partners Start Here -->
      @include('Layouts.partners')
  <!-- Our Partners End Here -->

@endsection