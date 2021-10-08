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


                                                <li><strong><span> Tất cả sản phẩm</span></strong></li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <h1 class="title_page">Tất cả sản phẩm</h1>

                        </div>
                    </div>
                </div>
                <div class="wrap_background">
                    <div class="container3">
                        <div class="row">
                            <div class="bg_collection section">
                                <aside class="dqdt-sidebar sidebar left-content col-lg-12 col-lg-12-fix">
                                    <div class="wrap_background_aside asidecollection">

                                        <div class="filter-content aside-filter">
                                            <div class="filter-container">
                                                <div class="filter-container__selected-filter" style="display: none;">
                                                    <div class="filter-container__selected-filter-header clearfix">
                                                        <span class="filter-container__selected-filter-header-title"><i
                                                                class="fas fa-arrow-left hidden-sm-up"></i> Bạn chọn</span>
                                                        <a href="javascript:void(0)" onclick="clearAllFiltered()"
                                                           class="filter-container__clear-all">Bỏ hết <i
                                                                class="fas fa-angle-right"></i></a>
                                                    </div>
                                                    <div class="filter-container__selected-filter-list">
                                                        <ul></ul>
                                                    </div>
                                                </div>

                                                <!-- Lọc Danh mục -->

                                                <aside class="aside-item sidebar-category collection-category">
                                                    <div class="aside-title">
                                                        <h2 class="title-head margin-top-0 cate"><span>Danh mục</span>
                                                        </h2>
                                                    </div>
                                                    <div class="aside-content">
                                                        <nav class="nav-category navbar-toggleable-md">
                                                            <ul class="nav navbar-pills">


                                                                <li class="nav-item"><a class="nav-link" href="/">Trang
                                                                        chủ

                                                                    </a>

                                                                </li>


                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="/ve-chung-toi">Về chúng
                                                                        tôi

                                                                    </a>

                                                                </li>


                                                                <li class="nav-item">
                                                                    <a href="/collections/all" class="nav-link">Sản phẩm

                                                                    </a>
                                                                    <i class="fas fa-angle-down"></i>

                                                                    <ul class="dropdown-menu">


                                                                        <li class="nav-item">
                                                                            <a class="nav-link"
                                                                               href="/thuc-pham-chuc-nang">Thực phẩm
                                                                                chức năng

                                                                            </a>
                                                                        </li>


                                                                        <li class="nav-item">
                                                                            <a class="nav-link"
                                                                               href="/suc-khoe-lam-dep">Sức khỏe - Làm
                                                                                đẹp

                                                                            </a>
                                                                        </li>


                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="/duoc-my-pham">Dược
                                                                                mỹ phẩm

                                                                            </a>
                                                                        </li>


                                                                        <li class="nav-item">
                                                                            <a class="nav-link" href="/cham-soc-co-the">Chăm
                                                                                sóc cơ thể

                                                                            </a>
                                                                        </li>


                                                                        <li class="dropdown-submenu nav-item">
                                                                            <a class="nav-link" href="/duong-da">Dưỡng
                                                                                da

                                                                            </a>

                                                                            <i class="fas fa-angle-down"></i>
                                                                            <ul class="dropdown-menu">


                                                                                <li class="nav-item lv3">
                                                                                    <a class="nav-link"
                                                                                       href="/xit-khoang">Xịt khoáng

                                                                                    </a>
                                                                                </li>


                                                                                <li class="nav-item lv3">
                                                                                    <a class="nav-link"
                                                                                       href="/kem-chong-nang">Kem chống
                                                                                        nắng

                                                                                    </a>
                                                                                </li>


                                                                                <li class="nav-item lv3">
                                                                                    <a class="nav-link"
                                                                                       href="/kem-duong">Kem dưỡng

                                                                                    </a>
                                                                                </li>


                                                                                <li class="nav-item lv3">
                                                                                    <a class="nav-link" href="/mat-na">Mặt
                                                                                        nạ

                                                                                    </a>
                                                                                </li>


                                                                            </ul>
                                                                        </li>


                                                                    </ul>
                                                                </li>


                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="/he-thong-cua-hang">Hệ
                                                                        thống cửa hàng

                                                                    </a>

                                                                </li>


                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="/tin-tuc">Tin tức

                                                                    </a>

                                                                </li>


                                                                <li class="nav-item"><a class="nav-link"
                                                                                        href="/lien-he">Liên hệ

                                                                    </a>

                                                                </li>


                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </aside>

                                                <!-- End lọc danh mục -->
                                                <!-- Lọc Loại -->

                                                <aside class="aside-item filter-type">
                                                    <div class="aside-title">
                                                        <h2 class="title-head margin-top-0"><span>Loại sản phẩm</span>
                                                        </h2>
                                                    </div>
                                                    <div class="aside-content filter-group">
                                                        <ul>


                                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-duong-da">
								<input type="checkbox" id="filter-duong-da" data-group="Loại" data-field="product_type"
                                       data-text="Dưỡng da" value="(Dưỡng da)" data-operator="OR">
								<i class="fa"></i>
								Dưỡng da
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-kem-chong-nang">
								<input type="checkbox" id="filter-kem-chong-nang" data-group="Loại"
                                       data-field="product_type" data-text="Kem chống nắng" value="(Kem chống nắng)"
                                       data-operator="OR">
								<i class="fa"></i>
								Kem chống nắng
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-kem-duong-da">
								<input type="checkbox" id="filter-kem-duong-da" data-group="Loại"
                                       data-field="product_type" data-text="Kem dưỡng da" value="(Kem dưỡng da)"
                                       data-operator="OR">
								<i class="fa"></i>
								Kem dưỡng da
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-lam-mong">
								<input type="checkbox" id="filter-lam-mong" data-group="Loại" data-field="product_type"
                                       data-text="Làm móng" value="(Làm móng)" data-operator="OR">
								<i class="fa"></i>
								Làm móng
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-nuoc-hoa">
								<input type="checkbox" id="filter-nuoc-hoa" data-group="Loại" data-field="product_type"
                                       data-text="Nước hoa" value="(Nước hoa)" data-operator="OR">
								<i class="fa"></i>
								Nước hoa
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-son-moi">
								<input type="checkbox" id="filter-son-moi" data-group="Loại" data-field="product_type"
                                       data-text="Son môi" value="(Son môi)" data-operator="OR">
								<i class="fa"></i>
								Son môi
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-son-mong">
								<input type="checkbox" id="filter-son-mong" data-group="Loại" data-field="product_type"
                                       data-text="Sơn móng" value="(Sơn móng)" data-operator="OR">
								<i class="fa"></i>
								Sơn móng
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-sua-tam">
								<input type="checkbox" id="filter-sua-tam" data-group="Loại" data-field="product_type"
                                       data-text="Sữa tắm" value="(Sữa tắm)" data-operator="OR">
								<i class="fa"></i>
								Sữa tắm
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-tay-mong">
								<input type="checkbox" id="filter-tay-mong" data-group="Loại" data-field="product_type"
                                       data-text="Tẩy móng" value="(Tẩy móng)" data-operator="OR">
								<i class="fa"></i>
								Tẩy móng
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green">
						<span>
							<label for="filter-trang-diem">
								<input type="checkbox" id="filter-trang-diem" data-group="Loại"
                                       data-field="product_type" data-text="Trang điểm" value="(Trang điểm)"
                                       data-operator="OR">
								<i class="fa"></i>
								Trang điểm
							</label>
						</span>
                                                            </li>


                                                        </ul>
                                                    </div>
                                                </aside>

                                                <!-- End Lọc Loại -->

                                                <!-- Lọc theo kích cỡ -->

                                                <aside class="aside-item sidebar-item filter-tag-style-1">
                                                    <div class="aside-title">
                                                        <h2 class="title-head margin-top-0">
                                                            <span>Kích cỡ</span>
                                                        </h2>
                                                    </div>
                                                    <div class="module-content aside-content filter-group">
                                                        <ul>


                                                            <li class="filter-item filter_size filter-item--check-box filter-item--green">
						<span>
							<label for="filter-5">
								<input type="checkbox" id="filter-5" data-group="tag2" data-field="tags" data-text="5"
                                       value="(5)" data-operator="OR">
								<i class="fa"></i>
								5
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter_size filter-item--check-box filter-item--green">
						<span>
							<label for="filter-6">
								<input type="checkbox" id="filter-6" data-group="tag2" data-field="tags" data-text="6"
                                       value="(6)" data-operator="OR">
								<i class="fa"></i>
								6
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter_size filter-item--check-box filter-item--green">
						<span>
							<label for="filter-7">
								<input type="checkbox" id="filter-7" data-group="tag2" data-field="tags" data-text="7"
                                       value="(7)" data-operator="OR">
								<i class="fa"></i>
								7
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter_size filter-item--check-box filter-item--green">
						<span>
							<label for="filter-8">
								<input type="checkbox" id="filter-8" data-group="tag2" data-field="tags" data-text="8"
                                       value="(8)" data-operator="OR">
								<i class="fa"></i>
								8
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter_size filter-item--check-box filter-item--green">
						<span>
							<label for="filter-9">
								<input type="checkbox" id="filter-9" data-group="tag2" data-field="tags" data-text="9"
                                       value="(9)" data-operator="OR">
								<i class="fa"></i>
								9
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter_size filter-item--check-box filter-item--green">
						<span>
							<label for="filter-10">
								<input type="checkbox" id="filter-10" data-group="tag2" data-field="tags" data-text="10"
                                       value="(10)" data-operator="OR">
								<i class="fa"></i>
								10
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter_size filter-item--check-box filter-item--green">
						<span>
							<label for="filter-12">
								<input type="checkbox" id="filter-12" data-group="tag2" data-field="tags" data-text="12"
                                       value="(12)" data-operator="OR">
								<i class="fa"></i>
								12
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter_size filter-item--check-box filter-item--green">
						<span>
							<label for="filter-14">
								<input type="checkbox" id="filter-14" data-group="tag2" data-field="tags" data-text="14"
                                       value="(14)" data-operator="OR">
								<i class="fa"></i>
								14
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter_size filter-item--check-box filter-item--green">
						<span>
							<label for="filter-15">
								<input type="checkbox" id="filter-15" data-group="tag2" data-field="tags" data-text="15"
                                       value="(15)" data-operator="OR">
								<i class="fa"></i>
								15
							</label>
						</span>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </aside>

                                                <!-- End lọc theo kích cỡ -->

                                                <!-- Lọc Thương hiệu -->

                                                <aside class="aside-item filter-vendor">
                                                    <div class="aside-title">
                                                        <h2 class="title-head margin-top-0"><span>Thương hiệu</span>
                                                        </h2>
                                                    </div>
                                                    <div class="aside-content filter-group">
                                                        <ul>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-aha">
								<input type="checkbox" id="filter-aha" data-group="Hãng" data-field="vendor"
                                       data-text="AHA" value="(AHA)" data-operator="OR">
								<i class="fa"></i>
								AHA
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-aroma">
								<input type="checkbox" id="filter-aroma" data-group="Hãng" data-field="vendor"
                                       data-text="Aroma" value="(Aroma)" data-operator="OR">
								<i class="fa"></i>
								Aroma
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-benefit">
								<input type="checkbox" id="filter-benefit" data-group="Hãng" data-field="vendor"
                                       data-text="Benefit" value="(Benefit)" data-operator="OR">
								<i class="fa"></i>
								Benefit
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-burberry">
								<input type="checkbox" id="filter-burberry" data-group="Hãng" data-field="vendor"
                                       data-text="Burberry" value="(Burberry)" data-operator="OR">
								<i class="fa"></i>
								Burberry
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-chloe">
								<input type="checkbox" id="filter-chloe" data-group="Hãng" data-field="vendor"
                                       data-text="Chloé" value="(Chloé)" data-operator="OR">
								<i class="fa"></i>
								Chloé
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-christian-louboutin">
								<input type="checkbox" id="filter-christian-louboutin" data-group="Hãng"
                                       data-field="vendor" data-text="Christian Louboutin" value="(Christian Louboutin)"
                                       data-operator="OR">
								<i class="fa"></i>
								Christian Louboutin
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-dior">
								<input type="checkbox" id="filter-dior" data-group="Hãng" data-field="vendor"
                                       data-text="Dior" value="(Dior)" data-operator="OR">
								<i class="fa"></i>
								Dior
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-dolce-gabbana">
								<input type="checkbox" id="filter-dolce-gabbana" data-group="Hãng" data-field="vendor"
                                       data-text="Dolce &amp; Gabbana" value="(Dolce &amp; Gabbana)" data-operator="OR">
								<i class="fa"></i>
								Dolce &amp; Gabbana
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-lancome">
								<input type="checkbox" id="filter-lancome" data-group="Hãng" data-field="vendor"
                                       data-text="Lancôme" value="(Lancôme)" data-operator="OR">
								<i class="fa"></i>
								Lancôme
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-l-occitane">
								<input type="checkbox" id="filter-l-occitane" data-group="Hãng" data-field="vendor"
                                       data-text="L'Occitane" value="(L'Occitane)" data-operator="OR">
								<i class="fa"></i>
								L'Occitane
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-louboutin-diva">
								<input type="checkbox" id="filter-louboutin-diva" data-group="Hãng" data-field="vendor"
                                       data-text="Louboutin Diva" value="(Louboutin Diva)" data-operator="OR">
								<i class="fa"></i>
								Louboutin Diva
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-make-up-for-ever">
								<input type="checkbox" id="filter-make-up-for-ever" data-group="Hãng"
                                       data-field="vendor" data-text="Make Up For Ever" value="(Make Up For Ever)"
                                       data-operator="OR">
								<i class="fa"></i>
								Make Up For Ever
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-marc-jacobs">
								<input type="checkbox" id="filter-marc-jacobs" data-group="Hãng" data-field="vendor"
                                       data-text="Marc Jacobs" value="(Marc Jacobs)" data-operator="OR">
								<i class="fa"></i>
								Marc Jacobs
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-moon-shadow">
								<input type="checkbox" id="filter-moon-shadow" data-group="Hãng" data-field="vendor"
                                       data-text="Moon Shadow" value="(Moon Shadow)" data-operator="OR">
								<i class="fa"></i>
								Moon Shadow
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-oriflame">
								<input type="checkbox" id="filter-oriflame" data-group="Hãng" data-field="vendor"
                                       data-text="Oriflame" value="(Oriflame)" data-operator="OR">
								<i class="fa"></i>
								Oriflame
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-picos">
								<input type="checkbox" id="filter-picos" data-group="Hãng" data-field="vendor"
                                       data-text="Picos" value="(Picos)" data-operator="OR">
								<i class="fa"></i>
								Picos
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-shiseido">
								<input type="checkbox" id="filter-shiseido" data-group="Hãng" data-field="vendor"
                                       data-text="Shiseido" value="(Shiseido)" data-operator="OR">
								<i class="fa"></i>
								Shiseido
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-sk-ii">
								<input type="checkbox" id="filter-sk-ii" data-group="Hãng" data-field="vendor"
                                       data-text="SK-II" value="(SK-II)" data-operator="OR">
								<i class="fa"></i>
								SK-II
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-tonymoly">
								<input type="checkbox" id="filter-tonymoly" data-group="Hãng" data-field="vendor"
                                       data-text="Tonymoly" value="(Tonymoly)" data-operator="OR">
								<i class="fa"></i>
								Tonymoly
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-urban-decay">
								<input type="checkbox" id="filter-urban-decay" data-group="Hãng" data-field="vendor"
                                       data-text="Urban Decay" value="(Urban Decay)" data-operator="OR">
								<i class="fa"></i>
								Urban Decay
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-usa-store-salon">
								<input type="checkbox" id="filter-usa-store-salon" data-group="Hãng" data-field="vendor"
                                       data-text="USA Store Salon" value="(USA Store Salon)" data-operator="OR">
								<i class="fa"></i>
								USA Store Salon
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-versace">
								<input type="checkbox" id="filter-versace" data-group="Hãng" data-field="vendor"
                                       data-text="Versace" value="(Versace)" data-operator="OR">
								<i class="fa"></i>
								Versace
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-vichy">
								<input type="checkbox" id="filter-vichy" data-group="Hãng" data-field="vendor"
                                       data-text="Vichy" value="(Vichy)" data-operator="OR">
								<i class="fa"></i>
								Vichy
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-victoria-s">
								<input type="checkbox" id="filter-victoria-s" data-group="Hãng" data-field="vendor"
                                       data-text="Victoria’s" value="(Victoria’s)" data-operator="OR">
								<i class="fa"></i>
								Victoria’s
							</label>
						</span>
                                                            </li>


                                                            <li class="filter-item filter-item--check-box filter-item--green ">
						<span>
							<label for="filter-yves-saint-laurent">
								<input type="checkbox" id="filter-yves-saint-laurent" data-group="Hãng"
                                       data-field="vendor" data-text="YVES SAINT LAURENT" value="(YVES SAINT LAURENT)"
                                       data-operator="OR">
								<i class="fa"></i>
								YVES SAINT LAURENT
							</label>
						</span>
                                                            </li>


                                                        </ul>
                                                    </div>
                                                </aside>

                                                <!-- End lọc Thương hiệu -->
                                                <aside class="aside-item">
                                                    <div class="aside-title">
                                                        <h2 class="title-head margin-top-0"><span>Sắp xếp theo</span>
                                                        </h2>
                                                    </div>
                                                    <div class="aside-content filter-group">
                                                        <ul>
                                                            <li>
                                                                <ul class="ul_2">
                                                                    <li><a href="javascript:;"
                                                                           onclick="sortby('default')">Mặc định</a></li>
                                                                    <li><a href="javascript:;"
                                                                           onclick="sortby('alpha-asc')">A → Z</a></li>
                                                                    <li><a href="javascript:;"
                                                                           onclick="sortby('alpha-desc')">Z → A</a></li>
                                                                    <li><a href="javascript:;"
                                                                           onclick="sortby('price-asc')">Giá tăng
                                                                            dần</a></li>
                                                                    <li><a href="javascript:;"
                                                                           onclick="sortby('price-desc')">Giá giảm
                                                                            dần</a></li>
                                                                    <li><a href="javascript:;"
                                                                           onclick="sortby('created-desc')">Hàng mới
                                                                            nhất</a></li>
                                                                    <li><a href="javascript:;"
                                                                           onclick="sortby('created-asc')">Hàng cũ
                                                                            nhất</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </aside>
                                            </div>
                                        </div>

                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container2">
                    <div class="row">
                        <div class="bg_collection section">
                            <div class="main_container collection col-lg-12 col-lg-12-fix padding-col-left-0">
                                <div class="category-products products margin-top-30">
                                    <div class="section hidden">
                                        <div class="sortPagiBar">
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                    <div class="f-left inline-block">
                                                        <div class="view-mode hidden-xs">
                                                            <a href="javascript:;" data-view="grid"
                                                               onclick="switchView('grid')" title="Grid view">
                                                                <b class="btn button-view-mode view-mode-grid active">
                                                                    <i class="fa fa-th" aria-hidden="true"></i>
                                                                </b>
                                                                <span>Lưới</span>
                                                            </a>
                                                            <a href="javascript:;" data-view="list"
                                                               onclick="switchView('list')" title="List view">
                                                                <b class="btn button-view-mode view-mode-list ">
                                                                    <i class="fa fa-th-list" aria-hidden="true"></i>
                                                                </b>
                                                                <span>Danh sách</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="bg-white sort-cate clearfix">
                                                        <div id="sort-by">
                                                            <label class="left">Sắp xếp: </label>
                                                            <ul class="ul_col">
                                                                <li><span>Thứ tự</span>
                                                                    <ul class="content_ul">
                                                                        <li><a href="javascript:;"
                                                                               onclick="sortby('default')">Mặc định</a>
                                                                        </li>
                                                                        <li><a href="javascript:;"
                                                                               onclick="sortby('alpha-asc')">A → Z</a>
                                                                        </li>
                                                                        <li><a href="javascript:;"
                                                                               onclick="sortby('alpha-desc')">Z → A</a>
                                                                        </li>
                                                                        <li><a href="javascript:;"
                                                                               onclick="sortby('price-asc')">Giá tăng
                                                                                dần</a></li>
                                                                        <li><a href="javascript:;"
                                                                               onclick="sortby('price-desc')">Giá giảm
                                                                                dần</a></li>
                                                                        <li><a href="javascript:;"
                                                                               onclick="sortby('created-desc')">Hàng mới
                                                                                nhất</a></li>
                                                                        <li><a href="javascript:;"
                                                                               onclick="sortby('created-asc')">Hàng cũ
                                                                                nhất</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <section
                                        class="products-view products-view-grid collection_reponsive list_hover_pro">
                                        <div class="row">

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <div class="saleright">
                                                                -
                                                                16%

                                                            </div>

                                                            <a class="image_link display_flex"
                                                               href="/sua-tam-victoria-s-secret-quyen-ru"
                                                               title="Sữa tắm Victoria’s Secret quyến rũ">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/1-cde1408f-489d-4f45-b386-478987e01dc4.jpg?v=1571389168640"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/1-cde1408f-489d-4f45-b386-478987e01dc4.jpg?v=1571389168640"
                                                                     alt="Sữa tắm Victoria’s Secret quyến rũ"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065237"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/sua-tam-victoria-s-secret-quyen-ru"
                                                                           data-handle="sua-tam-victoria-s-secret-quyen-ru"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346815">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/sua-tam-victoria-s-secret-quyen-ru"
                                                                    title="Sữa tắm Victoria’s Secret quyến rũ">Sữa tắm
                                                                    Victoria’s Secret quyến rũ</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065237"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">560.000₫</span>
                                                                        </div>

                                                                        <div class="old-price">
						<span class="price product-price-old">
							670.000₫
						</span>
                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <a class="image_link display_flex"
                                                               href="/kem-duong-am-l-occitane-pivoine-sublime-skin-perfecting-cream"
                                                               title="Kem dưỡng ẩm L'Occitane Pivoine">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/2-21ef8554-8d8c-4b9f-b420-a383a8ddb7dc.jpg?v=1571389367530"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/2-21ef8554-8d8c-4b9f-b420-a383a8ddb7dc.jpg?v=1571389367530"
                                                                     alt="Kem dưỡng ẩm L'Occitane Pivoine"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065234"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/kem-duong-am-l-occitane-pivoine-sublime-skin-perfecting-cream"
                                                                           data-handle="kem-duong-am-l-occitane-pivoine-sublime-skin-perfecting-cream"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346812">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/kem-duong-am-l-occitane-pivoine-sublime-skin-perfecting-cream"
                                                                    title="Kem dưỡng ẩm L'Occitane Pivoine">Kem dưỡng ẩm
                                                                    L'Occitane Pivoine</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065234"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">840.000₫</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <a class="image_link display_flex"
                                                               href="/nuoc-can-bang-shiseido-ibuki-softening-concentrate"
                                                               title="Nước làm sạch mặt Ibuki Softening">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/3-65928b3e-d868-466c-9797-a8a600524698.jpg?v=1571389453750"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/3-65928b3e-d868-466c-9797-a8a600524698.jpg?v=1571389453750"
                                                                     alt="Nước làm sạch mặt Ibuki Softening"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065233"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/nuoc-can-bang-shiseido-ibuki-softening-concentrate"
                                                                           data-handle="nuoc-can-bang-shiseido-ibuki-softening-concentrate"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346810">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/nuoc-can-bang-shiseido-ibuki-softening-concentrate"
                                                                    title="Nước làm sạch mặt Ibuki Softening">Nước làm
                                                                    sạch mặt Ibuki Softening</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065233"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">700.000₫</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <a class="image_link display_flex"
                                                               href="/tinh-chat-duong-da-sk-ii-facial-treatment-essence"
                                                               title="Tinh chất dưỡng da SK-II Facial">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/4-84b19528-9c95-4f4b-999a-6ef993efe6a0.jpg?v=1571389600367"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/4-84b19528-9c95-4f4b-999a-6ef993efe6a0.jpg?v=1571389600367"
                                                                     alt="Tinh chất dưỡng da SK-II Facial"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065232"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/tinh-chat-duong-da-sk-ii-facial-treatment-essence"
                                                                           data-handle="tinh-chat-duong-da-sk-ii-facial-treatment-essence"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346806">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/tinh-chat-duong-da-sk-ii-facial-treatment-essence"
                                                                    title="Tinh chất dưỡng da SK-II Facial">Tinh chất
                                                                    dưỡng da SK-II Facial</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065232"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">4.100.000₫</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <div class="saleright">
                                                                -
                                                                9%

                                                            </div>

                                                            <a class="image_link display_flex"
                                                               href="/son-duong-tonymoly-mini-cherry-lip-balm"
                                                               title="Son dưỡng Tonymoly Mini Cherry">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/5-3b09ab61-91be-4f0a-89d4-16cefcc9bbaf.jpg?v=1571389801103"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/5-3b09ab61-91be-4f0a-89d4-16cefcc9bbaf.jpg?v=1571389801103"
                                                                     alt="Son dưỡng Tonymoly Mini Cherry"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065231"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/son-duong-tonymoly-mini-cherry-lip-balm"
                                                                           data-handle="son-duong-tonymoly-mini-cherry-lip-balm"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346805">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/son-duong-tonymoly-mini-cherry-lip-balm"
                                                                    title="Son dưỡng Tonymoly Mini Cherry">Son dưỡng
                                                                    Tonymoly Mini Cherry</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065231"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">200.000₫</span>
                                                                        </div>

                                                                        <div class="old-price">
						<span class="price product-price-old">
							220.000₫
						</span>
                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <a class="image_link display_flex"
                                                               href="/nuoc-hoa-lancome-la-vie-est-belle"
                                                               title="Nước hoa Lancôme La Vie Est">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/6-90fd65bd-3e50-47c6-a9db-1b0a9dc30ec9.jpg?v=1571389836150"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/6-90fd65bd-3e50-47c6-a9db-1b0a9dc30ec9.jpg?v=1571389836150"
                                                                     alt="Nước hoa Lancôme La Vie Est"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065230"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/nuoc-hoa-lancome-la-vie-est-belle"
                                                                           data-handle="nuoc-hoa-lancome-la-vie-est-belle"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346803">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/nuoc-hoa-lancome-la-vie-est-belle"
                                                                    title="Nước hoa Lancôme La Vie Est">Nước hoa Lancôme
                                                                    La Vie Est</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065230"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">1.240.000₫</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <a class="image_link display_flex"
                                                               href="/sua-tam-lam-sang-da-victoria-s-secret"
                                                               title="Sữa tắm làm sáng da Victoria’s Secret">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/7-fbb0a9ea-c4b9-4dbb-b045-307489e9fb4b.jpg?v=1571390003110"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/7-fbb0a9ea-c4b9-4dbb-b045-307489e9fb4b.jpg?v=1571390003110"
                                                                     alt="Sữa tắm làm sáng da Victoria’s Secret"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065229"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/sua-tam-lam-sang-da-victoria-s-secret"
                                                                           data-handle="sua-tam-lam-sang-da-victoria-s-secret"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346801">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/sua-tam-lam-sang-da-victoria-s-secret"
                                                                    title="Sữa tắm làm sáng da Victoria’s Secret">Sữa
                                                                    tắm làm sáng da Victoria’s Secret</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065229"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">1.400.000₫</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <div class="saleright">
                                                                -
                                                                7%

                                                            </div>

                                                            <a class="image_link display_flex"
                                                               href="/nuoc-hoa-marc-jacobs-fragrance-decadence"
                                                               title="Sữa tắm hương dâu dịu mát">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/8-a5f4e4d3-ba6a-4e7d-bcb7-1ded840f9e18.jpg?v=1571390043897"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/8-a5f4e4d3-ba6a-4e7d-bcb7-1ded840f9e18.jpg?v=1571390043897"
                                                                     alt="Sữa tắm hương dâu dịu mát"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065228"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/nuoc-hoa-marc-jacobs-fragrance-decadence"
                                                                           data-handle="nuoc-hoa-marc-jacobs-fragrance-decadence"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346799">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/nuoc-hoa-marc-jacobs-fragrance-decadence"
                                                                    title="Sữa tắm hương dâu dịu mát">Sữa tắm hương dâu
                                                                    dịu mát</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065228"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">1.400.000₫</span>
                                                                        </div>

                                                                        <div class="old-price">
						<span class="price product-price-old">
							1.500.000₫
						</span>
                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <a class="image_link display_flex"
                                                               href="/sua-tam-duong-am-cho-da"
                                                               title="Sữa tắm dưỡng ẩm cho da">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/12.jpg?v=1571392097177"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/12.jpg?v=1571392097177"
                                                                     alt="Sữa tắm dưỡng ẩm cho da"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065227"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/sua-tam-duong-am-cho-da"
                                                                           data-handle="sua-tam-duong-am-cho-da"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346798">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a href="/sua-tam-duong-am-cho-da"
                                                                                        title="Sữa tắm dưỡng ẩm cho da">Sữa
                                                                    tắm dưỡng ẩm cho da</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065227"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">600.000₫</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <a class="image_link display_flex"
                                                               href="/sua-tam-sparkling-citrus-luscious-crush"
                                                               title="Sữa tắm Sparkling Citrus Luscious Crush">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/10.jpg?v=1571392137687"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/10.jpg?v=1571392137687"
                                                                     alt="Sữa tắm Sparkling Citrus Luscious Crush"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065226"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/sua-tam-sparkling-citrus-luscious-crush"
                                                                           data-handle="sua-tam-sparkling-citrus-luscious-crush"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346794">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/sua-tam-sparkling-citrus-luscious-crush"
                                                                    title="Sữa tắm Sparkling Citrus Luscious Crush">Sữa
                                                                    tắm Sparkling Citrus Luscious Crush</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065226"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">1.040.000₫</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <a class="image_link display_flex"
                                                               href="/kem-lot-burberry-fresh-glow-luminous-fluid-base"
                                                               title="Kem lót Burberry Fresh Glow">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/14-1fc511a7-9c6d-4b81-a43c-ebc11a7ce379.jpg?v=1571394160373"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/14-1fc511a7-9c6d-4b81-a43c-ebc11a7ce379.jpg?v=1571394160373"
                                                                     alt="Kem lót Burberry Fresh Glow"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065224"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/kem-lot-burberry-fresh-glow-luminous-fluid-base"
                                                                           data-handle="kem-lot-burberry-fresh-glow-luminous-fluid-base"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346789">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/kem-lot-burberry-fresh-glow-luminous-fluid-base"
                                                                    title="Kem lót Burberry Fresh Glow">Kem lót Burberry
                                                                    Fresh Glow</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065224"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">960.000₫</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <a class="image_link display_flex"
                                                               href="/son-moi-christian-louboutin-silky-satin-lip-colour"
                                                               title="Son môi Christian Louboutin Silky">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/15.jpg?v=1571394820387"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/15.jpg?v=1571394820387"
                                                                     alt="Son môi Christian Louboutin Silky"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065223"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/son-moi-christian-louboutin-silky-satin-lip-colour"
                                                                           data-handle="son-moi-christian-louboutin-silky-satin-lip-colour"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346787">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/son-moi-christian-louboutin-silky-satin-lip-colour"
                                                                    title="Son môi Christian Louboutin Silky">Son môi
                                                                    Christian Louboutin Silky</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065223"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">1.800.000₫</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <a class="image_link display_flex"
                                                               href="/mascara-benefit-they-re-real"
                                                               title="Mascara Benefit They're Real">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/16-f0e35b1e-cc1e-4c16-9e11-e2e0614c335b.jpg?v=1571394860343"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/16-f0e35b1e-cc1e-4c16-9e11-e2e0614c335b.jpg?v=1571394860343"
                                                                     alt="Mascara Benefit They're Real"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065222"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/mascara-benefit-they-re-real"
                                                                           data-handle="mascara-benefit-they-re-real"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346785">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/mascara-benefit-they-re-real"
                                                                    title="Mascara Benefit They're Real">Mascara Benefit
                                                                    They're Real</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065222"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">480.000₫</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <a class="image_link display_flex"
                                                               href="/nuoc-hoa-versace-bright-crystal"
                                                               title="Nước hoa Versace Bright Crystal">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/17-e4956fa7-2a44-4f83-b21b-6bb831652bc3.jpg?v=1571455190597"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/17-e4956fa7-2a44-4f83-b21b-6bb831652bc3.jpg?v=1571455190597"
                                                                     alt="Nước hoa Versace Bright Crystal"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065221"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/nuoc-hoa-versace-bright-crystal"
                                                                           data-handle="nuoc-hoa-versace-bright-crystal"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346783">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/nuoc-hoa-versace-bright-crystal"
                                                                    title="Nước hoa Versace Bright Crystal">Nước hoa
                                                                    Versace Bright Crystal</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065221"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">1.800.000₫</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <div class="saleright">
                                                                -
                                                                8%

                                                            </div>

                                                            <a class="image_link display_flex"
                                                               href="/sua-tam-sparkling-citrus-lam-muot-da"
                                                               title="Sữa tắm Sparkling Citrus làm mượt da">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/18-6eb75f8e-d198-4ad1-9544-ba34052d2e00.jpg?v=1571455219010"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/18-6eb75f8e-d198-4ad1-9544-ba34052d2e00.jpg?v=1571455219010"
                                                                     alt="Sữa tắm Sparkling Citrus làm mượt da"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065220"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/sua-tam-sparkling-citrus-lam-muot-da"
                                                                           data-handle="sua-tam-sparkling-citrus-lam-muot-da"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346781">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/sua-tam-sparkling-citrus-lam-muot-da"
                                                                    title="Sữa tắm Sparkling Citrus làm mượt da">Sữa tắm
                                                                    Sparkling Citrus làm mượt da</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065220"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">1.200.000₫</span>
                                                                        </div>

                                                                        <div class="old-price">
						<span class="price product-price-old">
							1.300.000₫
						</span>
                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <div class="saleright">
                                                                -
                                                                8%

                                                            </div>

                                                            <a class="image_link display_flex"
                                                               href="/sua-tam-dang-kem-victoria-s-secret"
                                                               title="Sữa tắm dạng kem Victoria’s Secret">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/863bac1b08b7740789672cdcceaae8.jpg?v=1571388873760"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/863bac1b08b7740789672cdcceaae8.jpg?v=1571388873760"
                                                                     alt="Sữa tắm dạng kem Victoria’s Secret"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065219"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/sua-tam-dang-kem-victoria-s-secret"
                                                                           data-handle="sua-tam-dang-kem-victoria-s-secret"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input class="hidden" type="hidden"
                                                                               name="variantId" value="28346777">
                                                                        <button
                                                                            class="btn btn-cart btn btn-circle left-to"
                                                                            title="Tùy chọn" type="button"
                                                                            onclick="window.location.href='/sua-tam-dang-kem-victoria-s-secret'">
                                                                            Tùy chọn
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/sua-tam-dang-kem-victoria-s-secret"
                                                                    title="Sữa tắm dạng kem Victoria’s Secret">Sữa tắm
                                                                    dạng kem Victoria’s Secret</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065219"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">860.000₫</span>
                                                                        </div>

                                                                        <div class="old-price">
						<span class="price product-price-old">
							930.000₫
						</span>
                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <a class="image_link display_flex"
                                                               href="/phan-nen-bareminerals-original-foundation-broad-spectrum"
                                                               title="Phấn nền bareMinerals Original">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/19.jpg?v=1571455293873"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/19.jpg?v=1571455293873"
                                                                     alt="Phấn nền bareMinerals Original"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065218"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/phan-nen-bareminerals-original-foundation-broad-spectrum"
                                                                           data-handle="phan-nen-bareminerals-original-foundation-broad-spectrum"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346776">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/phan-nen-bareminerals-original-foundation-broad-spectrum"
                                                                    title="Phấn nền bareMinerals Original">Phấn nền
                                                                    bareMinerals Original</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065218"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">560.000₫</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <div class="saleright">
                                                                -
                                                                6%

                                                            </div>

                                                            <a class="image_link display_flex"
                                                               href="/nuoc-hoa-chloe-eau-de-parfum"
                                                               title="Nước hoa Chloé Eau de Parfum">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/20.jpg?v=1571455401480"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/20.jpg?v=1571455401480"
                                                                     alt="Nước hoa Chloé Eau de Parfum"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065217"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/nuoc-hoa-chloe-eau-de-parfum"
                                                                           data-handle="nuoc-hoa-chloe-eau-de-parfum"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346773">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/nuoc-hoa-chloe-eau-de-parfum"
                                                                    title="Nước hoa Chloé Eau de Parfum">Nước hoa Chloé
                                                                    Eau de Parfum</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065217"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">1.500.000₫</span>
                                                                        </div>

                                                                        <div class="old-price">
						<span class="price product-price-old">
							1.600.000₫
						</span>
                                                                        </div>

                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <a class="image_link display_flex"
                                                               href="/nuoc-hoa-yves-saint-laurent-black-opium"
                                                               title="Nước hoa Yves Saint Laurent Black">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/21.jpg?v=1571455469957"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/21.jpg?v=1571455469957"
                                                                     alt="Nước hoa Yves Saint Laurent Black"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065216"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/nuoc-hoa-yves-saint-laurent-black-opium"
                                                                           data-handle="nuoc-hoa-yves-saint-laurent-black-opium"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346772">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a
                                                                    href="/nuoc-hoa-yves-saint-laurent-black-opium"
                                                                    title="Nước hoa Yves Saint Laurent Black">Nước hoa
                                                                    Yves Saint Laurent Black</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065216"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">1.350.000₫</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-fix-2 product-col clear">
                                                <div class="item_product_main margin-bottom-15">


                                                    <div class="product-loop-1 product-loop-2 product-base">
                                                        <div class="product-thumbnail">

                                                            <a class="image_link display_flex"
                                                               href="/son-yves-saint-laurent"
                                                               title="Son Yves Saint Laurent">
                                                                <img class="lazyload loaded"
                                                                     src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/22.jpg?v=1571455579877"
                                                                     data-src="//bizweb.dktcdn.net/thumb/medium/100/368/647/products/22.jpg?v=1571455579877"
                                                                     alt="Son Yves Saint Laurent"
                                                                     data-was-processed="true">
                                                            </a>
                                                            <div class="product-action clearfix hidden-xs">
                                                                <form action="/cart/add" method="post"
                                                                      class="variants form-nut-grid"
                                                                      data-id="product-actions-16065215"
                                                                      enctype="multipart/form-data">
                                                                    <div class="group_action">

                                                                        <a title="Xem nhanh"
                                                                           href="/son-yves-saint-laurent"
                                                                           data-handle="son-yves-saint-laurent"
                                                                           class="xem_nhanh btn-circle btn_view btn right-to quick-view hidden-xs hidden-sm hidden-md">
                                                                            Xem nhanh
                                                                        </a>


                                                                        <input type="hidden" name="variantId"
                                                                               value="28346771">
                                                                        <button
                                                                            class="btn-buy btn-cart btn btn-circle left-to add_to_cart "
                                                                            title="Đặt hàng ngay">
                                                                            Mua ngay
                                                                        </button>


                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="product-info a-center">
                                                            <h3 class="product-name"><a href="/son-yves-saint-laurent"
                                                                                        title="Son Yves Saint Laurent">Son
                                                                    Yves Saint Laurent</a></h3>
                                                            <div class="bizweb-product-reviews-badge"
                                                                 data-id="16065215"></div>
                                                            <div class="product-hideoff">
                                                                <div class="product-hide">


                                                                    <div class="price-box clearfix">
                                                                        <div class="special-price">
                                                                            <span
                                                                                class="price product-price">729.000₫</span>
                                                                        </div>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="section pagenav">

                                            <nav class="clearfix relative nav_pagi w_100">
                                                <ul class="pagination clearfix">

                                                    <li class="page-item disabled"><a class="page-link" href="#"><i
                                                                class="fa fa-angle-left"></i></a></li>


                                                    <li class="active page-item disabled"><a class="page-link"
                                                                                             href="javascript:;">1</a>
                                                    </li>


                                                    <li class="page-item"><a class="page-link" onclick="doSearch(2)"
                                                                             href="javascript:;">2</a></li>


                                                    <li class="page-item hidden-xs"><a class="page-link"
                                                                                       onclick="doSearch(2)"
                                                                                       href="javascript:;"><i
                                                                class="fa fa-angle-right" aria-hidden="true"></i>
                                                        </a></li>

                                                </ul>
                                            </nav>
                                            <script>
                                                var cuPage = 1
                                            </script>

                                        </div>

                                    </section>


                                </div>

                                <div id="open-filters" class="open-filters hidden-lg">
                                    <i class="fa fa-align-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    var colName = "Tất cả sản phẩm";
                    var colId = 0;
                </script>
            </div>


@stop
