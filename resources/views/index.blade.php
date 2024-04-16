@extends('layout/layout')

@section('css')

<link rel="stylesheet" href="{{ URL::asset('css/styles.css'); }} ">

@endsection

@section('content')


<section id="search">
    <div class="container">
        <div class="section_header light_header">
            <h4 class="section_head_tag">Welcome!</h4>
            <h2 class="section_head text-center">Discover <span class="text_patch_orange">Exclusive</span> Store
                Discounts<span class="text_patch_orange">!</span></h2>
            <p class="section_header_text">Explore a treasure trove of savings with our curated collection of
                coupons and deals from beloved retailers. From
                fashion to electronics, we've got you covered with unbeatable offers that let you shop smarter and
                save bigger. Start
                maximizing your savings today!</p>
        </div>
        <div class="mx-auto searchbar_container">
            <input type="text" class="form-control searchbar" placeholder="Search for stores or brands" id="searchbar">
            <button class="btn searchbar_btn"><i class="fas fa-magnifying-glass"></i> <span class="search_btn_text d-none d-lg-inline">Search</span></button>
        </div>
    </div>
</section>

<section id="banner">
    <div class="container-fluid p-0 m-0 py-4">
        <div class="owl-carousel owl-theme mobile_container">

            <div class="item mobile_image"><img src="{{ URL::asset('images/couponbz_images/1111amazon.png') }}" alt="" class="banner_image">
            </div>
            <div class="item mobile_image"><img src="{{ URL::asset('images/couponbz_images/1111TEMU.png') }}" alt="" class="banner_image">
            </div>
            <div class="item mobile_image"><img src="{{ URL::asset('images/couponbz_images/E11111BAY.png') }}" alt="" class="banner_image">
            </div>
        </div>
        <div class="owl-carousel owl-theme desktop_container">
            <div class="item d-none d-lg-block"><img src="{{ URL::asset('images/couponbz_images/ebay.png') }}" alt="Ebay" class="banner_image">
            </div>
            <div class="item d-none d-lg-block"><img src="{{ URL::asset('images/couponbz_images/amazon.png') }}" alt="Amazon" class="banner_image">
            </div>
            <div class="item d-none d-lg-block"><img src="{{ URL::asset('images/couponbz_images/TEMU BANNER') }}" alt="Temu" class="banner_image">
            </div>
        </div>
    </div>
</section>

<section id="stores">
    <div class="container-fluid">
        <div class="section_header">
            <h4 class="section_head_tag">Stores</h4>
            <h2 class="section_head text-center">Shop <span class="text_patch_orange">Smart</span>, Save <span class="text_patch_orange">Big!</span></h2>
            <p class="section_header_text">Browse through our diverse array of stores, each offering exclusive
                coupons and irresistible deals. Whether you're
                looking for fashion, electronics, or home essentials, find amazing savings that elevate your
                shopping experience. Start
                exploring and unlock the best deals today</p>
        </div>
        <div class="stores_container">
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" alt="Amazon" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/ebay logo.png') }}" alt="Ebay" class="store_icon">
            </a>

            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" alt="Amazon" class="store_icon">
            </a>

            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/ebay logo.png') }}" alt="Ebay" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/temu logo.png') }}" alt="Temu" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" alt="Amazon" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/ebay logo.png') }}" alt="Ebay" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" alt="Amazon" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/ebay logo.png') }}" alt="Ebay" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" alt="Amazon" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/ebay logo.png') }}" alt="Ebay" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/temu logo.png') }}" alt="Temu" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" alt="Amazon" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/ebay logo.png') }}" alt="Ebay" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" alt="Amazon" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/ebay logo.png') }}" alt="Ebay" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/temu logo.png') }}" alt="Temu" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" alt="Amazon" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/ebay logo.png') }}" alt="Ebay" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/temu logo.png') }}" alt="Temu" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" alt="Amazon" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/ebay logo.png') }}" alt="Ebay" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/temu logo.png') }}" alt="Temu" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" alt="Amazon" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/ebay logo.png') }}" alt="Ebay" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/temu logo.png') }}" alt="Temu" class="store_icon">
            </a>
            <a href="#" class="store_card">
                <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" alt="Amazon" class="store_icon">
            </a>
        </div>
        <div class="section_btn_container text-center mt-5 ">
            <button class="btn btn-lg text-white see_all_btn section_btn">Explore!</button>
        </div>
    </div>
</section>

