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
                @foreach ($allCategories->slice(0, 3) as $category)
                    <div class="col-md-4 col-sm-4 margin-bottom-30">
                        <div class="product-cat">
                            <a href="{{ route('category.show', ['id' => $category->id]) }}">
                                <div class="overlay-alt"></div>
                                <img
                                    src="{{ asset('images/shop/Category/' . $category->category_image) }}"
                                    class="img-responsive"
                                    alt=""
                                />
                                <h2 style="top: 15%; color: gray">
                                    {{ $category->category_name }}
                                    <span>View Collection</span>
                                </h2>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="row">
                @foreach ($allCategories->slice(3, 1) as $category)
                    <div class="col-md-8 col-sm-8">
                        <div class="product-cat margin-bottom-30">
                            <a href="{{ route('category.show', ['id' => $category->id]) }}">
                                <div class="overlay-alt"></div>
                                <img
                                    src="{{ asset('images/shop/Category/' . $category->category_image) }}"
                                    class="img-responsive"
                                    alt=""
                                />
                                <h2 style="top: 10%; color: #7c7c7c">
                                    {{ $category->category_name }}
                                    <span>View Collection</span>
                                </h2>
                            </a>
                        </div>
                    </div>
                @endforeach

                @foreach ($allCategories->slice(4, 1) as $category)
                    <div class="col-md-4 col-sm-4">
                        <div class="product-cat margin-bottom-30">
                            <a href="{{ route('category.show', ['id' => $category->id]) }}">
                                <div class="overlay-alt"></div>
                                <img
                                    src="{{ asset('images/shop/Category/' . $category->category_image) }}"
                                    class="img-responsive"
                                    alt=""
                                />
                                <h2 style="top: 10%; color: #7c7c7c">
                                    {{ $category->category_name }}
                                    <span>View Collection</span>
                                </h2>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
