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
                                                                                    <a href="https://template-nula-cosmcleticok.blogspot.com/"
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
                                                        <form action="{{ route('checkout.store') }}" method="POST"
                                                            class="fieldset" id="order" target="hidden_iframe">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-xl-7 col-lg-7 col-md-7 col-12">
                                                                    <div class="field">
                                                                        <div class="field-input-wrapper">
                                                                            <p>Thông tin giao hàng</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="field">
                                                                        <div class="field-input-wrapper"><input
                                                                                autocapitalize="off" class="field-input"
                                                                                id="billing_address_full_name"
                                                                                name="fullname"
                                                                                placeholder="Họ và tên" required=""
                                                                                size="30" type="text" value=""></div>
                                                                    </div>
                                                                    <div class="field field-half">
                                                                        <div class="field-input-wrapper"><input
                                                                                autocapitalize="off" class="field-input"
                                                                                id="checkout_user_email"
                                                                                name="email" required=""
                                                                                size="30" type="email" value=""
                                                                                placeholder="Email"></div>
                                                                    </div>
                                                                    <div class="field field-half">
                                                                        <div class="field-input-wrapper"><input
                                                                                autocapitalize="off" class="field-input"
                                                                                id="billing_address_phone"
                                                                                maxlength="15" name="phone"
                                                                                placeholder="Điện thoại" required=""
                                                                                size="30" type="tel" value=""></div>
                                                                    </div>
                                                                    <div class="field field-half">
                                                                        <div class="field-input-wrapper"><select
                                                                                class="field-input"
                                                                                name="calc_shipping_provinces"
                                                                                required="">
                                                                                <option value="">Tỉnh / Thành phố
                                                                                </option>
                                                                                <option value="1">An Giang</option>
                                                                                <option value="2">Bà Rịa - Vũng Tàu
                                                                                </option>
                                                                                <option value="3">Bạc Liêu</option>
                                                                                <option value="4">Bắc Kạn</option>
                                                                                <option value="5">Bắc Giang</option>
                                                                                <option value="6">Bắc Ninh</option>
                                                                                <option value="7">Bến Tre</option>
                                                                                <option value="8">Bình Dương</option>
                                                                                <option value="9">Bình Định</option>
                                                                                <option value="10">Bình Phước</option>
                                                                                <option value="11">Bình Thuận</option>
                                                                                <option value="12">Cà Mau</option>
                                                                                <option value="13">Cao Bằng</option>
                                                                                <option value="14">Cần Thơ</option>
                                                                                <option value="15">Đà Nẵng</option>
                                                                                <option value="16">Đắk Lắk</option>
                                                                                <option value="17">Đắk Nông</option>
                                                                                <option value="18">Đồng Nai</option>
                                                                                <option value="19">Đồng Tháp</option>
                                                                                <option value="20">Điện Biên</option>
                                                                                <option value="21">Gia Lai</option>
                                                                                <option value="22">Hà Giang</option>
                                                                                <option value="23">Hà Nam</option>
                                                                                <option value="24">Hà Nội</option>
                                                                                <option value="25">Hà Tĩnh</option>
                                                                                <option value="26">Hải Dương</option>
                                                                                <option value="27">Hải Phòng</option>
                                                                                <option value="28">Hòa Bình</option>
                                                                                <option value="29">Hậu Giang</option>
                                                                                <option value="30">Hưng Yên</option>
                                                                                <option value="31">Thành phố Hồ Chí
                                                                                    Minh
                                                                                </option>
                                                                                <option value="32">Khánh Hòa</option>
                                                                                <option value="33">Kiên Giang</option>
                                                                                <option value="34">Kon Tum</option>
                                                                                <option value="35">Lai Châu</option>
                                                                                <option value="36">Lào Cai</option>
                                                                                <option value="37">Lạng Sơn</option>
                                                                                <option value="38">Lâm Đồng</option>
                                                                                <option value="39">Long An</option>
                                                                                <option value="40">Nam Định</option>
                                                                                <option value="41">Nghệ An</option>
                                                                                <option value="42">Ninh Bình</option>
                                                                                <option value="43">Ninh Thuận</option>
                                                                                <option value="44">Phú Thọ</option>
                                                                                <option value="45">Phú Yên</option>
                                                                                <option value="46">Quảng Bình</option>
                                                                                <option value="47">Quảng Nam</option>
                                                                                <option value="48">Quảng Ngãi</option>
                                                                                <option value="49">Quảng Ninh</option>
                                                                                <option value="50">Quảng Trị</option>
                                                                                <option value="51">Sóc Trăng</option>
                                                                                <option value="52">Sơn La</option>
                                                                                <option value="53">Tây Ninh</option>
                                                                                <option value="54">Thái Bình</option>
                                                                                <option value="55">Thái Nguyên</option>
                                                                                <option value="56">Thanh Hóa</option>
                                                                                <option value="57">Thừa Thiên - Huế
                                                                                </option>
                                                                                <option value="58">Tiền Giang</option>
                                                                                <option value="59">Trà Vinh</option>
                                                                                <option value="60">Tuyên Quang</option>
                                                                                <option value="61">Vĩnh Long</option>
                                                                                <option value="62">Vĩnh Phúc</option>
                                                                                <option value="63">Yên Bái</option>
                                                                            </select> <input class="billing_address_1"
                                                                                             id="billing_address_1"
                                                                                             name="entry.991504070"
                                                                                             type="hidden" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="field field-half">
                                                                        <div class="field-input-wrapper"><select
                                                                                class="field-input"
                                                                                name="calc_shipping_district"
                                                                                required="">
                                                                                <option value="">Quận / Huyện</option>
                                                                            </select> <input class="billing_address_2"
                                                                                             id="billing_address_2"
                                                                                             name="entry.1488085027"
                                                                                             type="hidden" value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="field">
                                                                        <div class="field-input-wrapper"><input
                                                                                autocapitalize="off" class="field-input"
                                                                                id="billing_address_address1"
                                                                                name="entry.92106474"
                                                                                placeholder="Số nhà / đường / xã"
                                                                                required="" size="30" type="text"
                                                                                value=""></div>
                                                                    </div>
                                                                    <div class="field">
                                                                        <div class="field-input-wrapper"><select
                                                                                class="field-input"
                                                                                name="entry.63709016" required="">
                                                                                <option value="">Phương thức thanh
                                                                                    toán
                                                                                </option>
                                                                                <option
                                                                                    value="Thanh toán khi nhận hàng COD">
                                                                                    1. Thanh toán khi nhận hàng COD
                                                                                </option>
                                                                                <option value="Chuyển khoản trước">2.
                                                                                    Chuyển khoản trước
                                                                                </option>
                                                                            </select></div>
                                                                    </div>
                                                                    <div class="field">
                                                                        <div class="field-input-wrapper"><textarea
                                                                                autocapitalize="off" class="field-input"
                                                                                name="entry.1529811984"
                                                                                placeholder="Ghi chú về đơn hàng"
                                                                                rows="2"></textarea></div>
                                                                    </div>
                                                                    <div class="field">
                                                                        <div class="field-input-wrapper"><a
                                                                                href="{{route('cart.index')}}"><i
                                                                                    aria-hidden="true"
                                                                                    class="fa fa-angle-left"></i> Quay
                                                                                lại giỏ hàng</a></div>
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
                                                                <div class="col-xl-5 col-lg-5 col-md-5 col-12">
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
                                                                                                {{--                                                                                                <div class="headerRow">--}}
                                                                                                {{--                                                                                                    <div class="item-thumb">Ảnh</div>--}}
                                                                                                {{--                                                                                                    <div class="item-name">Sản phẩm</div>--}}
                                                                                                {{--                                                                                                    <div class="item-price">Giá</div>--}}
                                                                                                {{--                                                                                                    <div class="item-decrement"></div>--}}
                                                                                                {{--                                                                                                    <div class="item-quantity">Số lượng</div>--}}
                                                                                                {{--                                                                                                    <div class="item-increment"></div>--}}
                                                                                                {{--                                                                                                    <div class="item-total">Tổng</div>--}}
                                                                                                {{--                                                                                                    <div class="item-remove">Xóa</div>--}}
                                                                                                {{--                                                                                                </div>--}}
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
                                                                                                                    src="{{$details['image']}}">
                                                                                                            </div>
                                                                                                            <div
                                                                                                                class="item-name">
                                                                                                                {{$details['name']}}</div>
                                                                                                            <div
                                                                                                                class="item-price">{{number_format(floatval($total), 0, ',', '.') . "đ"}}</div>
                                                                                                            <div class="item-decrement item_sub" data-id="{{$id}}" data-price="{{$details['price']}}">
                                                                                                                <a href="#" class="simpleCart_decrement">
                                                                                                                    <i class="fa fa-minus-square"></i>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class="item-quantity item_number_{{$id}}">{{$details['quantity']}}</div>
                                                                                                            <div class="item-increment item_plus_number_cart" data-id="{{$id}}" data-price="{{$details['price']}}">
                                                                                                                <a href="#" class="simpleCart_increment">
                                                                                                                    <i class="fa fa-plus-square"></i>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                            <div class="item-total item_total_{{$id}}">{{number_format(floatval($details['price'] * $details['quantity']), 0, ',', '.') . "đ"}}</div>
                                                                                                            <div class="item-remove item-remove-product" data-id="{{$id}}">
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
                                                                                                <div
                                                                                                    class="total2 clearfix">
                                                                                                    <span
                                                                                                        class="text-label">Thành tiền: </span>
                                                                                                    <div class="amount">
                                                                                                        <p><strong
                                                                                                                class="totals_price simpleCart_grandTotal">{{number_format(floatval($total), 0, ',', '.') . "đ"}}</strong>
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <button
                                                                                                class="button btn-proceed-checkout btn btn-large btn-block btn-danger btn-checkout"
                                                                                                title="Đặt hàng"
                                                                                                type="submit">Đặt hàng
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
                                                        <iframe class="myifram d-none hidden"
                                                                name="hidden_iframe"></iframe>
                                                    </div>
                                                </div>
                                                <script>
                                                    //<![CDATA[
                                                    jQuery(document).ready(function (e) {
                                                        setInterval(function () {
                                                            var n = localStorage.getItem("simpleCart_items"),
                                                                r = "",
                                                                a = 50000;
                                                            e.each(e.parseJSON(n), function (e, n) {
                                                                var t = "+ Order #: " + n.name + " ( " + String(n.price).replace(/(.)(?=(\d{3})+$)/g, "$1,") + " x " + n.quantity + " = " + String(n.price * n.quantity).replace(/(.)(?=(\d{3})+$)/g, "$1,") + " )\n";
                                                                r += t, a += n.price * n.quantity
                                                            }), r += "- Phí giao hàng: 50,000₫ \n", r += "- VAT (0%): " + String(0 * a).replace(/(.)(?=(\d{3})+$)/g, "$1,") + " đ\n";
                                                            var t = String(a + 0 * a + 0).replace(/(.)(?=(\d{3})+$)/g, "$1,");
                                                            r += "- Tổng thanh toán: " + t + " đ", e("#product-by-hoa-tran").val(r)
                                                        }, 0);
                                                        $("form#order").submit(function () {
                                                            $('.col-xl-7.col-lg-7.col-md-7.col-12').addClass('loader')
                                                            setTimeout(function () {
                                                                simpleCart.empty()
                                                                location.href = "/p/thank-you.html"
                                                            }, 3000)
                                                        });
                                                    });
                                                    //]]>
                                                </script>
                                                <script
                                                    src="https://cdn.jsdelivr.net/gh/giaodienblog/cdn@5a40f96/districts.min.js"></script>
                                                <script>
                                                    //<![CDATA[

                                                    function select_district() {
                                                        var address_1 = '',
                                                            address_2 = '',
                                                            district = ''
                                                        if (address_2 = localStorage.getItem('address_2_saved')) {
                                                            $('select[name="calc_shipping_district"] option').each(function () {
                                                                if ($(this).text() == address_2) $(this).attr('selected', '')
                                                            })
                                                            $('.product-summary-wrap').attr('data-district', address_2)
                                                            $('input.billing_address_2').attr('value', address_2)
                                                        }
                                                        if (district = localStorage.getItem('district')) {
                                                            $('select[name="calc_shipping_district"]').html(district)
                                                            $('select[name="calc_shipping_district"]').on('change', function () {
                                                                var target = $(this).children('option:selected')
                                                                target.attr('selected', '')
                                                                $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
                                                                address_2 = target.text()
                                                                $('.product-summary-wrap').attr('data-district', address_2)
                                                                $('input.billing_address_2').attr('value', address_2)
                                                                district = $('select[name="calc_shipping_district"]').html()
                                                                localStorage.setItem('district', district)
                                                                localStorage.setItem('address_2_saved', address_2)
                                                            })
                                                        }
                                                        $('select[name="calc_shipping_provinces"]').each(function () {
                                                            var $this = $(this),
                                                                stc = ''
                                                            c.forEach(function (i, e) {
                                                                e += +1
                                                                stc += '<option value=' + e + '>' + i + '</option>'
                                                                $this.html('<option value="">Tỉnh / Thành phố</option>' + stc)
                                                                if (address_1 = localStorage.getItem('address_1_saved')) {
                                                                    $('select[name="calc_shipping_provinces"] option').each(function () {
                                                                        if ($(this).text() == address_1) $(this).attr('selected', '')
                                                                    })
                                                                    $('.product-summary-wrap').attr('data-province', address_1)
                                                                    $('input.billing_address_1').attr('value', address_1)
                                                                }
                                                                $this.on('change', function (i) {
                                                                    i = $this.children('option:selected').index() - 1
                                                                    var str = '',
                                                                        r = $this.val()
                                                                    if (r != '') {
                                                                        arr[i].forEach(function (el) {
                                                                            str += '<option value="' + el + '">' + el + '</option>'
                                                                            $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>' + str)
                                                                        })
                                                                        address_1 = $this.children('option:selected').text()
                                                                        district = $('select[name="calc_shipping_district"]').html()
                                                                        $('input.billing_address_1').attr('value', address_1)
                                                                        $('.product-summary-wrap').attr('data-province', address_1)
                                                                        localStorage.setItem('address_1_saved', address_1)
                                                                        localStorage.setItem('district', district)
                                                                        $('select[name="calc_shipping_district"]').on('change', function () {
                                                                            var target = $(this).children('option:selected')
                                                                            target.attr('selected', '')
                                                                            $('select[name="calc_shipping_district"] option').not(target).removeAttr('selected')
                                                                            address_2 = target.text()
                                                                            $('.product-summary-wrap').attr('data-district', address_2)
                                                                            $('input.billing_address_2').attr('value', address_2)
                                                                            district = $('select[name="calc_shipping_district"]').html()
                                                                            localStorage.setItem('district', district)
                                                                            localStorage.setItem('address_2_saved', address_2)
                                                                        })
                                                                    } else {
                                                                        $('select[name="calc_shipping_district"]').html('<option value="">Quận / Huyện</option>')
                                                                        district = $('select[name="calc_shipping_district"]').html()
                                                                        $('.product-summary-wrap').attr('data-province', 'undefined')
                                                                        $('.product-summary-wrap').attr('data-district', 'undefined')
                                                                        localStorage.removeItem('district', district)
                                                                        localStorage.removeItem('address_2_saved', address_2)
                                                                        localStorage.removeItem('address_1_saved', address_1)
                                                                    }
                                                                })
                                                            })
                                                        })
                                                    }

                                                    select_district();
                                                    //]]>
                                                </script>
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
