@extends('backend.layout.master')
@section('title', 'Nula Cosmetic | Dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>{{$category->C_name}}</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-2" style="padding: 0px;">
                            <a href="{{route('products.create')}}" class="btn btn-success form-control btnAddNew">
                                <i class="fa fa-plus"></i> Thêm sản phẩm
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{$category->C_name}}</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                       aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable-buttons" class="table table-striped jambo_table table-bordered table-responsive bulk_action">
                                <thead>
                                <tr>
                                    <th class="text-center" style="width:5%">STT</th>
                                    <th class="text-center" style="width:20%">Hình ảnh</th>
                                    <th class="text-center" style="width:20%">Tên sản phẩm</th>
                                    <th class="text-center" style="width:20%">Loại sản phẩm</th>
                                    <th class="text-center" style="width:15%">Trạng thái</th>
                                    <th class="text-center" style="width:20%">Hành động</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach ($products as $value)
                                    {{$count = 0}}
                                    <tr>
                                        <td class="text-center">{{$count+1}}</td>
                                        <td class="text-center">
                                            <a href="{{route('products.edit', $value->id)}}"><img
                                                        src=""
                                                        alt="{{$value->Pro_name}}" title="{{$value->Pro_name}}"
                                                        width="150"></a>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('products.edit', $value->id)}}">{{$value->Pro_name}}</a>
                                        </td>
                                        <td class="text-center">
                                            {{$value->Pro_category_id}}
                                        </td>
                                        <td class="text-center">
                                            @if($value->Pro_active)
                                                <button type="button"
                                                        class="btn btn-round btn-success btn-xs btnChangeStatus' . {{$value->id}} . '"
                                                        onclick="btnChangeStatus(' . $value->id . ')">
                                                    Hiển thị
                                                </button>
                                            @else
                                                <button type="button"
                                                        class="btn btn-round btn-danger btn-xs btnChangeStatus' . {{$value->id}} . '"
                                                        onclick="btnChangeStatus(' . $value->id . ')">
                                                    Không hiển thị
                                                </button>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route('products.edit', $value->id)}}"
                                               class="btn btn-primary btn-sm"><i class="fa fa-edit"></i>
                                                Edit</a>
{{--                                            {{ Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $value->id]]) }}--}}
{{--                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}--}}
{{--                                            {{ Form::close() }}--}}
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
@endsection

@push('js')
<!-- jQuery <-->
<script src="{{asset('libs/fastclick/lib/fastclick.js')}}"></script>

<!-- NProgress -->
<script src="{{asset('libs/nprogress/nprogress.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('libs/iCheck/icheck.min.js')}}"></script>
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

<!-- Custom Theme Scripts -->
<script src="{{asset('build/js/custom.js')}}"></script>
<script src="{{asset('backend/js/products.js')}}"></script>
<script type="text/javascript">
    //----------------Datatables-----------
    var $datatable = $('#datatable-buttons');

    $datatable.dataTable({
        'order': [[1, 'asc']],
        'columnDefs': [
            {orderable: true, targets: [0]}
        ]
    });
</script>
@endpush
