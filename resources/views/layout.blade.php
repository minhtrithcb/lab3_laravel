<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>LAB3 Võ Minh Trí</title>

<!-- ~~~=| Fonts files |==-->
<link href='http://fonts.googleapis.com/css?family=Lato:400,300,700,900,700italic,400italic,300italic,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,400italic,500,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- ~~~=| Font awesome |==-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<!-- ~~~=| Bootstrap css |==-->
{{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">

<!-- ~~~=| Theme files |==-->
<link rel="stylesheet" href="{{ asset('style.css')}}">
<link rel="stylesheet" href="{{ asset('css/responsive.css')}}">

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" href="{{ asset('images/apple-touch-icon-precomposed.png')}}">
<link rel="shortcut icon" type="image/ico" href="{{ asset('images/favicon.ico')}}"/> --}}

<base href="{{asset('/')}}">
<!-- ~~~=| Bootstrap css |==-->
<link rel="stylesheet" href="css/bootstrap.css">

<!-- ~~~=| Theme files |==-->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/responsive.css">

<!-- Favicons -->
<link rel="apple-touch-icon-precomposed" href="images/apple-touch-icon-precomposed.png">
<link rel="shortcut icon" type="image/ico" href="images/favicon.ico"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!-- Done by Shakhawat H. from codingcouples.com // -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- ~~~=| Header START |=~~~ -->
<header class="header_area">
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="header_top_left">
            <div class="news_twiks">
              <h4>Breaking</h4>
            </div>
            <div class="news_twiks_items">
              <div id="carousel-example-generic1" class="carousel slide" data-ride="carousel"> 
                
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <p>ĐƯA THIẾT KẾ CỦA BẠN LÊN TẦM CAO MỚI</p>
                  </div>
                  <div class="item">
                    <p>ĐƯA THIẾT KẾ CỦA BẠN LÊN TẦM CAO MỚI TẬP 2</p>
                  </div>
                  <div class="item">
                    <p>ĐƯA THIẾT KẾ CỦA BẠN LÊN TẦM CAO MỚI TẬP 3</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="header_top_right">
            <div class="social_header">
              <ul>
                <li><a class="fa fa-facebook" href=""></a></li>
                <li><a class="fa fa-twitter" href=""></a></li>
                <li><a class="fa fa-google-plus" href=""></a></li>
                <li><a class="fa fa-linkedin" href=""></a></li>
                <li><a class="fa fa-behance" href=""></a></li>
              </ul>
            </div>
            <div class="header_search_box">
              <form class="header_search hidden-xs" action="index.html">
                <input type="text" placeholder="Search">
                <input type="submit" value="">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- ~~~=| Logo Area START |=~~~ -->
  <div class="header_logo_area">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="logo"> <a href="/"><img src="images/logo.png" alt="Site Logo"/></a> </div>
          {{-- <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="Site Logo"/></a> </div> --}}
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="header_add"> <a href="#"><img src="https://newshop.vn/public/uploads/content/banner_in_lich_tet_2021_mobile.jpg" alt="Site add"/></a> </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ~~~=| Logo Area END |=~~~ --> 
  
  <!-- ~~~=| Main Navigation START |=~~~ -->
  <div class="mainnav">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          @include('menu')
          
          <!-- ~~~=| Mobile Navigation END |=~~~ -->
          <div class="only-for-mobile">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <ul class="ofm">
                <li class="m_nav"><i class="fa fa-bars"></i> Hash</li>
              </ul>
              
              <!-- MOBILE MENU -->
              <div class="mobi-menu">
                <div id='cssmenu'>
                  <ul>
                    <li class='has-sub'> <a href='index.html'><span>Home</span></a>
                      <ul class="sub-nav">
                        <li><a href="index.html"><span>Home One</span></a></li>
                        <li><a href="index-two.html"><span>Home Two</span></a></li>
                      </ul>
                    </li>
                    <li class='has-sub'> <a href='#'><span>News</span></a>
                      <ul class="sub-nav">
                        <li><a href="#"><span>Hockey</span></a></li>
                        <li><a href="#"><span>Cricket</span></a></li>
                        <li><a href="#"><span>Football</span></a></li>
                        <li><a href="#"><span>Boxing</span></a></li>
                        <li><a href="#"><span>Bat Mitton</span></a></li>
                        <li><a href="#"><span>Others</span></a></li>
                      </ul>
                    </li>
                    <li> <a href='#'><span>Fashion</span></a> </li>
                    <li class='has-sub'> <a href='#'><span>Lifeguide</span></a>
                      <ul>
                        <li class='has-sub'> <a href='#'><span>features</span></a>
                          <ul class="has-sub">
                            <li><a href="#"><span>Business</span></a></li>
                            <li><a href="#"><span>Technology</span></a></li>
                            <li><a href="#"><span>Politics</span></a></li>
                            <li><a href="#"><span>Sport</span></a></li>
                            <li><a href="#"><span>Science</span></a></li>
                            <li><a href="#"><span>Health</span></a></li>
                            <li><a href="#"><span>Fashion Shirts</span></a></li>
                            <li class="last"><a href="./#"><span>CASUAL SHIRTS</span></a></li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li> <a href='#'><span>CHILDREN</span></a> </li>
                    <li class='has-sub'> <a href='#'><span>Pages</span></a>
                      <ul class="sub-nav">
                        <li><a href="about.html"><i class="fa fa-angle-right"></i>About page</a></li>
                        <li><a href="contact.html"><i class="fa fa-angle-right"></i>Contact Page</a></li>
                        <li><a href="blog-single-audio-post.html"><i class="fa fa-angle-right"></i>Blog with Aduio page</a></li>
                        <li><a href="blog-single-link-post.html"><i class="fa fa-angle-right"></i>Blog with Link page</a></li>
                        <li><a href="blog-single-post.html"><i class="fa fa-angle-right"></i>Blog with Post page</a></li>
                        <li><a href="blog-single-quote-post.html"><i class="fa fa-angle-right"></i>Blog with Quote page</a></li>
                        <li><a href="blog-single-slider-post.html"><i class="fa fa-angle-right"></i>Blog with Slider page</a></li>
                        <li><a href="blog-single-twitter-post.html"><i class="fa fa-angle-right"></i>Blog with Twitter page</a></li>
                        <li><a href="blog-single-video-post.html"><i class="fa fa-angle-right"></i>Blog with Video page</a></li>
                      </ul>
                    </li>
                    <li> <a href='#'><span>Gadgets</span></a> </li>
                    <li> <a href='#'><span>Lifestyle</span></a> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- ~~~=| Mobile Navigation START |=~~~ --> 
          
        </div>
      </div>
    </div>
  </div>
  <!-- ~~~=| Main Navigation END |=~~~ --> 
  
