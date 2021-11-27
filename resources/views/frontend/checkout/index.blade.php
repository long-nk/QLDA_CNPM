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
                                                                                    <a href="/" itemprop="item">
                                                                                        <span
                                                                                            itemprop="name"> Trang chủ</span></a>
                                                                                    <span class="mr_lr"> / </span>
                                                                                    <meta content="1"
                                                                                          itemprop="position">
                                                                                </li>
                                                                                <li itemprop="itemListElement"
                                                                                    itemscope=""
                                                                                    itemtype="http://schema.org/ListItem">
                                                                                    <strong><a itemprop="item">
                                                                                            <span itemprop="name"> Đặt hàng</span></a></strong>
                                                                                    <meta content="3"
                                                                                          itemprop="position">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <p class="title_page margin-bottom-20">
                                                                Đặt hàng
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-body cart_list_checkout">
                                                    @include('frontend.checkout.cart_list')
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
