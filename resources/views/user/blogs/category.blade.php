﻿@extends('user.layouts.app')

@section('content')
<div class="mobile-header-active mobile-header-wrapper-style">
    <div class="mobile-header-wrapper-inner">
        <div class="mobile-header-top">
            <div class="mobile-header-logo">
                <a href="index.html"><img src="{{ asset('user/assets') }}/imgs/theme/logo.svg" alt="logo"></a>
            </div>
            <div class="mobile-menu-close close-style-wrap close-style-position-inherit">
                <button class="close-style search-close">
                    <i class="icon-top"></i>
                    <i class="icon-bottom"></i>
                </button>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="mobile-search search-style-3 mobile-header-border">
                <form action="#">
                    <input type="text" placeholder="Search for items…">
                    <button type="submit"><i class="fi-rs-search"></i></button>
                </form>
            </div>
            <div class="mobile-menu-wrap mobile-header-border">
                <div class="main-categori-wrap mobile-header-border">
                    <a class="categori-button-active-2" href="#">
                        <span class="fi-rs-apps"></span> Browse Categories
                    </a>
                    <div class="categori-dropdown-wrap categori-dropdown-active-small">
                        <ul>
                            <li><a href="shop-grid-right.html"><i class="evara-font-dress"></i>Women's Clothing</a>
                            </li>
                            <li><a href="shop-grid-right.html"><i class="evara-font-tshirt"></i>Men's Clothing</a>
                            </li>
                            <li> <a href="shop-grid-right.html"><i class="evara-font-smartphone"></i> Cellphones</a>
                            </li>
                            <li><a href="shop-grid-right.html"><i class="evara-font-desktop"></i>Computer &
                                    Office</a></li>
                            <li><a href="shop-grid-right.html"><i class="evara-font-cpu"></i>Consumer
                                    Electronics</a></li>
                            <li><a href="shop-grid-right.html"><i class="evara-font-home"></i>Home & Garden</a></li>
                            <li><a href="shop-grid-right.html"><i class="evara-font-high-heels"></i>Shoes</a></li>
                            <li><a href="shop-grid-right.html"><i class="evara-font-teddy-bear"></i>Mother &
                                    Kids</a></li>
                            <li><a href="shop-grid-right.html"><i class="evara-font-kite"></i>Outdoor fun</a></li>
                        </ul>
                    </div>
                </div>
                <!-- mobile menu start -->
                <nav>
                    <ul class="mobile-menu">
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="index.html">Home</a>
                            <ul class="dropdown">
                                <li><a href="index.html">Home 1</a></li>
                                <li><a href="index-2.html">Home 2</a></li>
                                <li><a href="index-3.html">Home 3</a></li>
                                <li><a href="index-4.html">Home 4</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="shop-grid-right.html">shop</a>
                            <ul class="dropdown">
                                <li><a href="shop-grid-right.html">Shop Grid – Right Sidebar</a></li>
                                <li><a href="shop-grid-left.html">Shop Grid – Left Sidebar</a></li>
                                <li><a href="shop-list-right.html">Shop List – Right Sidebar</a></li>
                                <li><a href="shop-list-left.html">Shop List – Left Sidebar</a></li>
                                <li><a href="shop-fullwidth.html">Shop - Wide</a></li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Single
                                        Product</a>
                                    <ul class="dropdown">
                                        <li><a href="shop-product-right.html">Product – Right Sidebar</a></li>
                                        <li><a href="shop-product-left.html">Product – Left Sidebar</a></li>
                                        <li><a href="shop-product-full.html">Product – No sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="shop-filter.html">Shop – Filter</a></li>
                                <li><a href="shop-wishlist.html">Shop – Wishlist</a></li>
                                <li><a href="shop-cart.html">Shop – Cart</a></li>
                                <li><a href="shop-checkout.html">Shop – Checkout</a></li>
                                <li><a href="shop-compare.html">Shop – Compare</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Mega
                                menu</a>
                            <ul class="dropdown">
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Women's
                                        Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href="shop-product-right.html">Dresses</a></li>
                                        <li><a href="shop-product-right.html">Blouses & Shirts</a></li>
                                        <li><a href="shop-product-right.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="shop-product-right.html">Women's Sets</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Men's
                                        Fashion</a>
                                    <ul class="dropdown">
                                        <li><a href="shop-product-right.html">Jackets</a></li>
                                        <li><a href="shop-product-right.html">Casual Faux Leather</a></li>
                                        <li><a href="shop-product-right.html">Genuine Leather</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                        href="#">Technology</a>
                                    <ul class="dropdown">
                                        <li><a href="shop-product-right.html">Gaming Laptops</a></li>
                                        <li><a href="shop-product-right.html">Ultraslim Laptops</a></li>
                                        <li><a href="shop-product-right.html">Tablets</a></li>
                                        <li><a href="shop-product-right.html">Laptop Accessories</a></li>
                                        <li><a href="shop-product-right.html">Tablet Accessories</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a
                                href="blog-category-fullwidth.html">Blog</a>
                            <ul class="dropdown">
                                <li><a href="blog-category-grid.html">Blog Category Grid</a></li>
                                <li><a href="blog-category-list.html">Blog Category List</a></li>
                                <li><a href="blog-category-big.html">Blog Category Big</a></li>
                                <li><a href="blog-category-fullwidth.html">Blog Category Wide</a></li>
                                <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Single
                                        Product Layout</a>
                                    <ul class="dropdown">
                                        <li><a href="blog-post-left.html">Left Sidebar</a></li>
                                        <li><a href="blog-post-right.html">Right Sidebar</a></li>
                                        <li><a href="blog-post-fullwidth.html">No Sidebar</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Pages</a>
                            <ul class="dropdown">
                                <li><a href="page-about.html">About Us</a></li>
                                <li><a href="page-contact.html">Contact</a></li>
                                <li><a href="page-account.html">My Account</a></li>
                                <li><a href="page-login-register.html">login/register</a></li>
                                <li><a href="page-purchase-guide.html">Purchase Guide</a></li>
                                <li><a href="page-privacy-policy.html">Privacy Policy</a></li>
                                <li><a href="page-terms.html">Terms of Service</a></li>
                                <li><a href="page-404.html">404 Page</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children"><span class="menu-expand"></span><a href="#">Language</a>
                            <ul class="dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">French</a></li>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Spanish</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </div>
            <div class="mobile-header-info-wrap mobile-header-border">
                <div class="single-mobile-header-info mt-30">
                    <a href="page-contact.html"> Our location </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="page-login-register.html">Log In / Sign Up </a>
                </div>
                <div class="single-mobile-header-info">
                    <a href="#">(+01) - 2345 - 6789 </a>
                </div>
            </div>
            <div class="mobile-social-icon">
                <h5 class="mb-15 text-grey-4">Follow Us</h5>
                <a href="#"><img src="{{ asset('user/assets') }}/imgs/theme/icons/icon-facebook.svg" alt=""></a>
                <a href="#"><img src="{{ asset('user/assets') }}/imgs/theme/icons/icon-twitter.svg" alt=""></a>
                <a href="#"><img src="{{ asset('user/assets') }}/imgs/theme/icons/icon-instagram.svg" alt=""></a>
                <a href="#"><img src="{{ asset('user/assets') }}/imgs/theme/icons/icon-pinterest.svg" alt=""></a>
                <a href="#"><img src="{{ asset('user/assets') }}/imgs/theme/icons/icon-youtube.svg" alt=""></a>
            </div>
        </div>
    </div>
