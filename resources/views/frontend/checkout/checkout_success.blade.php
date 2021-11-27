@extends('frontend.template.layout')

@section('content')

    <div class="col-lg-10 col-lg-fix10 checkout_info">
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
                                                                Đặt hàng thành công!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="post-body">
                                                    <div class="col-xs-12">
                                                        <form action="#"
                                                              class="fieldset" id="order" target="hidden_iframe">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                                                                    <table class="table">
                                                                        <thead>
                                                                        <tr>
                                                                            <th scope="col" colspan="2">
                                                                                <span style="font-weight: bold; font-size: 18px;">Thông tin đơn hàng</span>
                                                                            </th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <th scope="row" style="text-align: left; font-weight: bold;" >Họ tên khách hàng</th>
                                                                            <td style="text-align: left;">{{$trans->Tst_name}}</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row" style="text-align: left; font-weight: bold;"">Số điện thoại</th>
                                                                            <td style="text-align: left;">{{$trans->Tst_phone}}</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row" style="text-align: left; font-weight: bold;"">Email</th>
                                                                            <td style="text-align: left;" disabled>{{$trans->Tst_email}}</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row" style="text-align: left; font-weight: bold;"">Địa chỉ giao hàng</th>
                                                                            <td style="text-align: left;">{{$trans->Tst_address}}</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row" style="text-align: left; font-weight: bold;"">Phương thức thanh toán</th>
                                                                            <td style="text-align: left;">{{$trans->Tst_payment}}</td>

                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row" style="text-align: left; font-weight: bold;"">Ghi chú</th>
                                                                            <td style="text-align: left;">{{$trans->Tst_note}}</td>

                                                                        </tr>
                                                                        </tbody>
                                                                    </table>
                                                                    <div class="field">
                                                                            <button type="button" class="btn">
                                                                                <a href="{{route('product.index')}}"> Tiếp tục mua sắm</a>
                                                                            </button>
                                                                            <button type="button" class="btn" data-toggle="modal" data-target="#huydon">
                                                                                <a href="#">Hủy đơn hàng</a>
                                                                            </button>

                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="col-xl-5 col-lg-5 col-md-5 col-12 cart_list_checkout">
                                                                    <div class="row"
                                                                         style="position: sticky; top: 5px;">
                                                                        <div class="shopping-cart">
                                                                            <div class="shopping-cart-table">
                                                                                <div class="col-md-12">
                                                                                    @php $number = 0 @endphp
                                                                                    @if($cart)
                                                                                        @php $number = count($cart) @endphp
                                                                                    @endif
                                                                                    <p class="lbl-shopping-cart lbl-shopping-cart-gio-hang">
                                                                                        Đơn hàng <span>(<span
                                                                                                class="count_item_pr simpleCart_quantity">{{$number}}</span> sản phẩm)</span>
                                                                                    </p>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="hoatran-checkout-wrap">
                                                                                        <div class="simpleCart_items">
                                                                                            <div>
                                                                                                @php $total = 0 @endphp
                                                                                                @if($cart)
                                                                                                    @foreach($cart as $details)
                                                                                                        @php $total += floatval($details->Od_Sale) * ($details->Od_qty) @endphp
                                                                                                        <div
                                                                                                            class="itemRow row-0 odd"
                                                                                                            id="cartItem_Order #1">
                                                                                                            <div
                                                                                                                class="item-thumb">
                                                                                                                <img src="{{url('/')}}/{{$details->Pro_avatar}}"
                                                                                                                    style="height: 110px;">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="item-name">{{ $details->Pro_name }}
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="item-price">
                                                                                                                <span
                                                                                                                    class="text-label">Giá bán:</span>
                                                                                                                <span
                                                                                                                    class="text-label">{{number_format(floatval($details->Od_Sale), 0, ',', '.') . "đ"}}</span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="item-quantity">
                                                                                                                <span
                                                                                                                    class="text-label">Số lượng:</span>
                                                                                                                <span
                                                                                                                    class="text-label">{{$details->Od_qty}}</span>
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="item-total">
                                                                                                                <span
                                                                                                                    class="text-label">Tổng:</span>
                                                                                                                <span
                                                                                                                    class="text-label">{{number_format(floatval($details->Od_Sale * $details->Od_qty), 0, ',', '.') . "đ"}}</span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    @endforeach
                                                                                                @endif

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="col-md-12 cart-collaterals cart_submit">
                                                                                    <div id="right-affix">
                                                                                        <div class="each-row">
                                                                                            <div class="box-style fee">
                                                                                                <p class="list-info-price">
                                                                                                    <span>Phí vận chuyển: </span><strong
                                                                                                        class="totals_price price _text-right text_color_right1">Thanh
                                                                                                        toán lúc nhận
                                                                                                        hàng</strong>
                                                                                                </p>
                                                                                            </div>
                                                                                            <div class="box-style fee">
                                                                                                <div
                                                                                                    class="total2 clearfix">
                                                                                                    <div class="amount">
                                                                                                        <span
                                                                                                            class="text-label">Tổng hóa đơn: </span>
                                                                                                        <span
                                                                                                            class="text-label">
                                                                                                            <strong
                                                                                                                class="totals_price simpleCart_grandTotal">
                                                                                                                {{number_format(floatval($total), 0, ',', '.') . "đ"}}
                                                                                                            </strong>
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
                                                            </div>
                                                        </form>
                                                        <iframe class="myifram d-none hidden"
                                                                name="hidden_iframe"></iframe>
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
        </div>
        <!-- Modal -->
        <div class="modal fade" id="huydon" tabindex="-1" role="dialog" aria-labelledby="huydon" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="huydon">Lí do hủy đơn</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <textarea name="reason" id="reason_destroy" cols="5" rows="5" style="width: 100%;" value="1"></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-secondary destroy_checkout" data-id="{{$trans->id}}">
                                Lưu
                            </button>
                    </div>
                </div>
            </div>
        </div>

@stop

