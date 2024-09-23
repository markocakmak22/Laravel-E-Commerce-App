<?php

use App\Models\Product;

$popularProducts = Product::with('category')
    ->inRandomOrder()
    ->take(5)
    ->get();

?>

<aside class="col-md-3">
    <div class="side-widget margin-bottom-60">
        <h3 class="heading-1"><span>Shopping Cart</span></h3>
        <div class="sidebar-cart padding-15">
            <div class="cart-item">
                <p class="item-title">No Items in Cart</p>
            </div>
            <hr />
            <div class="cart-total">
                <p>
                    Subtotal:
                    <span>$0</span>
                </p>
            </div>
        </div>
    </div>

    <div class="side-widget margin-bottom-60">
        <h3 class="heading-1"><span>Popular Products</span></h3>
        <ul class="popular-items">
            @foreach ($popularProducts as $product)
                <li>
                    <img
                        src="{{ asset('images/shop/Thumbnails/' . $product->thumbnail) }}"
                        class="img-responsive"
                        alt=""
                        class="img-responsive"
                        alt="{{ $product->product_name }}"
                    />
                    <p>
                        <a href="{{ route('category.product', $product->id) }}">{{ $product->product_name }}</a>
                    </p>
                    <span>${{ $product->product_price }}</span>
                </li>
            @endforeach
        </ul>
    </div>
</aside>
