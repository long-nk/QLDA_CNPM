@extends('backend.layout.master')

@section('title', 'Cập nhật liên hệ ' . ' | Dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="col-md-12">
                    <h3 class="text-center">Cập nhật liên hệ</h3>
                </div>
                <div class="col-md-12" style="padding: 0px;">
                    <a href="{{URL::previous()}}" class="btn btn-default"><i class="fa fa-reply"></i> Quay lại</a>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Liên hệ</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <form class="form-horizontal form-label-left"
                                  action="{{route('contacts.update', $contact->id)}}" enctype="multipart/form-data"
                                  autocomplete="off" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input name="_method" type="hidden" value="PUT">
                                <div class="item form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Trạng thái
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-3 col-sm-6 col-xs-12">
                                        <select name="status" id="status" class="form-control"
                                                required>
                                            <option value="1" {{$contact->status == 1 ? "selected" : ""}}>Đã trả lời</option>
                                            <option value="0" {{$contact->status == 0 ? "selected" : ""}}>Chưa trả lời</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Cập nhật</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
@push('js')
    <script>
        //Show image to box when select
        function show_img_selected(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('.image_logo #img_show').attr('src', e.target.result);
                    $('.image_logo').attr('style', "min-height: auto");
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush
