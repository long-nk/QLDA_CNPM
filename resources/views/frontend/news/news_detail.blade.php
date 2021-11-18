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

                                                <li>
                                                    <a href="/tin-tuc"><span>Tin tức</span></a>
                                                    <span class="mr_lr">&nbsp;/&nbsp;</span>
                                                </li>
                                                <li><strong><span>{{$news->A_Name}}</span></strong>
                                                </li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </div>
                    </div>
                </div>
                <div class="section_base">
                    <div class="padding article-wraper" itemscope="" itemtype="https://schema.org/Article">
                        <meta itemprop="description" content="">
                        <div class="row">
                            <section class="right-content col-md-12 col-sm-12 col-xs-12">
                                <div class="article-main content_all">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <div class="article-details margin-bottom-50">
                                                <div class="article-image">

                                                    <span>
                                                        <picture>
                                                            <source media="(max-width: 480px)"
                                                                    srcset="{{url('/')}}/{{$news->A_Avatar}}">
                                                            <source media="(min-width: 481px) and (max-width: 767px)"
                                                                    srcset="{{url('/')}}/{{$news->A_Avatar}}">
                                                            <source media="(min-width: 768px) and (max-width: 1023px)"
                                                                    srcset="{{url('/')}}/{{$news->A_Avatar}}">
                                                            <source media="(min-width: 1024px) and (max-width: 1199px)"
                                                                    srcset="{{url('/')}}/{{$news->A_Avatar}}">
                                                            <source media="(min-width: 1200px)"
                                                                    srcset="{{url('/')}}/{{$news->A_Avatar}}">
                                                        </picture>
                                                    </span>

                                                </div>
                                                <div class="article-content">
                                                    <div class="rte" style="text-align: -webkit-match-parent;">
                                                        {!! $news->A_Content !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="tag-share">
                                                <div class="row">

                                                    <div class="col-xs-12 col-sm-6 tag_article">
                                                        <span class="icon_tag"><i class="fas fa-tags"></i></span>

                                                        <a href="{{route('news')}}">Tin tức</a>

                                                    </div>


                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="social-sharing f-right">


                                                            <div class="social-media"
                                                                 data-permalink="https://template-nula-cosmetic.mysapo.net/hay-nam-vung-nhung-bi-kip-nay-de-tranh-chon-sai-my-pham">
                                                                <label style="display: inline-block;">Chia sẻ: </label>

                                                                <a target="_blank"
                                                                   href="//www.facebook.com/sharer.php?u=https://template-nula-cosmetic.mysapo.net/hay-nam-vung-nhung-bi-kip-nay-de-tranh-chon-sai-my-pham"
                                                                   class="share-facebook" title="Chia sẻ lên Facebook">
                                                                    <i class="fab fa-facebook-f"></i>
                                                                </a>


                                                                <a target="_blank"
                                                                   href="//twitter.com/share?text=Hãynắmvữngnhữngbíkípnàyđểtránhchọnsaimỹphẩm&amp;url=https://template-nula-cosmetic.mysapo.net/hay-nam-vung-nhung-bi-kip-nay-de-tranh-chon-sai-my-pham"
                                                                   class="share-twitter" title="Chia sẻ lên Twitter">
                                                                    <i class="fab fa-twitter"></i>
                                                                </a>


                                                                <a target="_blank"
                                                                   href="//plus.google.com/share?url=https://template-nula-cosmetic.mysapo.net/hay-nam-vung-nhung-bi-kip-nay-de-tranh-chon-sai-my-pham"
                                                                   class="share-google" title="+1">
                                                                    <i class="fab fa-google-plus-g"></i>
                                                                </a>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- BÌNH LUẬN TIN TỨC -->

                                        <!-- END BÌNH LUẬN TIN TỨC -->
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>


@stop
