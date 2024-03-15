<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="">
    <title>Bangla Bazar 2 </title>
    <meta name="description" content="">
    <meta name="viewport" content="">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/')}}website/assets/img/banglabazar/titel-icon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/animate.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/slick.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/font-awesome-pro.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/flaticon_shofy.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/spacing.css">
    <link rel="stylesheet" href="{{asset('/')}}website/assets/css/main.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->


<!-- pre loader area start -->
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <!-- loading content here -->
            <div class="tp-preloader-content">
                <div class="tp-preloader-logo">
                    <div class="tp-preloader-circle">
                        <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                            <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                        </svg>
                    </div>
                    {{--                    <img src="{{asset('/')}}mywebsite/assets/img/logo/preloader/preloader-icon.svg" alt="">--}}
                    <img src="{{asset('/')}}website/assets/img/banglabazar/titel-icon.png" height="100px" alt="logo">
                </div>
                <h3 class="tp-preloader-title">Bangla</h3>
                <h3 class="tp-preloader-title">Bazar</h3>
            </div>
        </div>
    </div>
</div>
<!-- pre loader area end -->

<!-- back to top start -->
<div class="back-to-top-wrapper">
    <button id="back_to_top" type="button" class="back-to-top-btn">
        <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>
</div>
<!-- back to top end -->

<!-- offcanvas area start -->
<div class="offcanvas__area offcanvas__style-green">
    <div class="offcanvas__wrapper">
        <div class="offcanvas__close">
            <button class="offcanvas__close-btn offcanvas-close-btn">
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        <div class="offcanvas__content">
            <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                <div class="offcanvas__logo logo">
                    <a href="index.html">
                        <img src="{{asset('/')}}website/assets/img/logo/logome.png" height="90px" alt="logo">
                    </a>
                </div>
            </div>
            <div class="offcanvas__category pb-40">
                <button class="tp-offcanvas-category-toggle">
                    <i class="fa-solid fa-bars"></i>
                    All Categories
                </button>
                <div class="tp-category-mobile-menu">

                </div>
            </div>
            <div class="tp-main-menu-mobile fix d-lg-none mb-40"></div>

            <div class="offcanvas__contact align-items-center d-none">
                <div class="offcanvas__contact-icon mr-20">
                     <span>
                        <img src="{{asset('/')}}website/assets/img/icon/contact.png" alt="">
                     </span>
                </div>
                <div class="offcanvas__contact-content">
                    <h3 class="offcanvas__contact-title">
                        <a href="tel:098-852-987">004524865</a>
                    </h3>
                </div>
            </div>
            <div class="offcanvas__btn">
                <a href="contact.html" class="tp-btn-2 tp-btn-border-2">Contact Us</a>
            </div>
        </div>
        <div class="offcanvas__bottom">
            <div class="offcanvas__footer d-flex align-items-center justify-content-between">
                <div class="offcanvas__currency-wrapper currency">
                    <span class="offcanvas__currency-selected-currency tp-currency-toggle" id="tp-offcanvas-currency-toggle">Currency : USD</span>
                    <ul class="offcanvas__currency-list tp-currency-list">
                        <li>USD</li>
                        <li>ERU</li>
                        <li>BDT </li>
                        <li>INR</li>
                    </ul>
                </div>
                <div class="offcanvas__select language">
                    <div class="offcanvas__lang d-flex align-items-center justify-content-md-end">
                        <div class="offcanvas__lang-img mr-15">
                            <img src="{{asset('/')}}website/assets/img/icon/language-flag.png" alt="">
                        </div>
                        <div class="offcanvas__lang-wrapper">
                            <span class="offcanvas__lang-selected-lang tp-lang-toggle" id="tp-offcanvas-lang-toggle">English</span>
                            <ul class="offcanvas__lang-list tp-lang-list">
                                <li>Spanish</li>
                                <li>Portugese</li>
                                <li>American</li>
                                <li>Canada</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="body-overlay"></div>
<!-- offcanvas area end -->

<!-- mobile menu area start -->
<div id="tp-bottom-menu-sticky" class="tp-mobile-menu d-lg-none">
    <div class="container">
        <div class="row row-cols-5">
            <div class="col">
                <div class="tp-mobile-item text-center">
                    <a href="shop.html" class="tp-mobile-item-btn">
                        <i class="flaticon-store"></i>
                        <span>Store</span>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="tp-mobile-item text-center">
                    <button class="tp-mobile-item-btn tp-search-open-btn">
                        <i class="flaticon-search-1"></i>
                        <span>Search</span>
                    </button>
                </div>
            </div>
            <div class="col">
                <div class="tp-mobile-item text-center">
                    <a href="wishlist.html" class="tp-mobile-item-btn">
                        <i class="flaticon-love"></i>
                        <span>Wishlist</span>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="tp-mobile-item text-center">
                    <a href="profile.html" class="tp-mobile-item-btn">
                        <i class="flaticon-user"></i>
                        <span>Account</span>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="tp-mobile-item text-center">
                    <button class="tp-mobile-item-btn tp-offcanvas-open-btn">
                        <i class="flaticon-menu-1"></i>
                        <span>Menu</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile menu area end -->

