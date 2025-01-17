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
        <title>Greeny - Login</title>

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
        <section class="user-form-part py-4 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <div class="text-center mb-4">
                            <a href="index.html">
                                <img src="{{ url('User/images/logo.png') }}" alt="logo" class="img-fluid" style="max-width: 150px;">
                            </a>
                        </div>
                        <div class="card shadow-sm">
                            <div class="card-body">
                                <h2 class="h4 text-center mb-3">Join Now!</h2>
                                <p class="text-center text-muted mb-4">Setup A New Account In A Minute</p>
        
                                <form method="POST" action="{{ route('userLogin') }}">
                                    @csrf
        
                                    <div class="mb-3">
                                        <input type="email" class="form-control" name="email" placeholder="Enter your email" required>
                                    </div>
        
                                    <div class="mb-3">
                                        <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
                                    </div>
        
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-success">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="text-center mt-3">
                            <p class="mb-1">Already Have An Account? <a href="{{ route('User.Register') }}">Register here</a></p>
                        </div>
                        <div class="text-center mt-3">
                            <p class="text-muted small">Greeny | &COPY; Copyright by <a href="#" class="text-decoration-none">Mironcoder</a></p>
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