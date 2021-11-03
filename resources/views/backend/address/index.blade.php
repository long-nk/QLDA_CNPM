@extends('backend.layout.master')
@section('title', 'Thông tin cửa hàng | Dashboard')
@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left" style="width:100%;">
                    <h3 class="text-center">Quản lý thông tin cửa hàng</h3>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <div class="col-lg-2 col-md-2 col-sm-2" style="padding: 0px;">
                                <a class="btn btn-info form-control btnAddNew" style="border-radius: 0px;"
                                   href="{{route('info.edit', $pageInfo->id)}}">
                                    <i class="fa fa-edit"></i> Sửa thông tin
                                </a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-2">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view"
                                         src="{{isset($pageInfo->fileItem->url)?$pageInfo->fileItem->url:asset('images/logo.png')}}"
                                         alt="Avatar" title="Change the avatar">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h3>{{$pageInfo->name}} - {{$pageInfo->slogan}}</h3>
                            <ul class="list-unstyled user_data">
                                <li><i class="fa fa-map-marker user-profile-icon"></i> {{$pageInfo->address_office}}
                                </li>
                                <li>
                                    <i class="fa fa-phone"></i> {{$pageInfo->phone_number}}
                                </li>
                                <li>
                                    <i class="fa fa-envelope "></i> {{$pageInfo->email}}
                                </li>
                                <li>
                                    <i class="fa fa-money"></i> {{$pageInfo->mst}}
                                </li>
                                <li>
                                    <i class="fa fa-user"></i> {{$pageInfo->manager}}
                                </li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <br><br>
                        <div class="col-lg-2 col-md-2 col-sm-2" style="padding: 0px;">
                            <a href="javascript:void(0)" class="btn btn-success form-control btnAddNew"
                               data-toggle="modal" data-target="#modalAddAddress">
                                <i class="fa fa-plus"></i> Thêm địa chỉ</a>
                        </div>
                        <div class="col-md-12">
                            <!-- start user projects -->
                            <table class="data table table-striped no-margin">
                                <thead>
                                <tr>
                                    <th class="text-center" width="5%">STT</th>
                                    <th class="text-center">Địa chỉ</th>
                                    <th class="text-center">Số điện thoại</th>
                                    <th class="text-center">Ngày tạo</th>
                                    <th class="text-center">Ngày cập nhật</th>
                                    <th class="text-center">Hành động</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($pageInfo->address as $key => $value)
                                    <tr>
                                        <td class="text-center">{{$key + 1}}</td>
                                        <td>{{$value->address}}</td>
                                        <td class="text-center">{{$value->phone_number}}</td>
                                        <td class="text-center">{{$value->created_at}}</td>
                                        <td class="text-center">{{$value->updated_at}}</td>
                                        <td class="text-center">
                                            <a href="{{route('address.edit', $value->id)}}" type="button"
                                               class="btn btn-info btn-xs" style="min-width:100px;"><i
                                                        class="fa fa-trash"></i> Cập nhật
                                            </a>
                                            <form action="{{route('address.destroy', $value->id)}}" method="post">
                                                <input type="hidden" name="_method" value="DELETE">
                                                {{csrf_field()}}
                                                <button type="submit" onclick="ConfirmDelete()"
                                                        class="btn btn-danger btn-xs" name="actiondelete" value="1"
                                                        style="min-width:100px;"><i
                                                            class="fa fa-trash"></i> Xóa
                                                </button>
                                            </form>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /page content -->
    {{--model--}}
    <div id="modalAddAddress" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form action="{{route('address.store')}}" class="form-horizontal"
                  method='post'>
                {{csrf_field()}}
                <input type="hidden" name="page_info_id" value="{{$pageInfo->id}}">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;
                        </button>
                        <h4 class="modal-title text-center">Thêm địa chỉ mới</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="col-md-3 text-right">
                                <label class="control-label">Địa chỉ<span class="required">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="address" required/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3 text-right">
                                <label class="control-label">Số điện thoại<span class="required">*</span></label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" name="phone_number" required/>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Thêm</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            <i class="fa fa-close"></i> Close
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('js')
<!-- Datatables -->
<script src="{{asset('libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('libs/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('libs/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
<script src="{{asset('libs/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('libs/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>
<!-- Custom Theme Scripts -->

<script src="{{asset('backend/js/shop_address.js')}}"></script>
<script type="text/javascript">
    //----------------Datatables-----------
    var $datatable = $('#datatable-buttons');

    $datatable.dataTable({
        'order': [[1, 'asc']],
        'columnDefs': [
            {orderable: true, targets: [0]}
        ]
    });

    //Confirm Delete
    function ConfirmDelete() {
        var x = confirm("Bạn có thực sự muốn xóa địa chỉ này?");
        if (x)
            return true;
        else
            return false;
    }
</script>
@endpush