</div>
<main class="main">
    <div class="page-header breadcrumb-wrap">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html" rel="nofollow">Home</a>
                <span></span> Blog
                <span></span> Technology
            </div>
        </div>
    </div>
    <section class="mt-50 mb-50">
        <div class="container custom">
            <div class="row">
                <div class="col-lg-9">
                    <div class="single-header mb-50">
                        <h1 class="font-xxl text-brand">Our Blog</h1>
                        <div class="entry-meta meta-1 font-xs mt-15 mb-15">
                            <span class="post-by">32 Sub Categories</span>
                            <span class="post-on has-dot">1020k Article</span>
                            <span class="time-reading has-dot">480 Authors</span>
                            <span class="hit-count  has-dot">29M Views</span>
                        </div>
                    </div>
                    <div class="loop-grid loop-list pr-30">
                        @foreach ($blogs as $blog)
                        <article class="wow fadeIn animated hover-up mb-30">
                            <div class="post-thumb"
                                style="background-image: url({{ asset('storage/images/blogs/'.$blog->image) }});">
                                <div class="entry-meta">
                                    <a class="entry-meta meta-2"
                                        href="{{ route('blogs.show', $blog->BlogCategory->id) }}">{{
                                        $blog->BlogCategory->name }}</a>
                                </div>
                            </div>
                            <div class="entry-content-2">
                                <h3 class="post-title mb-15">
                                    <a href="blog-post-right.html">{{ $blog->title }}</a>
                                </h3>
                                <p class="post-exerpt mb-30">{{ $blog->description }}</p>
                                <div class="entry-meta meta-1 font-xs color-grey mt-10 pb-10">
                                    <div>
                                        <span class="post-on"> <i class="fi-rs-clock"></i> {{
                                            $blog->created_at->format('d
                                            M Y')
                                            }}</span>
                                        <span class="hit-count has-dot">126k Views</span>
                                    </div>
                                    <a href="blog-post-right.html" class="text-brand">Read more <i
                                            class="fi-rs-arrow-right"></i></a>
                                </div>
                            </div>
                        </article>
                        @endforeach
                    </div>
                    <!--post-grid-->
                    <div class="pagination-area mt-15 mb-sm-5 mb-lg-0">
                        {{ $blogs->render('pagination::bootstrap-4') }}
                    </div>
                </div>
                <div class="col-lg-3 primary-sidebar sticky-sidebar">
                    <div class="widget-area">
                        <div class="sidebar-widget widget_search mb-50">
                            <div class="search-form">
                                <form action="#">
                                    <input type="text" placeholder="Search…">
                                    <button type="submit"> <i class="fi-rs-search"></i> </button>
                                </form>
                            </div>
                        </div>
                        <!--Widget categories-->
                        <div class="sidebar-widget widget_categories mb-40">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title">Categories</h5>
                            </div>
                            <div class="post-block-list post-module-1 post-module-5">
                                <ul>
                                    @foreach ($blogCategories as $blogCategory)
                                    <li class="cat-item cat-item-2"><a
                                            href="{{ route('blogs.show', $blogCategory->id) }}">{{
                                            $blogCategory->name }}</a> ({{ count($blogCategory->blogs) }})
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <!--Widget latest posts style 1-->
                        <div class="sidebar-widget widget_alitheme_lastpost mb-20">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title">Trending Now</h5>
                            </div>
                            <div class="row">
                                <div class="col-12 sm-grid-content mb-30">
                                    <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                        <a href="blog-post-fullwidth.html">
                                            <img src="{{ asset('user/assets') }}/imgs/blog/blog-1.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h4 class="post-title mb-10 text-limit-2-row">The litigants on the screen
                                            are not actors </h4>
                                        <div class="entry-meta meta-13 font-xxs color-grey">
                                            <span class="post-on mr-10">25 April</span>
                                            <span class="hit-count has-dot ">126k Views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                    <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                        <a href="blog-post-fullwidth.html">
                                            <img src="{{ asset('user/assets') }}/imgs/blog/blog-3.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row">Water Partners With Rag &amp;
                                            Bone To Consume</h6>
                                        <div class="entry-meta meta-13 font-xxs color-grey">
                                            <span class="post-on mr-10">25 April</span>
                                            <span class="hit-count has-dot ">126k Views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                    <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                        <a href="blog-post-fullwidth.html">
                                            <img src="{{ asset('user/assets') }}/imgs/blog/blog-4.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row">The loss is not all that
                                            surprising</h6>
                                        <div class="entry-meta meta-13 font-xxs color-grey">
                                            <span class="post-on mr-10">25 April</span>
                                            <span class="hit-count has-dot ">126k Views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                    <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                        <a href="blog-post-fullwidth.html">
                                            <img src="{{ asset('user/assets') }}/imgs/blog/blog-5.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row">We got a right to pick a
                                            little fight, Bonanza </h6>
                                        <div class="entry-meta meta-13 font-xxs color-grey">
                                            <span class="post-on mr-10">25 April</span>
                                            <span class="hit-count has-dot ">126k Views</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 sm-grid-content mb-30">
                                    <div class="post-thumb d-flex border-radius-5 img-hover-scale mb-15">
                                        <a href="blog-post-fullwidth.html">
                                            <img src="{{ asset('user/assets') }}/imgs/blog/blog-6.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-10 text-limit-2-row">My entrance exam was on a book
                                            of matches </h6>
                                        <div class="entry-meta meta-13 font-xxs color-grey">
                                            <span class="post-on mr-10">25 April</span>
                                            <span class="hit-count has-dot ">126k Views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--Widget ads-->
                        <div class="banner-img wow fadeIn mb-45 animated d-lg-block d-none animated">
                            <img src="{{ asset('user/assets') }}/imgs/banner/banner-11.jpg" alt="">
                            <div class="banner-text">
                                <span>Women Zone</span>
                                <h4>Save 17% on <br>Office Dress</h4>
                                <a href="shop-grid-right.html">Shop Now <i class="fi-rs-arrow-right"></i></a>
                            </div>
                        </div>
                        <!--Widget Tags-->
                        <div class="sidebar-widget widget_tags mb-50">
                            <div class="widget-header position-relative mb-20 pb-10">
                                <h5 class="widget-title">Popular tags </h5>
                            </div>
                            <div class="tagcloud">
                                <a class="tag-cloud-link" href="blog-category-grid.html">beautiful</a>
                                <a class="tag-cloud-link" href="blog-category-grid.html">New York</a>
                                <a class="tag-cloud-link" href="blog-category-grid.html">droll</a>
                                <a class="tag-cloud-link" href="blog-category-grid.html">intimate</a>
                                <a class="tag-cloud-link" href="blog-category-grid.html">loving</a>
                                <a class="tag-cloud-link" href="blog-category-grid.html">travel</a>
                                <a class="tag-cloud-link" href="blog-category-grid.html">fighting </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection