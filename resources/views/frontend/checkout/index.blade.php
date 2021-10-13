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
                                                                                    <a href="../index.html"
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
Checkout</span></a></strong>
                                                                                    <meta content="3"
                                                                                          itemprop="position">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <p class="title_page margin-bottom-20">
                                                                Checkout
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-body">
                                                    <div class="col-xs-12">
                                                        <form
                                                            action="https://submit.jotform.com/submit/202974296224056/"
                                                            class="blockform" id="form_dathang" method="POST"
                                                            onsubmit="return emptycart()" style="display: block;"
                                                            target="hidden_iframe" autocomplete="off">
                                                            <div class="row">
                                                                <label style="padding-left: 15px;">Thông tin giao hàng</label>
                                                                <div class="col-sm-6">
                                                                    <input name="q3_tenKhach" placeholder="Tên của bạn"
                                                                           required="required" type="text">
                                                                </div>
                                                                <div class="col-sm-6">
                                                                    <input name="q4_dinThoai" placeholder="Điện thoại"
                                                                           required="required" type="text">
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <input name="q5_diaChi"
                                                                           placeholder="Địa chỉ nhận hàng"
                                                                           required="required" type="text">
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <input name="q6_ghiChu" placeholder="Ghi chú"
                                                                           required="required" type="text">
                                                                </div>
                                                                <label style="padding-left: 15px;">Thông tin đơn hàng</label>
                                                                <div class="col-sm-12">
                                                                    <textarea id="order-procducts-hoatran"
                                                                              name="q7_donHang" readonly="true"
                                                                              rows="6" style="margin-bottom: 15px;"></textarea>
                                                                </div>
                                                                <div class="col-sm-12">
                                                                    <a class="previous-link" href={{url('gio-hang')}}>Quay về giỏ
                                                                        hàng</a>
                                                                    <input style="float: right;" class="btn-primary btn-checkout"
                                                                           name="submit" type="submit" value="Đặt hàng">
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div class="hidden-message alert-box success"
                                                             style="display: none;">
                                                            Đặt hàng thành công, nhân viên sẽ gọi cho bạn để xác nhận
                                                            đơn hàng.
                                                        </div>
                                                        <iframe id="hidden_iframe" name="hidden_iframe"
                                                                onload="if(submitted){}"
                                                                style="display: none;"></iframe>
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
