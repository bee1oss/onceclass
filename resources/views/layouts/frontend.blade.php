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
        <link rel="stylesheet" href="{{asset("assets/tema_1/frontend/css/base.css")}}">
        <link rel="stylesheet" href="{{asset("assets/tema_1/frontend/css/vendor.css")}}">
        <link rel="stylesheet" href="{{asset("assets/tema_1/frontend/css/main.css")}}">
        @stack("customCSS")

        <!-- script
        ================================================== -->
        <script src="{{asset("assets/tema_1/frontend/js/modernizr.js")}}"></script>
        <script src="{{asset("assets/tema_1/frontend/js/pace.min.js")}}"></script>

        <!-- favicons
        ================================================== -->
        <link rel="shortcut icon" href="{{asset("assets/tema_1/frontend/images/thumbs/icon.png")}}" type="image/x-icon">
        <link rel="icon" href="{{asset("assets/tema_1/frontend/images/thumbs/icon.png")}}" type="image/x-icon">

    </head>

    <body id="top">

    <!-- pageheader
    ================================================== -->
    <section class="s-pageheader s-pageheader--home">

        <header class="header">
            <div class="header__content row">

                <div class="header__logo">
                    <a class="logo" href="index.html">
                       {{-- <img src="{{asset("assets/tema_1/frontend/images/logo.svg")}}" alt="Homepage">--}}
                        <h1 style="color:white; font-size:50px">Once Class</h1>
                    </a>
                </div> <!-- end header__logo -->

                {{--<ul class="header__social">
                    <li>
                        <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    </li>
                </ul> <!-- end header__social -->--}}

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

                    <h2 class="header__nav-heading h6">Site Navigation</h2>

                    <ul class="header__nav">
                        <li class="current"><a href="{{route("Frontend.index")}}" title="">Home</a></li>
                        <li class="has-children">
                            <a href="{{route("Frontend.cate")}}" title="">Categories</a>
                            <ul class="sub-menu">

                                <li><a href="{{route("Frontend.cate")}}">Lifestyle</a></li>

                                <li><a href="{{route("Frontend.cate")}}">Life</a></li>
                                <li><a href="{{route("Frontend.cate")}}">Health</a></li>
                                <li><a href="{{route("Frontend.cate")}}">Family</a></li>
                                <li><a href="{{route("Frontend.cate")}}">Management</a></li>
                                <li><a href="{{route("Frontend.cate")}}">Travel</a></li>
                                <li><a href="{{route("Frontend.cate")}}">Work</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#" title="">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="{{route("Frontend.video")}}">Video Post</a></li>
                                <li><a href="{{route("Frontend.page_about")}}">Audio Post</a></li>
                                <li><a href="{{route("Frontend.gallery")}}">Gallery Post</a></li>
                                <li><a href="{{route("Frontend.standart")}}">Standard Post</a></li>
                            </ul>
                        </li>
                        <li><a href="{{route("Frontend.about")}}" title="">About</a></li>
                        <li><a href="{{route("Frontend.contact")}}" title="">Contact</a></li>
                        <li class="has-children">
                                <a href="#">Profile</a>
                            <ul>
                                <li><a href="#">Profile Page</a></li>
                                <li><a href="">Settings</a></li>
                                <li><a href="{{route("frontend.logout")}}">Log out</a></li>
                            </ul>
                        </li>
                    </ul> <!-- end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->
            <br>
            </div> <!-- header-content -->

    @yield("content")
<!-- s-content
================================================== -->




