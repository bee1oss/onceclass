<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <!--- basic page needs
        ================================================== -->
        <meta charset="utf-8">
        <title>@yield("title","Once")</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- mobile specific metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{asset("assets/frontend/css/base.css")}}">
        <link rel="stylesheet" href="{{asset("assets/frontend/css/vendor.css")}}">
        <link rel="stylesheet" href="{{asset("assets/frontend/css/main.css")}}">
        @stack("customCSS")

        <!-- script
        ================================================== -->
        <script src="{{asset("assets/frontend/js/modernizr.js")}}"></script>

        <!-- favicons
        ================================================== -->
        <link rel="shortcut icon" href="{{asset("assets/frontend/images/thumbs/favicon.png")}}" type="image/x-icon">
        <link rel="icon" href="{{asset("assets/frontend/images/thumbs/favicon.png")}}" type="image/x-icon">

    </head>
    <body id="top">
        <!-- preloader
        ================================================== -->
        <div id="preloader">
            <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
        </div>

        <!-- header
        ================================================== -->
        <header class="s-header header">

    <div class="header__logo">
        <a class="logo" href="index.html">
         {{--   <img src="{{asset("assets/frontend/images/logo.svg")}}" alt="Homepage">--}}
        </a>
    </div> <!-- end header__logo -->

    <a class="header__search-trigger" href="#0"></a>
    <div class="header__search">

        <form role="search" method="get" class="header__search-form" action="#">
            <label>
                <span class="hide-content">Search for:</span>
                <input type="search" class="search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
            </label>
            <input type="submit" class="search-submit" value="Search">
        </form>

        <a href="#0" title="Close Search" class="header__overlay-close">Close</a>

    </div>  <!-- end header__search -->

    <a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>
    <nav class="header__nav-wrap">

        <h2 class="header__nav-heading h6">Navigate to</h2>

        <ul class="header__nav">
            <li class="current"><a href="{{route("Frontend.index")}}" title="">Home</a></li>
            <li class="has-children">
                <a href="#0" title="">Categories</a>
                <ul class="sub-menu">
                    <li><a href="{{route("Frontend.cate")}}">Life</a></li>
                    <li><a href="{{route("Frontend.cate")}}">Health</a></li>
                    <li><a href="{{route("Frontend.cate")}}">Family</a></li>
                    <li><a href="{{route("Frontend.cate")}}">Management</a></li>
                    <li><a href="{{route("Frontend.cate")}}">Travel</a></li>
                    <li><a href="{{route("Frontend.cate")}}">Work</a></li>
                </ul>
            </li>
            <li class="has-children">
                <a href="#0" title="">Blog</a>
                <ul class="sub-menu">
                    <li><a href="{{route("Frontend.video")}}">Video Post</a></li>
                    <li><a href="{{route("Frontend.audio")}}">Audio Post</a></li>
                    <li><a href="{{route("Frontend.standart")}}">Standard Post</a></li>
                </ul>
            </li>
            <li><a href="{{route("Frontend.style")}}" title="">Styles</a></li>
            <li><a href="{{route("Frontend.about")}}" title="">About</a></li>
            <li><a href="{{route("Frontend.contact")}}" title="">Contact</a></li>
            <li><a href="" title="">Sing in</a></li>
        </ul> <!-- end header__nav -->

        <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

    </nav> <!-- end header__nav-wrap -->

