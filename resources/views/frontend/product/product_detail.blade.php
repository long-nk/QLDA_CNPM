@extends('frontend.template.layout')

@section('content')

    <div class="col-lg-10 col-lg-fix10">
        <div class="block_right">
            <div class="wrapmain wrap_body_calc">
                <section class="signup search-main wrap_background background_white section_base">
                    <div class="form_background form-inline margin-bottom-0">
                        <div class="content-area section" id="content">
                            <div class="widget Blog" data-version="2" id="Blog1">
                                <div class="blog-posts hfeed">
                                    <article class="post-outer-container">
                                        <div class="post-outer">
                                            <div class="post">
                                                <div
                                                    class="breadcrumb_background margin-bottom-20 margin-left-15 margin-top-10">
                                                    <div class="title_full">
                                                        <div class="a-left">
                                                            <section class="bread-crumb">
                                                                <span class="crumb-border"></span>
                                                                <div class="container3">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 a-center">
                                                                            <ul class="breadcrumb" itemscope=""
                                                                                itemtype="http://schema.org/BreadcrumbList">
                                                                                <li class="home"
                                                                                    itemprop="itemListElement"
                                                                                    itemscope=""
                                                                                    itemtype="http://schema.org/ListItem">
                                                                                    <a href="{{route('home')}}"
                                                                                       itemprop="item"><span
                                                                                            itemprop="name">
Trang chủ</span></a>
                                                                                    <span class="mr_lr"> / </span>
                                                                                    <meta content="1"
                                                                                          itemprop="position">
                                                                                </li>
                                                                                <li itemprop="itemListElement"
                                                                                    itemscope=""
                                                                                    itemtype="http://schema.org/ListItem">
                                                                                    <a class="changeurl"
                                                                                       href="https://template-nula-cosmcleticok.blogspot.com/search/label/sua-tam"
                                                                                       itemprop="item">
