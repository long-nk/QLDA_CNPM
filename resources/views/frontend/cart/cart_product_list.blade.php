<div class="hoatran-checkout-wrap cart margin-bottom-30">
    @php $number = 0 @endphp
    @if(session('cart'))
        @foreach(session('cart') as $id => $details)
            @php $number = count(session('cart')) @endphp
        @endforeach
    @endif
    @if($number != 0)
        <h4 class="subtitle-head relative"> Số lượng sản phẩm trong
            Giỏ hàng <span class="simpleCart_quantity">{{$number}}</span>
        </h4>

        <div class="simpleCart_items cart-item clearfix">
            <div>
                @php $total = 0 @endphp
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                        @php $total += floatval($details['price']) * ($details['quantity']) @endphp
                        <div class="itemRow row-0 odd"
                             id="cartItem_Order #1">
                            <div class="item-thumb"><img
                                    src="{{$details['image']}}">
                            </div>
                            <div class="item-name">{{ $details['name'] }}
                            </div>
                            <div class="item-price">{{number_format(floatval($details['price']), 0, ',', '.') . "đ"}}</div>
                            <div class="item-decrement item_sub" data-id="{{$id}}" data-price="{{$details['price']}}">
                                <a href="#" class="simpleCart_decrement">
                                    <i class="fa fa-minus-square"></i>
                                </a>
                            </div>
                            <div class="item-quantity item_number_{{$id}}">{{$details['quantity']}}</div>
                            <div class="item-increment item_plus_number_cart" data-id="{{$id}}"
                                 data-price="{{$details['price']}}">
                                <a href="#" class="simpleCart_increment">
                                    <i class="fa fa-plus-square"></i>
                                </a>
                            </div>
                            <div
                                class="item-total item_total_{{$id}}">{{number_format(floatval($details['price'] * $details['quantity']), 0, ',', '.') . "đ"}}</div>
                            <div class="item-remove item-remove-from-cart-list" data-id="{{$id}}">
                                <a class="remove-from-cart remove_product" href="#">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="total-price clearfix margin-bottom-10">
                    <div>
                        <div class="clearfix">
                            <span class="f-left">Thành tiền</span>
                            <span class="f-right" style="color: #ff5a00;"><b class="simpleCart_total">{{number_format(floatval($total), 0, ',', '.') . "đ"}}</b></span>
                        </div>
                        <div class="clearfix">
                            <span class="f-left">Phí vận chuyển</span>
                            <span class="f-right"><b>Tính lúc thanh toán</b></span>
                        </div>
                        <div class="clearfix">
                            <span class="f-left">Tổng tiền</span>
                            <span class="f-right"><b class="simpleCart_grandTotal">{{number_format(floatval($total), 0, ',', '.') . "đ"}}</b></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="no-border">
                    @if (Auth::check())
                        <button class="btn btn-full margin-bottom-10"
                                onclick="window.location.href='{{route('product.index')}}'"
                                title="Tiếp tục mua sắm" type="button">
                            Tiếp tục mua sắm
                        </button>
                        <button class="btn btn-primary btn-full" onclick="window.location.href='{{route('checkout.index')}}'"
                                title="Tiến hành thanh toán"
                                type="button">Tiến hành thanh toán
                        </button>
                    @elseif(!Auth::check())
                        <button class="btn btn-primary btn-full" onclick="window.location.href='{{route('customer.login')}}'"
                                title="Đăng nhập để thanh toán"
                                type="button">Đăng nhập để thanh toán
                        </button>
                    @endif

                </div>
            </div>
        </div>
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
