@extends('user.layout.master')

@section('content')
    <header class="header-area header-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="single-header-item"><!-- search header start -->
                        <span class="subtitle wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">Bestcoins is an open community of ICO investors, technology</span>
                        <h1 class="wow fadeInDown" style="visibility: visible; animation-name: fadeInDown;">Open Community For Discussion On ICOs</h1>
                        <div class="search-form-wrapper wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"><!-- search from wrapper start-->
                            <form action="index.html">
                                <input type="text" class="search-input" placeholder="e.g. icomining, helixmining, kingico, etc.">
                                <button type="submit" class="submit-btn">
                                    <i class="fas fa-search"></i> search now</button>
                            </form>
                        </div><!-- search from wrapper end -->
                    </div><!-- search header  end -->
                </div> <!-- ./col-lg-10 -->
            </div> <!-- ./row -->
        </div> <!-- ./container -->
    </header>    
    <!-- blog page wrapper start -->
    <section class="blog-page-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="single-blog-post"><!-- single blog post start -->
                        <div class="thumb"><!-- thumb -->
                            <img src="{{asset('assets/user/img/blog/01.jpg')}}" alt="blog post image">
                        </div><!-- ./thumb -->
                        <div class="content"><!-- content -->
                            <div class="meta-date"><!-- meta date start -->
                                <span class="date">23</span>
                                <span class="month">dec</span>
                            </div><!-- meta date end -->
                            <div class="post-content"><!-- post content start -->
                                <ul class="post-meta"><!-- post meta-->
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-comments"></i> 33 Comments</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-share"></i> 50 Shares
                                    </li>
                                </ul><!-- ./ post meta -->
                                <a href="#"><h4 class="post-title">Those more architectural side of weight building and design</h4></a>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore
                                    et dolore magna aliqua Ut enim ad minim veniam quis nostrud exercitation ullamco laboris
                                    nisi ut aliquip.</p>
                            </div><!-- post content end -->
                        </div><!-- ./content -->
                    </div><!-- single blog post start -->
                    <div class="single-blog-post">
                        <!-- single blog post start -->
                        <div class="thumb">
                            <!-- thumb -->
                            <img src="{{asset('assets/user/img/blog/02.jpg')}}" alt="blog post image">
                        </div>
                        <!-- ./thumb -->
                        <div class="content">
                            <!-- content -->
                            <div class="meta-date">
                                <!-- meta date start -->
                                <span class="date">23</span>
                                <span class="month">dec</span>
                            </div>
                            <!-- meta date end -->
                            <div class="post-content">
                                <!-- post content start -->
                                <ul class="post-meta">
                                    <!-- post meta-->
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-comments"></i> 33 Comments</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-share"></i> 50 Shares
                                    </li>
                                </ul>
                                <!-- ./ post meta -->
                                <a href="#"><h4 class="post-title">Those more architectural side of weight building and design</h4></a>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            </div>
                            <!-- post content end -->
                        </div>
                        <!-- ./content -->
                    </div>
                    <!-- single blog post start -->
                    <div class="single-blog-post">
                        <!-- single blog post start -->
                        <div class="thumb">
                            <!-- thumb -->
                            <img src="{{asset('assets/user/img/blog/03.jpg')}}" alt="blog post image">
                        </div>
                        <!-- ./thumb -->
                        <div class="content">
                            <!-- content -->
                            <div class="meta-date">
                                <!-- meta date start -->
                                <span class="date">23</span>
                                <span class="month">dec</span>
                            </div>
                            <!-- meta date end -->
                            <div class="post-content">
                                <!-- post content start -->
                                <ul class="post-meta">
                                    <!-- post meta-->
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-comments"></i> 33 Comments</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-share"></i> 50 Shares
                                    </li>
                                </ul>
                                <!-- ./ post meta -->
                               <a href="#"><h4 class="post-title">Those more architectural side of weight building and design</h4></a>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            </div>
                            <!-- post content end -->
                        </div>
                        <!-- ./content -->
                    </div>
                    <!-- single blog post start -->
                    <div class="single-blog-post">
                        <!-- single blog post start -->
                        <div class="thumb">
                            <!-- thumb -->
                            <img src="{{asset('assets/user/img/blog/04.jpg')}}" alt="blog post image">
                        </div>
                        <!-- ./thumb -->
                        <div class="content">
                            <!-- content -->
                            <div class="meta-date">
                                <!-- meta date start -->
                                <span class="date">23</span>
                                <span class="month">dec</span>
                            </div>
                            <!-- meta date end -->
                            <div class="post-content">
                                <!-- post content start -->
                                <ul class="post-meta">
                                    <!-- post meta-->
                                    <li>
                                        <a href="#">
                                            <i class="fas fa-comments"></i> 33 Comments</a>
                                    </li>
                                    <li>
                                        <i class="fas fa-share"></i> 50 Shares
                                    </li>
                                </ul>
                                <!-- ./ post meta -->
                                <a href="#"><h4 class="post-title">Those more architectural side of weight building and design</h4></a>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore et dolore magna
                                    aliqua Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                            </div>
                            <!-- post content end -->
                        </div>
                        <!-- ./content -->
                    </div>
                    <!-- single blog post start -->
                    <nav aria-label="navigation" class="paginatoin-nav"> <!-- pagination-nav start -->
                        <ul class="pagination"><!-- pagination start -->
                            <li class="page-item">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">3</a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">4</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">5</a>
                            </li>
                        </ul><!-- pagination start -->
                    </nav><!-- pagination-nav end -->
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar"><!-- sidebar start -->
                        <div class="widget-area about"><!--about widget start-->
                            <div class="widget-title"><!-- widget title -->
                                <h4>About Me</h4>
                            </div><!-- /.widget title -->
                            <div class="widget-body"><!-- widget body -->
                                <img src="{{asset('assets/user/img/author-image.jpg')}}" alt="author image" class="author-image">
                                <div class="author-details"><!-- autor detials-->
                                    <h5>Williamson Pakery</h5>
                                    <span class="location">Blogger, New York, USA</span>
                                </div><!-- ./author details -->
                            </div><!-- /.widget body -->
                        </div><!--about widget end-->
                        <div class="widget-area instagram"> <!-- instagram widget start -->
                            <div class="widget-title">
                                <h4>Instagram</h4>
                            </div>
                            <div class="widget-body"><!-- widget body -->
                               <ul class="instagram-feed"><!-- instagram feed -->
                                   <li><a href="#"><img src="{{asset('assets/user/img/instagram/01.jpg')}}" alt="instagram images"></a></li>
                                   <li><a href="#"><img src="{{asset('assets/user/img/instagram/02.jpg')}}" alt="instagram images"></a></li>
                                   <li><a href="#"><img src="{{asset('assets/user/img/instagram/03.jpg')}}" alt="instagram images"></a></li>
                                   <li><a href="#"><img src="{{asset('assets/user/img/instagram/04.jpg')}}" alt="instagram images"></a></li>
                                   <li><a href="#"><img src="{{asset('assets/user/img/instagram/05.jpg')}}" alt="instagram images"></a></li>
                                   <li><a href="#"><img src="{{asset('assets/user/img/instagram/06.jpg')}}" alt="instagram images"></a></li>
                                   <li><a href="#"><img src="{{asset('assets/user/img/instagram/07.jpg')}}" alt="instagram images"></a></li>
                                   <li><a href="#"><img src="{{asset('assets/user/img/instagram/08.jpg')}}" alt="instagram images"></a></li>
                                   <li><a href="#"><img src="{{asset('assets/user/img/instagram/09.jpg')}}" alt="instagram images"></a></li>
                               </ul> <!-- /.instagram feed -->
                            </div><!-- /. widget body -->
                        </div><!-- instagram widget end -->
                        <div class="widget-area social"><!-- social widget start-->
                            <div class="widget-title">
                                <h4>Follow Us</h4>
                            </div>
                            <div class="widget-body"> <!-- widget body-->
                               <ul class="social-links"><!-- social links-->
                                <li>
                                    <a href="#" class="twitter">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="facebook">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="pinterest">
                                        <i class="fab fa-pinterest-p"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="wordpress">
                                        <i class="fab fa-wordpress"></i>
                                    </a>
                                </li>

                               </ul> <!-- ./ social links-->
                            </div><!-- ./ widget body -->
                        </div><!-- instragram widget end -->
                        <div class="widget-area category"><!-- category widget start-->
                            <div class="widget-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="widget-body"><!-- widget body -->
                               <ul class="categories"><!-- categories -->
                                <li><a href="#">Lifestyle <span class="count">(05)</span></a></li>
                                <li><a href="#">Travel <span class="count">(34)</span></a></li>
                                <li><a href="#">Fashion <span class="count">(89)</span></a></li>
                                <li><a href="#">Music <span class="count">(96)</span></a></li>
                                <li><a href="#">Branding <span class="count">(78)</span></a></li>
                               </ul> <!-- ./ cateogries -->
                            </div><!-- /. widget body -->
                        </div><!-- category widget end-->
                        <div class="widget-area latest-post"><!-- latest post widget start -->
                            <div class="widget-title">
                                <h4>Latest Posts</h4>
                            </div>
                            <div class="widget-body"><!-- widget body -->
                                <div class="single-latest-post"><!-- single lates post item start-->
                                    <div class="media"><!-- media  -->
                                        <img class="mr-3" src="{{asset('assets/user/img/latest-post/01.jpg')}}" alt="latest blog post image">
                                        <div class="media-body"><!-- media body-->
                                            <a href="#"><h5 class="mt-0">Alonso Kelina Falao Asiano Pero</h5></a>
                                            <span class="meta-time"><i class="far fa-clock"></i> 6 Hours ago</span>
                                        </div><!-- /.media body -->
                                    </div><!-- /.media -->
                                </div><!-- single lates post item start-->
                                <div class="single-latest-post"><!-- single lates post item start-->
                                    <div class="media"><!-- media  -->
                                        <img class="mr-3" src="{{asset('assets/user/img/latest-post/02.jpg')}}" alt="latest blog post image">
                                        <div class="media-body"><!-- media body-->
                                            <a href="#"><h5 class="mt-0">It is a long fact that a reader</h5></a>
                                            <span class="meta-time"><i class="far fa-clock"></i> 7 Hours ago</span>
                                        </div><!-- /.media body -->
                                    </div><!-- /.media -->
                                </div><!-- single lates post item start-->
                                <div class="single-latest-post"><!-- single lates post item start-->
                                    <div class="media"><!-- media  -->
                                        <img class="mr-3" src="{{asset('assets/user/img/latest-post/03.jpg')}}" alt="latest blog post image">
                                        <div class="media-body"><!-- media body-->
                                            <a href="#"><h5 class="mt-0">Many desktop  packages and web</h5></a>
                                            <span class="meta-time"><i class="far fa-clock"></i> 9 Hours ago</span>
                                        </div><!-- /.media body -->
                                    </div><!-- /.media -->
                                </div><!-- single lates post item start-->
                                <div class="single-latest-post"><!-- single lates post item start-->
                                    <div class="media"><!-- media  -->
                                        <img class="mr-3" src="{{asset('assets/user/img/latest-post/04.jpg')}}" alt="latest blog post image">
                                        <div class="media-body"><!-- media body-->
                                            <a href="#"><h5 class="mt-0">Various have evolved over the years</h5></a>
                                            <span class="meta-time"><i class="far fa-clock"></i> 10 Hours ago</span>
                                        </div><!-- /.media body -->
                                    </div><!-- /.media -->
                                </div><!-- single lates post item start-->
                                <div class="single-latest-post"><!-- single lates post item start-->
                                    <div class="media"><!-- media  -->
                                        <img class="mr-3" src="{{asset('assets/user/img/latest-post/05.jpg')}}" alt="latest blog post image">
                                        <div class="media-body"><!-- media body-->
                                            <a href="#"><h5 class="mt-0">Photo booth anim  wolf moon.</h5></a>
                                            <span class="meta-time"><i class="far fa-clock"></i> 13 Hours ago</span>
                                        </div><!-- /.media body -->
                                    </div><!-- /.media -->
                                </div><!-- single lates post item start-->
                            </div><!-- /. widget body -->
                        </div><!-- latest post widget end -->
                        <div class="widget-area tags"> <!-- tag widget  start -->
                            <div class="widget-title">
                                <h4>Tags</h4>
                            </div>
                            <div class="widget-body"><!-- widget body -->
                                <ul class="tags-list"><!-- tags -->
                                    <li>
                                        <a href="#">Travel</a>
                                    </li>
                                    <li>
                                        <a href="#">Lifestyle</a>
                                    </li>
                                    <li>
                                        <a href="#">Photo </a>
                                    </li>
                                    <li>
                                        <a href="#">Adventures </a>
                                    </li>
                                    <li>
                                        <a href="#">Musician </a>
                                    </li>
                                    <li>
                                        <a href="#">08 </a>
                                    </li>
                                    <li>
                                        <a href="#">Travel </a>
                                    </li>
                                    <li>
                                        <a href="#">Lifestyle </a>
                                    </li>
                                    <li>
                                        <a href="#">Photo </a>
                                    </li>
                                    <li>
                                        <a href="#">Adventures </a>
                                    </li>
                                    <li>
                                        <a href="#">Musician </a>
                                    </li>
                                    <li>
                                        <a href="#">08 </a>
                                    </li>
                                </ul><!-- /.tags -->
                            </div><!-- /. widget body -->
                        </div><!-- tag widget  end -->
                    </aside><!-- sidebar end -->
                </div>
            </div>
        </div>
    </section>
    <!-- blog page wrapper end -->

@endsection
