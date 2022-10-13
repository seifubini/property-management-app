<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
        
        <title>DAS Property Management Portal</title>

        <!-- Loading third party fonts -->
        <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
        <link href="{!! url('landing/fonts/font-awesome.min.css') !!}" rel="stylesheet" type="text/css">

        <!-- Loading main css file -->
        <link rel="stylesheet" href="{!! url('landing/style.css') !!}">
        
        <!--[if lt IE 9] -->
        <script src="{!! url('landing/js/ie-support/html5.js') !!}"></script>
        <script src="{!! url('landing/js/ie-support/respond.js') !!}"></script>
        <!-- [endif]-->

    </head>


    <body>
        
        <div class="site-content">
            <header class="site-header" data-bg-image="{!! url('landing/images/banner.png') !!}">
                <div class="container">
                    <a href="{{ route('home.index') }}" class="branding">
                        <img src="{!! url('landing/images/new-logo-das.png') !!}" alt="Apartments">
                    </a>

                    <div class="top_right_menu">
                        @auth
                        <span style="color: #fff;">{{auth()->user()->name}}&nbsp;</span>
                        <a href="{{ route('logout.perform') }}" class="btn-sm button">Logout</a>
                        @endauth
                        @guest
                        <a href="{{ route('login.perform') }}" class="btn-sm button" style="margin-right: 5px;">Signin</a>
                        <a href="{{ route('register.perform') }}" class="btn-sm button">Signup</a>
                        @endguest
                    </div>
                </div>
                <div class="banner" >
                    <div class="banner-content">
                        <div class="container">
                            <div class="cta">
                                <a href="#">
                                    <a href="#" class="arrow-button"><i class="fa fa-angle-right"></i></a>
                                    <h2>Neque porro quisquam est dolrem ipsum</h2>
                                    <small>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore pariatur</small>
                                </a>
                            </div>

                            <div class="subscribe-form">
                                <form action="#">
                                    <small class="form-subtitle">Start to live in Your</small>
                                    <h2 class="form-title">New Apartment</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla, dicta. Molestiae voluptatem laudantium tempora nemo vitae</p>

                                    <div class="control">
                                        <input type="text" placeholder="Your name...">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="control">
                                        <input type="text" placeholder="Email address...">
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                    <div class="control">
                                        <input type="text" placeholder="Phone number...">
                                        <i class="fa fa-phone"></i>
                                    </div>
                                    <input type="submit" value="Subscribe now">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header> <!-- .site-header -->

            <main class="main-content">
                <div class="fullwidth-block">
                    <div class="container">
                        <h2 class="section-title">What is so great in our apartments?</h2>
                        <div class="row">
                            <div class="col-md-5">
                                <ul class="arrow-list">
                                    <li>Nemo enim ipsam voluptatem voluptas</li>
                                    <li>Quisquam dolorem ipsum quia dolor sit</li>
                                    <li>Consectetur adipisci velit sed quia</li>
                                    <li>Numquam eius modi tempora incidunt</li>
                                    <li>Dolor in reprehenderit in voluptate velit</li>
                                    <li>in reprehenderit in voluptate</li>
                                </ul>
                            </div>
                            <div class="col-md-7">
                                <div class="feature-slider">
                                    <ul class="slides">
                                        <li>
                                            <figure>
                                                <img src="{!! url('landing/images/feature-1.jpg') !!}" alt="Feature 1">
                                                <figcaption>
                                                    <h3 class="feature-title">Neque porro quisquam est dolorem ipsum</h3>
                                                    <small class="feature-desc">Velit esse cillum dolore pariatur</small>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="{!! url('landing/images/feature-2.jpg') !!}" alt="Feature 2">
                                                <figcaption>
                                                    <h3 class="feature-title">Dolor in reprehenderit in voluptate velit</h3>
                                                    <small class="feature-desc">Reprehenderit in voluptate velit</small>
                                                </figcaption>
                                            </figure>
                                        </li>
                                        <li>
                                            <figure>
                                                <img src="{!! url('landing/images/feature-3.jpg') !!}" alt="Feature 3">
                                                <figcaption>
                                                    <h3 class="feature-title">Quisquam dolorem ipsum quia dolor sit</h3>
                                                    <small class="feature-desc">Quia dolor ipsum quia dolor sit</small>
                                                </figcaption>
                                            </figure>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="fullwidth-block" data-bg-color="#f0f0f0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="feature">
                                    <div class="feature-icon"><img src="{!! url('landing/images/icon-location.png') !!}" alt=""></div>
                                    <h3 class="feature-title">Perfect location</h3>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="feature">
                                    <div class="feature-icon"><img src="{!! url('landing/images/icon-golf.png') !!}" alt=""></div>
                                    <h3 class="feature-title">Golf course</h3>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="feature">
                                    <div class="feature-icon"><img src="{!! url('landing/images/icon-valet.png') !!}" alt=""></div>
                                    <h3 class="feature-title">Private valet</h3>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="feature">
                                    <div class="feature-icon"><img src="{!! url('landing/images/icon-phone.png') !!}" alt=""></div>
                                    <h3 class="feature-title">24/h infoline</h3>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="post-list">
                            <article class="post">
                                <figure class="feature-image" data-bg-image="{!! url('landing/images/figure-1.jpg') !!}"></figure>
                                <div class="post-detail">
                                    <h2 class="entry-title">Lorem porro quisquam dolorem</h2>
                                    <p>Omnis iste natus error sit voluptatem doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia.</p>
                                    <a href="#" class="button">See more</a>
                                </div>
                            </article>
                            <article class="post">
                                <figure class="feature-image" data-bg-image="{!! url('landing/images/figure-1.jpg') !!}"></figure>
                                <div class="post-detail">
                                    <h2 class="entry-title">Lorem porro quisquam dolorem</h2>
                                    <p>Omnis iste natus error sit voluptatem doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia.</p>
                                    <a href="#" class="button">See more</a>
                                </div>
                            </article>
                            <article class="post">
                                <figure class="feature-image">
                                    <iframe width="854" height="510" src="https://www.youtube.com/embed/B8dmbnTsy3g" frameborder="0" allowfullscreen></iframe>
                                </figure>
                                <div class="post-detail">
                                    <h2 class="entry-title">Lorem porro quisquam dolorem</h2>
                                    <p>Omnis iste natus error sit voluptatem doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam voluptatem quia.</p>
                                    <a href="#" class="button">See more</a>
                                </div>
                            </article>
                        </div>
                    
                                
                    </div>  
                </div>
                <div class="fullwidth-block">
                    <div class="container">
                        <h2 class="section-title">Meet our partners</h2>
                        <div class="partners">
                            <a href="#"><img src="{!! url('landing/images/partner-1.png') !!}" alt=""></a>
                            <a href="#"><img src="{!! url('landing/images/partner-2.png') !!}" alt=""></a>
                            <a href="#"><img src="{!! url('landing/images/partner-3.png') !!}" alt=""></a>
                            <a href="#"><img src="{!! url('landing/images/partner-4.png') !!}" alt=""></a>
                            <a href="#"><img src="{!! url('landing/images/partner-5.png') !!}" alt=""></a>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="site-footer">
                <div class="container">
                    <p>Copyright 2022 DasAddis Property Management. All rights reserved</p>
                    <div class="social-links">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                        <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </footer>
        </div>

        <script src="{!! url('landing/js/jquery-1.11.1.min.js') !!}"></script>
        <script src="{!! url('landing/js/plugins.js') !!}"></script>
        <script src="{!! url('landing/js/app.js') !!}"></script>
        
    </body>

</html>