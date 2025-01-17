<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from mironcoder-greeny.netlify.app/assets/ltr/register by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2024 02:29:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
        <!--=====================================
                    META TAG PART START
        =======================================-->
        <!-- REQUIRE META -->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- TEMPLATE META -->
        <meta name="name" content="Greeny">
        <meta name="title" content="Greeny - eCommerce HTML Template">
        <meta name="keywords" content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, webshop, farm, grocery, natural, online store">
        <!--=====================================
                    META-TAG PART END
        =======================================-->

        <!-- WEBPAGE TITLE -->
        <title>Greeny - Register</title>

        <!--=====================================
                    CSS LINK PART START
        =======================================-->
        <!-- FAVICON -->
        <link rel="icon" href="{{url('User/images/favicon.png')}}">

        <!-- FONTS -->
        <link rel="stylesheet" href="{{url('User/fonts/icofont/icofont.min.css')}}">
        <link rel="stylesheet" href="{{url('User/fonts/fontawesome/fontawesome.min.css')}}">
        <link rel="stylesheet" href="{{url('User/fonts/flaticon/flaticon.css')}}">
        <link rel="stylesheet" href="{{url('User/vendor/venobox/venobox.min.css')}}">
        <link rel="stylesheet" href="{{url('User/vendor/slickslider/slick.min.css')}}">
        <link rel="stylesheet" href="{{url('User/vendor/niceselect/nice-select.min.css')}}">
        <link rel="stylesheet" href="{{url('User/vendor/bootstrap/bootstrap.min.css')}}">

        <!-- CUSTOM -->
        <link rel="stylesheet" href="{{url('User/css/main.css')}}">
        <link rel="stylesheet" href="{{url('User/css/user-auth.css')}}">
        <link rel="stylesheet" href="{{url('User/css/main.css')}}">
        <!--=====================================
                    CSS LINK PART END
        =======================================-->
    </head>
    <body>
        <!--=====================================
                    USER FORM PART START
        =======================================-->
        <section class="user-form-part">
            <div class="container" style="min-width:450px;">
                <div class="row justify-content-center">
                    <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10">
                        <div class="user-form-logo">
                            <a href='index.html'><img src="{{url('User/images/logo.png')}}" alt="logo"></a>
                        </div>
                        <div class="user-form-card">
                            <div class="user-form-title">
                                <h2>Join Now!</h2>
                                <p>Setup A New Account In A Minute</p>
                            </div>
                            <!-- <div class="user-form-group">
                                <ul class="user-form-social">
                                    <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Join with facebook</a></li>
                                    <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>Join with twitter</a></li>
                                    <li><a href="#" class="google"><i class="fab fa-google"></i>Join with google</a></li>
                                    <li><a href="#" class="instagram"><i class="fab fa-instagram"></i>Join with instagram</a></li>
                                </ul>
                                <div class="user-form-divider">
                                    <p>or</p>
                                </div> -->
                                <form method="POST" action="{{url('UserRegister')}}" class="user-form" style="width: 600px;left: 184px;position: relative;display: inline-block;">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="mobile" placeholder="Enter your mobile">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password" placeholder="Enter your password">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Enter repeat password">
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="checkbox" value="" id="check">
                                        <label class="form-check-label" for="check">Accept all the <a href="#">Terms & Conditions</a></label>
                                    </div>
                                    <div class="form-button">
                                        <button type="submit">register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="user-form-remind">
                            <p>Already Have An Account?<a href='{{ route('User.Login') }}'>login here</a></p>
                        </div>
                        <div class="user-form-footer">
                            <p>Greeny | &COPY; Copyright by <a href="#">Mironcoder</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================
                    USER FORM PART END
        =======================================-->


        <!--=====================================
                    JS LINK PART START
        =======================================-->
        <!-- VENDOR -->
        <script src="{{url('User/vendor/bootstrap/jquery-1.12.4.min.js')}}"></script>
        <script src="{{url('User/vendor/bootstrap/popper.min.js')}}"></script>
        <script src="{{url('User/vendor/bootstrap/bootstrap.min.js')}}"></script>
        <script src="{{url('User/vendor/countdown/countdown.min.js')}}"></script>
        <script src="{{url('User/vendor/niceselect/nice-select.min.js')}}"></script>
        <script src="{{url('User/vendor/slickslider/slick.min.js')}}"></script>
        <script src="{{url('User/vendor/venobox/venobox.min.js')}}"></script>

        <!-- CUSTOM -->
        <script src="{{url('User/js/nice-select.js')}}"></script>
        <script src="{{url('User/js/countdown.js')}}"></script>
        <script src="{{url('User/js/accordion.js')}}"></script>
        <script src="{{url('User/js/venobox.js')}}"></script>
        <script src="{{url('User/js/slick.js')}}"></script>
        <script src="{{url('User/js/main.js')}}"></script> 
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>

<!-- Mirrored from mironcoder-greeny.netlify.app/assets/ltr/register by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2024 02:29:09 GMT -->
</html>