<!-- search area start -->
<section class="tp-search-area tp-search-style-green">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-search-form">
                    <div class="tp-search-close text-center mb-20">
                        <button class="tp-search-close-btn tp-search-close-btn"></button>
                    </div>
                    <form action="#">
                        <div class="tp-search-input mb-10">
                            <input type="text" placeholder="Search for product...">
                            <button type="submit"><i class="flaticon-search-1"></i></button>
                        </div>
                        <div class="tp-search-category">
                            <span>Search by : </span>
                            <a href="#">Grocery, </a>
                            <a href="#">Fresh, </a>
                            <a href="#">Meat, </a>
                            <a href="#">Vegetables, </a>
                            <a href="#">Food</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- search area end -->

<!-- cart mini area start -->
<div class="cartmini__area cartmini__style-green">
    <div class="cartmini__wrapper d-flex justify-content-between flex-column">
        <div class="cartmini__top-wrapper">
            <div class="cartmini__top p-relative">
                <div class="cartmini__top-title">
                    <h4>Shopping cart</h4>
                </div>
                <div class="cartmini__close">
                    <button type="button" class="cartmini__close-btn cartmini-close-btn"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="cartmini__shipping">
                <p> Free Shipping for all orders over <span>$50</span></p>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" data-width="70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
            <div class="cartmini__widget">
                <div class="cartmini__widget-item">
                    <div class="cartmini__thumb">
                        <a href="product-details.html">
                            <img src="{{asset('/')}}website/assets/img/product/product-1.jpg" alt="">
                        </a>
                    </div>
                    <div class="cartmini__content">
                        <h5 class="cartmini__title"><a href="product-details.html">Level Bolt Smart Lock</a></h5>
                        <div class="cartmini__price-wrapper">
                            <span class="cartmini__price">$46.00</span>
                            <span class="cartmini__quantity">x2</span>
                        </div>
                    </div>
                    <a href="#" class="cartmini__del"><i class="fa-regular fa-xmark"></i></a>
                </div>
            </div>
            <!-- for wp -->
            <!-- if no item in cart -->
            <div class="cartmini__empty text-center d-none">
                <img src="{{asset('/')}}website/assets/img/product/cartmini/empty-cart.png" alt="">
                <p>Your Cart is empty</p>
                <a href="shop.html" class="tp-btn">Go to Shop</a>
            </div>
        </div>
        <div class="cartmini__checkout">
            <div class="cartmini__checkout-title mb-30">
                <h4>Subtotal:</h4>
                <span>$113.00</span>
            </div>
            <div class="cartmini__checkout-btn">
                <a href="cart.html" class="tp-btn mb-10 w-100"> view cart</a>
                <a href="checkout.html" class="tp-btn tp-btn-border w-100"> checkout</a>
            </div>
        </div>
    </div>
</div>
<!-- cart mini area end -->

