@extends('frontend.template.layout')

@section('content')

    <div class="col-lg-10 col-lg-fix10">
        <div class="block_right">
            <div class="wrapmain wrap_body_calc">
                <div class="section breadcrumb_background margin-bottom-30 margin-left-15 margin-top-10">
                    <div class="title_full">
                        <div class="a-left">
                            <section class="bread-crumb">
                                <span class="crumb-border"></span>
                                <div class="container3">
                                    <div class="row">
                                        <div class="col-xs-12 a-center">
                                            <ul class="breadcrumb">
                                                <li class="home">
                                                    <a href="/"><span>Trang chủ</span></a>
                                                    <span class="mr_lr">&nbsp;/&nbsp;</span>
                                                </li>
                                                <li><strong><span>Tin tức</span></strong></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h1 class="title_page">Tin tức</h1>

                        </div>
                    </div>
                </div>
                <div itemscope="" itemtype="https://schema.org/Blog">
                    <meta itemprop="name" content="Tin tức">
                    <meta itemprop="description"
                          content="Nula Cosmetic là sự lựa chọn phù hợp với các website mỹ phẩm - làm đẹp, thời trang, đồ thủ công mỹ nghệ - quà tặng">
                    <section class="blog-content">

                        <section class="list-blogs blog-main">
                            <div class="rows section_base">


                                <div class="padding">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="blog_width_wrap blogmain ">
                                                <div class="wrap_owl_blog owl-carousel not-nav2 owl-loaded owl-drag"
                                                     data-loop="false" data-lg-items="2" data-md-items="2"
                                                     data-sm-items="2"
                                                     data-xs-items="1" data-margin="30" data-dot="false"
                                                     data-nav="false">
                                                    @foreach($news as $n)
                                                        <div class="owl-stage-outer">
                                                            <div class="owl-item active"
                                                                 style="width: 430px; height: 550px; margin-right: 30px;">
                                                                <div class="blocg_item">
                                                                    <div class="blogwp"
                                                                         style="width: 400px; height: 350px;"><a
                                                                            class="image-blog"
                                                                            href="{{route('news.detail', $n->id)}}"
                                                                            title="{{$n->A_Name}}">
                                                                            <img
                                                                                src="{{url('/')}}/{{$n->A_Avatar}}"
                                                                                alt="{{$n->A_Name}}"
                                                                                style="width: 365.5px; height: 213.2px;">
                                                                        </a>
                                                                        <div class="content_blog a-center"><h3><a
                                                                                    href="{{route('news.detail', $n->id)}}"
                                                                                    title="{{$n->A_Name}}">{{$n->A_Name}}</a>
                                                                            </h3>
                                                                            <p class="justify">{!! $n->A_Description !!}</p>
                                                                            <a class="xemthem"
                                                                               href="{{route('news.detail', $n->id)}}"
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
                                <div class="padding">
                                    <div class="row">
                                        <div class="wrap_list_vertical">
                                            @foreach($blogs as $blog)
                                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                                    <div class="blog_index">
                                                        <div class="myblog">
                                                            <div class="image-blog-left a-center">

                                                                <a class="img_bot"
                                                                   href="{{route('news.detail', $blog->id)}}">
                                                                    <img class="lazyload loaded"
                                                                         src="{{url('/')}}/{{$blog->A_Avatar}}"
                                                                         data-src="{{$blog->A_Avatar}}"
                                                                         title="{{$blog->A_Name}}"
                                                                         alt="{{$blog->A_Name}}"
                                                                         data-was-processed="true">
                                                                </a>

                                                            </div>
                                                            <div class="content_blog">
                                                                <div class="content_right">
                                                                    <h3>
                                                                        <a href="{{route('news.detail', $blog->id)}}"
                                                                           title="{{$blog->A_Name}}">{{$blog->A_Name}}</a>
                                                                    </h3>
                                                                </div>
                                                                <div class="summary_item_blog">
                                                                    <p> {!! $blog->A_Description !!}</p>
                                                                </div>
                                                                <div class="xemtiep_blog">
                                                                    <a href="{{route('news.detail', $blog->id)}}}"
                                                                       class="btn_viewall"><span>Xem thêm</span></a>
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
                        </section>

                    </section>
                </div>
                <div class="ab-module-article-mostview"></div>
            </div>

@stop
