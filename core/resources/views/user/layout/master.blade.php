<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Imonitor | Ico Listing HTML Templates  </title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/user/css/bootstrap.min.css')}}">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{asset('assets/user/css/fontawesome-all.min.css')}}">
    <!-- flaticon -->
    <link rel="stylesheet" href="{{asset('assets/user/css/flaticon.css')}}">
    <!-- bootstrap datetime picker -->
    <link rel="stylesheet" href="{{asset('assets/user/css/bootstrap-datepicker.min.css')}}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{asset('assets/user/css/animate.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('assets/user/css/owl.carousel.min.css')}}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{asset('assets/user/css/magnific-popup.css')}}">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{asset('assets/user/css/style.css')}}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{asset('assets/user/css/responsive.css')}}">
</head>

<body>
    <!-- support bar area start -->
    <div class="support-bar">
        <div class="container">
           <div class="row">
                <div class="col-lg-6">
                    <div class="support-left"><!-- support left start -->
                        <ul>
                            <li><a href="mailTo:info@icominer.com"><i class="fas fa-envelope"></i> info@icominer.com</a></li>
                            <li><a href="tel:123456898"><i class="fas fa-phone"></i> +880 764775 908</a></li>
                        </ul>
                    </div><!-- support left end -->
                </div>
                <div class="col-lg-6">
                    <div class="support-right"> <!-- support right start -->
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-dropbox"></i></a></li>
                                <li><a href="#"><i class="fab fa-gg"></i></a></li>
                                <li><a href="#"><i class="fab fa-gitlab"></i></a></li>
                                <li><a href="#"><i class="fab fa-forumbee"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-wallet"></i></a></li>
                            </ul>
                        </div>
                        <a href="browse-ico.html" class="block-btn">ico list</a>
                    </div><!-- support right end -->
                </div>
           </div> <!-- row end -->
        </div><!-- container end -->
    </div>
    <!-- support bar area end -->

        <!-- navbar area start -->
        <nav class="navbar navbar-area navbar-expand-lg navbar-light ">
            <div class="container">
                <div class="navbar-header">
                    <!-- navbar header start -->
                    <a class="navbar-brand logo" href="index.html">
                        <img src="{{asset('assets/user/img/logo.png')}}" alt="logo image">
                    </a>
                </div>
                <!-- navbar header end -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Tokenizer" aria-controls="Tokenizer"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="Tokenizer">

                    <!-- navbar collapse start -->
                    <ul class="navbar-nav">
                        <li class="nav-item active dropdown">
                            <a class="nav-link" href="{{route("users.home")}}">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route("users.about")}}">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="index-2.html">Home variant</a>
                                <a class="dropdown-item" href="details.html">Ico Details</a>
                                <a class="dropdown-item" href="browse-ico.html">Browse Ico</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="publish.html">Publish ico</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                        </li>
                        <li class="nav-item boxed-btn">
                            <a class="nav-link boxed-btn" href="browse-ico.html">Browse icos</a>
                        </li>
                    </ul>
                </div>
                <!-- navbar collapse end -->
            </div>
        </nav>
        <!-- navbar area end -->

        @yield('content')

        <!-- subscribe area start -->
        <section class="subscribe-area subscribe-bg">
            <div class="conteainer">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="subscribe-wrapper"><!-- subscribe wrapper start-->
                            <h3>Subscribe For More Updates</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                            The point of using Lorem Ipsum is that it has a more</p>
                            <div class="subscribe-form"><!-- subscribe form start-->
                                <form action="index.html">
                                    <input type="email" class="subs-input" placeholder="Enter your email address">
                                    <button type="submit" class="submit-btn"> submit </button>
                                </form>
                            </div><!-- /. subscribe form -->
                        </div><!-- /.subscribe wrapper -->
                    </div><!-- /.col-lg-10 -->
                </div><!-- /.row -->
            </div> <!-- /.container -->
        </section>
        <!-- subscribe area end -->

        <!-- footer area start -->
        <footer class="footer-area footer-bg">
            <div class="footer-top"><!--footer top start-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="index.html" class="footer-logo">
                                <img src="{{asset('assets/user/img/logo.png')}}" alt="logo image">
                            </a>
                        </div>
                        <div class="col-lg-6">
                            <div class="footer-social-area"> <!--footer social area start-->
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-typo3"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-uikit"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-superpowers"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fab fa-twitch"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div><!--footer social area end-->
                        </div>
                    </div><!-- /.row-->
                </div><!-- /.container-->
            </div><!--footer top end-->
            <div class="copyright-area"><!--copyright area start-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            Copyright by -Imonitor-2018
                        </div>
                    </div><!-- /.row-->
                </div> <!-- /.container -->
            </div> <!--copyright area end-->
        </footer>
        <!-- footer area end -->

        <div class="back-to-top"> <!-- back to top start -->
            <i class="fas fa-rocket"></i>
        </div><!-- back to top end -->
        <!-- login and register modal start-->
        <div class="login-registration-modal">
            <div class="login-modal-wrapper"><!-- login modal warapper satart start-->
                <div class="modal" tabindex="-1" id="login-modal" role="dialog"><!-- #login modal-->
                    <div class="modal-dialog" role="document">
                        <div class="modal-content"><!-- modal content start -->
                            <nav>
                                <div class="nav nav-tabs login-modal-navigation" id="nav-tab" role="tablist"><!-- login modal navigation start -->
                                    <a class="nav-item nav-link active" id="nav-login-tab" data-toggle="tab" href="#nav-login" role="tab" aria-controls="nav-login"
                                        aria-selected="true">login</a>
                                    <a class="nav-item nav-link" id="nav-signup-tab" data-toggle="tab" href="#nav-signup" role="tab" aria-controls="nav-signup"
                                        aria-selected="false">signup</a>
                                </div><!-- login modal navigation end -->
                            </nav>
                            <div class="tab-content" id="nav-tabContent"><!-- tab content-->
                                <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab">
                                    <div class="login-form-wrapper"><!-- login form wrapper start -->
                                        <form action="index.html">
                                            <div class="form-element square login"><!-- form element login start -->
                                                <label>Enter Email
                                                    <span>**</span>
                                                </label>
                                                <input type="email" placeholder="Type your email...." class="input-field-square">
                                            </div><!-- form element login end -->
                                            <div class="form-element square login"><!-- form element login start -->
                                                <label>Password
                                                    <span>**</span>
                                                </label>
                                                <input type="password" placeholder="Type your email...." class="input-field-square">
                                            </div><!-- form element login end -->
                                            <button type="button" class="submit-form-btn">login</button>
                                        </form>
                                    </div><!-- login form wrapper end -->
                                </div>
                                <div class="tab-pane fade" id="nav-signup" role="tabpanel" aria-labelledby="nav-signup-tab">
                                    <div class="singup-form-wrapper">
                                        <form action="index.html">
                                            <div class="form-element square login">
                                                <label>First Name
                                                    <span>**</span>
                                                </label>
                                                <input type="text" placeholder="Type your name...." class="input-field-square">
                                            </div>
                                            <div class="form-element square login">
                                                <label>Last Name
                                                    <span>**</span>
                                                </label>
                                                <input type="text" placeholder="Type your name...." class="input-field-square">
                                            </div>
                                            <div class="form-element square login">
                                                <label>Enter Email
                                                    <span>**</span>
                                                </label>
                                                <input type="email" placeholder="Type your email...." class="input-field-square">
                                            </div>
                                            <div class="form-element square login">
                                                <label>Enter Phone Number
                                                    <span>**</span>
                                                </label>
                                                <input type="email" placeholder="Type your email...." class="input-field-square">
                                            </div>
                                            <div class="form-element square login">
                                                <label>Password
                                                    <span>**</span>
                                                </label>
                                                <input type="password" placeholder="Type your email...." class="input-field-square">
                                            </div>
                                            <div class="form-element square login">
                                                <label>Confirm Password
                                                    <span>**</span>
                                                </label>
                                                <input type="email" placeholder="Type your email...." class="input-field-square">
                                            </div>
                                            <input type="submit" class="submit-form-btn" value="submit for query">
                                        </form>
                                    </div>
                                </div>
                            </div><!-- /.tab conent-->
                        </div><!-- modal content end -->
                    </div>
                </div><!-- /#loginmodal -->
            </div><!-- login modal warapper satart end-->
        </div>
        <!-- login and register modal end -->

        <!-- preloader area start -->
        <div class="preloader" id="preloader">
            <div class="loader loader-1">
                <div class="loader-outter"></div>
                <div class="loader-inner"></div>
            </div>
        </div>
        <!-- preloader area end -->


        <!-- jquery -->
        <script src="{{asset('assets/user/js/jquery.js')}}"></script>
        <!-- popper -->
        <script src="{{asset('assets/user/js/popper.min.js')}}"></script>
    	<!-- bootstrap -->
        <script src="{{asset('assets/user/js/bootstrap.min.js')}}"></script>
        <!-- owl carousel -->
        <script src="{{asset('assets/user/js/owl.carousel.min.js')}}"></script>
        <!-- magnific popup -->
        <script src="{{asset('assets/user/js/jquery.magnific-popup.js')}}"></script>
        <!-- way poin js-->
        <script src="{{asset('assets/user/js/waypoints.min.js')}}"></script>
        <!-- wow js-->
        <script src="{{asset('assets/user/js/wow.min.js')}}"></script>
        <!-- bootstrap datetimepicker -->
        <script src="{{asset('assets/user/js/bootstrap-datepicker.min.js')}}"></script>
        <!-- counterup js-->
        <script src="{{asset('assets/user/js/jquery.counterup.min.js')}}"></script>

        <!-- main -->
        <script src="{{asset('assets/user/js/main.js')}}"></script>
        @if (session('success'))
        <script type="text/javascript">
                $(document).ready(function(){
                    swal("Success!", "{{ session('success') }}", "success");
                });
        </script>
        @endif

        @if (session('alert'))
        <script type="text/javascript">
                $(document).ready(function(){
                    swal("Sorry!", "{{ session('alert') }}", "error");
                });
        </script>
        @endif

        @stack('scripts')
    </body>

    </html>