<!-- s-extra
================================================== -->
<section class="s-extra">

    <div class="row top">

        <div class="col-eight md-six tab-full popular">
            <h3>Popular Posts</h3>

            <div class="block-1-2 block-m-full popular__posts">
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{asset("assets/tema_1/frontend/images/thumbs/small/wheel-150.jpg")}}" alt="">
                    </a>
                    <h5><a href="#0">Visiting Theme Parks Improves Your Health.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-19">Dec 19, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{asset("assets/tema_1/frontend/images/thumbs/small/shutterbug-150.jpg")}}" alt="">
                    </a>
                    <h5><a href="#0">Key Benefits Of Family Photography.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-18">Dec 18, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{asset("assets/tema_1/frontend/images/thumbs/small/cookies-150.jpg")}}" alt="">
                    </a>
                    <h5><a href="#0">Absolutely No Sugar Oatmeal Cookies.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-16">Dec 16, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{asset("assets/tema_1/frontend/images/thumbs/small/beetle-150.jpg")}}" alt="">
                    </a>
                    <h5><a href="#0">Throwback To The Good Old Days.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-16">Dec 16, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{asset("assets/tema_1/frontend/images/thumbs/small/tulips-150.jpg")}}" alt="">
                    </a>
                    <h5><a href="#0">10 Interesting Facts About Caffeine.</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-14">Dec 14, 2017</time></span>
                    </section>
                </article>
                <article class="col-block popular__post">
                    <a href="#0" class="popular__thumb">
                        <img src="{{asset("assets/tema_1/frontend/images/thumbs/small/salad-150.jpg")}}" alt="">
                    </a>
                    <h5><a href="#0">Healthy Mediterranean Salad Recipes</a></h5>
                    <section class="popular__meta">
                        <span class="popular__author"><span>By</span> <a href="#0"> John Doe</a></span>
                        <span class="popular__date"><span>on</span> <time datetime="2017-12-12">Dec 12, 2017</time></span>
                    </section>
                </article>
            </div> <!-- end popular_posts -->
        </div> <!-- end popular -->

        <div class="col-four md-six tab-full about">
            <h3>About Philosophy</h3>

            <p>
                Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
            </p>

            <ul class="about__social">
                <li>
                    <a href="#0"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a href="#0"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                </li>
            </ul> <!-- end header__social -->
        </div> <!-- end about -->

    </div> <!-- end row -->

    <div class="row bottom tags-wrap">
        <div class="col-full tags">
            <h3>Tags</h3>

            <div class="tagcloud">
                <a href="#0">Salad</a>
                <a href="#0">Recipe</a>
                <a href="#0">Places</a>
                <a href="#0">Tips</a>
                <a href="#0">Friends</a>
                <a href="#0">Travel</a>
                <a href="#0">Exercise</a>
                <a href="#0">Reading</a>
                <a href="#0">Running</a>
                <a href="#0">Self-Help</a>
                <a href="#0">Vacation</a>
            </div> <!-- end tagcloud -->
        </div> <!-- end tags -->
    </div> <!-- end tags-wrap -->

</section> <!-- end s-extra -->


<!-- s-footer
================================================== -->
<footer class="s-footer">

    <div class="s-footer__main">
        <div class="row">

            <div class="col-two md-four mob-full s-footer__sitelinks">

                <h4>Quick Links</h4>

                <ul class="s-footer__linklist">
                    <li><a href="#0">Home</a></li>
                    <li><a href="#0">Blog</a></li>
                    <li><a href="#0">Styles</a></li>
                    <li><a href="#0">About</a></li>
                    <li><a href="#0">Contact</a></li>
                    <li><a href="#0">Privacy Policy</a></li>
                </ul>

            </div> <!-- end s-footer__sitelinks -->

            <div class="col-two md-four mob-full s-footer__archives">

                <h4>Archives</h4>

                <ul class="s-footer__linklist">
                    <li><a href="#0">January 2018</a></li>
                    <li><a href="#0">December 2017</a></li>
                    <li><a href="#0">November 2017</a></li>
                    <li><a href="#0">October 2017</a></li>
                    <li><a href="#0">September 2017</a></li>
                    <li><a href="#0">August 2017</a></li>
                </ul>

            </div> <!-- end s-footer__archives -->

            <div class="col-two md-four mob-full s-footer__social">

                <h4>Social</h4>

                <ul class="s-footer__linklist">
                    <li><a href="#0">Facebook</a></li>
                    <li><a href="#0">Instagram</a></li>
                    <li><a href="#0">Twitter</a></li>
                    <li><a href="#0">Pinterest</a></li>
                    <li><a href="#0">Google+</a></li>
                    <li><a href="#0">LinkedIn</a></li>
                </ul>

            </div> <!-- end s-footer__social -->

            <div class="col-five md-full end s-footer__subscribe">

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
            <div class="col-full">
                <div class="s-footer__copyright">
                    <span>© Copyright Philosophy 2019</span>
                    <span> Begenç HACİYEW | Berat CEYHAN | {{$settings["isim"]}} </span>
                </div>

                <div class="go-top">
                    <a class="smoothscroll" title="Back to Top" href="#top"></a>
                </div>
            </div>
        </div>
    </div> <!-- end s-footer__bottom -->

</footer> <!-- end s-footer -->


<!-- preloader
================================================== -->
<div id="preloader">
    <div id="loader">
        <div class="line-scale">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</div>


<!-- Java Script
================================================== -->
<script src="{{asset("assets/tema_1/frontend/js/jquery-3.2.1.min.js")}}"></script>
<script src="{{asset("assets/tema_1/frontend/js/plugins.js")}}"></script>
<script src="{{asset("assets/tema_1/frontend/js/main.js")}}"></script>

            <script>
                // First circle
                new Circlebar({
                    element : "#circle-1",
                    type : "progress",
                    maxValue:  "90"
                });

                // Second circle
                new Circlebar({
                    element : "#circle-2",
                    type : "progress",
                    maxValue:  "84"
                });

                // Third circle
                new Circlebar({
                    element : "#circle-3",
                    type : "progress",
                    maxValue:  "60"
                });

                // Fourth circle
                new Circlebar({
                    element : "#circle-4",
                    type : "progress",
                    maxValue:  "74"
                });

            </script>
@stack("customJs")

</body>

</html>