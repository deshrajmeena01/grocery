@extends('User.layout.main')
@section('MainSection')
    <div class="modal fade" id="product-view">
        <div class="modal-dialog">
            <div class="modal-content">
                <button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="view-gallery">
                                <div class="view-label-group">
                                    <label class="view-label new">new</label>
                                    <label class="view-label off">-10%</label>
                                </div>
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="{{ url('User/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ url('User/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ url('User/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ url('User/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ url('User/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ url('User/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ url('User/images/product/01.jpg') }}" alt="product"></li>
                                </ul>
                                <ul class="thumb-slider">
                                    <li><img src="{{ url('User/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ url('User/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ url('User/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ url('User/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ url('User/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ url('User/images/product/01.jpg') }}" alt="product"></li>
                                    <li><img src="{{ url('User/images/product/01.jpg') }}" alt="product"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name">
                                    <a href='product-video.html'>existing product name</a>
                                </h3>
                                <div class="view-meta">
                                    <p>SKU:<span>1234567</span></p>
                                    <p>BRAND:<a href="#">radhuni</a></p>
                                </div>
                                <div class="view-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href='product-video.html'>(3 reviews)</a>
                                </div>
                                <h3 class="view-price">
                                    <del>$38.00</del>
                                    <span>$24.00<small>/per kilo</small></span>
                                </h3>
                                <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora
                                    magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos reprehenderit
                                    fuga</p>
                                <div class="view-list-group">
                                    <label class="view-list-title">tags:</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">organic</a></li>
                                        <li><a href="#">vegetable</a></li>
                                        <li><a href="#">chilis</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group">
                                    <label class="view-list-title">Share:</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>
                                <div class="view-add-group">
                                    <button class="product-add" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                        <span>add to cart</span>
                                    </button>
                                    <div class="product-action">
                                        <button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button>
                                        <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                            value="1">
                                        <button class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button>
                                    </div>
                                </div>
                                <div class="view-action-group">
                                    <a class="view-wish wish" href="#" title="Add Your Wishlist">
                                        <i class="icofont-heart"></i>
                                        <span>add to wish</span>
                                    </a>
                                    <a class='view-compare' href='compare.html' title='Compare This Item'>
                                        <i class="fas fa-random"></i>
                                        <span>Compare This</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--=====================================
                        PRODUCT VIEW END
            =======================================-->


    <!--=====================================
                        BANNER PART START
            =======================================-->
    <section class="single-banner inner-section"
        style="background: {{ url('User/images/single-banner.jpg') }}; no-repeat center;">
        <div class="container">
            <h2>product video</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href='index.html'>Home</a></li>
                <li class="breadcrumb-item"><a href='#'>shop-4column</a></li>
                <li class="breadcrumb-item active" aria-current="page">product-video</li>
            </ol>
        </div>
    </section>
    <!--=====================================
                        BANNER PART END
            =======================================-->


    <!--=====================================
                    PRODUCT DETAILS PART START
            =======================================-->
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="details-gallery">
                        <div class="details-label-group">
                            <label class="details-label new">new</label>
                            <label class="details-label off">-10%</label>
                        </div>
                        <ul class="details-preview">
                            <li><img src="{{ url($data->image) }}" alt="product"></li>
                            <li><img src="{{ url($data->image) }}" alt="product"></li>
                            <li><img src="{{ url($data->image) }}" alt="product"></li>
                            <li><img src="{{ url($data->image) }}" alt="product"></li>
                            <li><img src="{{ url($data->image) }}" alt="product"></li>
                        </ul>
                        <ul class="details-thumb">
                            <li><img style="height: 80px;object-fit: cover;" src="{{ url($data->image) }}"
                                    alt="product"></li>
                            <li><img style="height: 80px;object-fit: cover;" src="{{ url($data->image) }}"
                                    alt="product"></li>
                            <li><img style="height: 80px;object-fit: cover;" src="{{ url($data->image) }}"
                                    alt="product"></li>
                            <li><img style="height: 80px;object-fit: cover;" src="{{ url($data->image) }}"
                                    alt="product"></li>
                            <li><img style="height: 80px;object-fit: cover;" src="{{ url($data->image) }}"
                                    alt="product"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="details-content">
                        <h3 class="details-name"><a href="#">{{ $data->name }}</a></h3>
                        <div class="details-meta">
                            <p>SKU:<span>1234567</span></p>
                            <p>BRAND:<a href="#">radhuni</a></p>
                        </div>
                        {{-- <div class="details-rating">

                                @for ($i = 1; $i <= 5; $i++)
                                    @if ($i <= $data->rating)
                                        <i class="active icofont-star"></i>
                                    @else
                                        <i class="icofont-star"></i>
                                    @endif
                                @endfor
                              
                            </div> --}}
                        {{-- <h3 class="details-price">
                                <del>{{$data->sailing}}</del>
                                <span>{{$data->discount}}<small>/per kilo</small></span>
                            </h3> --}}
                        {{-- <p class="details-desc">{{$data->description}}</p> --}}
                        <div class="details-list-group">
                            <label class="details-list-title">tags:</label>
                            <ul class="details-tag-list">
                                <li><a href="#">organic</a></li>
                                <li><a href="#">fruits</a></li>
                                <li><a href="#">chilis</a></li>
                            </ul>
                        </div>
                        <div class="details-list-group">
                            <label class="details-list-title">Share:</label>
                            <ul class="details-share-list">
                                <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                            </ul>
                        </div>
                        <div class="details-add-group">
                            <button class="product-add" title="Add to Cart">
                                <i class="fas fa-shopping-basket"></i>
                                <span href="#">add to cart</span>
                            </button>
                            <div class="product-action">
                                <button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button>
                                <input class="action-input" title="Quantity Number" type="text" name="quantity"
                                    value="1">
                                <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                        <div class="details-action-group">
                            <a class="details-wish wish" href="#" title="Add Your Wishlist">
                                <i class="icofont-heart"></i>
                                <span>add to wish</span>
                            </a>
                            <a class='details-compare' href='compare.html' title='Compare This Item'>
                                <i class="fas fa-random"></i>
                                <span>Compare This</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                    PRODUCT DETAILS PART END
            =======================================-->


    <!--=====================================
                      PRODUCT TAB PART START
            =======================================-->
    <section class="inner-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs">
                        <li><a href="#tab-spec" class="tab-link" data-bs-toggle="tab">Specifications</a></li>
                    </ul>
                </div>
            </div>

            <div class="tab-pane fade" id="tab-spec">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-details-frame">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th scope="row">Product code</th>
                                        <td>SKU: 101783</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Weight</th>
                                        <td>1kg, 2kg</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Styles</th>
                                        <td>@Girly</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Properties</th>
                                        <td>Short Dress</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!--=====================================
                        PRODUCT TAB PART END
            =======================================-->


    <!--=====================================
                     PRODUCT RELATED PART START
            =======================================-->
    {{-- <section class="inner-section">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-heading">
                            <h2>related this items</h2>
                        </div>
                    </div>
                </div>
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    <label class="label-text sale">sale</label>
                                </div>
                                <button class="product-wish wish">
                                    <i class="fas fa-heart"></i>
                                </button>
                                <a class='product-image' href='product-video.html'>
                                    <img src="{{url('USer/images/product/01.jpg')}}" alt="product">
                                </a>
                                <div class="product-widget">
                                    <a class='fas fa-random' href='compare.html' title='Product Compare'></a>
                                    <a title="Product Video" href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true" data-vbtype="video"></a>
                                    <a title="Product View" href="#" class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating">
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="active icofont-star"></i>
                                    <i class="icofont-star"></i>
                                    <a href='product-video.html'>(3)</a>
                                </div>
                                <h6 class="product-name">
                                    <a href='product-video.html'>fresh green chilis</a>
                                </h6>
                                <h6 class="product-price">
                                    <del>$34</del>
                                    <span>$28<small>/piece</small></span>
                                </h6>
                                <button class="product-add" title="Add to Cart">
                                    <i class="fas fa-shopping-basket"></i>
                                    <span>add</span>
                                </button>
                                <div class="product-action">
                                    <button class="action-minus" title="Quantity Minus"><i class="icofont-minus"></i></button>
                                    <input class="action-input" title="Quantity Number" type="text" name="quantity" value="1">
                                    <button class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                   
                </div>
                
            </div>
        </section> --}}
    <!--=====================================
                     PRODUCT RELATED PART END
            =======================================-->


    <!--=====================================
                        NEWSLETTER PART START
            =======================================-->
    <section class="news-part" style="background: url(images/newsletter.jpg) no-repeat center;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5 col-lg-6 col-xl-7">
                    <div class="news-text">
                        <h2>Get 20% Discount for Subscriber</h2>
                        <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                    </div>
                </div>
                <div class="col-md-7 col-lg-6 col-xl-5">
                    <form class="news-form">
                        <input type="text" placeholder="Enter Your Email Address">
                        <button><span><i class="icofont-ui-email"></i>Subscribe</span></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                        NEWSLETTER PART END
            =======================================-->


    <!--=====================================
                        INTRO PART START
            =======================================-->
    <section class="intro-part">
        <div class="container">
            <div class="row intro-content">
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon">
                            <i class="fas fa-truck"></i>
                        </div>
                        <div class="intro-content">
                            <h5>free home delivery</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon">
                            <i class="fas fa-sync-alt"></i>
                        </div>
                        <div class="intro-content">
                            <h5>instant return policy</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="intro-content">
                            <h5>quick support system</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="intro-wrap">
                        <div class="intro-icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="intro-content">
                            <h5>secure payment way</h5>
                            <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
