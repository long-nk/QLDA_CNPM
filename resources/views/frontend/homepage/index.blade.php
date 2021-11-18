@extends('frontend.template.layout')

@section('content')
    <div class="col-lg-10 col-lg-fix10">
        <div class="block_right">
            <div class="wrapmain wrap_body_calc">
                <h1 class="hidden">
                    2021 - Nula Cosmetic Store
                </h1>
                <section class="awe-section-1">
                    <section class="sectionslider section_slider">
                        <div class="section" id="idslider" name="Slider ảnh">
                            <div class="widget LinkList" data-version="2" id="LinkList2">
                                <div class="home-slider owl-carousel owl-slider-home not-owl owl-loaded owl-drag">
                                    @foreach($banners as $banner)
                                        <div class="owl-stage-outer">
                                            <div class="owl-stage"
                                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0.25s ease 0s; width: 1770px;">
                                                <div class="owl-item active" style="width: 885px;">
                                                    <div class="items"><a href="/">
                                                            <img style="width: 885px; height: 542px;" alt="Slider"
                                                                 src="{{url('/')}}/{{$banner->Sd_image}}"></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
                <section class="awe-section-2">
                    <div class="section_2banner">
                        <div class="padding">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="section" id="idbaner1" name="Banner 1">
                                        <div class="widget HTML" data-version="2" id="HTML2">
                                            <div class="adv_bottom_inner">
                                                <figure class="img_effect">
                                                    <a href="{{route('product.index')}}" title="Banner 1">
                                                        <img alt="Banner 1" class="img-responsive center-base"
                                                             src="https://bizweb.dktcdn.net/thumb/grande/100/368/647/themes/739567/assets/banner_1.jpg?1593482331082">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <div class="section" id="idbaner2" name="Banner 2">
                                        <div class="widget HTML" data-version="2" id="HTML3">
                                            <div class="adv_bottom_inner">
                                                <figure class="img_effect">
                                                    <a href="{{route('product.index')}}" title="Banner 2">
                                                        <img alt="Banner 2" class="img-responsive center-base"
                                                             src="https://bizweb.dktcdn.net/thumb/grande/100/368/647/themes/739567/assets/banner_2.jpg?1593482331082">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="awe-section-3">
                    <section class="section_product_news">
                        <div class="container2">
                            <div class="row">
                                <div class="section" id="idsanphammoi" name="Hàng mới về">
                                    <div class="widget HTML" data-version="2" id="HTML1">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="titlemodule a-center section">
                                                <h2>
                                                    <a href="{{route('product.index')}}">
                                                        Sản phẩm mới
                                                    </a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="section owl_nav_custome2">
                                                <div class="owl_product_news owl-carousel owl-theme owl-loaded owl-drag"
                                                     data-dot="false" data-id="san-pham" data-lg-items="5"
                                                     data-margin="30" data-md-items="4" data-nav="true"
                                                     data-sm-items="3" data-xs-items="2" id="new_product">
                                                    @foreach($product_news as $product_new)
                                                        <div class="owl-stage"
                                                             style="width: 1710px; transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">

                                                            <div class="owl-item active"
                                                                 style="width: 141px; margin-right: 30px;">
                                                                <div class="owl-item">
                                                                    <div class="simpleCart_shelfItem item_product_main">
                                                                        <div
                                                                            class="product-loop-1 product-loop-2 product-base">
                                                                            <div class="product-thumbnail">
                                                                                @if($product_new->Pro_sale)
                                                                                    <div class="saleright">
                                                                                        -{{$product_new->Pro_sale}}%
                                                                                    </div>
                                                                                @endif
                                                                                <a
                                                                                    class="image_link display_flex"
                                                                                    href="{{route('product.detail', $product_new->id)}}"
                                                                                    title="{{$product_new->Pro_name}}">
                                                                                    <img
                                                                                        src="{{url('/')}}/{{$product_new->Pro_avatar}}"
                                                                                        alt="{{$product_new->Pro_name}}"
                                                                                        class="item_thumb"
                                                                                        style="width: auto; height: 130px;">
                                                                                </a>
                                                                                <div
                                                                                    class="product-action clearfix hidden-xs">
                                                                                    <form action="javascript:void(0);"
                                                                                          class="variants form-nut-grid">
                                                                                        <div class="group_action"><a
                                                                                                title="Xem chi tiết"
                                                                                                href="{{route('product.detail', $product_new->id)}}"
                                                                                                class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md item_link"><i
                                                                                                    class="fas fa-hotdog"></i></a>
                                                                                            <button class="btn-buy btn-cart btn btn-circle left-to item_add" title="Thêm vào giỏ hàng"
                                                                                                    data-id="{{$product_new->id}}">
                                                                                                <i class="fas fa-shopping-basket"></i>
                                                                                            </button>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                            <div class="product-info a-center"><h3
                                                                                    class="product-name"><a
                                                                                        href="{{route('product.detail', $product_new->id)}}"
                                                                                        title="{{$product_new->Pro_name}}"
                                                                                        class="item_name">{{$product_new->Pro_name}}</a>
                                                                                </h3>
                                                                                <div class="product-hideoff">
                                                                                    <div class="product-hide">
                                                                                        <div class="price-box clearfix">
                                                                                            <div
                                                                                                class="special-price"><span
                                                                                                    class="price product-price item_price">{{ number_format(floatval($product_new->Pro_price), 0, ',', '.') . "đ" }}</span>
                                                                                            </div><br/>
                                                                                            <div class="old-price">
                                                                                                <span class="price product-price-old">
                                                                                                    @if($product_new->Pro_sale != 0)
                                                                                                        {{ number_format(ceil(floatval($product_new->Pro_price) / ((100 - $product_new->Pro_sale) / 100)), 0, ',', '.') . "đ" }}
                                                                                                    @endif
                                                                                                </span>
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
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
                <section class="awe-section-4">
                    <div class="section_2banner">
                        <div class="padding">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="section" id="idbnngang" name="Banner ngang">
                                        <div class="widget Image" data-version="2" id="Image2">
                                            <div class="adv_bottom_inner">
                                                <figure class="img_effect">
                                                    <a href="{{route('product.index')}}" title="Banner">
                                                        <img alt="Mỹ phẩm HOT" class="img-responsive center-base"
                                                             src="//3.bp.blogspot.com/-mJ0HVPuiH2s/YJkjgmDRqXI/AAAAAAAAS2c/JVnOkkFiI6cucYeR7IU7F8e2FLPebuIIACK4BGAYYCw/s1600/banner.jpg">
                                                    </a>
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="awe-section-3">
                    <section class="section_product_news">
                        <div class="container2">
                            <div class="row">
                                <div class="section" id="id-sanpham-a" name="Mỹ phẩm">
                                    <div class="widget HTML" data-version="2" id="HTML15">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="titlemodule a-center section">
                                                <h2>
                                                    <a href="{{route('product.index')}}">
                                                        Sản phẩm bán chạy
                                                    </a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="section owl_nav_custome2">
                                                <div class="owl_product_news owl-carousel owl-theme owl-loaded owl-drag"
                                                     data-dot="false" data-id="my-pham-nu" data-lg-items="5"
                                                     data-margin="30" data-md-items="4" data-nav="true"
                                                     data-sm-items="3" data-xs-items="2" id="a_product">
                                                    @foreach($product_selling as $product_hot)
                                                        <div class="owl-stage"
                                                             style="width: 1026px; transform: translate3d(-171px, 0px, 0px); transition: all 0.25s ease 0s;">
                                                            <div class="owl-item"
                                                                 style="width: 141px; margin-right: 30px;">
                                                                <div class="simpleCart_shelfItem item_product_main">
                                                                    <div
                                                                        class="product-loop-1 product-loop-2 product-base">
                                                                        <div class="product-thumbnail">
                                                                            @if($product_hot->Pro_sale)
                                                                                <div class="saleright">
                                                                                    -{{$product_hot->Pro_sale}}%
                                                                                </div>
                                                                            @endif
                                                                            <a class="image_link display_flex"
                                                                               href="{{route('product.detail', $product_hot->id)}}"
                                                                               title="{{$product_hot->Pro_name}}">
                                                                                <img
                                                                                    src="{{url('/')}}/{{$product_hot->Pro_avatar}}"
                                                                                    alt="{{$product_hot->Pro_name}}"
                                                                                    class="item_thumb"
                                                                                    style="width: 141px; height: 150px;">
                                                                            </a>
                                                                            <div
                                                                                class="product-action clearfix hidden-xs">
                                                                                <form action="javascript:void(0);"
                                                                                      class="variants form-nut-grid">
                                                                                    <div class="group_action"><a
                                                                                            title="Xem chi tiết"
                                                                                            href="{{route('product.detail', $product_hot->id)}}"
                                                                                            class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md item_link"><i
                                                                                                class="fas fa-hotdog"></i></a>
                                                                                        <button class="btn-buy btn-cart btn btn-circle left-to item_add" title="Thêm vào giỏ hàng"
                                                                                                data-id="{{$product_hot->id}}">
                                                                                            <i class="fas fa-shopping-basket"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-info a-center"><h3
                                                                                class="product-name"><a
                                                                                    href="{{route('product.detail', $product_hot->id)}}"
                                                                                    title="{{$product_hot->Pro_name}}"
                                                                                    class="item_name">{{$product_hot->Pro_name}}
                                                                                    /</a></h3>
                                                                            <div class="product-hideoff">
                                                                                <div class="product-hide">
                                                                                    <div class="price-box clearfix">
                                                                                        <div class="special-price"><span
                                                                                                class="price product-price item_price">{{ number_format(floatval($product_hot->Pro_price), 0, ',', '.') . "đ" }}</span>
                                                                                        </div><br/>
                                                                                        <div class="old-price">
                                                                                            <span class="price product-price-old">
                                                                                                @if($product_hot->Pro_sale != 0)
                                                                                                    {{ number_format(ceil(floatval($product_hot->Pro_price) / ((100 - $product_hot->Pro_sale) / 100)), 0, ',', '.') . "đ" }}
                                                                                                @endif
                                                                                            </span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
                <section class="awe-section-5">
                    <section class="section_product_bestsale">
                        <div class="container2">
                            <div class="row">
                                <div class="section" id="idbanchay" name="Tất cả Sản phẩm">
                                    <div class="widget HTML" data-version="2" id="HTML4">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="titlemodule a-center section">
                                                <h2>
                                                    <a href="{{route('product.index')}}" title="Tất cả Sản phẩm">Tất cả Sản phẩm</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="section owl_nav_custome2">

                                                <div class="row owl_product_news" data-id="san-pham" id="allproduct">
                                                    @foreach($products as $product)
                                                        <div class="col-xs-6 col-sm-6 col-md-fix-2 col-lg-fix-2">
                                                            <div class="simpleCart_shelfItem item_product_main">
                                                                <div class="product-loop-1 product-loop-2 product-base">
                                                                    <div class="product-thumbnail">
                                                                        @if($product->Pro_sale)
                                                                            <div class="saleright">
                                                                                -{{$product->Pro_sale}}%
                                                                            </div>
                                                                        @endif
                                                                        <a
                                                                            class="image_link display_flex"
                                                                            href="{{route('product.detail', $product->id)}}"
                                                                            title="{{$product->Pro_name}}"> <img
                                                                                src="{{url('/')}}/{{$product->Pro_avatar}}" style="height: 130px; width: auto;"
                                                                                alt="{{$product->Pro_name}}"
                                                                                class="item_thumb"> </a>
                                                                        <div class="product-action clearfix hidden-xs">
                                                                            <form action="javascript:void(0);"
                                                                                  class="variants form-nut-grid">
                                                                                <div class="group_action"><a
                                                                                        title="Xem chi tiết"
                                                                                        href="{{route('product.detail', $product->id)}}"
                                                                                        class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md item_link"><i
                                                                                            class="fas fa-hotdog"></i></a>
                                                                                    <button class="btn-buy btn-cart btn btn-circle left-to item_add" title="Thêm vào giỏ hàng"
                                                                                            data-id="{{$product->id}}" >
                                                                                        <i class="fas fa-shopping-basket"></i>
                                                                                    </button>
                                                                                </div>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-info a-center"><h3
                                                                            class="product-name"><a
                                                                                href="{{route('product.detail', $product->id)}}"
                                                                                title="{{$product->Pro_name}}"
                                                                                class="item_name">{{$product->Pro_name}}</a>
                                                                        </h3>
                                                                        <div class="product-hideoff">
                                                                            <div class="product-hide">
                                                                                <div class="price-box clearfix">
                                                                                    <div class="special-price"><span
                                                                                            class="price product-price item_price">{{ number_format(floatval($product->Pro_price), 0, ',', '.') . "đ" }}</span>
                                                                                    </div><br/>
                                                                                    <div class="old-price">
                                                                                        <span class="price product-price-old">
                                                                                            @if($product->Pro_sale != 0)
                                                                                                {{ number_format(ceil(floatval($product->Pro_price) / ((100 - $product->Pro_sale) / 100)), 0, ',', '.') . "đ" }}
                                                                                            @endif
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <div class="text-xs-right" id="loadmore">
                                                    <div class="blog-pager container" id="blog-pager"><span
                                                            class="blog-pager-older-link load-more" id="load-more-link">
                                                                <a href="{{route('product.index')}}"
                                                                   title="Tất cả sản phẩm">Xem thêm sản phẩm</a>
                                                            </span>
                                                        <span class="loading"><span class="loader"></span></span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
                <section class="awe-section-6">
                    <section class="section_blog section_base">
                        <div class="padding">
                            <div class="row">
                                <div class="section" id="idtintuc" name="Tin tức">
                                    <div class="widget HTML" data-version="2" id="HTML5">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="titlemodule a-center section">
                                                <h2>
                                                    <a href="{{route('news')}}" title="NULA'S BLOG">NULA'S BLOG</a>
                                                </h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="section owl_nav_custome2">
                                                <div class="owl-carousel owl-blog owl-loaded owl-drag" data-dot="false"
                                                     data-id="tin-tuc" data-lg-items="2" data-margin="30"
                                                     data-md-items="2" data-nav="true" data-sm-items="2"
                                                     data-xs-items="1" id="tintucblog">
                                                    @foreach($news as $new)
                                                        <div class="owl-stage-outer">
                                                            <div class="owl-item active"
                                                                 style="width: 430px; height: 550px; margin-right: 30px;">
                                                                <div class="blocg_item">
                                                                    <div class="blogwp"
                                                                         style="width: 400px; height: 350px;">
                                                                        <a class="image-blog"
                                                                           href="{{route('news.detail', $new->id)}}"
                                                                           title="{{$new->A_Name}}">
                                                                            <img
                                                                                src="{{url('/')}}/{{$new->A_Avatar}}"
                                                                                alt="{{$new->A_Name}}"
                                                                                style="width: 365.5px; height: 213.2px;">
                                                                        </a>
                                                                        <div class="content_blog a-center"><h3><a
                                                                                    href="{{route('news.detail', $new->id)}}"
                                                                                    title="{{$new->A_Name}}">{{$new->A_Name}}</a>
                                                                            </h3>
                                                                            <p class="justify">{!! $new->A_Description !!}</p>
                                                                            <a class="xemthem"
                                                                               href="{{route('news.detail', $new->id)}}"
                                                                               title="Xem thêm">Xem
                                                                                thêm</a></div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </section>
            </div>

@stop
