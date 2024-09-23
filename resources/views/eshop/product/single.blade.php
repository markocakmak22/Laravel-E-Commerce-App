@extends('eshop.layouts.app')

@section('content')
    <!-- PAGE HEADER -->
    <div class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="bcrumbs">
                        <li><a href="/">Home</a></li>
                        <li>
                            <a href="{{ route('category.show', ['id' => $product->category->id]) }}">{{$product->category->category_name}}</a>
                        </li>
                        <li><a href="{{ route('category.product', ['id' => $product->id]) }}">{{$product->product_name}}</a></li>

                    </ul>
                    <br />
                </div>
            </div>
        </div>
    </div>
    <!-- // PAGE HEADER -->

    <!-- SHOP SINGLE -->
    <div class="padding-bottom-80 container">
        <div class="row">
            <div class="col-md-9">
                <div class="single-product">

                    <div style="border: 0px solid black" class="row">
                        <!-- Product Images -->
                        <div class="col-md-7 col-sm-6 margin-bottom-50">
                            <div class="product-slider-wrap">
                                <div class="product-slider">
                                    <div class="item">
                                        <img src="{{ asset('images/shop/Single/' . $product->category->id . ")" . $product->category->category_name . '/' . $productPhoto->photo_name) }}" class="img-responsive" alt="" />
                                    </div>
                                </div>
                                <a href="#" class="prev3"><i class="fa fa-angle-left"></i></a>
                                <a href="#" class="next3"><i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                        <!-- / -->

                        <!-- Product Information -->
                        <div class="col-md-5 col-sm-6">
                            <div class="product-title"><h3>Polar</h3></div>
                            <div class="product-title"><h4>Sport Watch</h4></div>
                            <div class="product-price">
                                <span style="margin: 0px; padding: 0px">300$</span>
                            </div>
                            <hr style="padding-bottom: 0px; margin-bottom: 8px" />

                            <p style="font-size: 13px; margin-bottom: 17px">
                                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
                            </p>

                            <form
                                id="myform"
                                name=""
                                method="POST"
                                action="product.php?id=1"
                            >


                                <div class="padding-vertical-10"></div>

                                <input
                                    name="addtocart"
                                    onmouseover="this.style.backgroundColor = '#85ba41'"
                                    onmouseout="this.style.backgroundColor = 'white'"
                                    type="submit"
                                    class="add-cart2"
                                    value="Add to cart"
                                    style="background-color: white"
                                />

                                <div class="padding-vertical-15"></div>
                            </form>

                            <a
                                href="login.php"
                                class="btn btn-primary btn-lg"
                                style="background-color: blanchedalmond; color: black; font-size: 15; margin-top: 40px"
                            >
                                You must be logged in to buy this product!
                            </a>
                            <br />
                            <br />


                        </div>

                    </div>

                    @include('eshop.product.additionalInformation')

                </div>

                <div class="shop-products margin-top-60 padding-bottom-50">
                    <h3 class="heading-1"><span>Related Products</span></h3>

                    <div class="row">


                    <div class="col-md-4 col-sm-4 text-center margin-bottom-30">
                    <div class="product">
                    <div class="product-thumb">

                    <img src="{{ asset('images/shop/Single/1)Jackets/1.jpg') }}" class="img-responsive" alt=""/>

                    <a href="product.php?id=1" class="add-cart">View Product</a>
                    </div>
                    <div class="product-title"><a href="./shop-single.html">Ime</a></div>
                    <div class="product-price"><span>Cena</span></div>
                    </div>
                    </div>




                    </div>
                    </div>
            </div>

            <aside style="border: 0px solid black" class="col-md-3">

                <div class="side-widget margin-bottom-60">
                    <h3 class="heading-1"><span>Shopping Cart</span></h3>

                    <div class="sidebar-cart padding-15">

                    <div class="cart-item">
                    <p class="item-title">No Items in Cart</p>
                    </div>

                    <hr>

                    <div class="cart-total">
                    <p>Subtotal: <span>$0</span></p>
                    </div>

                    </div>
                    </div>

                    <div class="side-widget margin-bottom-60">
                        <h3 class="heading-1"><span>Shopping Cart</span></h3>

                        <div class="sidebar-cart padding-20">



                        <div class="cart-item">
                        <p class="item-title">Ime</p>
                        <span class="item-quantity"><a href="product.php?id=id &remove=1" style="color:#aaaaaa;" href="" class="ci-close">X</a> 1</span>
                        <br>
                        </div>

                        <hr>

                        <div class="cart-total">
                        <p>Subtotal: <span>Price</span></p>
                        </div>

                        <a href="shop_cart.php" class="btn btn-default btn-block">View Cart</a>
                        <a href="shop_cart.php" class="btn btn-primary btn-block">Checkout</a>
                        </div>
                        </div>

                        <div class="side-widget margin-bottom-60">
                            <h3 class="heading-1"><span>Popular Products</span></h3>
                            <ul class="popular-items">
                                <li>
                                    <img src="{{ asset('images/shop/Single/1)Jackets/4.jpg') }}" class="img-responsive" alt="" />
                                    <p>
                                        <a href="product.php?id=1">Name</a>
                                    </p>
                                    <span>500</span>
                                </li>
                                <li>
                                    <img src="{{ asset('images/shop/Single/1)Jackets/4.jpg') }}" class="img-responsive" alt="" />
                                    <p>
                                        <a href="product.php?id=1">Name</a>
                                    </p>
                                    <span>500</span>
                                </li>
                            </ul>
                        </div>

            </aside>


        </div>
    </div>
@endsection
