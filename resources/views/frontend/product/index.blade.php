@extends('frontend.template.layout')

@section('content')

    <div class="col-lg-10 col-lg-fix10">
        <div class="block_right">
            <div class="wrapmain wrap_body_calc">
                <label class="hidden col_id" data-id="san-pham"></label>
                <div class="breadcrumb_background margin-bottom-10 margin-left-15 margin-top-10">
                    <div class="title_full">
                        <div class="a-left">
                            <section class="bread-crumb">
                                <span class="crumb-border"></span>
                                <div class="container3">
                                    <div class="row">
                                        <div class="col-xs-12 a-center">
                                            <ul class="breadcrumb" itemscope=""
                                                itemtype="http://schema.org/BreadcrumbList">
                                                <li class="home" itemprop="itemListElement" itemscope=""
                                                    itemtype="http://schema.org/ListItem">
                                                    <a href="/" itemprop="item"><span
                                                            itemprop="name">Trang chủ</span></a>
                                                    <span class="mr_lr"> / </span>
                                                    <meta content="1" itemprop="position">
                                                </li>
                                                <li itemprop="itemListElement" itemscope=""
                                                    itemtype="http://schema.org/ListItem">
                                                    <strong><span itemprop="name"> Tất cả sản phẩm</span></strong>
                                                    <meta content="2" itemprop="position">
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h1 class="title_page">Tất cả sản phẩm</h1>
                        </div>
                    </div>
                </div>
                <div class="container2">
                    <div class="row">
                        <div class="bg_collection section">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="section owl_nav_custome2">

                                    <div class="row owl_product_news" data-id="san-pham" id="allproduct">
                                        @foreach($products as $product)
                                            <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2">
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
                                                                    src="{{url('/')}}/{{$product->Pro_avatar}}"
                                                                    style="width: 112px; height: 118px;"
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
                                                                                data-id="{{$product->id}}">
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
                                                                        </div>
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
                                    <div class="row text-center">
                                        <div class="col-md-24 text-center">
                                            <nav aria-label="Page navigation example">
                                                {{ $products->links('vendor.pagination.custom') }}
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@stop
