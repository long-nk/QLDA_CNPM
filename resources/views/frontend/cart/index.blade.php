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
                                                <script type="application/ld+json">{
                                                      "@context": "http://schema.org",
                                                      "@type": "BlogPosting",
                                                      "mainEntityOfPage": {
                                                        "@type": "WebPage",
                                                        "@id": "https://template-nula-cosmcleticok.blogspot.com/p/cart.html"
                                                      },
                                                      "headline": "Cart","description": "Số lượng sản phẩm trong Giỏ hàng                                                          Thành tiền                                    ...","datePublished": "2020-09-10T20:16:00-07:00",
                                                      "dateModified": "2021-05-10T00:06:42-07:00","image": {
                                                        "@type": "ImageObject","url": "https://lh3.googleusercontent.com/ULB6iBuCeTVvSjjjU1A-O8e9ZpVba6uvyhtiWRti_rBAs9yMYOFBujxriJRZ-A=w1200",
                                                        "height": 348,
                                                        "width": 1200},"publisher": {
                                                        "@type": "Organization",
                                                        "name": "Blogger",
                                                        "logo": {
                                                          "@type": "ImageObject",
                                                          "url": "https://lh3.googleusercontent.com/ULB6iBuCeTVvSjjjU1A-O8e9ZpVba6uvyhtiWRti_rBAs9yMYOFBujxriJRZ-A=h60",
                                                          "width": 206,
                                                          "height": 60
                                                        }
                                                      },"author": {
                                                        "@type": "Person",
                                                        "name": "Hòa Trần"
                                                      }
                                                    }
                                                </script>
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
                                                                                    <a href="https://template-nula-cosmcleticok.blogspot.com/"
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
                                                                                    <strong><a itemprop="item"><span
                                                                                                itemprop="name">
Cart</span></a></strong>
                                                                                    <meta content="3"
                                                                                          itemprop="position">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <p class="title_page margin-bottom-20">
                                                                Cart
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-body">
                                                    <div class="col-xs-12">
                                                        <div class="hoatran-checkout-wrap cart margin-bottom-30">
                                                            <h4 class="subtitle-head relative"> Số lượng sản phẩm trong
                                                                Giỏ hàng <span class="simpleCart_quantity">4</span>
                                                            </h4>

                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="total-price clearfix margin-bottom-10">
                                                                        <div>
                                                                            <div class="clearfix">
                                                                                <span class="f-left">Thành tiền</span>
                                                                                <span class="f-right"
                                                                                      style="color: #ff5a00;"><b
                                                                                        class="simpleCart_total">3,060,000₫</b></span>
                                                                            </div>
                                                                            <div class="clearfix">
                                                                                <span
                                                                                    class="f-left">Phí vận chuyển</span>
                                                                                <span class="f-right"><b>Tính lúc thanh toán</b></span>
                                                                            </div>
                                                                            <div class="clearfix">
                                                                                <span class="f-left">Tổng tiền</span>
                                                                                <span class="f-right"><b
                                                                                        class="simpleCart_grandTotal">3,060,000₫</b></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <div class="no-border">
                                                                        <button class="btn btn-full margin-bottom-10"
                                                                                onclick="window.location.href='{{route('product.index')}}'"
                                                                                title="Tiếp tục mua sắm" type="button">
                                                                            Tiếp tục mua sắm
                                                                        </button>
                                                                        <button class="btn btn-primary btn-full"
                                                                                onclick="window.location.href='{{route('checkout.index')}}'"
                                                                                title="Tiến hành thanh toán"
                                                                                type="button">Tiến hành thanh toán
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-footer">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <section class="comments" data-num-comments="0" id="comments">
                                                <a name="comments"></a>
                                            </section>
                                        </div>
                                    </article>
                                </div>
                                <div class="blog-feeds">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

@stop
