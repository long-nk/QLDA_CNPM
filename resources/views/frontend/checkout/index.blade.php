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
                                                                                        <span itemprop="name"> Trang chủ</span></a>
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
                                                <div class="post-body">
                                                    <div class="col-xs-12">
                                                        @php $number = 0 @endphp
                                                        @if(session('cart'))
                                                            @foreach(session('cart') as $id => $details)
                                                                @php $number = count(session('cart')) @endphp
                                                            @endforeach
                                                        @endif
                                                        @if($number != 0)
                                                            <form action="{{ route('checkout.store') }}" method="POST"
                                                            class="fieldset" id="order">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                                                                    <div class="field">
                                                                        <div class="field-input-wrapper">
                                                                            <p>Thông tin giao hàng</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field" style="display: none;">
                                                                        <div class="field-input-wrapper"><input
                                                                                autocapitalize="off" class="field-input"
                                                                                id="billing_address_id"
                                                                                name="user_id"
                                                                                size="30" type="text" value="{{ Auth::user()->id }}"></div>
                                                                    </div>
                                                                    <div class="field">
                                                                        <div class="field-input-wrapper"><input
                                                                                autocapitalize="off" class="field-input"
                                                                                id="checkout_full_name"
                                                                                name="fullname"
                                                                                placeholder="Họ và tên" required=""
                                                                                size="30" type="text" value="{{ Auth::user()->name }}"></div>
                                                                    </div>
                                                                    <div class="field field-half">
                                                                        <div class="field-input-wrapper"><input
                                                                                autocapitalize="off" class="field-input"
                                                                                id="checkout_email"
                                                                                name="email" required=""
                                                                                size="30" type="email" value="{{ Auth::user()->email }}"
                                                                                placeholder="Email"></div>
                                                                    </div>
                                                                    <div class="field field-half">
                                                                        <div class="field-input-wrapper"><input
                                                                                autocapitalize="off" class="field-input"
                                                                                id="checkout_phone"
                                                                                maxlength="15" name="phone"
                                                                                style="border-radius: 5px;"
                                                                                placeholder="Điện thoại" required=""
                                                                                size="30" type="tel" value="{{ Auth::user()->phone }}"></div>
                                                                    </div>

                                                                    <div class="field">
                                                                        <div class="field-input-wrapper"><input
                                                                                autocapitalize="off" class="field-input"
                                                                                id="checkout_address"
                                                                                name="address_ship"
                                                                                placeholder="Số nhà / đường / xã / huyện / thành phố"
                                                                                required="" size="30" type="text"
                                                                                value=""></div>
                                                                    </div>
                                                                    <div class="field">
                                                                        <div class="field-input-wrapper"><select
                                                                                class="field-input" style="height: 45px; border-radius: 5px; margin-bottom: 20px;"
                                                                                name="payment_type" required="" id="checkout_payment">
                                                                                <option value="">Chọn phương thức thanh
                                                                                    toán
                                                                                </option>
                                                                                <option
                                                                                    value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng
                                                                                </option>
                                                                                <option value="Chuyển khoản trước">
                                                                                    Chuyển khoản trước
                                                                                </option>
                                                                            </select></div>
                                                                    </div>
                                                                    <div class="field">
                                                                        <div class="field-input-wrapper"><textarea
                                                                                autocapitalize="off" class="field-input"
                                                                                name="note" id="checkout_note"
                                                                                placeholder="Ghi chú về đơn hàng"
                                                                                rows="2"></textarea></div>
                                                                    </div>
                                                                    <div class="field" style="display: none;" >
                                                                        @php $total_money = 0 @endphp
                                                                        @if(session('cart'))
                                                                            @foreach(session('cart') as $id => $item)
                                                                                @php $total_money += floatval($item['price']) * ($item['quantity']) @endphp
                                                                            @endforeach
                                                                        @endif
                                                                        <div class="field-input-wrapper"><input
                                                                                autocapitalize="off" class="field-input"
                                                                                id="billing_address_address1"
                                                                                name="total_money"
                                                                                value="{{$total_money}}"></div>
                                                                    </div>
                                                                    <div class="field">
                                                                        <div class="field-input-wrapper"><a
                                                                                href="{{route('cart.index')}}"><i
                                                                                    aria-hidden="true"
                                                                                    class="fa fa-angle-left"></i> Quay lại giỏ hàng</a></div>
                                                                    </div>
                                                                    <div class="field hidden">
                                                                        <div class="field-input-wrapper"><textarea
                                                                                class="field-input"
                                                                                id="product-by-hoa-tran"
                                                                                name="entry.406626844" readonly="true"
                                                                                rows="7"
                                                                                style="background: rgb(247, 245, 246);"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-12 cart_list_checkout">
                                                                    @include('frontend.checkout.cart_list')
                                                                </div>
                                                            </div>
                                                        </form>
                                                        @else
                                                            <div class="col-lg-6 col-md-12">
                                                                <div class="no-border">
                                                                    <p style="font-size: 20px;">Bạn chưa có sản phẩm nào trong giỏ hàng!</p>
                                                                    <button class="btn"
                                                                            onclick="window.location.href='{{route('product.index')}}'"
                                                                            title="Tiếp tục mua sắm" type="button">
                                                                        Chọn sản phẩm
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endif
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
