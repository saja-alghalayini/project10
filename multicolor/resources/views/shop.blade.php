@extends('layouts.master')
@section('title', 'home')
@section('content')

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>See our unique collection</p>
                    <h1>Shop</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- products -->
<div class="product-section mt-150 mb-150">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="product-filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".strawberry">Oil Painting</li>
                        <li data-filter=".berry">Acrylic Painting</li>
                        <li data-filter=".lemon">Pop Art</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row product-lists">
            <div class="col-lg-4 col-md-6 text-center strawberry">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/product-img-1.jpg" alt=""  style="height:200px ;"></a>
                    </div>
                    <h3>Painting-1</h3>
                    <p class="product-price"><span>Single Painting</span> 85,000 JD </p>
                    <a href="cart.html" class="cart-btn"><img src="./assets/img/cart.png" alt="cart" style="height:40px ;"  style="height:200px ;"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center berry">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/product-img-2.jpg" alt=""  style="height:200px ;"></a>
                    </div>
                    <h3>Painting-2</h3>
                    <p class="product-price"><span>Single Painting</span> 70,000 JD </p>
                    <a href="cart.html" class="cart-btn"><img src="./assets/img/cart.png" alt="cart" style="height:40px ;"  style="height:200px ;"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center lemon">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/product-img-3.jpg" alt=""  style="height:200px ;"></a>
                    </div>
                    <h3>Painting-3</h3>
                    <p class="product-price"><span>Single Painting</span> 35,000 JD </p>
                    <a href="cart.html" class="cart-btn"><img src="./assets/img/cart.png" alt="cart" style="height:40px ;"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/product-img-4.jpg" alt=""  style="height:200px ;"></a>
                    </div>
                    <h3>Painting-4</h3>
                    <p class="product-price"><span>Single Painting</span> 50,000 JD </p>
                    <a href="cart.html" class="cart-btn"><img src="./assets/img/cart.png" alt="cart" style="height:40px ;"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/product-img-5.jpg" alt=""  style="height:200px ;"></a>
                    </div>
                    <h3>Painting-5</h3>
                    <p class="product-price"><span>Single Painting</span> 45,000 JD </p>
                    <a href="cart.html" class="cart-btn"><img src="./assets/img/cart.png" alt="cart" style="height:40px ;"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center strawberry">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/product-img-6.jpg" alt=""  style="height:200px ;"></a>
                    </div>
                    <h3>Painting-6</h3>
                    <p class="product-price"><span>Single Painting</span> 80,000 JD </p>
                    <a href="cart.html" class="cart-btn"><img src="./assets/img/cart.png" alt="cart" style="height:40px ;"></i> Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pagination-wrap">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a class="active" href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end products -->

<!-- logo carousel -->
<div class="logo-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-carousel-inner">
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/1.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/2.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/3.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/4.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/company-logos/5.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end logo carousel -->

@endsection