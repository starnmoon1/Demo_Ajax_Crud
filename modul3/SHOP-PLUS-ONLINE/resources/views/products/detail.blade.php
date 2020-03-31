@extends('master')
@section('content')
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img" class="slick-initialized slick-slider">
                        <button class="slick-prev slick-arrow" aria-label="Previous" type="button"
                                style="display: block;">Previous
                        </button>
                        <div class="slick-list draggable">
                            <div class="slick-track" style="opacity: 1; width: 1832px;">
                                <div class="product-preview slick-slide slick-current slick-active" data-slick-index="0"
                                     aria-hidden="false" tabindex="0"
                                     style="width: 458px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1; overflow: hidden;">
                                    <img src="{{asset('img/product01.png')}}" alt="">
                                    <img role="presentation"
                                         src="file:///var/www/html/template/electro/img/product01.png" class="zoomImg"
                                         style="position: absolute; top: -76.5808px; left: -68.6747px; opacity: 0; width: 600px; height: 600px; border: none; max-width: none; max-height: none;">
                                </div>
                                <div class="product-preview slick-slide" data-slick-index="1" aria-hidden="true"
                                     tabindex="-1"
                                     style="width: 458px; position: relative; left: -458px; top: 0px; z-index: 998; opacity: 0; overflow: hidden;">
                                    <img src="{{asset('img/product03.png')}}" alt="">
                                    <img role="presentation"
                                         src="file:///var/www/html/template/electro/img/product03.png" class="zoomImg"
                                         style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 600px; height: 600px; border: none; max-width: none; max-height: none;">
                                </div>
                                <div class="product-preview slick-slide" data-slick-index="2" aria-hidden="true"
                                     tabindex="-1"
                                     style="width: 458px; position: relative; left: -916px; top: 0px; z-index: 998; opacity: 0; overflow: hidden;">
                                    <img src="{{asset('img/product06.png')}}" alt="">
                                    <img role="presentation"
                                         src="file:///var/www/html/template/electro/img/product06.png" class="zoomImg"
                                         style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 600px; height: 600px; border: none; max-width: none; max-height: none;">
                                </div>
                                <div class="product-preview slick-slide" data-slick-index="3" aria-hidden="true"
                                     tabindex="-1"
                                     style="width: 458px; position: relative; left: -1374px; top: 0px; z-index: 998; opacity: 0; overflow: hidden;">
                                    <img src="{{asset('img/product08.png')}}" alt="">
                                    <img role="presentation"
                                         src="file:///var/www/html/template/electro/img/product08.png" class="zoomImg"
                                         style="position: absolute; top: 0px; left: 0px; opacity: 0; width: 600px; height: 600px; border: none; max-width: none; max-height: none;">
                                </div>
                            </div>
                        </div>


                        <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">
                            Next
                        </button>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs" class="slick-initialized slick-slider slick-vertical">
                        <button class="slick-prev slick-arrow" aria-label="Previous" type="button"
                                style="display: block;">Previous
                        </button>
                        <div class="slick-list draggable" style="height: 465px; padding: 0px;">
                            <div class="slick-track"
                                 style="opacity: 1; height: 1860px; transform: translate3d(0px, -465px, 0px);">
                                <div class="product-preview slick-slide slick-cloned" data-slick-index="-4"
                                     aria-hidden="true" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product01.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-cloned" data-slick-index="-3"
                                     aria-hidden="true" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product03.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-cloned" data-slick-index="-2"
                                     aria-hidden="true" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product06.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-cloned slick-active" data-slick-index="-1"
                                     aria-hidden="false" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product08.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-current slick-active slick-center"
                                     data-slick-index="0" aria-hidden="false" tabindex="0" style="width: 155px;">
                                    <img src="{{asset('img/product01.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-active" data-slick-index="1"
                                     aria-hidden="false" tabindex="0" style="width: 155px;">
                                    <img src="{{asset('img/product03.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide" data-slick-index="2" aria-hidden="true"
                                     tabindex="0" style="width: 155px;">
                                    <img src="{{asset('img/product06.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide" data-slick-index="3" aria-hidden="true"
                                     tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product08.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-cloned slick-center" data-slick-index="4"
                                     aria-hidden="true" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product01.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-cloned" data-slick-index="5"
                                     aria-hidden="true" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product03.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-cloned" data-slick-index="6"
                                     aria-hidden="true" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product06.png')}}" alt="">
                                </div>
                                <div class="product-preview slick-slide slick-cloned" data-slick-index="7"
                                     aria-hidden="true" tabindex="-1" style="width: 155px;">
                                    <img src="{{asset('img/product08.png')}}" alt="">
                                </div>
                            </div>
                        </div>

                        <button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: block;">
                            Next
                        </button>
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">product name goes here</h2>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#">10 Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">$980.00
                                <del class="product-old-price">$990.00</del>
                            </h3>
                            <span class="product-available">In Stock</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>

                        <div class="product-options">
                            <label>
                                Size
                                <select class="input-select">
                                    <option value="0">X</option>
                                </select>
                            </label>
                            <label>
                                Color
                                <select class="input-select">
                                    <option value="0">Red</option>
                                </select>
                            </label>
                        </div>

                        <div class="add-to-cart">
                            <div class="qty-label">
                                Qty
                                <div class="input-number">
                                    <input type="number">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                        </div>

                        <ul class="product-btns">
                            <li><a href="#"><i class="fa fa-heart-o"></i> add to wishlist</a></li>
                            <li><a href="#"><i class="fa fa-exchange"></i> add to compare</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Category:</li>
                            <li><a href="#">Headphones</a></li>
                            <li><a href="#">Accessories</a></li>
                        </ul>

                        <ul class="product-links">
                            <li>Share:</li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>

                    </div>
                </div>
                <!-- /Product details -->

                <!-- Product tab -->
                <div class="col-md-12">
                    <div id="product-tab">
                        <!-- product tab nav -->
                        <ul class="tab-nav">
                            <li><a data-toggle="tab" href="#tab1">Description</a></li>
                            <li  class="active"><a data-toggle="tab" href="#tab2">Details </a></li>
                            <li><a data-toggle="tab" href="#tab3">Comment (3)</a></li>
                        </ul>
                        <!-- /product tab nav -->

                        <!-- product tab content -->
                        <div class="tab-content">
                            <!-- tab1  -->
                            <div id="tab1" class="tab-pane fade in active">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p> 1 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                           fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est
                                            laborum.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab1  -->

                            <!-- tab2  -->
                            <div id="tab2" class="tab-pane fade in">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                                            non proident, sunt in culpa qui officia deserunt mollit anim id est
                                            laborum.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /tab2  -->

                            <!-- tab3  -->
                            <div id="tab3" class="tab-pane fade in">
                                <div class="row">
                                    <!-- Rating -->
                                    <div class="col-md-3">
                                        <div id="rating">
                                            <div class="rating-avg">
                                                <span>4.5</span>
                                                <div class="rating-stars">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                            </div>
                                            <ul class="rating">
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div style="width: 80%;"></div>
                                                    </div>
                                                    <span class="sum">3</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div style="width: 60%;"></div>
                                                    </div>
                                                    <span class="sum">2</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                                <li>
                                                    <div class="rating-stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="rating-progress">
                                                        <div></div>
                                                    </div>
                                                    <span class="sum">0</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <!-- /Comment -->
                                    <div class="col-md-9">
                                        <form method="post" action="{{route('comment',$user->id)}}">
                                            @csrf
                                        <div id="reviews">
                                            <ul class="reviews">
                                                <li>
                                                    <div class="review-heading">
                                                        <h5 class="name" >{{$user->name}}</h5>
                                                        <p class="date">27 DEC 2018, 8:0 PM</p>
                                                        <div class="review-rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o empty"></i>
                                                        </div>
                                                    </div>

                                                <li>
                                                    <div class="review-body">
                                                        <div>

                                                                <textarea id="subject" name="comment_user" placeholder="Write something.."></textarea>
                                                            <div class="mt-3">
                                                                <input type="submit" value="Create" class="btn btn-success">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </li>
                                                </li>
                                            </ul>


                                        </div>
                                        </form>
                                    </div>
                                    <div>
                                        <tr>
                                            <div class="review-heading">
                                                <h5 class="name" >{{$user->name}}</h5>
                                                <p class="date">27 DEC 2018, 8:0 PM</p>
                                                <p> {{dd($user)}}</p>
                                            </div>
                                            <ul class="reviews-pagination">
                                                <li class="active">1</li>
                                                <li><a href="#">2</a></li>
                                                <li><a href="#">3</a></li>
                                                <li><a href="#">4</a></li>
                                                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                            </ul>

                                        </tr>
                                    </div>

                                </div>
                            </div>
                            <!-- /tab3  -->
                        </div>
                        <!-- /product tab content  -->
                    </div>
                </div>
                <!-- /product tab -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>

    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">

                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h3 class="title">Related Products</h3>
                    </div>
                </div>

                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{asset('img/product01.png')}}" alt="">
                            <div class="product-label">
                                <span class="sale">-30%</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                            <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                        </div>
                    </div>
                </div>
                <!-- /product -->

                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{asset('img/product02.png')}}" alt="">
                            <div class="product-label">
                                <span class="new">NEW</span>
                            </div>
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                            <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-btns">
                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                        </div>
                    </div>
                </div>
                <!-- /product -->

                <div class="clearfix visible-sm visible-xs"></div>

                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{asset('img/product03.png')}}" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                            <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="product-btns">
                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                        </div>
                    </div>
                </div>
                <!-- /product -->

                <!-- product -->
                <div class="col-md-3 col-xs-6">
                    <div class="product">
                        <div class="product-img">
                            <img src="{{asset('img/product04.png')}}" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category">Category</p>
                            <h3 class="product-name"><a href="#">product name goes here</a></h3>
                            <h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
                            <div class="product-rating">
                            </div>
                            <div class="product-btns">
                                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
                                <button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
                                <button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
                            </div>
                        </div>
                        <div class="add-to-cart">
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                        </div>
                    </div>
                </div>
                <!-- /product -->

            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
@endsection