</header>
<!-- ~~~=| Header END |=~~~ --> 

<!-- ~~~=| Banner START |=~~~ -->
@yield('tinnoibat')
<!-- ~~~=| Banner END |=~~~ --> 

<!-- ~~~=| Main Wrapper END |=~~~ -->
<section class="main_news_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-sm-9 col-xs-12"> 
        <!-- ~~~=| Fashion area START |=~~~ -->
        @yield('noidungchinh')
        <!-- ~~~=| Fashion area END |=~~~ --> 
      </div>
      <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="home_sidebar">
          <div class="purchase_sidebar">
            <div class="purchase_sidebar_img"> <img src="images/sidebar1.jpg" alt="" />
              <div class="purchase_overlay"></div>
              <div class="purchase_sidebar_text">
                <h2>Hash</h2>
                <p>Cung cấp cho trang web của bạn một thiết kế lại nó xứng đáng
                </p>
                <div class="purchase_s"> <a href="">Mua ngay</a> </div>
              </div>
            </div>
          </div>
          <div class="follow_us_side">
            <h2>Theo dõi chúng tôi tại</h2>
            <div class="all_single_follow">
              <div class="single_follow_us"> <a href=""> <i class="fa fa-facebook"></i><br>
                5638<br>
                Fans </a> </div>
              <div class="single_follow_us twit"> <a href=""> <i class="fa fa-twitter"></i><br>
                5638<br>
                Fans </a> </div>
              <div class="single_follow_us goopl"> <a href=""> <i class="fa fa-google-plus"></i><br>
                5638<br>
                Fans </a> </div>
              <div class="single_follow_us last_one"> <a href=""> <i class="fa fa-dribbble"></i><br>
                5638<br>
                Fans </a> </div>
            </div>
          </div>
          @include('tinmoi')
          <div class="follow_us_side">
            <h2>Image Gallery</h2>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
              </ol>
              
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                <div class="item active">
                  <div class="br_single_news"> <img alt="" src="images/side_slider.jpg">
                    <div class="br_cam"> <a class="fa fa-camera" href=""></a> </div>
                  </div>
                </div>
                <div class="item">
                  <div class="br_single_news"> <img alt="" src="images/side_slider.jpg">
                    <div class="br_cam"> <a class="fa fa-camera" href=""></a> </div>
                  </div>
                </div>
                <div class="item">
                  <div class="br_single_news"> <img alt="" src="images/side_slider.jpg">
                    <div class="br_cam"> <a class="fa fa-camera" href=""></a> </div>
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
<!-- ~~~=| Main Wrapper END |=~~~ --> 

<!-- ~~~=| Footer START |=~~~ -->
<footer class="footer_area">
  <div class="footer_top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="footer_top_box">
            <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer_top_left"> <img src="images/footer_logo.png" alt="Footer Logo" />
                  <p>
                    HASH là trang thông tin điện tử của Công ty Cổ phần Truyền Thông Trực Tuyến Netlink
