@extends('user.layout.master')

@section('content')
  <!-- breadcrumb area start -->
  <section class="breadcumb-area breadcrumb-bg">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <div class="left-content"><!-- left content start -->
                      <h1>About Us</h1>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                  </div><!-- /.left content -->
              </div>
              <div class="col-lg-6">
                  <div class="right-content"><!-- right content start -->
                      <div class="breadcumb-nav">
                          <a href="index.html" class="boxed-btn blue btn-rounded">home</a> > About
                      </div>
                  </div><!-- /.right content -->
              </div>
          </div> <!-- /.row -->
      </div><!-- /.container -->
  </section>
  <!-- breadcrumb area end -->

  <!-- stats area start -->
  <section class="starts-area">
      <div class="container">
          <div class="row text-center">
              <div class="col-lg-3 col-sm-6">
                  <div class="single-starts-box"> <!--single starts box start-->
                      <span class="count-number">10</span><span class="count-text">k<span class="colored">+</span></span>
                      <h5>Projects</h5>
                  </div><!--single starts box end-->
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="single-starts-box"><!--single starts box start-->
                      <span class="count-number">20</span><span class="count-text">k<span class="colored">+</span></span>
                      <h5>cup coffee</h5>
                  </div><!--single starts box end-->
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="single-starts-box"><!--single starts box start-->
                      <span class="count-number">10</span><span class="count-text">m<span class="colored">+</span></span>
                      <h5>happy clients</h5>
                  </div><!--single starts box end-->
              </div>
              <div class="col-lg-3 col-sm-6"><!--single starts box start-->
                  <div class="single-starts-box">
                      <span class="count-number">15</span><span class="count-text">k<span class="colored">+</span></span>
                      <h5>awards</h5>
                  </div><!--single starts box end-->
              </div>
          </div>
      </div>
  </section>
  <!-- stats area end -->

  <!-- be perfect area start -->
  <section class="be-perfect-area">
      <div class="container-fluid">
          <div class="row">
              <div class="col-xl-6 remove-col-padding">
                  <div class="left-content"><!-- left-content start -->
                      <div class="thumb"><!-- thumb start -->
                          <img src="{{asset('assets/user/img/be-perfect.jpg')}}" alt="be perfect">
                          <div class="hover"><!-- hover -->
                              <a href="https://www.youtube.com/watch?v=dE5j709dm_g" class="video-play-btn mfp-iframe"><i class="fas fa-play"></i></a>
                          </div> <!-- /.hover -->
                      </div><!-- /.thumb -->
                  </div><!-- left-content end -->
              </div>
              <div class="col-xl-6 remove-col-padding">
                  <div class="right-content"><!-- right content start-->
                      <span class="subtitle">Our Philosophy</span>
                      <h3>Be More Perfect</h3>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                      The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                      here, content here', making it look like readable English.</p>
                      <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                      here, content here', making it look like readable English.</p>
                      <a href="#" class="boxed-btn btn-rounded">get started now</a>
                  </div><!-- right content end-->
              </div>
          </div>
      </div>
  </section>
  <!-- be perfect area end -->

  <!-- about news box area  start-->
  <section class="about-news-box">
      <div class="container">
          <div class="row">
              <div class="col-lg-6 col-sm-6">
                  <div class="single-about-news-box"><!--single about news box start-->
                      <div class="thumb"><!-- thumb start -->
                          <img src="{{asset('assets/user/img/about-news/01.jpg')}}" alt="about news image">
                      </div><!-- /.thumb start -->
                      <div class="content"> <!-- content start -->
                          <h4>What Is our mission?</h4>
                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                          The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                      </div><!-- content end -->
                  </div><!--single about news box end-->
              </div>
              <div class="col-lg-6 col-sm-6">
                  <div class="single-about-news-box">
                      <!--single about news box start-->
                      <div class="thumb">
                          <!-- thumb start -->
                          <img src="{{asset('assets/user/img/about-news/02.jpg')}}" alt="about news image">
                      </div>
                      <!-- /.thumb start -->
                      <div class="content">
                          <!-- content start -->
                          <h4>What Is our mission?</h4>
                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at
                              its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.</p>
                      </div>
                      <!-- content end -->
                  </div>
                  <!--single about news box end-->
              </div>
          </div><!-- /.row -->
      </div> <!-- /.container-->
  </section>
  <!-- about news box area end -->
@endsection
