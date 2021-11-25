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
                                                <div class="breadcrumb_background margin-bottom-20 margin-left-15 margin-top-10">
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
                                                                                            itemprop="name">Trang chủ</span></a>
                                                                                    <span class="mr_lr"> / </span>
                                                                                    <meta content="1"
                                                                                          itemprop="position">
                                                                                </li>
                                                                                <li itemprop="itemListElement"
                                                                                    itemscope=""
                                                                                    itemtype="http://schema.org/ListItem">
                                                                                    <strong><a itemprop="item"><span itemprop="name"> Liên hệ</span></a></strong>
                                                                                    <meta content="3"
                                                                                          itemprop="position">
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                            <p class="title_page margin-bottom-20">
                                                                Liên hệ
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-body">
                                                    <div class="col-xs-12">
                                                        <div class="page_contact section_base">
                                                            <div class="padding">
                                                                <div class="row">
                                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                                                        <div class="section right_contact">
                                                                            <div id="pagelogin">
                                                                                @if($submitted)
                                                                                    <form accept-charset="utf-8"
                                                                                          action="{{route('contact.store')}}"
                                                                                          id="contact" method="POST">
                                                                                        {{csrf_field()}}
                                                                                        <div class="form-signup clearfix">
                                                                                            <div class="row group_contact">
                                                                                                <fieldset
                                                                                                    class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <label>Họ và tên
                                                                                                        <em>*</em></label>
                                                                                                    <input placeholder=""
                                                                                                           type="text"
                                                                                                           class="form-control  form-control-lg"
                                                                                                           required=""
                                                                                                           value=""
                                                                                                           name="name">
                                                                                                </fieldset>

                                                                                                <fieldset
                                                                                                    class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <label>Email <em>*</em></label>
                                                                                                    <input placeholder=""
                                                                                                           type="email"
                                                                                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"
                                                                                                           required=""
                                                                                                           id="email1"
                                                                                                           class="form-control form-control-lg"
                                                                                                           value=""
                                                                                                           name="email">
                                                                                                </fieldset>

                                                                                                <fieldset
                                                                                                    class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <label>Nội dung
                                                                                                        <em>*</em></label>
                                                                                                    <textarea placeholder=""
                                                                                                              name="content"
                                                                                                              id="comment"
                                                                                                              class="form-control content-area form-control-lg"
                                                                                                              rows="5"
                                                                                                              required=""></textarea>
                                                                                                </fieldset>
                                                                                                <div
                                                                                                    class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                                                    <button type="submit"
                                                                                                            class="btn btn-primary">
                                                                                                        Gửi ngay
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                @else
                                                                                    <div class="success">Thông tin đã
                                                                                        được gửi đi
                                                                                    </div>
{{--                                                                                    <iframe id="hidden_iframe"--}}
{{--                                                                                            name="hidden_iframe"--}}
{{--                                                                                            onload="if(submitted){}"--}}
{{--                                                                                            style="display: none;"></iframe>--}}
                                                                                    <style>
                                                                                        .success {
                                                                                            padding: 14px 23px;
                                                                                            margin-bottom: 10px;
                                                                                            background: #f45a53;
                                                                                            border: 1px solid #f45a53;
                                                                                            font-size: 16px;
                                                                                            font-family: Arial, Helvetica, Sans Serif;
                                                                                            text-align: center;
                                                                                            color: #fff;
                                                                                        }
                                                                                    </style>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                                        <div class="wrapcontact">
                                                                            <div class="iFrameMap">
                                                                                <div id="contact_map" class="map">
                                                                                    <iframe
                                                                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.904611732553!2d105.81388241542348!3d21.03650239288885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab1946cc7e23%3A0x87ab3917166a0cd5!2zQ8O0bmcgdHkgY-G7lSBwaOG6p24gY8O0bmcgbmdo4buHIFNBUE8!5e0!3m2!1svi!2s!4v1555900531747!5m2!1svi!2s"
                                                                                        width="100%" style="border:0"
                                                                                        allowfullscreen=""></iframe>
                                                                                </div>
                                                                            </div>
                                                                        </div>
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

@endsection