<span itemprop="name">
{{$category->C_name}}</span>
                                                                                    </a>
                                                                                    <span class="mr_lr"> / </span>
                                                                                    <meta content="2"
                                                                                          itemprop="position">
                                                                                </li>
                                                                                <li itemprop="itemListElement"
                                                                                    itemscope=""
                                                                                    itemtype="http://schema.org/ListItem">
                                                                                    <strong><a itemprop="item"><span
                                                                                                itemprop="name">
{{$product->Pro_name}}</span></a></strong>
                                                                                    <meta content="3"
                                                                                          itemprop="position">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <p class="title_page margin-bottom-20">
                                                                {{$product->Pro_name}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-body entry-content float-container"
                                                     id="post-body-6661752426539792430">
                                                    <div class="section wrap-padding-15 wp_product_main">
                                                        <div class="details-product simpleCart_shelfItem">
                                                            <div
                                                                class="product-detail-left product-images col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                <div class="col_large_default large-image">
                                                                    <a data-rel="prettyPhoto[product-gallery]"
                                                                       href="http://localhost:8000/{{$product->Pro_avatar}}">
                                                                        <div style="height:410px;width:410px;"
                                                                             class="zoomWrapper">
                                                                            <div style="height:410px;width:410px;"
                                                                                 class="zoomWrapper"><img
                                                                                    alt="{{$product->Pro_name}}"
                                                                                    class="checkurl img-responsive item_thumb"
                                                                                    id="img_01"
                                                                                    src="{{url('/')}}/{{$product->Pro_avatar}}"
                                                                                    style="position: absolute;"></div>
                                                                        </div>
                                                                    </a>
                                                                    <div class="hidden">
                                                                        <div class="item">
                                                                            <a alt="{{$product->Pro_name}}"
                                                                               data-image="{{$product->Pro_avatar}}"
                                                                               data-rel="prettyPhoto[product-gallery]"
                                                                               data-zoom-image="{{$product->Pro_avatar}}}"
                                                                               href="{{$product->Pro_avatar}}">
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="section owlthumb_relative_product_1 owl_nav_custome1">
                                                                    <div
                                                                        class="owl-carousel owl-theme thumbnail-product thumb_product_details thumbdetail_modile_v1 not-owl owl-loaded owl-drag"
                                                                        id="gallery_02">


                                                                        <div class="owl-stage-outer owl-height"
                                                                             style="height: 65px;">
                                                                            <div class="owl-stage"
                                                                                 style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 180px;">
                                                                                <div class="owl-item active"
                                                                                     style="width: 64.75px; margin-right: 25px;">
                                                                                    <div class="item">
                                                                                        <a data-zoom-image="http://localhost:8000/{{$product->Pro_avatar}}"
                                                                                           href="javascript:void(0)">
                                                                                            <img
                                                                                                alt="{{$product->Pro_name}}}"
                                                                                                class="lazyload"
                                                                                                data-img="http://localhost:8000/{{$product->Pro_avatar}}"
                                                                                                src="{{url('/')}}/{{$product->Pro_avatar}}">
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="col-xs-12 col-sm-12 col-md-6 col-lg-6 details-pro">
                                                                <h1 class="title-product">{{$product->Pro_name}}</h1>
                                                                <div class="fw w_100">
                                                                    <div class="group-status margin-bottom-10">


                                                                    </div>
                                                                    <div class="product-summary">
                                                                        <div class="rte">
                                                                            {{--                                                                            {{$product->Pro_}}}--}}
                                                                        </div>
                                                                    </div>
                                                                    <div class="reviews_details_product">
                                                                        <div class="price-box">Giá bán:
                                                                            <span class="special-price">
                                                                                <span
                                                                                    class="price product-price item_price">
                                                                                    {{ number_format(floatval($product->Pro_price), 0, ',', '.') . "đ" }}
                                                                                </span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="form-product col-sm-12 col-lg-12 col-md-12 col-xs-12">
                                                                        <span class="item_name d-none hidden">{{$product->Pro_name}}<span
                                                                                class="maumau"></span><span
                                                                                class="sizesize"></span></span>
                                                                        <div class="box-variant clearfix ">
                                                                            <fieldset class="form-group">
                                                                            </fieldset>
                                                                        </div>
                                                                        <div class="form-group form_button_details ">
                                                                            <div class="form_product_content type1 ">
                                                                                <div
                                                                                    class="soluong soluong_type_1 show">
                                                                                </div>
                                                                                <div class="button_actions clearfix">
                                                                                    <button class="btn btn_base btn_add_cart btn-cart item_add"
                                                                                            data-id="{{$product->id}}">
                                                                                        <span
                                                                                            class="text_1">Mua ngay</span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="section sec_tab ">
                                                        <div class="container2">
                                                            <div class="row">
                                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                    <div class="wrap_tab_ed">
                                                                        <div class="tab_h">
                                                                            <div class="section bg_white">
                                                                                <div
                                                                                    class="product-tab e-tabs not-dqtab">
                                                                                    <ul class="tabs tabs-title clearfix">
                                                                                        <li class="tab-link current"
                                                                                            data-tab="tab-1">
                                                                                            <h3>
                                                                                                <span>Thông tin sản phẩm</span>
                                                                                            </h3>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <div class="tab-float">
                                                                                        <div
                                                                                            class="tab-content content_extab current"
                                                                                            id="tab-1">
                                                                                            <div
                                                                                                class="rte product_getcontent"
                                                                                                style="text-align:justify-all;">
                                                                                                {!! $product->Pro_description !!}
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
                                                    </div>
                                                    <div class="container2">
                                                        <div class="row">
                                                            <div class="col-xs-12">
                                                                <div class="tag-share">
                                                                    <div class="row">
                                                                        <div class="col-xs-12 col-sm-6 tag_article">
                                                                            <span class="icon_tag"><i
                                                                                    class="fas fa-tags"></i></span>
                                                                            <a class="b-label" href="{{route('product.category', $category->id)}}">{{$category->C_name}}</a>
                                                                        </div>
                                                                        <div class="col-xs-12 col-sm-6">
                                                                            <div class="social-sharing f-right">
                                                                                <div class="social-media"><label
                                                                                        style="display: inline-block;">Chia
                                                                                        sẻ: </label>
                                                                                    <a class="share-facebook share-post-hoatran"
                                                                                       data-height="500"
                                                                                       data-url="//www.facebook.com/sharer.php?u=https://template-nula-cosmcleticok.blogspot.com/2020/09/sua-tam-duong-am-cho-da.html"
                                                                                       data-width="550" rel="nofollow"
                                                                                       title="Chia sẻ lên Facebook">
                                                                                        <i class="fab fa-facebook-f"></i>
                                                                                    </a>
                                                                                    <a class="share-twitter share-post-hoatran"
                                                                                       data-height="460"
                                                                                       data-url="//twitter.com/share?text=Sữa tắm dưỡng ẩm cho da&amp;url=https://template-nula-cosmcleticok.blogspot.com/2020/09/sua-tam-duong-am-cho-da.html"
                                                                                       data-width="550" rel="nofollow"
                                                                                       title="Chia sẻ lên Twitter">
                                                                                        <i class="fab fa-twitter"></i>
                                                                                    </a>
                                                                                    <a class="share-pinterest share-post-hoatran"
                                                                                       data-height="750"
                                                                                       data-url="https://www.pinterest.com/pin/create/button/?url=https://template-nula-cosmcleticok.blogspot.com/2020/09/sua-tam-duong-am-cho-da.html&amp;media=https://1.bp.blogspot.com/-ZqUToAtkQ_s/X1g3Nz7N6vI/AAAAAAAAPms/VYHQd_I-x9wxs4U6QRaGxSdgCJfHUO2nACLcBGAsYHQ/s16000/12.jpg&amp;description=Sữa tắm dưỡng ẩm cho da"
                                                                                       data-width="735" rel="nofollow"
                                                                                       title="Share lên Pinterest">
                                                                                        <i class="fab fa-pinterest-p"></i>
                                                                                    </a>
                                                                                    <a class="share-email share-post-hoatran"
                                                                                       data-height="460"
                                                                                       data-url="mailto:?subject=Sữa tắm dưỡng ẩm cho da&amp;body=https://template-nula-cosmcleticok.blogspot.com/2020/09/sua-tam-duong-am-cho-da.html"
                                                                                       data-width="550"
                                                                                       href="javascript:;"
                                                                                       rel="nofollow" title="Gửi Email"><i
                                                                                            class="fa fa-envelope"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <section class="awe-section-3">
                                                                <section class="section_product_news">
                                                                    <div class="container2">
                                                                        <div class="row">
                                                                            <div class="section" id="id-sanpham-a"
                                                                                 name="Mỹ phẩm">
                                                                                <div class="widget HTML"
                                                                                     data-version="2" id="HTML15">
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div
                                                                                            class="titlemodule a-center section">
                                                                                            <h2>
                                                                                                <a href="/search/label/my-pham-nu">
                                                                                                    Sản phẩm tương tự
                                                                                                </a>
                                                                                            </h2>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                        <div
                                                                                            class="section owl_nav_custome2">
                                                                                            <div
                                                                                                class="owl_product_news owl-carousel owl-theme owl-loaded owl-drag"
                                                                                                data-dot="false"
                                                                                                data-id="my-pham-nu"
                                                                                                data-lg-items="5"
                                                                                                data-margin="30"
                                                                                                data-md-items="4"
                                                                                                data-nav="true"
                                                                                                data-sm-items="3"
                                                                                                data-xs-items="2"
                                                                                                id="a_product">
                                                                                                @foreach($products as $p)
                                                                                                    <div
                                                                                                        class="owl-stage"
                                                                                                        style="width: 1026px; transform: translate3d(-171px, 0px, 0px); transition: all 0.25s ease 0s;">
                                                                                                        <div
                                                                                                            class="owl-item"
                                                                                                            style="width: 141px; margin-right: 30px;">
                                                                                                            <div
                                                                                                                class="simpleCart_shelfItem item_product_main">
                                                                                                                <div
                                                                                                                    class="product-loop-1 product-loop-2 product-base">
                                                                                                                    <div
                                                                                                                        class="product-thumbnail">
                                                                                                                        @if($p->Pro_sale)
                                                                                                                            <div
                                                                                                                                class="saleright">
                                                                                                                                -{{$p->Pro_sale}}
                                                                                                                                %
                                                                                                                            </div>
                                                                                                                        @endif
                                                                                                                        <a class="image_link display_flex"
                                                                                                                           href="https://template-nula-cosmcleticok.blogspot.com/2020/09/sua-tam-sparkling-citrus-lam-muot-da.html"
                                                                                                                           title="{{$p->Pro_name}}">
                                                                                                                            <img
                                                                                                                                src="{{url('/')}}/{{$p->Pro_avatar}}"
                                                                                                                                alt="{{$p->Pro_name}}"
                                                                                                                                class="item_thumb"
                                                                                                                                style="width: 141px; height: 150px;">
                                                                                                                        </a>
                                                                                                                        <div
                                                                                                                            class="product-action clearfix hidden-xs">
                                                                                                                            <form
                                                                                                                                action="javascript:void(0);"
                                                                                                                                class="variants form-nut-grid">
                                                                                                                                <div
                                                                                                                                    class="group_action">
                                                                                                                                    <a
                                                                                                                                        title="Xem chi tiết"
                                                                                                                                        href="{{route('product.detail', $p->id)}}"
                                                                                                                                        class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md item_link"><i
                                                                                                                                            class="fas fa-hotdog"></i></a>
                                                                                                                                    <button
                                                                                                                                        class="btn-buy btn-cart btn btn-circle left-to item_add"
                                                                                                                                        title="Thêm vào giỏ">
                                                                                                                                        <i
                                                                                                                                            class="fas fa-shopping-basket"></i>
                                                                                                                                    </button>
                                                                                                                                </div>
                                                                                                                            </form>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="product-info a-center">
                                                                                                                        <h3
                                                                                                                            class="product-name">
                                                                                                                            <a
                                                                                                                                href="{{route('product.detail', $p->id)}}"
                                                                                                                                title="{{$p->Pro_name}}"
                                                                                                                                class="item_name">{{$p->Pro_name}}
                                                                                                                                /</a>
                                                                                                                        </h3>
                                                                                                                        <div
                                                                                                                            class="product-hideoff">
                                                                                                                            <div
                                                                                                                                class="product-hide">
                                                                                                                                <div
                                                                                                                                    class="price-box clearfix">
                                                                                                                                    <div
                                                                                                                                        class="special-price"><span
                                                                                                                                            class="price product-price item_price">{{ number_format(floatval($p->Pro_price), 0, ',', '.') . "đ" }}</span>
                                                                                                                                    </div>
                                                                                                                                    <br/>
                                                                                                                                    <div class="old-price">
                                                                                                                                        <span
                                                                                                                                            class="price product-price-old">
                                                                                                                                            @if($p->Pro_sale != 0)
                                                                                                                                                {{ number_format(ceil(floatval($p->Pro_price) / ((100 - $p->Pro_sale) / 100)), 0, ',', '.') . "đ" }}
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-footer">
                                                </div>
                                            </div>
                                        </div>

                                    </article>
                                </div>
                                <div class="post-feeds">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@stop