<!-- header area start -->
<header>
    <div id="header-sticky" class="tp-header-area p-relative tp-header-sticky tp-header-height">
        <div class="tp-header-5 pl-25 pr-25 hederbox" >
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-5 col-8">
                        <div class="tp-header-left-5 d-flex align-items-center">
                            <div class="tp-header-hamburger-5 mr-15 d-none d-lg-block">
                                <button class="tp-hamburger-btn-2 tp-hamburger-toggle">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                            <div class="tp-header-hamburger-5 mr-15 d-lg-none">
                                <button class="tp-hamburger-btn-2 tp-offcanvas-open-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                            <div class="logo">
                                <a href="{{route('home')}}">
                                    <img src="{{asset('/')}}website/assets/img/logo/logome.png" height="90px" alt="logo">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-6 d-none d-xl-block">
                        <div class="main-menu d-none">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="has-dropdown">
                                        <a href="">Home</a>
                                        <ul class="tp-submenu">
                                            <li><a href="#">Home Style 1</a></li>
                                            <li><a href="#">Home Style 1</a></li>
                                            <li><a href="#">Home Style 1</a></li>
                                            <li><a href="#">Home Style 1</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Products</a></li>
                                    <li><a href="#">Categories</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="tp-header-search-5">
                            <form action="#">
                                <div class="tp-header-search-input-box-5">
                                    <div class="tp-header-search-input-5">
                                        <input type="text" placeholder="Search for products (e.g. eggs, milk, potato)">
                                        <span class="tp-header-search-icon-5">
                                       <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M8.11111 15.2222C12.0385 15.2222 15.2222 12.0385 15.2222 8.11111C15.2222 4.18375 12.0385 1 8.11111 1C4.18375 1 1 4.18375 1 8.11111C1 12.0385 4.18375 15.2222 8.11111 15.2222Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M16.9995 17L13.1328 13.1333" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </span>
                                    </div>
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-6 col-md-6 col-sm-7 col-4">
                        <div class="tp-header-right-5 d-flex align-items-center justify-content-end">
                            <div class="tp-header-login-5 d-none d-md-block">
                                <a href="profile.html" class="d-flex align-items-center">
                                    <div class="tp-header-login-icon-5">
                                    <span>
                                       <svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M8.00029 9C10.2506 9 12.0748 7.20914 12.0748 5C12.0748 2.79086 10.2506 1 8.00029 1C5.75 1 3.92578 2.79086 3.92578 5C3.92578 7.20914 5.75 9 8.00029 9Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          <path d="M15 17C15 13.904 11.8626 11.4 8 11.4C4.13737 11.4 1 13.904 1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                       </svg>
                                    </span>
                                    </div>
                                    <div class="tp-header-login-content-5">
                                        <p><span>Hello</span> <br> Register</p>
                                    </div>
                                </a>
                            </div>
                            <div class="tp-header-action-5 d-flex align-items-center ml-20">
                                <div class="tp-header-action-item-5 d-none d-sm-block">
                                    <a href="wishlist.html">
                                        <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20125 16.0348C11.0291 14.9098 12.7296 13.5858 14.2722 12.0865C15.3567 11.0067 16.1823 9.69033 16.6858 8.23822C17.5919 5.42131 16.5335 2.19649 13.5717 1.24212C12.0151 0.740998 10.315 1.02741 9.00329 2.01177C7.69109 1.02861 5.99161 0.742297 4.43489 1.24212C1.47305 2.19649 0.40709 5.42131 1.31316 8.23822C1.81666 9.69033 2.64228 11.0067 3.72679 12.0865C5.26938 13.5858 6.96983 14.9098 8.79771 16.0348L8.99568 16.1579L9.20125 16.0348Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M5.85156 4.41306C4.95446 4.69963 4.31705 5.50502 4.2374 6.45262" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="tp-header-action-badge-5">8</span>
                                    </a>
                                </div>
                                <div class="tp-header-action-item-5">
                                    <button type="button" class="cartmini-open-btn">
                                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.31165 17H12.6964C15.4091 17 17.4901 16.0781 16.899 12.3676L16.2107 7.33907C15.8463 5.48764 14.5912 4.77907 13.49 4.77907H4.48572C3.36828 4.77907 2.18607 5.54097 1.76501 7.33907L1.07673 12.3676C0.574694 15.659 2.59903 17 5.31165 17Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M5.19048 4.59622C5.19048 2.6101 6.90163 1.00003 9.01244 1.00003V1.00003C10.0289 0.99598 11.0052 1.37307 11.7254 2.04793C12.4457 2.72278 12.8506 3.6398 12.8506 4.59622V4.59622" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M6.38837 8.34478H6.42885" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M11.5466 8.34478H11.5871" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        <span class="tp-header-action-badge-5">13</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-header-side-menu tp-side-menu-5">

            <nav  class="tp-category-menu-content">
                <ul>
                    @foreach($categories as $category)
                    <li class="has-dropdown">
                        <a class="dropnavlink" href="{{route('product.bycategory', ['id' =>$category->id])}}">{{$category->name}}</a>

                        <div class="mega-menu tp-submenu">

                                <div class="home-menu-item">
                                    @foreach($category->subCategories as $subCategory)
                                    <a class="dropnavlink" href="{{route('product.subCategory', ['id' =>$subCategory->id])}}">{{$subCategory->name}}</a>
                                    @endforeach

                            </div>
                        </div>
                    </li>
                    @endforeach



                </ul>
            </nav>


        </div>
    </div>
</header>
<!-- header area end -->


<main>

    @yield('body')
</main>


