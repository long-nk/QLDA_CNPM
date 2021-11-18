<div class="modal fade in" id="popupCartModal" role="dialog" style="display: block;">
    <div class='popup_overlay'></div>
    <div class='modal-dialog'>
        <div class='modal-content'>
            <button aria-label='Close' class='close hidden-xs'
                    style='position: relative; z-index: 9;' type='button'><span aria-hidden='false'><i
                        class='fas fa-times'></i></span></button>
            <div class='row row-noGutter'>
                <div class='modal-left col-sm-6'>
                    <h3 class='title'><i class='fas fa-check'></i> Bạn vừa thêm sản phẩm này vào giỏ hàng</h3>
                    <div class='modal-body hoatran-checkout-post'>
                        <div class="simpleCart_items cart-item">
                            <div>
                                @php $number = 0; $total = 0; @endphp
                                @if(session('cart'))
                                    @php $number = count(session('cart')) @endphp
                                    @foreach(session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                        <div class="itemRow row-0 odd" id="cartItem_Order #1"  >
                                            <div class="item-thumb" style="height: 100px; width: 70px;"><img
                                                    src="{{url('/')}}/{{$details['image']}}">
                                            </div>
                                            <div class="item-name">{{$details['name']}}</div>
                                            <div
                                                class="item-price">{{number_format(floatval($details['price']), 0, ',', '.') . "đ"}}</div>
                                            <div class="item-decrement item-sub" data-id="{{$id}}" data-price="{{$details['price']}}">
                                                <a href="#" class="simpleCart_decrement">
                                                    <i class="fa fa-minus-square"></i>
                                                </a>
                                            </div>
                                            <div class="item-quantity item_number_{{$id}}">{{$details['quantity']}}</div>
                                            <div class="item-increment item_plus_number" data-id="{{$id}}" data-price="{{$details['price']}}">
                                                <a href="#" class="simpleCart_increment">
                                                    <i class="fa fa-plus-square"></i>
                                                </a>
                                            </div>
                                            <div class="item-total item_total_{{$id}}">{{number_format(floatval($details['price'] * $details['quantity']), 0, ',', '.') . "đ"}}</div>
                                            <div class="item-remove item-remove-from-cart" data-id="{{$id}}">
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
                <div class='modal-right col-sm-6'>
                    <h3 class='title'>
                        <a href='{{route('cart.index')}}'>
                            <i class='fas fa-shopping-basket'></i> Giỏ hàng của bạn có
                            <span>
                                <span class='cart-popup-count simpleCart_quantity'>{{$number}}</span> sản phẩm
                            </span>
                        </a>
                    </h3>
                    <div class='total_price'>
                        <div class='total_price_h'>Tổng tiền</div>
                        <div class='price simpleCart_total'>{{number_format(floatval($total), 0, ',', '.') . "đ"}}</div>
                    </div>
                    <a class='btn btn-primary btn-pop' href='{{route('cart.index')}}'><i
                            class='fas fa-shopping-basket'></i>Tới giỏ
                        hàng</a>
                </div>
            </div>
        </div>
    </div>
</div>

