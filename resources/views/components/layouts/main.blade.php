<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
   <title>{{ $title ?? 'Game Info' }}</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="" type="image/x-icon" />
   <link rel="apple-touch-icon" href="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="/css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="/style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="/css/colors.css">
   <!-- ALL VERSION CSS -->	
   <link rel="stylesheet" href="/css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="/css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="/css/custom.css">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="css/3dslider.css" />
   <script src="/http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="/text/css">
   <script src="/js/3dslider.js"></script>
   </head>
   <body class="game_info" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="/images/loading-img.gif" alt="">
      </div>
      <!-- END LOADER -->
      <section id="top">
         <header>
            <div class="container">
               <div class="header-top">
                  <div class="row">
                     <div class="col-md-6">
                        <div class="full">
                           <div class="logo">
                              <a href="index.html"><img src="/images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="right_top_section">
                           <!-- social icon -->
                           <ul class="social-icons pull-left">
                              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                              <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                           </ul>
                           <!-- end social icon -->
                           <!-- button section -->
                           <ul class="login">
                              <li class="login-modal">
                                 <a href="#" class="login"><i class="fa fa-user"></i>Login</a>
                              </li>
                              <li>
                                 <div class="cart-option">
                                    <a href="{{ route('posts.create') }}"><i class="fa fa-shopping-cart"></i>New Post</a>
                                 </div>
                              </li>
                           </ul>
                           <!-- end button section -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="header-bottom">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="full">
                           <div class="main-menu-section">
                              <div class="menu">
                                            <x-navbar></x-navbar>
                                 <div class="search-bar">
                                    <div id="imaginary_container">
                                       <div class="input-group stylish-input-group">
                                          <input type="text" class="form-control"  placeholder="Search" >
                                          <span class="input-group-addon">
                                          <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>  
                                          </span>
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
         </header>
         <div class="full-slider">
            <div id="carousel-example-generic" class="carousel slide"> 

                {{ $slot }}
                
                <footer id="footer" class="footer">
                    <div class="container">
                       <div class="row">
                          <div class="col-md-4">
                             <div class="full">
                                <div class="footer-widget">
                                   <div class="footer-logo">
                                      <a href="#"><img src="/images/footer-logo.png" alt="#" /></a>
                                   </div>
                                   <p>Most of our events have hard and easy route choices as we are always keen to encourage new riders.</p>
                                   <ul class="social-icons style-4 pull-left">
                                      <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                      <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                      <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                      <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                   </ul>
                                </div>
                             </div>
                          </div>
                          <div class="col-md-2">
                             <div class="full">
                                <div class="footer-widget">
                                   <h3>Menu</h3>
                                   <ul class="footer-menu">
                                      <li><a href="about.html">About Us</a></li>
                                      <li><a href="team.html">Our Team</a></li>
                                      <li><a href="news.html">Latest News</a></li>
                                      <li><a href="matche.html">Recent Matchs</a></li>
                                      <li><a href="blog.html">Our Blog</a></li>
                                      <li><a href="contact.html">Contact Us</a></li>
                                   </ul>
                                </div>
                             </div>
                          </div>
                          <div class="col-md-3">
                             <div class="full">
                                <div class="footer-widget">
                                   <h3>Contact us</h3>
                                   <ul class="address-list">
                                      <li><i class="fa fa-map-marker"></i> Lorem Ipsum is simply dummy text of the printing..</li>
                                      <li><i class="fa fa-phone"></i> 123 456 7890</li>
                                      <li><i style="font-size:20px;top:5px;" class="fa fa-envelope"></i> demo@gmail.com</li>
                                   </ul>
                                </div>
                             </div>
                          </div>
                          <div class="col-md-3">
                             <div class="full">
                                <div class="contact-footer">
                                   <iframe src="/https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d120615.72236587871!2d73.07890527988283!3d19.140910987164396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1527759905404" width="600" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="footer-bottom">
                       <div class="container">
                          <p>Copyright © 2018 GameInfo.All rights reserved.</p>
                       </div>
                    </div>
                 </footer>
                 <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
                 <!-- ALL JS FILES -->
                 <script src="/js/all.js"></script>
                 <!-- ALL PLUGINS -->
                 <script src="/js/custom.js"></script>
              </body>
           </html>