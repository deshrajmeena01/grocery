   @php
        $user_id = Auth::check() ? Auth::user()->id: null;
        $totalprice = 0;

        if($user_id)
        {
            $user_cart = DB::table('user_cart')
                ->join('product', 'user_cart.product_id', '=', 'product.id') // Joining condition
                ->where('user_cart.user_id', $user_id) // Filtering based on cart id
                ->select('user_cart.*', 'product.name', 'product.selling', 'product.image') // Selecting the fields you need
                ->get();
            $productCount =  count($user_cart);

        }else{
        $user_cart = []; 
        $productCount=0;

        }
        // dd($user_cart);

   @endphp
   
   <!-- Content Wrapper -->

   <div id="content-wrapper" class="d-f<body">
    <div class="backdrop"></div>
    <a class="backtop fas fa-arrow-up" href="#"></a>
    
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-5">
                    <div class="header-top-welcome">
                        <p>Welcome to Ecomart in Your Dream Online Store!</p>
                    </div>
                </div>
                <!-- <div class="col-md-5 col-lg-3">
                    <div class="header-top-select">
                        <div class="header-select">
                            <i class="icofont-world"></i>
                            <select class="select">
                                <option value="english" selected>english</option>
                                <option value="bangali">bangali</option>
                                <option value="arabic">arabic</option>
                            </select>
                        </div>
                        <div class="header-select">
                            <i class="icofont-money"></i>
                            <select class="select">
                                <option value="english" selected>doller</option>
                                <option value="bangali">pound</option>
                                <option value="arabic">taka</option>
                            </select>
                        </div>
                    </div>
                </div> -->
                <div class="col-md-7 col-lg-4">
                    <ul class="header-top-list">
                        <li><a href='offer.html'>offers</a></li>
                        <li><a href='faq.html'>need help</a></li>
                        <li><a href='contact.html'>contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <header class="header-part">
        <div class="container">
            <div class="header-content">
                <div class="header-media-group">
                    <button class="header-user"><i class="icofont-options"></i></button>
                    <a href='index.html'><img src="{{url('user/images/logo.png')}}" alt="logo"></a>
                    <button class="header-src"><i class="fas fa-search"></i></button>
                </div>

                <a class='header-logo' href='index.html'>
                    <img src="{{url('user/images/logo.png')}}" alt="logo">
                </a>
              

                <form class="header-form">
                    <input type="text" placeholder="Search anything...">
                    <button><i class="fas fa-search"></i></button>
                </form>

                <div class="header-widget-group">
                    <!-- <a class='header-widget' href='compare.html' title='Compare List'>
                        <i class="fas fa-random"></i>
                        <sup>0</sup>
                    </a> -->
                    <a class='header-widget' href='wishlist.html' title='Wishlist'>
                        <i class="fas fa-heart"></i>
                        <sup>3</sup>
                    </a> 

                    @if($user_id)
                        <button class="header-widget header-cart" title="Cartlist">
                            <i class="fas fa-shopping-basket"></i>
                            <sup>{{ $productCount}}</sup>
                        </button>
                    @endif

                </div>
            </div>
        </div>
    </header>

    {{-- =====================================
                HEADER PART END --}}

    <!--=====================================
                NAVBAR PART START
    =======================================-->
    <nav class="navbar-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="navbar-content">
                        <ul class="navbar-list">
                            <li class="navbar-item dropdown">
                                <a class='header-widget' href='#' title='My Account'>
                                    <img src="{{url('user/images/user.png')}}" alt="user">
                                </a>
                            </li>
                            <li class="navbar-item dropdown">
                                <a class="navbar-link" href="{{Route('dashboard')}}">home</a>
                                
                            </li>
                            <li class="navbar-item dropdown-megamenu">
                                <a class="navbar-link" href="{{url('Shop')}}">shop</a>
                            </li>
                            <li class="navbar-item dropdown">
                                <a class="navbar-link dropdown-arrow" href="#">category</a>
                                <ul class="dropdown-position-list">
                                    <li><a href='#'>vegetables</a></li>
                                    <li><a href='#'>fruits</a></li>
                                    <li><a href='#'>dairy farms</a></li>
                                    <li><a href='#'>seafoods</a></li>
                                    <li><a href='#'>diet foods</a></li>
                                    <li><a href='#'>fast foods</a></li>
                                    <li><a href='#'>drinks</a></li>
                                    <li><a href='#'>meats</a></li>
                                    <li><a href='#'>fishes</a></li>
                                    <li><a href='#'>dry foods</a></li>
                                </ul>
                             
                            </li>
                            <!-- <li class="navbar-item dropdown">
                                <a class="navbar-link dropdown-arrow" href="#">pages</a>
                                <ul class="dropdown-position-list">
                                    <li><a href='profile.html'>my profile</a></li>
                                    <li><a href='wallet.html'>my wallet</a></li>
                                </ul>
                            </li> -->
                            <!-- <li class="navbar-item dropdown">
                                <a class="navbar-link dropdown-arrow" href="#">authentic</a>
                                <ul class="dropdown-position-list">
                                    <li><a href='login.html'>login</a></li>
                                    <li><a href='register.html'>register</a></li>
                                    <li><a href='reset-password.html'>reset password</a></li>
                                    <li><a href='change-password.html'>change password</a></li>
                                </ul>
                            </li>
                            <li class="navbar-item dropdown">
                                <a class="navbar-link dropdown-arrow" href="#">blogs</a>
                                <ul class="dropdown-position-list">
                                    <li><a href='blog-grid.html'>blog grid</a></li>
                                    <li><a href='blog-standard.html'>blog standard</a></li>
                                    <li><a href='blog-details.html'>blog details</a></li>
                                    <li><a href='blog-author.html'>blog author</a></li>
                                </ul>
                            </li> -->
                        </ul>
                        <div class="navbar-info-group">
                            <div class="navbar-info">
                                <i class="icofont-ui-touch-phone"></i>
                                <p>
                                    <small>call us</small>
                                    <span>(+91 9887755845) </span>
                                </p>
                            </div>
                            <div class="navbar-info">
                                <i class="icofont-ui-email"></i>
                                <p>
                                    <small>email us</small>
                                    <span>grocery@gmail.com</span>
                                </p>
                                @if($user_id)
                                    <div><ul> <li><a href="{{url('logout')}}" class='nav-link'><i class="icofont-logout"></i>logout</a></li></ul></div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    {{-- NAVBAR PART END --}}

    <!-- Main Content -->


    <aside class="category-sidebar">
        <div class="category-header">
            <h4 class="category-title">
                <i class="fas fa-align-left"></i>
                <span>categories</span>
            </h4>
            <button class="category-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="category-list">
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-vegetable"></i>
                    <span>vegetables</span>
                </a>
               
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-fruit"></i>
                    <span>fruits</span>
                </a>
               
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-dairy-products"></i>
                    <span>dairy farm</span>
                </a>
                
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-crab"></i>
                    <span>sea foods</span>
                </a>
               
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-salad"></i>
                    <span>diet foods</span>
                </a>
                
            </li>
          
    
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-fast-food"></i>
                    <span>fast foods</span>
                </a>
                
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-cheers"></i>
                    <span>drinks</span>
                </a>
                
            </li>
            
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-barbecue"></i>
                    <span>meats</span>
                </a>
               
            </li>
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-fish"></i>
                    <span>fishes</span>
                </a>
                
            </li>
    
            <li class="category-item">
                <a class="category-link dropdown-link" href="#">
                    <i class="flaticon-dried-fruit"></i>
                    <span>dry foods</span>
                </a>
                
            </li>
    
        </ul>
        <div class="category-footer">
            <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
        </div>
    </aside>
    <!--=====================================
            CATEGORY SIDEBAR PART END
    =======================================-->
    
    
    <!--=====================================
              CART SIDEBAR PART START
    =======================================-->
    <aside class="cart-sidebar">
        <div class="cart-header">
            <div class="cart-total">
                <i class="fas fa-shopping-basket"></i>
                        
                <span>total item {{$productCount}}</span>
            </div>
            <button class="cart-close"><i class="icofont-close"></i></button>
        </div>
        <ul class="cart-list">
            @foreach ($user_cart as $cart)
                @php
                    $itmeTotalprice = $cart->selling * $cart->quantity;
                    $totalprice += $itmeTotalprice;
                @endphp
                
            <li class="cart-item">
                <div class="cart-media">
                    <a href="#"><img src="{{$cart->image}}" alt="product"></a>
                    <button class="cart-delete" onclick="deleted({{$cart->id}})"><i class="far fa-trash-alt"></i></button>
                </div>
                <div class="cart-info-group">
                    <div class="cart-info">
                        <h6><a href="product-single.html">{{$cart->name}}</a></h6>                      
                        <p>Unit Price - {{$cart->selling}}</p>  
                    </div>
                    <div class="cart-action-group">
                        <div class="product-action">
                            <button class="action-minus" title="Quantity Minus" onclick="desh({{$cart->id}})"><i class="icofont-minus"></i></button>
                            <input class="action-input" title="Quantity Number" type="text" name="quantity" value="{{$cart->quantity}}">
                            <button class="action-plus" title="Quantity Plus" onclick="dds({{$cart->id}})"><i class="icofont-plus"></i></button>
                        </div>
                    <h6>{{$itmeTotalprice}}</h6>
                    </div>
                </div>
            </li> 
            @endforeach
           
        </ul>
        <div class="cart-footer">
            <button class="coupon-btn">Do you have a coupon code?</button>
            <form class="coupon-form">
                <input type="text" placeholder="Enter your coupon code">
                <button type="submit"><span>apply</span></button>
            </form>
            <a class='cart-checkout-btn' href='{{url('Checkout')}}'>
                <span class="checkout-label">Proceed to Checkout</span>
                <span class="checkout-price">{{$totalprice}}</span>

            </a>
        </div>
    </aside>
    <!--=====================================
                CART SIDEBAR PART END
    =======================================-->
    
    
    <!--=====================================
              NAV SIDEBAR PART START
    =======================================-->
    <aside class="nav-sidebar">
        <div class="nav-header">
            <a href="#"><img src="images/logo.png" alt="logo"></a>
            <button class="nav-close"><i class="icofont-close"></i></button>
        </div>
        <div class="nav-content">
            <div class="nav-btn">
                <a class='btn btn-inline' href='login.html'>
                    <i class="fa fa-unlock-alt"></i>
                    <span>join here</span>
                </a>
            </div>
            <!-- This commentable code show when user login or register -->
            <!-- <div class="nav-profile">
                <a class="nav-user" href="#"><img src="images/user.png" alt="user"></a>
                <h4 class="nav-name"><a href="profile.html">Miron Mahmud</a></h4>
            </div> -->
            <!-- <div class="nav-select-group">
                <div class="nav-select">
                    <i class="icofont-world"></i>
                    <select class="select">
                        <option value="english" selected>English</option>
                        <option value="bangali">Bangali</option>
                        <option value="arabic">Arabic</option>
                    </select>
                </div>
                <div class="nav-select">
                    <i class="icofont-money"></i>
                    <select class="select">
                        <option value="english" selected>Doller</option>
                        <option value="bangali">Pound</option>
                        <option value="arabic">Taka</option>
                    </select>
                </div>
            </div> -->
            <ul class="nav-list">
                <li>
                    <a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                </li>
                <li>
                    <a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                </li>
              
                <li>
                    <a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                    {{-- <ul class="dropdown-list">
                        <li><a href='profile.html'>profile</a></li>
                        <li><a href='wallet.html'>wallet</a></li>
                        <li><a href='wishlist.html'>wishlist</a></li>
                        <li><a href='compare.html'>compare</a></li>
                        <li><a href='checkout.html'>checkout</a></li>
                        <li><a href='orderlist.html'>order history</a></li>
                        <li><a href='invoice.html'>order invoice</a></li>
                        <li><a href='email-template.html'>email template</a></li>
                    </ul> --}}
                </li>
                {{-- <li>
                    <a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentication</a>
                    <ul class="dropdown-list">
                        <li><a href='login.html'>login</a></li>
                        <li><a href='register.html'>register</a></li>
                        <li><a href='reset-password.html'>reset password</a></li>
                        <li><a href='change-password.html'>change password</a></li>
                    </ul>
                </li> --}}
                {{-- <li>
                    <a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                    <ul class="dropdown-list">
                        <li><a href='blog-grid.html'>blog grid</a></li>
                        <li><a href='blog-standard.html'>blog standard</a></li>
                        <li><a href='blog-details.html'>blog details</a></li>
                        <li><a href='blog-author.html'>blog author</a></li>
                    </ul>
                </li> --}}
    
                {{-- <li><a class='nav-link' href='offer.html'><i class="icofont-sale-discount"></i>offers</a></li>
                <li><a class='nav-link' href='about.html'><i class="icofont-info-circle"></i>about us</a></li>
                <li><a class='nav-link' href='faq.html'><i class="icofont-support-faq"></i>need help</a></li>
                <li><a class='nav-link' href='contact.html'><i class="icofont-contacts"></i>contact us</a></li>
                <li><a class='nav-link' href='privacy.html'><i class="icofont-warning"></i>privacy policy</a></li>
                <li><a class='nav-link' href='coming-soon.html'><i class="icofont-options"></i>coming soon</a></li>
                <li><a class='nav-link' href='error.html'><i class="icofont-ui-block"></i>404 error</a></li> --}}
                <li><a class='nav-link' href='login.html'><i class="icofont-logout"></i>logout</a></li>
            </ul>
            <div class="nav-info-group">
                <div class="nav-info">
                    <i class="icofont-ui-touch-phone"></i>
                    <p>
                        <small>call us</small>
                        <span>(+880) 183 8288 389</span>
                    </p>
                </div>
                <div class="nav-info">
                    <i class="icofont-ui-email"></i>
                    <p>
                        <small>email us</small>
                        <span>support@example.com</span>
                    </p>
                </div>
            </div>
            <div class="nav-footer">
                <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
            </div>
        </div>
    </aside>
    <!--=====================================
              NAV SIDEBAR PART END
    =======================================-->
    
    
    <!--=====================================
                MOBILE-MENU PART START
    =======================================-->
    <div class="mobile-menu">
        <a href='index.html' title='Home Page'>
            <i class="fas fa-home"></i>
            <span>Home</span>
        </a>
        <button class="cate-btn" title="Category List">
            <i class="fas fa-list"></i>
            <span>category</span>
        </button>
        <button class="cart-btn" title="Cartlist">
            <i class="fas fa-shopping-basket"></i>
            <span>cartlist</span>
            <sup>9+</sup>
        </button>
        <a href='wishlist.html' title='Wishlist'>
            <i class="fas fa-heart"></i>
            <span>wishlist</span>
            <sup>0</sup>
        </a>
        <a href='compare.html' title='Compare List'>
            <i class="fas fa-random"></i>
            <span>compare</span>
            <sup>0</sup>
        </a>
    </div>
    <!--=====================================
                MOBILE-MENU PART END
    =======================================-->
       