@extends('user.layout.master')

@section('content')
  <!-- breadcrumb area start -->
  <section class="breadcumb-area breadcrumb-bg contact-page">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <div class="left-content"><!-- left content start -->
                      <h1>Contact US</h1>
                      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                  </div><!-- /.left content -->
              </div>
              <div class="col-lg-6">
                  <div class="right-content"><!-- right content start -->
                      <div class="breadcumb-nav">
                          <a href="index.html" class="boxed-btn blue btn-rounded">home</a> > contact
                      </div>
                  </div><!-- /.right content -->
              </div>
          </div> <!-- /.row -->
      </div><!-- /.container -->
  </section>
  <!-- breadcrumb area end -->

  <!-- contact area start -->
  <section class="contact-area">
      <div class="container">
          <div class="row">
              <div class="col-lg-12 remove-col-padding">
                  <div class="contact-form-inner">
                      <div class="row justify-content-center">
                          <div class="col-lg-8 text-center">
                              <div class="section-title">
                                  <!-- section title start -->
                                  <h2>Get In Touch</h2>
                                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking
                                      at its layout.
                                  </p>
                              </div>
                              <!-- section title end -->
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-lg-12 remove-col-padding">
                              <div class="contact-form-wrapper">
                                  <div class="row">
                                      <div class="col-lg-6">
                                          <div class="singl-contact-info">
                                              <div class="icon">
                                                  <i class="far fa-map"></i>
                                              </div>
                                              <div class="content">
                                                  <h5>Location</h5>
                                                  <span class="details">139/A, Pinga city, United Kingdom</span>
                                              </div>
                                          </div>
                                          <div class="singl-contact-info">
                                              <div class="icon">
                                                  <i class="far fa-clock"></i>
                                              </div>
                                              <div class="content">
                                                  <h5>Opening Hours</h5>
                                                  <span class="details">10:00 Am - 07:00PM</span>
                                                  <span class="details">Sunday : Holiday</span>
                                              </div>
                                          </div>
                                          <div class="singl-contact-info">
                                              <div class="icon">
                                                  <i class="far fa-envelope"></i>
                                              </div>
                                              <div class="content">
                                                  <h5>Email</h5>
                                                  <span class="details">info@websmail.com</span>
                                                  <span class="details">webmail.info@gmail.com</span>
                                              </div>
                                          </div>
                                          <div class="singl-contact-info margin-bottom-60">
                                              <div class="icon">
                                                  <i class="fas fa-phone"></i>
                                              </div>
                                              <div class="content">
                                                  <h5>Phone</h5>
                                                  <span class="details">+ 123 456 789 123</span>
                                                  <span class="details">+ 123 456 789 123</span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="col-lg-6">
                                          <div class="contact-from-wrapper">
                                              <div class="form-element square">
                                                  <label>Your Name
                                                      <span>**</span>
                                                  </label>
                                                  <input type="text" placeholder="Type your name...." class="input-field-square">
                                              </div>
                                              <div class="form-element square">
                                                  <label>Your Email
                                                      <span>**</span>
                                                  </label>
                                                  <input type="email" placeholder="Type your email...." class="input-field-square">
                                              </div>
                                              <div class="form-element square">
                                                  <label>Subject
                                                      <span>**</span>
                                                  </label>
                                                  <input type="text" placeholder="Type your email subject...." class="input-field-square">
                                              </div>
                                              <div class="form-element square">
                                                  <label>Your Messages
                                                      <span>**</span>
                                                  </label>
                                                  <textarea rows="5" placeholder="Type your message...." class="input-field-square textarea"></textarea>
                                              </div>
                                              <button type="submit" class="submit-form-btn">submit now</button>
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
  <!-- contact area end -->
@endsection