</header> <!-- s-header -->

        @yield("content")
        <section class="s-extra">

            <div class="row">

                <div class="col-seven md-six tab-full popular">
                    <h3>Popular Posts</h3>

                    <div class="block-1-2 block-m-full popular__posts">
                        <article class="col-block popular__post">
                            <a href="#0" class="popular__thumb">
                                <img src="{{asset("assets/frontend/images/thumbs/small/tulips-150.jpg")}}" alt="">
                            </a>
                            <h5>10 Interesting Facts About Caffeine.</h5>
                            <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                                <span class="popular__date"><span>on</span> <time datetime="2018-06-14">Jun 14, 2018</time></span>
                            </section>
                        </article>
                        <article class="col-block popular__post">
                            <a href="#0" class="popular__thumb">
                                <img src="{{asset("assets/frontend/images/thumbs/small/wheel-150.jpg")}}" alt="">
                            </a>
                            <h5><a href="#0">Visiting Theme Parks Improves Your Health.</a></h5>
                            <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                                <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12, 2018</time></span>
                            </section>
                        </article>
                        <article class="col-block popular__post">
                            <a href="#0" class="popular__thumb">
                                <img src="{{asset("assets/frontend/images/thumbs/small/shutterbug-150.jpg")}}" alt="">
                            </a>
                            <h5><a href="#0">Key Benefits Of Family Photography.</a></h5>
                            <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                                <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12, 2018</time></span>
                            </section>
                        </article>
                        <article class="col-block popular__post">
                            <a href="#0" class="popular__thumb">
                                <img src="{{asset("assets/frontend/images/thumbs/small/cookies-150.jpg")}}" alt="">
                            </a>
                            <h5><a href="#0">Absolutely No Sugar Oatmeal Cookies.</a></h5>
                            <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                                <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12, 2018</time></span>
                            </section>
                        </article>
                        <article class="col-block popular__post">
                            <a href="#0" class="popular__thumb">
                                <img src="{{asset("assets/frontend/images/thumbs/small/beetle-150.jpg")}}" alt="">
                            </a>
                            <h5><a href="#0">Throwback To The Good Old Days.</a></h5>
                            <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0">John Doe</a></span>
                                <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12, 2018</time></span>
                            </section>
                        </article>
                        <article class="col-block popular__post">
                            <a href="#0" class="popular__thumb">
                                <img src="{{asset("assets/frontend/images/thumbs/small/salad-150.jpg")}}" alt="">
                            </a>
                            <h5>Healthy Mediterranean Salad Recipes</h5>
                            <section class="popular__meta">
                                <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                                <span class="popular__date"><span>on</span> <time datetime="2018-06-12">Jun 12, 2018</time></span>
                            </section>
                        </article>
                    </div> <!-- end popular_posts -->
                </div> <!-- end popular -->

                <div class="col-four md-six tab-full end">
                    <div class="row">
                        <div class="col-six md-six mob-full categories">
                            <h3>Categories</h3>

                            <ul class="linklist">
                                <li><a href="#0">Lifestyle</a></li>
                                <li><a href="#0">Travel</a></li>
                                <li><a href="#0">Recipes</a></li>
                                <li><a href="#0">Management</a></li>
                                <li><a href="#0">Health</a></li>
                                <li><a href="#0">Creativity</a></li>
                            </ul>
                        </div> <!-- end categories -->

                        <div class="col-six md-six mob-full sitelinks">
                            <h3>Site Links</h3>

                            <ul class="linklist">
                                <li><a href="#0">Home</a></li>
                                <li><a href="#0">Blog</a></li>
                                <li><a href="#0">Styles</a></li>
                                <li><a href="#0">About</a></li>
                                <li><a href="#0">Contact</a></li>
                                <li><a href="#0">Privacy Policy</a></li>
                            </ul>
                        </div> <!-- end sitelinks -->
                    </div>
                </div>
            </div> <!-- end row -->

        </section> <!-- end s-extra -->

        <!-- s-footer
        ================================================== -->
        <footer class="s-footer">

    <div class="s-footer__main">
        <div class="row">

            <div class="col-six tab-full s-footer__about">

                <h4>About Wordsmith</h4>

                <p>Fugiat quas eveniet voluptatem natus. Placeat error temporibus magnam sunt optio aliquam. Ut ut occaecati placeat at.
                    Fuga fugit ea autem. Dignissimos voluptate repellat occaecati minima dignissimos mollitia consequatur.
                    Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa error
                    temporibus magnam est voluptatem.</p>

            </div> <!-- end s-footer__about -->

            <div class="col-six tab-full s-footer__subscribe">

                <h4>Our Newsletter</h4>

                <p>Sit vel delectus amet officiis repudiandae est voluptatem. Tempora maxime provident nisi et fuga et enim exercitationem ipsam. Culpa consequatur occaecati.</p>

                <div class="subscribe-form">
                    <form id="mc-form" class="group" novalidate="true">

                        <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">

                        <input type="submit" name="subscribe" value="Send">

                        <label for="mc-email" class="subscribe-message"></label>

                    </form>
                </div>

            </div> <!-- end s-footer__subscribe -->

        </div>
    </div> <!-- end s-footer__main -->

    <div class="s-footer__bottom">
        <div class="row">

            <div class="col-six">
                <ul class="footer-social">
                    <li>
                        <a href="#0"><i class="fab fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fab fa-pinterest"></i></a>
                    </li>
                </ul>
            </div>

            <div class="col-six">
                <div class="s-footer__copyright">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved<i class="fa fa-heart" aria-hidden="true"> | Begenç HACİYEW | Berat CEYHAN</i>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</span>
                </div>
            </div>

        </div>
    </div> <!-- end s-footer__bottom -->

    <div class="go-top">
        <a class="smoothscroll" title="Back to Top" href="#top"></a>
    </div>

</footer> <!-- end s-footer -->

        <!-- Java Script
        ================================================== -->
        <script src="{{asset("assets/frontend/js/jquery-3.2.1.min.js")}}"></script>
        <script src="{{asset("assets/frontend/js/plugins.js")}}"></script>
        <script src="{{asset("assets/frontend/js/main.js")}}"></script>
        @stack("customJs")
    </body>
</html>