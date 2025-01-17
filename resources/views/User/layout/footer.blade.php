 <!--=====================================
                     FOOTER PART START
        =======================================-->
        <footer class="footer-part">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <a class="footer-logo" href="#">
                                <img src="{{url('user/images/logo.png')}}" alt="logo">
                            </a>
                            <p class="footer-desc">Adipisci asperiores ipsum ipsa repellat consequatur repudiandae quisquam assumenda dolor perspiciatis sit ipsum dolor amet.</p>
                            <ul class="footer-social">
                                <li><a class="icofont-facebook" href="#"></a></li>
                                <li><a class="icofont-twitter" href="#"></a></li>
                                <li><a class="icofont-linkedin" href="#"></a></li>
                                <li><a class="icofont-instagram" href="#"></a></li>
                                <li><a class="icofont-pinterest" href="#"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget contact">
                            <h3 class="footer-title">contact us</h3>
                            <ul class="footer-contact">
                                <li>
                                    <i class="icofont-ui-email"></i>
                                    <p>
                                        <span>support@example.com</span>
                                        <span>carrer@example.com</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-ui-touch-phone"></i>
                                    <p>
                                        <span>+91 9887755845</span>
                                        <span>+91 9887755845</span>
                                    </p>
                                </li>
                                <li>
                                    <i class="icofont-location-pin"></i>
                                    <p>1Hd- 50, 010 Avenue, NY 90001 United States</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">quick Links</h3>
                            <div class="footer-links">
                                <ul>
                                    <li><a href="#">My Account</a></li>
                                    <li><a href="#">Order History</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Best Seller</a></li>
                                    <li><a href="#">New Arrivals</a></li>
                                </ul>
                                <ul>
                                    <li><a href="#">Location</a></li>
                                    <li><a href="#">Affiliates</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">Carrer</a></li>
                                    <li><a href="#">Faq</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="footer-widget">
                            <h3 class="footer-title">Download App</h3>
                            <p class="footer-desc">Lorem ipsum dolor sit amet tenetur dignissimos ipsum eligendi autem obcaecati minus ducimus totam reprehenderit exercitationem!</p>
                            <div class="footer-app">
                                <a href="#"><img src="{{url('user/images/google-store.png')}}" alt="google"></a>
                                <a href="#"><img src="{{url('user/images/app-store.png')}}" alt="app"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom">
                            <p class="footer-copytext">&copy;  All Copyrights Reserved by <a target="_blank" href="https://themeforest.net/user/mironcoder">Mironcoder</a></p>
                            <div class="footer-card">
                                <a href="#"><img src="{{url('user/images/payment/jpg/01.jpg')}}" alt="payment"></a>
                                <a href="#"><img src="{{url('user/images/payment/jpg/02.jpg')}}" alt="payment"></a>
                                <a href="#"><img src="{{url('user/images/payment/jpg/03.jpg')}}" alt="payment"></a>
                                <a href="#"><img src="{{url('user/images/payment/jpg/04.jpg')}}" alt="payment"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--=====================================
                      FOOTER PART END
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

        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
        @yield('script')


        <script>
            function desh(productid)
            {          
                $.ajax({
                    type:'post',
                    headers:{
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{url('productdesc')}}",
                    data:{id:productid},
                    dataType:'json',
                    success: function(result) {
                            if (result.status_code === 1) {                          
                                // $('#producttable').DataTable().ajax.reload(null, false);                               
                                Toastify({
                                    text: result.message,
                                    duration: 3000,
                                    gravity: "top",
                                    position: "right",
                                    className: "bg-success ",
                                }).showToast();
    
                                setTimeout(function() {
                                    window.location.reload();
                                }, 1000);
                            } else if (result.status_code === 2) {
                                Toastify({
                                    text: result.message,
                                    duration: 3000,
                                    gravity: "top",
                                    position: "right",
                                    style: {
                                background: "#FFC107",
                                    },
                                }).showToast();
                            } else {
                                Toastify({
                                    text: result.message,
                                    duration: 3000,
                                    gravity: "top",
                                    position: "right",
                                    className: "bg-danger", 
                                }).showToast();
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('AJAX Error:', error);
                            Toastify({
                                text: 'An error occurred. Please try again.',
                                duration: 3000,
                                gravity: "top",
                                position: "right",
                                className: "bg-danger",
                            }).showToast();
                        },
                });
            }
        
        </script>



<script>   
    function deleted(proid)
    {          
        $.ajax({
            type:'post',
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{url('deletecart')}}",
            data:{id:proid},
            dataType:'json',
            success: function(result) {
                    if (result.status_code === 1) {                          
                        // $('#producttable').DataTable().ajax.reload(null, false);                               
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-success ",
                        }).showToast();

                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else if (result.status_code === 2) {
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            style: {
                        background: "#FFC107",
                            },
                        }).showToast();
                    } else {
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-danger", 
                        }).showToast();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                    Toastify({
                        text: 'An error occurred. Please try again.',
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        className: "bg-danger",
                    }).showToast();
                },
        });
    }
</script>


<script>
    function dds(product)
    {          
        $.ajax({
            type:'post',
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{url('productInc')}}",
            data:{id:product},
            dataType:'json',
            success: function(result) {
                    if (result.status_code === 1) {                          
                        // $('#producttable').DataTable().ajax.reload(null, false);                               
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-success ",
                        }).showToast();

                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else if (result.status_code === 2) {
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            style: {
                            background: "#FFC107",
                            },
                        }).showToast();
                    } else {
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-danger", 
                        }).showToast();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                    Toastify({
                        text: 'An error occurred. Please try again.',
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        className: "bg-danger",
                    }).showToast();
                },
        });
    }

</script>

<script>   
    function desh(productid)
    {          
        $.ajax({
            type:'post',
            headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "{{url('productdesc')}}",
            data:{id:productid},
            dataType:'json',
            success: function(result) {
                    if (result.status_code === 1) {                          
                        // $('#producttable').DataTable().ajax.reload(null, false);                               
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-success ",
                        }).showToast();

                        setTimeout(function() {
                            window.location.reload();
                        }, 1000);
                    } else if (result.status_code === 2) {
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            style: {
                        background: "#FFC107",
                            },
                        }).showToast();
                    } else {
                        Toastify({
                            text: result.message,
                            duration: 3000,
                            gravity: "top",
                            position: "right",
                            className: "bg-danger", 
                        }).showToast();
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                    Toastify({
                        text: 'An error occurred. Please try again.',
                        duration: 3000,
                        gravity: "top",
                        position: "right",
                        className: "bg-danger",
                    }).showToast();
                },
        });
    }
</script>
        <!--=====================================
                    JS LINK PART END
        =======================================-->
    </body>

<!-- Mirrored from mironcoder-greeny.netlify.app/assets/ltr/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 12 Dec 2024 02:27:17 GMT -->
</html>






