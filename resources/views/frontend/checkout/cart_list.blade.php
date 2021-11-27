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
                                autocapitalize="off"
                                class="field-input"
                                id="billing_address_id"
                                name="user_id"
                                size="30" type="text"
                                value="{{ Auth::user()->id }}">
                        </div>
                    </div>
                    <div class="field">
                        <div class="field-input-wrapper"><input
                                autocapitalize="off"
                                class="field-input"
                                id="checkout_full_name"
                                name="fullname"
                                placeholder="Họ và tên" required=""
                                size="30" type="text"
                                value="{{ Auth::user()->name }}">
                        </div>
                    </div>
                    <div class="field field-half">
                        <div class="field-input-wrapper"><input
                                autocapitalize="off"
                                class="field-input"
                                id="checkout_email"
                                name="email" required=""
                                size="30" type="email"
                                value="{{ Auth::user()->email }}"
                                placeholder="Email"></div>
                    </div>
                    <div class="field field-half">
                        <div class="field-input-wrapper"><input
                                autocapitalize="off"
                                class="field-input"
                                id="checkout_phone"
                                maxlength="15" name="phone"
                                style="border-radius: 5px;"
                                placeholder="Điện thoại" required=""
                                size="30" type="tel"
                                value="{{ Auth::user()->phone }}">
                        </div>
                    </div>

                    <div class="field">
                        <div class="field-input-wrapper"><input
                                autocapitalize="off"
                                class="field-input"
                                id="checkout_address"
                                name="address_ship"
                                placeholder="Số nhà / đường / xã / huyện / thành phố"
                                required="" size="30" type="text"
                                value=""></div>
                    </div>
                    <div class="field">
                        <div class="field-input-wrapper"><select
                                class="field-input"
                                style="height: 45px; border-radius: 5px; margin-bottom: 20px;"
                                name="payment_type" required=""
                                id="checkout_payment">
                                <option value="">Chọn phương thức
                                    thanh
                                    toán
                                </option>
                                <option
                                    value="Thanh toán khi nhận hàng">
                                    Thanh toán khi nhận hàng
                                </option>
                                <option value="Chuyển khoản trước">
                                    Chuyển khoản trước
                                </option>
                            </select></div>
                    </div>
                    <div class="field">
                        <div class="field-input-wrapper"><textarea
                                autocapitalize="off"
                                class="field-input"
                                name="note" id="checkout_note"
                                placeholder="Ghi chú về đơn hàng"
                                rows="2"></textarea></div>
                    </div>
                    <div class="field" style="display: none;">
                        @php $total_money = 0 @endphp
                        @if(session('cart'))
                            @foreach(session('cart') as $id => $item)
                                @php $total_money += floatval($item['price']) * ($item['quantity']) @endphp
                            @endforeach
                        @endif
                        <div class="field-input-wrapper"><input
                                autocapitalize="off"
                                class="field-input"
                                id="billing_address_address1"
                                name="total_money"
                                value="{{$total_money}}"></div>
                    </div>
                    <div class="field">
                        <div class="field-input-wrapper"><a
                                href="{{route('cart.index')}}"><i
                                    aria-hidden="true"
                                    class="fa fa-angle-left"></i>
                                Quay lại giỏ hàng</a></div>
                    </div>
                    <div class="field hidden">
                        <div class="field-input-wrapper"><textarea
                                class="field-input"
                                id="product-by-hoa-tran"
                                name="entry.406626844"
                                readonly="true"
                                rows="7"
                                style="background: rgb(247, 245, 246);"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-5 col-12 cart_list_checkout">
                    <div class="row"
                         style="position: sticky; top: 5px;">
                        <div class="shopping-cart">
                            <div class="shopping-cart-table">
                                <div class="col-md-12">
                                    @php $number = 0 @endphp
                                    @if(session('cart'))
                                        @foreach(session('cart') as $id => $details)
                                            @php $number = count(session('cart')) @endphp
                                        @endforeach
                                    @endif
                                    <p class="lbl-shopping-cart lbl-shopping-cart-gio-hang">
                                        Đơn hàng <span>(<span
                                                class="count_item_pr simpleCart_quantity">{{$number}}</span> sản phẩm)</span>
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <div
                                        class="hoatran-checkout-wrap">
                                        <div
                                            class="simpleCart_items">
                                            <div>
                                                @php $total = 0 @endphp
                                                @if(session('cart'))
                                                    @foreach(session('cart') as $id => $details)
                                                        @php $total += floatval($details['price']) * ($details['quantity']) @endphp
                                                        <div
                                                            class="itemRow row-0 odd"
                                                            id="cartItem_Order #1">
                                                            <div
                                                                class="item-thumb">
                                                                <img
                                                                    src="{{$details['image']}}"
                                                                    style="height: 110px;">
                                                            </div>
                                                            <div
                                                                class="item-name">{{ $details['name'] }}
                                                            </div>
                                                            <div
                                                                class="item-price">{{number_format(floatval($details['price']), 0, ',', '.') . "đ"}}</div>
                                                            <div
                                                                class="item-decrement item_sub_checkout"
                                                                data-id="{{$id}}"
                                                                data-price="{{$details['price']}}">
                                                                <a href="#"
                                                                   class="simpleCart_decrement">
                                                                    <i class="fa fa-minus-square"></i>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="item-quantity item_number_{{$id}}">{{$details['quantity']}}</div>
                                                            <div
                                                                class="item-increment item_plus_number_cart_checkout"
                                                                data-id="{{$id}}"
                                                                data-price="{{$details['price']}}">
                                                                <a href="#"
                                                                   class="simpleCart_increment">
                                                                    <i class="fa fa-plus-square"></i>
                                                                </a>
                                                            </div>
                                                            <div
                                                                class="item-total item_total_{{$id}}">{{number_format(floatval($details['price'] * $details['quantity']), 0, ',', '.') . "đ"}}</div>
                                                            <div
                                                                class="item-remove item-remove-from-checkout"
                                                                data-id="{{$id}}">
                                                                <a class="remove-from-cart remove_product"
                                                                   href="#">
                                                                    <i class="fa fa-times"></i>
                                                                </a>
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
                                            <div
                                                class="box-style fee">
                                                <p class="list-info-price">
                                                    <span>Tạm tính: </span><strong
                                                        class="totals_price price _text-right text_color_right1 simpleCart_total">{{number_format(floatval($total), 0, ',', '.') . "đ"}}</strong>
                                                </p>
                                                <p class="list-info-price">
                                                    <span>Phí vận chuyển: </span>
                                                    <strong class="totals_price price _text-right text_color_right1">Thanh toán lúc nhận hàng</strong>
                                                </p>
                                            </div>
                                            <div
                                                class="box-style fee">
                                                <div
                                                    class="total2 clearfix">
                                                    <div class="amount">
                                                        <span class="text-label">Thành tiền: </span>
                                                        <span class="text-label">
                                                            <strong class="totals_price simpleCart_grandTotal">
                                                                {{number_format(floatval($total), 0, ',', '.') . "đ"}}
                                                            </strong>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <button
                                                class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkout"
                                                title="Đặt hàng"
                                                type="submit"
                                                style="margin-top: 30px;">
                                                Đặt hàng
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    @else
        <div class="col-lg-6 col-md-12">
            <div class="no-border">
                <p style="font-size: 20px;">Bạn chưa có sản phẩm nào
                    trong giỏ hàng!</p>
                <button class="btn"
                        onclick="window.location.href='{{route('product.index')}}'"
                        title="Tiếp tục mua sắm" type="button">
                    Chọn sản phẩm
                </button>
            </div>
        </div>
    @endif
</div>