<!-- footer area start -->
<footer>
    <div class="tp-footer-area tp-footer-style-2 tp-footer-style-5 hederbox" >
        <div class="tp-footer-top pt-95">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-2 mb-50">
                            <h4 class="tp-footer-widget-title text-white">About</h4>
                            <div class="tp-footer-widget-content">
                                <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A atque aut cumque dolorem dolores, eaque est eveniet fugiat inventore minus nihil nostrum praesentium quae quis quos tenetur ut vitae voluptatibus?</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-2 mb-50">
                            <h4 class="tp-footer-widget-title text-white">Pages</h4>
                            <div class="tp-footer-widget-content ">
                                <ul>
                                    <li class="text-white"><a class="text-white" href="#">About</a></li>
                                    <li class="text-white"><a class="text-white" href="#">Contact Us</a></li>
                                    <li class="text-white"><a class="text-white" href="#">Privacy Policy</a></li>
                                    <li class="text-white"><a class="text-white" href="#">Return & Refund Policy</a></li>
                                    <li class="text-white"><a class="text-white" href="#">Refer & Win</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-3 mb-50">
                            <h4 class="tp-footer-widget-title text-white">Infomation</h4>
                            <div class="tp-footer-widget-content">
                                <ul>
                                    <li class="text-white"><a class="text-white" href="#">My Account</a></li>
                                    <li class="text-white"><a class="text-white" href="#">Login</a></li>
                                    <li class="text-white"><a class="text-white" href="#">Registration</a></li>
                                    <li class="text-white"><a class="text-white" href="#">Terms & Conditions</a></li>
                                    <li class="text-white"><a class="text-white" href="#">Delivery Policy</a></li>
                                    <a class="text-white btn btn-primary" href="{{route('home')}}">Back to My Portfolio</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="tp-footer-widget footer-col-4 mb-50">
                            <h4 class="tp-footer-widget-title text-white">Talk To Us</h4>
                            <div class="tp-footer-widget-content">
                                <div class="tp-footer-talk mb-20">
                                    <span class="text-white">Got Questions? Call us</span>
                                    <h4><a href="tel:670-413-90-762" class="text-white">+88 017xxxxxxxx</a></h4>
                                </div>
                                <div class="tp-footer-contact">
                                    <div class="tp-footer-contact-item d-flex align-items-start">
                                        <div class="tp-footer-contact-icon">
                                       <span class="text-white">
                                         <i class="fa-solid fa-message"></i>
                                       </span>
                                        </div>
                                        <div class="tp-footer-contact-content">
                                            <p>
                                                <a href="">
                                                    <span class="text-white" >abirazmyne0011@gmail.com</span>
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="tp-footer-contact-item d-flex align-items-start">
                                        <div class="tp-footer-contact-icon">
                                       <span class="text-white">
                                          <i class="fa-solid fa-location-dot"></i>
                                       </span>
                                        </div>
                                        <div class="tp-footer-contact-content">
                                            <p>
                                                <a href="" class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi aspernatur cumque </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <img src="{{asset('/')}}website/assets/img/my/ssl.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="tp-footer-bottom ">
            <div class="container">
                <div class="tp-footer-bottom-wrapper">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="tp-footer-copyright text-white">
                                <p class="text-white">© 2024 All Rights Reserved  |  HTML Template by <a class="text-white" href="">Abir Azmyne</a>.</p>
                            </div>
                        </div>
                        {{--                        <div class="col-md-6">--}}
                        {{--                            <div class="tp-footer-payment text-md-end">--}}
                        {{--                                <p>--}}
                        {{--                                    <img src="{{asset('/')}}website/assets/img/footer/footer-pay-2.png" alt="">--}}
                        {{--                                </p>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer area end -->



<!-- JS here -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="{{asset('/')}}website/assets/js/vendor/waypoints.js"></script>
<script src="{{asset('/')}}website/assets/js/bootstrap-bundle.js"></script>
<script src="{{asset('/')}}website/assets/js/meanmenu.js"></script>
<script src="{{asset('/')}}website/assets/js/swiper-bundle.js"></script>
<script src="{{asset('/')}}website/assets/js/slick.js"></script>
<script src="{{asset('/')}}website/assets/js/range-slider.js"></script>
<script src="{{asset('/')}}website/assets/js/magnific-popup.js"></script>
<script src="{{asset('/')}}website/assets/js/nice-select.js"></script>
<script src="{{asset('/')}}website/assets/js/purecounter.js"></script>
<script src="{{asset('/')}}website/assets/js/parallax.js"></script>
<script src="{{asset('/')}}website/assets/js/countdown.js"></script>

<script src="{{asset('/')}}website/assets/js/isotope-pkgd.js"></script>
<script src="{{asset('/')}}website/assets/js/imagesloaded-pkgd.js"></script>
<script src="{{asset('/')}}website/assets/js/ajax-form.js"></script>
<script src="{{asset('/')}}website/assets/js/main.js"></script>
</body>

</html>
