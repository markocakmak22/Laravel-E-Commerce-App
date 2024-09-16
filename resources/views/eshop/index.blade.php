@extends('eshop.layouts.app')
@section('content')
    <div class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="bcrumbs">
                        <li><a href="#">Home</a></li>
                    </ul>
                    <br />
                    <h2>Product Categories</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="padding-bottom-50 container">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 margin-bottom-30">
                    <div class="product-cat">
                        <a href="category.php?category=1">
                            <div class="overlay-alt"></div>
                            <img src="{{ asset('images/shop/Category/jacke.png') }}" class="img-responsive" alt="" />
                            <h2 style="top: 15%; color: gray">
                                Jacke
                                <span>View Collection</span>
                            </h2>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 margin-bottom-30">
                    <div class="product-cat">
                        <a href="category.php?category=1">
                            <div class="overlay-alt"></div>
                            <img src="{{ asset('images/shop/Category/shoes.png') }}" class="img-responsive" alt="" />
                            <h2 style="top: 15%; color: gray">
                                Shoes
                                <span>View Collection</span>
                            </h2>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 margin-bottom-30">
                    <div class="product-cat">
                        <a href="category.php?category=1">
                            <div class="overlay-alt"></div>
                            <img src="{{ asset('images/shop/Category/bags.png') }}" class="img-responsive" alt="" />
                            <h2 style="top: 15%; color: gray">
                                Bags
                                <span>View Collection</span>
                            </h2>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div class="product-cat margin-bottom-30">
                        <a href="category.php?category=1">
                            <div class="overlay-alt"></div>
                            <img
                                src="{{ asset('images/shop/Category/wcollection.png') }}"
                                class="img-responsive"
                                alt=""
                            />
                            <h2 style="top: 10%; color: #7c7c7c">
                                Womens Collection
                                <span>View Collection</span>
                            </h2>
                        </a>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="product-cat margin-bottom-30">
                        <a href="category.php?category=1">
                            <div class="overlay-alt"></div>
                            <img src="{{ asset('images/shop/Category/mpants.png') }}" class="img-responsive" alt="" />
                            <h2 style="top: 10%; color: #7c7c7c">
                                Pants
                                <span>View Collection</span>
                            </h2>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
