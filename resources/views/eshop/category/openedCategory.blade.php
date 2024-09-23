@extends('eshop.layouts.app')

@section('content')
    <!-- PAGE HEADER -->
    <div class="page_header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="bcrumbs">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>
                            <a href="{{ route('category.show', ['id' => $category->id]) }}">
                                {{ $category->category_name }}
                            </a>
                        </li>
                    </ul>
                    <br />
                </div>
            </div>
        </div>
    </div>
    <!-- // PAGE HEADER -->

    <div class="padding-bottom-100 container">
        <div class="row">
            <div class="col-md-9">
                <div class="shop-products">
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-md-4 col-sm-4 margin-bottom-30 text-center">
                                <div class="product">
                                    <div class="product-thumb">
                                        <img
                                            src="{{ asset('images/shop/Thumbnails/' . $product->thumbnail) }}"
                                            class="img-responsive"
                                            alt=""
                                        />
                                        <a
                                            class="add-cart"
                                            href="{{ route('category.product', ['id' => $product->id]) }}"
                                        >
                                            View Product
                                        </a>
                                    </div>
                                    <div class="product-title">
                                        <p href="./shop-single.html">
                                            <a>
                                                {{ $product->brand }}
                                                <br />
                                                {{ $product->product_name }}
                                            </a>
                                        </p>
                                    </div>

                                    <div class="product-price">
                                        <span>500</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @include('eshop.category.aside')
        </div>
    </div>
@endsection