Người chịu trách nhiệm nội dung: Võ Minh Trí
                  </p>
                  <div class="ft_contact">
                    <h4>Liên hệ</h4>
                    <address>
                    <p> <i class="fa fa-map-marker"></i>Tầng 04, Tòa nhà Star, Lô D32 KĐT Cầu Giấy, Đường Dương Đình Nghệ, Yên Hòa, Cầu Giấy, Hà Nội.</p>
                    <a href="tel:+100012354657"><i class="fa fa-phone"></i>ĐT: +84-243-5586999;</a><br>
                    <a href="mail-to:Info@News.com"><i class="fa fa-phone"></i> E-mail : Info@News.com</a>
                    </address>
                  </div>
                  <div class="ft_connected">
                    <h4>Liên kết với chúng tôi</h4>
                    <p>Theo dõi chúng tôi trên mạng xã hội và cập nhật những diễn biến mới nhất.
                    </p>
                    <ul>
                      <li><a class="fa fa-facebook" href=""></a></li>
                      <li><a class="fa fa-twitter" href=""></a></li>
                      <li><a class="fa fa-google-plus" href=""></a></li>
                      <li><a class="fa fa-linkedin" href=""></a></li>
                      <li><a class="fa fa-tumblr" href=""></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer_top_middle">
                  <div class="ftm_realted_post">
                    <h4>Bài viết đang HOT</h4>
                    <div class="single_related_post">
                      <div class="srp_img"> <a href="blog-single-slider-post.html"> <img src="images/s_rl_pic1.jpg" alt="" /> </a> </div>
                      <div class="rel_post_text"> <span>Tháng 7 2021</span>
                        <p>Chúng tôi có thể thiết kế cho mong muốn của bạn. Chúng tôi ở đây ...</p>
                      </div>
                    </div>
                    <div class="single_related_post">
                      <div class="srp_img"> <a href="blog-single-slider-post.html"> <img src="images/s_rl_pic2.jpg" alt="" /> </a> </div>
                      <div class="rel_post_text"> <span>Tháng 7 2025</span>
                        <p>Chúng tôi có thể thiết kế cho mong muốn của bạn. Chúng tôi ở đây ...</p>
                      </div>
                    </div>
                    <div class="single_related_post">
                      <div class="srp_img"> <a href="blog-single-slider-post.html"> <img src="images/s_rl_pic3.jpg" alt="" /> </a> </div>
                      <div class="rel_post_text"> <span>Tháng 7 2022</span>
                        <p>Chúng tôi có thể thiết kế cho mong muốn của bạn. Chúng tôi ở đây ...</p>
                      </div>
                    </div>
                  </div>
                  <div class="ftm_newsletter">
                    <h4>Tin mới nhất</h4>
                    <p>Đăng ký để nghe và nhận cập nhật mới hàng ngày của chúng tôi qua email.</p>
                    <form>
                      <input type="text" value="Email address"/>
                      <input type="submit" class="fm_newsletter"/>
                    </form>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="footer_top_right">
                  <div class="ftr_video">
                    <h4>VIDEO TRONG NGÀY
                    </h4>
                    <div class="results_video embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" width="560" height="350" src="https://www.youtube.com/embed/ScMzIvxBSi4" allowfullscreen></iframe>
                    </div>
                  </div>
                  <div class="ftr_tags">
                    <h4>Tags</h4>
                    <ul id="tag">
                      <li><a href="">Android</a></li>
                      <li><a href="">Apple</a></li>
                      <li><a href="">Games</a></li>
                      <li><a href="">Phần mêm</a></li>
                      <li><a href="">Dev and Design</a></li>
                      <li><a href="">Thư viện</a></li>
                      <li><a href="">Cuộc sống</a></li>
                      <li><a href="">Công nghệ</a></li>
                      <li><a href="">Thể thao</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- <div class="footer_bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="footer_bottom_box">
            <p> &copy; Thiết kế b </p>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
</footer>
<!-- ~~~=| Footer END |=~~~ --> 

<!-- ~~~=| Latest jQuery |=~~~ --> 
<script src="https://code.jquery.com/jquery.min.js"></script> 

<!-- ~~~=| Bootstrap jQuery |=~~~ --> 
<script src="js/bootstrap.min.js"></script> 

<!-- ~~~=| Opacity & Other IE fix for older browser |=~~~ --> 
<!--[if lte IE 8]>
		<script type="text/javascript" src="js/ie-opacity-polyfill.js"></script>
	<![endif]--> 

<!-- ~~~=| Theme jQuery |=~~~ --> 
<script src="js/main.js"></script>
</body>
</html>
