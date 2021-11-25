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
                <div class="hoatran-checkout-wrap">
                    <div class="simpleCart_items">
                        <div>
                            @php $total = 0 @endphp
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)
                                    @php $total += floatval($details['price']) * ($details['quantity']) @endphp
                                    <div class="itemRow row-0 odd"
                                         id="cartItem_Order #1">
                                        <div class="item-thumb"><img
                                                src="{{$details['image']}}" style="height: 110px;">
                                        </div>
                                        <div class="item-name">{{ $details['name'] }}
                                        </div>
                                        <div class="item-price">{{number_format(floatval($details['price']), 0, ',', '.') . "đ"}}</div>
                                        <div class="item-decrement item_sub_checkout" data-id="{{$id}}" data-price="{{$details['price']}}">
                                            <a href="#" class="simpleCart_decrement">
                                                <i class="fa fa-minus-square"></i>
                                            </a>
                                        </div>
                                        <div class="item-quantity item_number_{{$id}}">{{$details['quantity']}}</div>
                                        <div class="item-increment item_plus_number_cart_checkout" data-id="{{$id}}"
                                             data-price="{{$details['price']}}">
                                            <a href="#" class="simpleCart_increment">
                                                <i class="fa fa-plus-square"></i>
                                            </a>
                                        </div>
                                        <div
                                            class="item-total item_total_{{$id}}">{{number_format(floatval($details['price'] * $details['quantity']), 0, ',', '.') . "đ"}}</div>
                                        <div class="item-remove item-remove-from-checkout" data-id="{{$id}}">
                                            <a class="remove-from-cart remove_product" href="#">
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
                        <div class="box-style fee">
                            <p class="list-info-price">
                                <span>Tạm tính: </span><strong
                                    class="totals_price price _text-right text_color_right1 simpleCart_total">{{number_format(floatval($total), 0, ',', '.') . "đ"}}</strong>
                            </p>
                            <p class="list-info-price">
                                <span>Phí vận chuyển: </span><strong
                                    class="totals_price price _text-right text_color_right1">Thanh
                                    toán lúc nhận
                                    hàng</strong>
                            </p>
                        </div>
                        <div class="box-style fee">
                            <div class="total2 clearfix">
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
                            type="submit" style="margin-top: 30px;">Đặt hàng
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