<section id="deals">
    <div class="container">
        <div class="section_header left_header">
            <h3 class="section_head_tag">Deals</h3>
            <h2 class="section_head">Unbeatable <span class="text_patch_orange">Deals</span> Await!</h2>
        </div>
        <div class="deals_container">
            <div class="deal_card">
                <div class="deal_brand_container">
                    <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" class="deal_brand">
                    <div class="deal_discount_tag">99% OFF</div>
                </div>
                <div class="deal_details">
                    <h4 class="deal_brand_title">Amazon</h4>
                    <h4 class="deal_title">
                        30% OFF Amazon Products
                    </h4>
                </div>
            </div>
            <div class="deal_card">
                <div class="deal_brand_container">
                    <img src="{{ URL::asset('images/couponbz_images/temu logo.png') }}" class="deal_brand">
                    <div class="deal_discount_tag">99% OFF</div>
                </div>
                <div class="deal_details">
                    <h4 class="deal_brand_title">Amazon</h4>
                    <h4 class="deal_title">
                        30% OFF Amazon Products
                    </h4>
                </div>
            </div>
            <div class="deal_card">
                <div class="deal_brand_container">
                    <img src="{{ URL::asset('images/couponbz_images/ebay logo.png') }}" class="deal_brand">
                    <div class="deal_discount_tag">99% OFF</div>
                </div>
                <div class="deal_details">
                    <h4 class="deal_brand_title">Amazon</h4>
                    <h4 class="deal_title">
                        30% OFF Amazon Products
                    </h4>
                </div>
            </div>
            <div class="deal_card">
                <div class="deal_brand_container">
                    <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" class="deal_brand">
                    <div class="deal_discount_tag">99% OFF</div>
                </div>
                <div class="deal_details">
                    <h4 class="deal_brand_title">Amazon</h4>
                    <h4 class="deal_title">
                        30% OFF Amazon Products
                    </h4>
                </div>
            </div>
            <div class="deal_card">
                <div class="deal_brand_container">
                    <img src="{{ URL::asset('images/couponbz_images/temu logo.png') }}" class="deal_brand">
                    <div class="deal_discount_tag">99% OFF</div>
                </div>
                <div class="deal_details">
                    <h4 class="deal_brand_title">Amazon</h4>
                    <h4 class="deal_title">
                        30% OFF Amazon Products
                    </h4>
                </div>
            </div>
            <div class="deal_card">
                <div class="deal_brand_container">
                    <img src="{{ URL::asset('images/couponbz_images/ebay logo.png') }}" class="deal_brand">
                    <div class="deal_discount_tag">99% OFF</div>
                </div>
                <div class="deal_details">
                    <h4 class="deal_brand_title">Amazon</h4>
                    <h4 class="deal_title">
                        30% OFF Amazon Products
                    </h4>
                </div>
            </div>
            <div class="deal_card">
                <div class="deal_brand_container">
                    <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" class="deal_brand">
                    <div class="deal_discount_tag">99% OFF</div>
                </div>
                <div class="deal_details">
                    <h4 class="deal_brand_title">Amazon</h4>
                    <h4 class="deal_title">
                        30% OFF Amazon Products
                    </h4>
                </div>
            </div>
            <div class="deal_card">
                <div class="deal_brand_container">
                    <img src="{{ URL::asset('images/couponbz_images/temu logo.png') }}" class="deal_brand">
                    <div class="deal_discount_tag">99% OFF</div>
                </div>
                <div class="deal_details">
                    <h4 class="deal_brand_title">Amazon</h4>
                    <h4 class="deal_title">
                        30% OFF Amazon Products
                    </h4>
                </div>
            </div>
            <div class="deal_card">
                <div class="deal_brand_container">
                    <img src="{{ URL::asset('images/couponbz_images/ebay logo.png') }}" class="deal_brand">
                    <div class="deal_discount_tag">99% OFF</div>
                </div>
                <div class="deal_details">
                    <h4 class="deal_brand_title">Amazon</h4>
                    <h4 class="deal_title">
                        30% OFF Amazon Products
                    </h4>
                </div>
            </div>
            <div class="deal_card">
                <div class="deal_brand_container">
                    <img src="{{ URL::asset('images/couponbz_images/amazon logo.png') }}" class="deal_brand">
                    <div class="deal_discount_tag">99% OFF</div>
                </div>
                <div class="deal_details">
                    <h4 class="deal_brand_title">Amazon</h4>
                    <h4 class="deal_title">
                        30% OFF Amazon Products
                    </h4>
                </div>
            </div>
            <div class="deal_card">
                <div class="deal_brand_container">
                    <img src="{{ URL::asset('images/couponbz_images/temu logo.png') }}" class="deal_brand">
                    <div class="deal_discount_tag">99% OFF</div>
                </div>
                <div class="deal_details">
                    <h4 class="deal_brand_title">Amazon</h4>
                    <h4 class="deal_title">
                        30% OFF Amazon Products
                    </h4>
                </div>
            </div>
            <div class="deal_card">
                <div class="deal_brand_container">
                    <img src="{{ URL::asset('images/couponbz_images/ebay logo.png') }}" class="deal_brand">
                    <div class="deal_discount_tag">99% OFF</div>
                </div>
                <div class="deal_details">
                    <h4 class="deal_brand_title">Amazon</h4>
                    <h4 class="deal_title">
                        30% OFF Amazon Products
                    </h4>
                </div>
            </div>

        </div>
        <div class="section_btn_container text-center mt-5 ">
            <button class="btn btn-lg text-white see_all_btn section_btn">Explore!</button>
        </div>
    </div>
</section>


@endsection
