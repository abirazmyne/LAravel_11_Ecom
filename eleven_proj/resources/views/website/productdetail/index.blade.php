@extends('website.master')

@section('body')
    <!-- product details area start -->
    <section class="tp-product-details-area pt-80" data-bg-color="#EFF1F5">
        <div class="tp-product-details-top pb-115">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="tp-product-details-thumb-wrapper tp-product-details-thumb-style2 tp-tab">
                            <div class="tab-content m-img" id="productDetailsNavContent">
                                <div class="tab-pane fade show active" id="nav-1" role="tabpanel" aria-labelledby="nav-1-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="{{asset('/')}}website/assets/img/product/details/2/main/product-details-main-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-2" role="tabpanel" aria-labelledby="nav-2-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="{{asset('/')}}website/assets/img/product/details/2/main/product-details-main-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-3" role="tabpanel" aria-labelledby="nav-3-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="{{asset('/')}}website/assets/img/product/details/2/main/product-details-main-3.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-4" role="tabpanel" aria-labelledby="nav-4-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="{{asset('/')}}website/assets/img/product/details/2/main/product-details-main-4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-5" role="tabpanel" aria-labelledby="nav-5-tab" tabindex="0">
                                    <div class="tp-product-details-nav-main-thumb">
                                        <img src="{{asset('/')}}website/assets/img/product/details/2/main/product-details-main-5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <nav>
                                <div class="nav nav-tabs " id="productDetailsNavThumb" role="tablist">
                                    <button class="nav-link active" id="nav-1-tab" data-bs-toggle="tab" data-bs-target="#nav-1" type="button" role="tab" aria-controls="nav-1" aria-selected="true">
                                        <img src="{{asset('/')}}website/assets/img/product/details/2/nav/product-details-nav-1.jpg" alt="">
                                    </button>
                                    <button class="nav-link" id="nav-2-tab" data-bs-toggle="tab" data-bs-target="#nav-2" type="button" role="tab" aria-controls="nav-2" aria-selected="false">
                                        <img src="{{asset('/')}}website/assets/img/product/details/2/nav/product-details-nav-2.jpg" alt="">
                                    </button>
                                    <button class="nav-link" id="nav-3-tab" data-bs-toggle="tab" data-bs-target="#nav-3" type="button" role="tab" aria-controls="nav-3" aria-selected="false">
                                        <img src="{{asset('/')}}website/assets/img/product/details/2/nav/product-details-nav-3.jpg" alt="">
                                    </button>
                                    <button class="nav-link" id="nav-4-tab" data-bs-toggle="tab" data-bs-target="#nav-4" type="button" role="tab" aria-controls="nav-4" aria-selected="false">
                                        <img src="{{asset('/')}}website/assets/img/product/details/2/nav/product-details-nav-4.jpg" alt="">
                                    </button>
                                    <button class="nav-link" id="nav-5-tab" data-bs-toggle="tab" data-bs-target="#nav-5" type="button" role="tab" aria-controls="nav-5" aria-selected="false">
                                        <img src="{{asset('/')}}website/assets/img/product/details/2/nav/product-details-nav-5.jpg" alt="">
                                    </button>
                                </div>
                            </nav>
                        </div>
                    </div> <!-- col end -->
                    <div class="col-xl-5 col-lg-6">
                        <div class="tp-product-details-wrapper tp-product-details-wrapper-style2">
                            <div class="tp-product-details-category">
                                <span>Computers & Tablets</span>
                            </div>
                            <h3 class="tp-product-details-title">Sulwhasoo Essential Cream</h3>

                            <!-- inventory details -->
                            <div class="tp-product-details-inventory d-flex align-items-center justify-content-between">
                                <!-- price -->
                                <div class="tp-product-details-price-wrapper">
                                    <span class="tp-product-details-price">$1,260.00</span>
                                </div>
                                <div class="tp-product-details-rating-wrapper d-flex align-items-center">
                                    <div class="tp-product-details-rating">
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                        <span><i class="fa-solid fa-star"></i></span>
                                    </div>
                                    <div class="tp-product-details-reviews">
                                        <span>(36 Reviews)</span>
                                    </div>
                                </div>
                            </div>
                            <p>A Screen Everyone Will Love: Whether your family is streaming or video chatting with friends tablet A8... <span>See more</span></p>

                            <div class="tp-product-details-views d-flex align-items-center">
                              <span>
                                 <svg width="17" height="15" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.5 13.6852C11.2057 13.6852 13.7274 12.091 15.4826 9.33163C16.1725 8.25089 16.1725 6.43434 15.4826 5.3536C13.7274 2.59428 11.2057 1 8.5 1C5.79433 1 3.27261 2.59428 1.51737 5.3536C0.827542 6.43434 0.827542 8.25089 1.51737 9.33163C3.27261 12.091 5.79433 13.6852 8.5 13.6852Z" stroke="#55585B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.1755 7.494C11.1755 9.01162 9.94912 10.238 8.4315 10.238C6.91387 10.238 5.6875 9.01162 5.6875 7.494C5.6875 5.97637 6.91387 4.75 8.4315 4.75C9.94912 4.75 11.1755 5.97637 11.1755 7.494Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                 </svg>
                              </span>
                                <p><span>16</span> people are viewing this right now</p>
                            </div>

                            <!-- variations -->
                            <div class="tp-product-details-variation">
                                <!-- single item -->
                                <div class="tp-product-details-variation-item d-flex align-items-center">
                                    <h4 class="tp-product-details-variation-title">Color :</h4>
                                    <div class="tp-product-details-variation-list">
                                        <button type="button" class="color tp-color-variation-btn" >
                                            <span data-bg-color="#F8B655"></span>
                                            <span class="tp-color-variation-tootltip">Yellow</span>
                                        </button>
                                        <button type="button" class="color tp-color-variation-btn active" >
                                            <span data-bg-color="#CBCBCB"></span>
                                            <span class="tp-color-variation-tootltip">Gray</span>
                                        </button>
                                        <button type="button" class="color tp-color-variation-btn" >
                                            <span data-bg-color="#494E52"></span>
                                            <span class="tp-color-variation-tootltip">Black</span>
                                        </button>
                                        <button type="button" class="color tp-color-variation-btn" >
                                            <span data-bg-color="#B4505A"></span>
                                            <span class="tp-color-variation-tootltip">Brown</span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- stock bar -->
                            <div class="tp-product-details-stock-bar mb-25">
                                <p>Hurry! Only <span>12</span> units left in stock!</p>

                                <div class="tp-product-details-stock-bar-line" data-bg-color="#D3DAE1">
                                    <span class="tp-product-details-stock-bar-line-inner" data-width="40%"></span>
                                </div>
                            </div>

                            <!-- actions -->
                            <div class="tp-product-details-action-wrapper">
                                <h3 class="tp-product-details-action-title">Quantity</h3>
                                <div class="tp-product-details-action-item-wrapper d-flex flex-wrap align-items-center">
                                    <div class="tp-product-details-quantity">
                                        <div class="tp-product-quantity mb-15 mr-15">
                                       <span class="tp-cart-minus">
                                          <svg width="11" height="2" viewBox="0 0 11 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 1H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                       </span>
                                            <input class="tp-cart-input" type="text" value="1">
                                            <span class="tp-cart-plus">
                                          <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M1 6H10" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                             <path d="M5.5 10.5V1.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                          </svg>
                                       </span>
                                        </div>
                                    </div>
                                    <div class="tp-product-details-add-to-cart mb-15 mr-10">
                                        <a href="{{route('add.cart')}}" class="tp-product-details-add-to-cart-btn w-100">Add To Cart</a>
                                    </div>
                                    <div class="tp-product-details-wishlist mb-15">
                                        <button class="tp-product-details-wishlist-btn">
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.52624 7.48527C2.69896 11.0641 7.33213 13.9579 8.5634 14.6742C9.79885 13.9505 14.4655 11.0248 15.6006 7.48855C16.3458 5.20273 15.6541 2.30731 12.9055 1.43844C11.5738 1.01918 10.0205 1.27434 8.94817 2.08824C8.724 2.25726 8.41284 2.26054 8.18699 2.09317C7.05107 1.25547 5.56719 1.01015 4.21463 1.43844C1.47019 2.30649 0.780949 5.20191 1.52624 7.48527ZM8.56367 16C8.45995 16 8.35706 15.9754 8.26338 15.9253C8.00157 15.785 1.83433 12.4507 0.331203 7.86098C0.330366 7.86098 0.330366 7.86016 0.330366 7.86016C-0.613163 4.97048 0.437434 1.3391 3.82929 0.266748C5.42192 -0.238659 7.15758 -0.0163125 8.56116 0.852561C9.92125 0.009122 11.728 -0.22389 13.2888 0.266748C16.684 1.34074 17.738 4.9713 16.7953 7.86016C15.3407 12.3973 9.12828 15.7818 8.86479 15.9237C8.77111 15.9746 8.66739 16 8.56367 16Z" fill="currentColor"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5155 6.78932C13.1918 6.78932 12.9174 6.54564 12.8906 6.22402C12.8354 5.5496 12.3754 4.9802 11.7204 4.77262C11.39 4.6676 11.2094 4.32054 11.3156 3.9981C11.4235 3.67483 11.774 3.49926 12.1052 3.60099C13.2453 3.96282 14.0441 4.95312 14.142 6.12393C14.1696 6.46278 13.9128 6.75979 13.5673 6.78686C13.5498 6.7885 13.5331 6.78932 13.5155 6.78932Z" fill="currentColor"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <button class="tp-product-details-buy-now-btn w-100">Buy Now</button>
                            </div>

                            <div class="tp-product-details-query">
                                <div class="tp-product-details-query-item d-flex align-items-center">
                                    <span>SKU:  </span>
                                    <p>NTB7SDVX44</p>
                                </div>
                                <div class="tp-product-details-query-item d-flex align-items-center">
                                    <span>Category:  </span>
                                    <p>Computers & Tablets</p>
                                </div>
                                <div class="tp-product-details-query-item d-flex align-items-center">
                                    <span>Tag: </span>
                                    <p>Android</p>
                                </div>
                            </div>
                            <div class="tp-product-details-social">
                                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                            </div>

                            <div class="tp-product-details-payment d-flex align-items-center flex-wrap justify-content-between">
                                <p><span>Guaranteed</span> <br> safe & secure checkout</p>
                                <img src="{{asset('/')}}website/assets/img/product/icons/payment-option.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tp-product-details-bottom tp-product-details-bottom-style2 pt-95 pb-85 white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="tp-product-details-tab-nav tp-tab">
                            <nav>
                                <div class="nav nav-tabs p-relative tp-product-tab justify-content-sm-start justify-content-center" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-description-tab" data-bs-toggle="tab" data-bs-target="#nav-description" type="button" role="tab" aria-controls="nav-description" aria-selected="true">Description</button>
                                    <button class="nav-link" id="nav-addInfo-tab" data-bs-toggle="tab" data-bs-target="#nav-addInfo" type="button" role="tab" aria-controls="nav-addInfo" aria-selected="false">Additional information</button>
                                    <button class="nav-link" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews (2)</button>
                                    <span id="productTabMarker" class="tp-product-details-tab-line"></span>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-description" role="tabpanel" aria-labelledby="nav-description-tab" tabindex="0">
                                    <div class="tp-product-details-desc-wrapper-2 pt-70">
                                        <div class="row justify-content-center">
                                            <div class="col-xl-12">
                                                <div class="tp-product-details-desc-item-2 pb-120">
                                                    <div class="row">
                                                        <div class="col-lg-5">
                                                            <div class="tp-product-details-desc-content-2 pt-35 pb-45 pr-100">
                                                                <h3 class="tp-product-details-desc-title-2">Essential <br> Comfort Firming Cream</h3>
                                                                <p>A whipped firming cream that improves the look of elasticity for a supple, bouncy complexion. Powered by JISUN Firming </p>
                                                            </div>
                                                            <div class="tp-product-details-desc-content-2 pb-30 pr-100">
                                                                <h3 class="tp-product-details-desc-title-2">Essential Comfort <br> Moisturizing Cream</h3>
                                                                <p>A breathable, quenching gel cream that hydrates and comforts skin for glow. Powered by JAUM Moisturizing Complex TM, a powerhouse of hydrating and  Yam, Arrowroot flowers plus Hyaluronic Acid.</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="tp-product-details-desc-thumb m-img">
                                                                <img src="{{asset('/')}}website/assets/img/product/details/2/desc/product-details-desc-1.jpg" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tp-product-details-desc-item-2 pb-120">
                                                    <div class="row">
                                                        <div class="col-lg-7">
                                                            <div class="tp-product-details-desc-thumb pr-30 m-img">
                                                                <img src="{{asset('/')}}website/assets/img/product/details/2/desc/product-details-desc-2.jpg" alt="">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-5">
                                                            <div class="tp-product-details-desc-content-2 pt-75 pb-45 pl-25">
                                                                <h3 class="tp-product-details-desc-title-2">JAUM <br> Moisturizing Complex TM</h3>
                                                                <p>A whipped firming cream that improves the look of elasticity for a supple, bouncy complexion. Powered by JISUN Firming </p>

                                                                <div class="tp-product-details-desc-list">
                                                                    <ul>
                                                                        <li>Comodous in tempor ullamcorper miaculis</li>
                                                                        <li>Pellentesque vitae neque mollis urna mattis laoreet.</li>
                                                                        <li>Divamus sit amet purus justo.</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 col-sm-6">
                                                <div class="tp-product-details-desc-fact text-center mb-50">
                                                    <div class="tp-product-details-desc-fact-thumb m-img">
                                                        <img src="{{asset('/')}}website/assets/img/product/details/2/desc/product-details-desc-3.jpg" alt="">
                                                    </div>
                                                    <div class="tp-product-details-desc-fact-content">
                                                        <span>96%</span>
                                                        <p>Skin feels smoother.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="tp-product-details-desc-fact text-center mb-50">
                                                    <div class="tp-product-details-desc-fact-thumb m-img">
                                                        <img src="{{asset('/')}}website/assets/img/product/details/2/desc/product-details-desc-4.jpg" alt="">
                                                    </div>
                                                    <div class="tp-product-details-desc-fact-content">
                                                        <span>93%</span>
                                                        <p>Skin feels softer.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-6">
                                                <div class="tp-product-details-desc-fact text-center mb-50">
                                                    <div class="tp-product-details-desc-fact-thumb m-img">
                                                        <img src="{{asset('/')}}website/assets/img/product/details/2/desc/product-details-desc-5.jpg" alt="">
                                                    </div>
                                                    <div class="tp-product-details-desc-fact-content">
                                                        <span>97%</span>
                                                        <p>Skin feels supple.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-addInfo" role="tabpanel" aria-labelledby="nav-addInfo-tab" tabindex="0">

                                    <div class="tp-product-details-additional-info  tp-table-style-2"><!-- add 'tp-table-style-2' class name to view second style -->
                                        <div class="row justify-content-center">
                                            <div class="col-xl-10">
                                                <h3 class="tp-product-details-additional-info-title">Additional information</h3><!-- default hidden. its for second style -->
                                                <table>
                                                    <tbody>
                                                    <tr>
                                                        <td>Standing screen display size</td>
                                                        <td>Screen display Size 10.4</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Color</td>
                                                        <td>Gray, Dark gray, Mystic black</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Screen Resolution</td>
                                                        <td>1920 x 1200 Pixels</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Max Screen Resolution</td>
                                                        <td>2000 x 1200</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Processor</td>
                                                        <td>2.3 GHz (128 GB)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Graphics Coprocessor</td>
                                                        <td>Exynos 9611, Octa Core (4x2.3GHz + 4x1.7GHz)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Wireless Type</td>
                                                        <td>802.11a/b/g/n/ac, Bluetooth</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Average Battery Life (in hours)</td>
                                                        <td>13 Hours</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Series</td>
                                                        <td>Samsung Galaxy tab S6 Lite WiFi</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item model number</td>
                                                        <td>SM-P6102ZAEXOR</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hardware Platform</td>
                                                        <td>Android</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Operating System</td>
                                                        <td>Android 12</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Batteries</td>
                                                        <td>1 Lithium Polymer batteries required. (included)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Product Dimensions</td>
                                                        <td>0.28 x 6.07 x 9.63 inches</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab" tabindex="0">
                                    <div class="tp-product-details-review-wrapper tp-product-details-review-wrapper-2 pt-50">
                                        <h3 class="tp-product-details-review-wrapper-title-2">2 review for Perfecting Facial Oil</h3>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="tp-product-details-review-item-wrapper-2">
                                                    <div class="tp-product-details-review-item-2">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-5">
                                                                <div class="tp-product-details-review-avater-2 d-flex align-items-center">
                                                                    <div class="tp-product-details-review-avater-thumb">
                                                                        <a href="#">
                                                                            <img src="{{asset('/')}}website/assets/img/users/user-3.jpg" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="tp-product-details-review-avater-content">
                                                                        <h3 class="tp-product-details-review-avater-title">Shahnewaz Sakil</h3>
                                                                        <span class="tp-product-details-review-avater-meta">06 March, 2023 </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-7">
                                                                <div class="tp-product-details-review-avater-rating d-flex align-items-center">
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                </div>
                                                                <div class="tp-product-details-review-avater-comment">
                                                                    <p>I'm happy with my purchase of Olay eyes. I just received my second jar. Although I don't notice a difference with "puffiness", it seems my fine.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tp-product-details-review-item-2">
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-5">
                                                                <div class="tp-product-details-review-avater-2 d-flex align-items-center">
                                                                    <div class="tp-product-details-review-avater-thumb">
                                                                        <a href="#">
                                                                            <img src="{{asset('/')}}website/assets/img/users/user-3.jpg" alt="">
                                                                        </a>
                                                                    </div>
                                                                    <div class="tp-product-details-review-avater-content">
                                                                        <h3 class="tp-product-details-review-avater-title">Shahnewaz Sakil</h3>
                                                                        <span class="tp-product-details-review-avater-meta">06 March, 2023 </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-7">
                                                                <div class="tp-product-details-review-avater-rating d-flex align-items-center">
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                    <span><i class="fa-solid fa-star"></i></span>
                                                                </div>
                                                                <div class="tp-product-details-review-avater-comment">
                                                                    <p>I'm happy with my purchase of Olay eyes. I just received my second jar. Although I don't notice a difference with "puffiness", it seems my fine.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="tp-product-details-review-form pt-55">
                                                    <h3 class="tp-product-details-review-form-title">Add a Review</h3>
                                                    <p>Your email address will not be published. Required fields are marked *</p>
                                                    <form action="#">
                                                        <div class="tp-product-details-review-form-rating d-flex align-items-center">
                                                            <p>Your Rating :</p>
                                                            <div class="tp-product-details-review-form-rating-icon d-flex align-items-center">
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                                <span><i class="fa-solid fa-star"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="tp-product-details-review-input-wrapper">
                                                            <div class="tp-product-details-review-input-box">
                                                                <div class="tp-product-details-review-input">
                                                                    <textarea id="msg" name="msg" placeholder="Write your review here..."></textarea>
                                                                </div>
                                                                <div class="tp-product-details-review-input-title">
                                                                    <label for="msg">Your Review</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="tp-product-details-review-input-box">
                                                                        <div class="tp-product-details-review-input">
                                                                            <input name="name" id="name" type="text" placeholder="Shahnewaz Sakil">
                                                                        </div>
                                                                        <div class="tp-product-details-review-input-title">
                                                                            <label for="name">Your Name</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="tp-product-details-review-input-box">
                                                                        <div class="tp-product-details-review-input">
                                                                            <input name="email" id="email" type="email" placeholder="shofy@mail.com">
                                                                        </div>
                                                                        <div class="tp-product-details-review-input-title">
                                                                            <label for="email">Your Email</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tp-product-details-review-suggetions mb-20">
                                                            <div class="tp-product-details-review-remeber">
                                                                <input id="remeber" type="checkbox">
                                                                <label for="remeber">Save my name, email, and website in this browser for the next time I comment.</label>
                                                            </div>
                                                        </div>
                                                        <div class="tp-product-details-review-btn-wrapper">
                                                            <button class="tp-product-details-review-btn">Submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product details area end -->

    <!-- related product area start -->
    <section class="tp-related-product pt-95 pb-120">
        <div class="container">
            <div class="row">
                <div class="tp-section-title-wrapper-6 text-center mb-40">
                    <span class="tp-section-title-pre-6">Next day Products</span>
                    <h3 class="tp-section-title-6">Related Products</h3>
                </div>
            </div>
            <div class="row">
                <div class="tp-product-related-slider">
                    <div class="tp-product-related-slider-active swiper-container  mb-10">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="tp-product-item-3 tp-product-style-primary mb-50">
                                    <div class="tp-product-thumb-3 mb-15 fix p-relative z-index-1">
                                        <a href="product-details-progress.html">
                                            <img src="{{asset('/')}}website/assets/img/product/related/2/product-related-1.jpg" alt="">
                                        </a>

                                        <!-- product badge -->
                                        <div class="tp-product-badge-3">
                                            <span class="product-discount">14%</span>
                                        </div>

                                        <!-- product action -->
                                        <div class="tp-product-action-3 tp-product-action-4 has-shadow tp-product-action-primaryStyle">
                                            <div class="tp-product-action-item-3 d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn-3 tp-product-add-cart-btn">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.34706 4.53799L3.85961 10.6239C3.89701 11.0923 4.28036 11.4436 4.74871 11.4436H4.75212H14.0265H14.0282C14.4711 11.4436 14.8493 11.1144 14.9122 10.6774L15.7197 5.11162C15.7384 4.97924 15.7053 4.84687 15.6245 4.73995C15.5446 4.63218 15.4273 4.5626 15.2947 4.54393C15.1171 4.55072 7.74498 4.54054 3.34706 4.53799ZM4.74722 12.7162C3.62777 12.7162 2.68001 11.8438 2.58906 10.728L1.81046 1.4837L0.529505 1.26308C0.181854 1.20198 -0.0501969 0.873587 0.00930333 0.526523C0.0705036 0.17946 0.406255 -0.0462578 0.746256 0.00805037L2.51426 0.313534C2.79901 0.363599 3.01576 0.5995 3.04042 0.888012L3.24017 3.26484C15.3748 3.26993 15.4139 3.27587 15.4726 3.28266C15.946 3.3514 16.3625 3.59833 16.6464 3.97849C16.9303 4.35779 17.0493 4.82535 16.9813 5.29376L16.1747 10.8586C16.0225 11.9177 15.1011 12.7162 14.0301 12.7162H14.0259H4.75402H4.74722Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6629 7.67446H10.3067C9.95394 7.67446 9.66919 7.38934 9.66919 7.03804C9.66919 6.68673 9.95394 6.40161 10.3067 6.40161H12.6629C13.0148 6.40161 13.3004 6.68673 13.3004 7.03804C13.3004 7.38934 13.0148 7.67446 12.6629 7.67446Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38171 15.0212C4.63756 15.0212 4.84411 15.2278 4.84411 15.4836C4.84411 15.7395 4.63756 15.9469 4.38171 15.9469C4.12501 15.9469 3.91846 15.7395 3.91846 15.4836C3.91846 15.2278 4.12501 15.0212 4.38171 15.0212Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38082 15.3091C4.28477 15.3091 4.20657 15.3873 4.20657 15.4833C4.20657 15.6763 4.55592 15.6763 4.55592 15.4833C4.55592 15.3873 4.47687 15.3091 4.38082 15.3091ZM4.38067 16.5815C3.77376 16.5815 3.28076 16.0884 3.28076 15.4826C3.28076 14.8767 3.77376 14.3845 4.38067 14.3845C4.98757 14.3845 5.48142 14.8767 5.48142 15.4826C5.48142 16.0884 4.98757 16.5815 4.38067 16.5815Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9701 15.0212C14.2259 15.0212 14.4333 15.2278 14.4333 15.4836C14.4333 15.7395 14.2259 15.9469 13.9701 15.9469C13.7134 15.9469 13.5068 15.7395 13.5068 15.4836C13.5068 15.2278 13.7134 15.0212 13.9701 15.0212Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9692 15.3092C13.874 15.3092 13.7958 15.3874 13.7958 15.4835C13.7966 15.6781 14.1451 15.6764 14.1443 15.4835C14.1443 15.3874 14.0652 15.3092 13.9692 15.3092ZM13.969 16.5815C13.3621 16.5815 12.8691 16.0884 12.8691 15.4826C12.8691 14.8767 13.3621 14.3845 13.969 14.3845C14.5768 14.3845 15.0706 14.8767 15.0706 15.4826C15.0706 16.0884 14.5768 16.5815 13.969 16.5815Z" fill="currentColor"/>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn-3 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor"/>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn-3 tp-product-add-to-wishlist-btn">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.60355 7.98635C2.83622 11.8048 7.7062 14.8923 9.0004 15.6565C10.299 14.8844 15.2042 11.7628 16.3973 7.98985C17.1806 5.55102 16.4535 2.46177 13.5644 1.53473C12.1647 1.08741 10.532 1.35966 9.40484 2.22804C9.16921 2.40837 8.84214 2.41187 8.60476 2.23329C7.41078 1.33952 5.85105 1.07778 4.42936 1.53473C1.54465 2.4609 0.820172 5.55014 1.60355 7.98635ZM9.00138 17.0711C8.89236 17.0711 8.78421 17.0448 8.68574 16.9914C8.41055 16.8417 1.92808 13.2841 0.348132 8.3872C0.347252 8.3872 0.347252 8.38633 0.347252 8.38633C-0.644504 5.30321 0.459792 1.42874 4.02502 0.284605C5.69904 -0.254635 7.52342 -0.0174044 8.99874 0.909632C10.4283 0.00973263 12.3275 -0.238878 13.9681 0.284605C17.5368 1.43049 18.6446 5.30408 17.6538 8.38633C16.1248 13.2272 9.59485 16.8382 9.3179 16.9896C9.21943 17.0439 9.1104 17.0711 9.00138 17.0711Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.203 6.67473C13.8627 6.67473 13.5743 6.41474 13.5462 6.07159C13.4882 5.35202 13.0046 4.7445 12.3162 4.52302C11.9689 4.41097 11.779 4.04068 11.8906 3.69666C12.0041 3.35175 12.3724 3.16442 12.7206 3.27297C13.919 3.65901 14.7586 4.71561 14.8615 5.96479C14.8905 6.32632 14.6206 6.64322 14.2575 6.6721C14.239 6.67385 14.2214 6.67473 14.203 6.67473Z" fill="currentColor"/>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="tp-product-add-cart-btn-large-wrapper">
                                            <button type="button" class="tp-product-add-cart-btn-large">
                                                Add To Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="tp-product-content-3">
                                        <div class="tp-product-tag-3">
                                            <span>Physicians</span>
                                        </div>
                                        <h3 class="tp-product-title-3">
                                            <a href="product-details-progress.html">Powder Creamy Natural</a>
                                        </h3>
                                        <div class="tp-product-price-wrapper-3">
                                            <span class="tp-product-price-3 new-price">$102.00</span>
                                            <span class="tp-product-price-3 old-price">$226.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tp-product-item-3 tp-product-style-primary mb-50">
                                    <div class="tp-product-thumb-3 mb-15 fix p-relative z-index-1">
                                        <a href="product-details-progress.html">
                                            <img src="{{asset('/')}}website/assets/img/product/related/2/product-related-2.jpg" alt="">
                                        </a>


                                        <!-- product action -->
                                        <div class="tp-product-action-3 tp-product-action-4 has-shadow tp-product-action-primaryStyle">
                                            <div class="tp-product-action-item-3 d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn-3 tp-product-add-cart-btn">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.34706 4.53799L3.85961 10.6239C3.89701 11.0923 4.28036 11.4436 4.74871 11.4436H4.75212H14.0265H14.0282C14.4711 11.4436 14.8493 11.1144 14.9122 10.6774L15.7197 5.11162C15.7384 4.97924 15.7053 4.84687 15.6245 4.73995C15.5446 4.63218 15.4273 4.5626 15.2947 4.54393C15.1171 4.55072 7.74498 4.54054 3.34706 4.53799ZM4.74722 12.7162C3.62777 12.7162 2.68001 11.8438 2.58906 10.728L1.81046 1.4837L0.529505 1.26308C0.181854 1.20198 -0.0501969 0.873587 0.00930333 0.526523C0.0705036 0.17946 0.406255 -0.0462578 0.746256 0.00805037L2.51426 0.313534C2.79901 0.363599 3.01576 0.5995 3.04042 0.888012L3.24017 3.26484C15.3748 3.26993 15.4139 3.27587 15.4726 3.28266C15.946 3.3514 16.3625 3.59833 16.6464 3.97849C16.9303 4.35779 17.0493 4.82535 16.9813 5.29376L16.1747 10.8586C16.0225 11.9177 15.1011 12.7162 14.0301 12.7162H14.0259H4.75402H4.74722Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6629 7.67446H10.3067C9.95394 7.67446 9.66919 7.38934 9.66919 7.03804C9.66919 6.68673 9.95394 6.40161 10.3067 6.40161H12.6629C13.0148 6.40161 13.3004 6.68673 13.3004 7.03804C13.3004 7.38934 13.0148 7.67446 12.6629 7.67446Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38171 15.0212C4.63756 15.0212 4.84411 15.2278 4.84411 15.4836C4.84411 15.7395 4.63756 15.9469 4.38171 15.9469C4.12501 15.9469 3.91846 15.7395 3.91846 15.4836C3.91846 15.2278 4.12501 15.0212 4.38171 15.0212Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38082 15.3091C4.28477 15.3091 4.20657 15.3873 4.20657 15.4833C4.20657 15.6763 4.55592 15.6763 4.55592 15.4833C4.55592 15.3873 4.47687 15.3091 4.38082 15.3091ZM4.38067 16.5815C3.77376 16.5815 3.28076 16.0884 3.28076 15.4826C3.28076 14.8767 3.77376 14.3845 4.38067 14.3845C4.98757 14.3845 5.48142 14.8767 5.48142 15.4826C5.48142 16.0884 4.98757 16.5815 4.38067 16.5815Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9701 15.0212C14.2259 15.0212 14.4333 15.2278 14.4333 15.4836C14.4333 15.7395 14.2259 15.9469 13.9701 15.9469C13.7134 15.9469 13.5068 15.7395 13.5068 15.4836C13.5068 15.2278 13.7134 15.0212 13.9701 15.0212Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9692 15.3092C13.874 15.3092 13.7958 15.3874 13.7958 15.4835C13.7966 15.6781 14.1451 15.6764 14.1443 15.4835C14.1443 15.3874 14.0652 15.3092 13.9692 15.3092ZM13.969 16.5815C13.3621 16.5815 12.8691 16.0884 12.8691 15.4826C12.8691 14.8767 13.3621 14.3845 13.969 14.3845C14.5768 14.3845 15.0706 14.8767 15.0706 15.4826C15.0706 16.0884 14.5768 16.5815 13.969 16.5815Z" fill="currentColor"/>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn-3 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor"/>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn-3 tp-product-add-to-wishlist-btn">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.60355 7.98635C2.83622 11.8048 7.7062 14.8923 9.0004 15.6565C10.299 14.8844 15.2042 11.7628 16.3973 7.98985C17.1806 5.55102 16.4535 2.46177 13.5644 1.53473C12.1647 1.08741 10.532 1.35966 9.40484 2.22804C9.16921 2.40837 8.84214 2.41187 8.60476 2.23329C7.41078 1.33952 5.85105 1.07778 4.42936 1.53473C1.54465 2.4609 0.820172 5.55014 1.60355 7.98635ZM9.00138 17.0711C8.89236 17.0711 8.78421 17.0448 8.68574 16.9914C8.41055 16.8417 1.92808 13.2841 0.348132 8.3872C0.347252 8.3872 0.347252 8.38633 0.347252 8.38633C-0.644504 5.30321 0.459792 1.42874 4.02502 0.284605C5.69904 -0.254635 7.52342 -0.0174044 8.99874 0.909632C10.4283 0.00973263 12.3275 -0.238878 13.9681 0.284605C17.5368 1.43049 18.6446 5.30408 17.6538 8.38633C16.1248 13.2272 9.59485 16.8382 9.3179 16.9896C9.21943 17.0439 9.1104 17.0711 9.00138 17.0711Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.203 6.67473C13.8627 6.67473 13.5743 6.41474 13.5462 6.07159C13.4882 5.35202 13.0046 4.7445 12.3162 4.52302C11.9689 4.41097 11.779 4.04068 11.8906 3.69666C12.0041 3.35175 12.3724 3.16442 12.7206 3.27297C13.919 3.65901 14.7586 4.71561 14.8615 5.96479C14.8905 6.32632 14.6206 6.64322 14.2575 6.6721C14.239 6.67385 14.2214 6.67473 14.203 6.67473Z" fill="currentColor"/>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="tp-product-add-cart-btn-large-wrapper">
                                            <button type="button" class="tp-product-add-cart-btn-large">
                                                Add To Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="tp-product-content-3">
                                        <div class="tp-product-tag-3">
                                            <span>Mineral </span>
                                        </div>
                                        <h3 class="tp-product-title-3">
                                            <a href="product-details-progress.html">Mineral Matte Finishing</a>
                                        </h3>
                                        <div class="tp-product-price-wrapper-3">
                                            <span class="tp-product-price-3">$240.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tp-product-item-3 tp-product-style-primary mb-50">
                                    <div class="tp-product-thumb-3 mb-15 fix p-relative z-index-1">
                                        <a href="product-details-progress.html">
                                            <img src="{{asset('/')}}website/assets/img/product/related/2/product-related-3.jpg" alt="">
                                        </a>

                                        <!-- product badge -->
                                        <div class="tp-product-badge-3">
                                            <span class="product-discount">26%</span>
                                        </div>

                                        <!-- product action -->
                                        <div class="tp-product-action-3 tp-product-action-4 has-shadow tp-product-action-primaryStyle">
                                            <div class="tp-product-action-item-3 d-flex flex-column">
                                                <a href=""  type="button" class="tp-product-action-btn-3 tp-product-add-cart-btn">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.34706 4.53799L3.85961 10.6239C3.89701 11.0923 4.28036 11.4436 4.74871 11.4436H4.75212H14.0265H14.0282C14.4711 11.4436 14.8493 11.1144 14.9122 10.6774L15.7197 5.11162C15.7384 4.97924 15.7053 4.84687 15.6245 4.73995C15.5446 4.63218 15.4273 4.5626 15.2947 4.54393C15.1171 4.55072 7.74498 4.54054 3.34706 4.53799ZM4.74722 12.7162C3.62777 12.7162 2.68001 11.8438 2.58906 10.728L1.81046 1.4837L0.529505 1.26308C0.181854 1.20198 -0.0501969 0.873587 0.00930333 0.526523C0.0705036 0.17946 0.406255 -0.0462578 0.746256 0.00805037L2.51426 0.313534C2.79901 0.363599 3.01576 0.5995 3.04042 0.888012L3.24017 3.26484C15.3748 3.26993 15.4139 3.27587 15.4726 3.28266C15.946 3.3514 16.3625 3.59833 16.6464 3.97849C16.9303 4.35779 17.0493 4.82535 16.9813 5.29376L16.1747 10.8586C16.0225 11.9177 15.1011 12.7162 14.0301 12.7162H14.0259H4.75402H4.74722Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6629 7.67446H10.3067C9.95394 7.67446 9.66919 7.38934 9.66919 7.03804C9.66919 6.68673 9.95394 6.40161 10.3067 6.40161H12.6629C13.0148 6.40161 13.3004 6.68673 13.3004 7.03804C13.3004 7.38934 13.0148 7.67446 12.6629 7.67446Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38171 15.0212C4.63756 15.0212 4.84411 15.2278 4.84411 15.4836C4.84411 15.7395 4.63756 15.9469 4.38171 15.9469C4.12501 15.9469 3.91846 15.7395 3.91846 15.4836C3.91846 15.2278 4.12501 15.0212 4.38171 15.0212Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38082 15.3091C4.28477 15.3091 4.20657 15.3873 4.20657 15.4833C4.20657 15.6763 4.55592 15.6763 4.55592 15.4833C4.55592 15.3873 4.47687 15.3091 4.38082 15.3091ZM4.38067 16.5815C3.77376 16.5815 3.28076 16.0884 3.28076 15.4826C3.28076 14.8767 3.77376 14.3845 4.38067 14.3845C4.98757 14.3845 5.48142 14.8767 5.48142 15.4826C5.48142 16.0884 4.98757 16.5815 4.38067 16.5815Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9701 15.0212C14.2259 15.0212 14.4333 15.2278 14.4333 15.4836C14.4333 15.7395 14.2259 15.9469 13.9701 15.9469C13.7134 15.9469 13.5068 15.7395 13.5068 15.4836C13.5068 15.2278 13.7134 15.0212 13.9701 15.0212Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9692 15.3092C13.874 15.3092 13.7958 15.3874 13.7958 15.4835C13.7966 15.6781 14.1451 15.6764 14.1443 15.4835C14.1443 15.3874 14.0652 15.3092 13.9692 15.3092ZM13.969 16.5815C13.3621 16.5815 12.8691 16.0884 12.8691 15.4826C12.8691 14.8767 13.3621 14.3845 13.969 14.3845C14.5768 14.3845 15.0706 14.8767 15.0706 15.4826C15.0706 16.0884 14.5768 16.5815 13.969 16.5815Z" fill="currentColor"/>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Add to Cart</span>
                                                </a>
                                                <button type="button" class="tp-product-action-btn-3 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor"/>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn-3 tp-product-add-to-wishlist-btn">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.60355 7.98635C2.83622 11.8048 7.7062 14.8923 9.0004 15.6565C10.299 14.8844 15.2042 11.7628 16.3973 7.98985C17.1806 5.55102 16.4535 2.46177 13.5644 1.53473C12.1647 1.08741 10.532 1.35966 9.40484 2.22804C9.16921 2.40837 8.84214 2.41187 8.60476 2.23329C7.41078 1.33952 5.85105 1.07778 4.42936 1.53473C1.54465 2.4609 0.820172 5.55014 1.60355 7.98635ZM9.00138 17.0711C8.89236 17.0711 8.78421 17.0448 8.68574 16.9914C8.41055 16.8417 1.92808 13.2841 0.348132 8.3872C0.347252 8.3872 0.347252 8.38633 0.347252 8.38633C-0.644504 5.30321 0.459792 1.42874 4.02502 0.284605C5.69904 -0.254635 7.52342 -0.0174044 8.99874 0.909632C10.4283 0.00973263 12.3275 -0.238878 13.9681 0.284605C17.5368 1.43049 18.6446 5.30408 17.6538 8.38633C16.1248 13.2272 9.59485 16.8382 9.3179 16.9896C9.21943 17.0439 9.1104 17.0711 9.00138 17.0711Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.203 6.67473C13.8627 6.67473 13.5743 6.41474 13.5462 6.07159C13.4882 5.35202 13.0046 4.7445 12.3162 4.52302C11.9689 4.41097 11.779 4.04068 11.8906 3.69666C12.0041 3.35175 12.3724 3.16442 12.7206 3.27297C13.919 3.65901 14.7586 4.71561 14.8615 5.96479C14.8905 6.32632 14.6206 6.64322 14.2575 6.6721C14.239 6.67385 14.2214 6.67473 14.203 6.67473Z" fill="currentColor"/>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="tp-product-add-cart-btn-large-wrapper">
                                            <button type="button" class="tp-product-add-cart-btn-large">
                                                Add To Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="tp-product-content-3">
                                        <div class="tp-product-tag-3">
                                            <span>StriVectin</span>
                                        </div>
                                        <h3 class="tp-product-title-3">
                                            <a href="product-details-progress.html">Resurfacing Exfoliating</a>
                                        </h3>
                                        <div class="tp-product-price-wrapper-3">
                                            <span class="tp-product-price-3 new-price">$76.00</span>
                                            <span class="tp-product-price-3 old-price">$106.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="tp-product-item-3 tp-product-style-primary mb-50">
                                    <div class="tp-product-thumb-3 mb-15 fix p-relative z-index-1">
                                        <a href="product-details-progress.html">
                                            <img src="{{asset('/')}}website/assets/img/product/related/2/product-related-4.jpg" alt="">
                                        </a>
                                        <!-- product action -->
                                        <div class="tp-product-action-3 tp-product-action-4 has-shadow tp-product-action-primaryStyle">
                                            <div class="tp-product-action-item-3 d-flex flex-column">
                                                <button type="button" class="tp-product-action-btn-3 tp-product-add-cart-btn">
                                                    <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M3.34706 4.53799L3.85961 10.6239C3.89701 11.0923 4.28036 11.4436 4.74871 11.4436H4.75212H14.0265H14.0282C14.4711 11.4436 14.8493 11.1144 14.9122 10.6774L15.7197 5.11162C15.7384 4.97924 15.7053 4.84687 15.6245 4.73995C15.5446 4.63218 15.4273 4.5626 15.2947 4.54393C15.1171 4.55072 7.74498 4.54054 3.34706 4.53799ZM4.74722 12.7162C3.62777 12.7162 2.68001 11.8438 2.58906 10.728L1.81046 1.4837L0.529505 1.26308C0.181854 1.20198 -0.0501969 0.873587 0.00930333 0.526523C0.0705036 0.17946 0.406255 -0.0462578 0.746256 0.00805037L2.51426 0.313534C2.79901 0.363599 3.01576 0.5995 3.04042 0.888012L3.24017 3.26484C15.3748 3.26993 15.4139 3.27587 15.4726 3.28266C15.946 3.3514 16.3625 3.59833 16.6464 3.97849C16.9303 4.35779 17.0493 4.82535 16.9813 5.29376L16.1747 10.8586C16.0225 11.9177 15.1011 12.7162 14.0301 12.7162H14.0259H4.75402H4.74722Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M12.6629 7.67446H10.3067C9.95394 7.67446 9.66919 7.38934 9.66919 7.03804C9.66919 6.68673 9.95394 6.40161 10.3067 6.40161H12.6629C13.0148 6.40161 13.3004 6.68673 13.3004 7.03804C13.3004 7.38934 13.0148 7.67446 12.6629 7.67446Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38171 15.0212C4.63756 15.0212 4.84411 15.2278 4.84411 15.4836C4.84411 15.7395 4.63756 15.9469 4.38171 15.9469C4.12501 15.9469 3.91846 15.7395 3.91846 15.4836C3.91846 15.2278 4.12501 15.0212 4.38171 15.0212Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.38082 15.3091C4.28477 15.3091 4.20657 15.3873 4.20657 15.4833C4.20657 15.6763 4.55592 15.6763 4.55592 15.4833C4.55592 15.3873 4.47687 15.3091 4.38082 15.3091ZM4.38067 16.5815C3.77376 16.5815 3.28076 16.0884 3.28076 15.4826C3.28076 14.8767 3.77376 14.3845 4.38067 14.3845C4.98757 14.3845 5.48142 14.8767 5.48142 15.4826C5.48142 16.0884 4.98757 16.5815 4.38067 16.5815Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9701 15.0212C14.2259 15.0212 14.4333 15.2278 14.4333 15.4836C14.4333 15.7395 14.2259 15.9469 13.9701 15.9469C13.7134 15.9469 13.5068 15.7395 13.5068 15.4836C13.5068 15.2278 13.7134 15.0212 13.9701 15.0212Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.9692 15.3092C13.874 15.3092 13.7958 15.3874 13.7958 15.4835C13.7966 15.6781 14.1451 15.6764 14.1443 15.4835C14.1443 15.3874 14.0652 15.3092 13.9692 15.3092ZM13.969 16.5815C13.3621 16.5815 12.8691 16.0884 12.8691 15.4826C12.8691 14.8767 13.3621 14.3845 13.969 14.3845C14.5768 14.3845 15.0706 14.8767 15.0706 15.4826C15.0706 16.0884 14.5768 16.5815 13.969 16.5815Z" fill="currentColor"/>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Add to Cart</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn-3 tp-product-quick-view-btn" data-bs-toggle="modal" data-bs-target="#producQuickViewModal">
                                                    <svg width="18" height="15" viewBox="0 0 18 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.99948 5.06828C7.80247 5.06828 6.82956 6.04044 6.82956 7.23542C6.82956 8.42951 7.80247 9.40077 8.99948 9.40077C10.1965 9.40077 11.1703 8.42951 11.1703 7.23542C11.1703 6.04044 10.1965 5.06828 8.99948 5.06828ZM8.99942 10.7482C7.0581 10.7482 5.47949 9.17221 5.47949 7.23508C5.47949 5.29705 7.0581 3.72021 8.99942 3.72021C10.9407 3.72021 12.5202 5.29705 12.5202 7.23508C12.5202 9.17221 10.9407 10.7482 8.99942 10.7482Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.41273 7.2346C3.08674 10.9265 5.90646 13.1215 8.99978 13.1224C12.0931 13.1215 14.9128 10.9265 16.5868 7.2346C14.9128 3.54363 12.0931 1.34863 8.99978 1.34773C5.90736 1.34863 3.08674 3.54363 1.41273 7.2346ZM9.00164 14.4703H8.99804H8.99714C5.27471 14.4676 1.93209 11.8629 0.0546754 7.50073C-0.0182251 7.33091 -0.0182251 7.13864 0.0546754 6.96883C1.93209 2.60759 5.27561 0.00288103 8.99714 0.000185582C8.99894 -0.000712902 8.99894 -0.000712902 8.99984 0.000185582C9.00164 -0.000712902 9.00164 -0.000712902 9.00254 0.000185582C12.725 0.00288103 16.0676 2.60759 17.945 6.96883C18.0188 7.13864 18.0188 7.33091 17.945 7.50073C16.0685 11.8629 12.725 14.4676 9.00254 14.4703H9.00164Z" fill="currentColor"/>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Quick View</span>
                                                </button>
                                                <button type="button" class="tp-product-action-btn-3 tp-product-add-to-wishlist-btn">
                                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.60355 7.98635C2.83622 11.8048 7.7062 14.8923 9.0004 15.6565C10.299 14.8844 15.2042 11.7628 16.3973 7.98985C17.1806 5.55102 16.4535 2.46177 13.5644 1.53473C12.1647 1.08741 10.532 1.35966 9.40484 2.22804C9.16921 2.40837 8.84214 2.41187 8.60476 2.23329C7.41078 1.33952 5.85105 1.07778 4.42936 1.53473C1.54465 2.4609 0.820172 5.55014 1.60355 7.98635ZM9.00138 17.0711C8.89236 17.0711 8.78421 17.0448 8.68574 16.9914C8.41055 16.8417 1.92808 13.2841 0.348132 8.3872C0.347252 8.3872 0.347252 8.38633 0.347252 8.38633C-0.644504 5.30321 0.459792 1.42874 4.02502 0.284605C5.69904 -0.254635 7.52342 -0.0174044 8.99874 0.909632C10.4283 0.00973263 12.3275 -0.238878 13.9681 0.284605C17.5368 1.43049 18.6446 5.30408 17.6538 8.38633C16.1248 13.2272 9.59485 16.8382 9.3179 16.9896C9.21943 17.0439 9.1104 17.0711 9.00138 17.0711Z" fill="currentColor"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.203 6.67473C13.8627 6.67473 13.5743 6.41474 13.5462 6.07159C13.4882 5.35202 13.0046 4.7445 12.3162 4.52302C11.9689 4.41097 11.779 4.04068 11.8906 3.69666C12.0041 3.35175 12.3724 3.16442 12.7206 3.27297C13.919 3.65901 14.7586 4.71561 14.8615 5.96479C14.8905 6.32632 14.6206 6.64322 14.2575 6.6721C14.239 6.67385 14.2214 6.67473 14.203 6.67473Z" fill="currentColor"/>
                                                    </svg>
                                                    <span class="tp-product-tooltip">Add To Wishlist</span>
                                                </button>
                                            </div>
                                        </div>

                                        <div class="tp-product-add-cart-btn-large-wrapper">
                                            <button type="button" class="tp-product-add-cart-btn-large">
                                                Add To Cart
                                            </button>
                                        </div>
                                    </div>
                                    <div class="tp-product-content-3">
                                        <div class="tp-product-tag-3">
                                            <span>Marcelle</span>
                                        </div>
                                        <h3 class="tp-product-title-3">
                                            <a href="product-details-progress.html">Correction Tinted Cream</a>
                                        </h3>
                                        <div class="tp-product-price-wrapper-3">
                                            <span class="tp-product-price-3">$44.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-related-swiper-scrollbar tp-swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- related product area end -->

    <div class="modal fade tp-product-modal" id="producQuickViewModal" tabindex="-1" aria-labelledby="producQuickViewModal" aria-hidden="true">
@endsection
