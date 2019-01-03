
<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <title>@yield("title","Once")</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--===============================================================================================-->
        <link rel="shortcut icon" href="{{asset("assets/tema_1/frontend/images/thumbs/icon.png")}}" type="image/x-icon">
        <link rel="icon" href="{{asset("assets/tema_1/frontend/images/thumbs/icon.png")}}" type="image/x-icon">

        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset("assets/tema_1/frontend/login/vendor/bootstrap/css/bootstrap.min.css")}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset("assets/tema_1/frontend/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset("assets/tema_1/frontend/login/vendor/animate/animate.css")}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset("assets/tema_1/frontend/login/vendor/css-hamburgers/hamburgers.min.css")}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset("assets/tema_1/frontend/login/vendor/select2/select2.min.css")}}">
        <!--===============================================================================================-->
        <link rel="stylesheet" type="text/css" href="{{asset("assets/tema_1/frontend/login/css/util.css")}}">
        <link rel="stylesheet" type="text/css" href="{{asset("assets/tema_1/frontend/login/css/main.css")}}">

        <!--===============================================================================================-->
        @stack("customCSS")
    </head>
    <body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100">
                    <div class="login100-pic js-tilt" data-tilt>
                        <img src="{{asset("assets/tema_1/frontend/login/images/img-01.png")}}" alt="IMG">
                    </div>

                    @yield("content")
                </div>
            </div>
        </div>

        <!--===============================================================================================-->
        <script src="{{asset("assets/tema_1/frontend/login/vendor/jquery/jquery-3.2.1.min.js")}}"></script>
        <!--===============================================================================================-->
        <script src="{{asset("assets/tema_1/frontend/login/vendor/bootstrap/js/popper.js")}}"></script>
        <script src="{{asset("assets/tema_1/frontend/login/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
        <!--===============================================================================================-->
        <script src="{{asset("assets/tema_1/frontend/login/vendor/select2/select2.min.js")}}"></script>
        <!--===============================================================================================-->
        <script src="{{asset("assets/tema_1/frontend/login/vendor/tilt/tilt.jquery.min.js")}}"></script>
        <script >
            $('.js-tilt').tilt({
                scale: 1.1
            })
        </script>
        <!--===============================================================================================-->
        <script src="{{asset("assets/tema_1/frontend/login/css/js/main.js")}}"></script>
        @stack("customJs")
    </body>
</html>
