@extends('backend.layout.master')
@section('title', 'Nula Cosmetic | Dashboard')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3>Products</h3>
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
                            <h2>Products</h2>
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
                        <ul class="nav nav-tabs">
                            @foreach($categories as $key => $category)
                                <li><a href="{{route('products.list', $category->C_type)}}">{{$category->C_name}}</a></li>
{{--                                <li class="{{$key== 0 ?"active" : "" }}">--}}
{{--                                    <a data-toggle="tab" href="#{{$category->id}}">{{$category->C_name}}</a>--}}
{{--                                </li>--}}
                            @endforeach
                        </ul>

                        <div class="tab-content">
                            @foreach($categories as $i => $category)
                                <div id="{{$category->Id}}" class="tab-pane fade {{$i== 0 ?"in active" : "" }}">
                                    <div class="x_content">
                                        <table id="dat"
                                               class="table table-striped jambo_table table-bordered table-responsive bulk_action">
                                            <thead>
                                            <tr>
                                                <th class="text-center" style="width:5%">STT</th>
                                                <th class="text-center" style="width:20%">Hình ảnh</th>
                                                <th class="text-center" style="width:20%">Tên sản phẩm</th>
                                                <th class="text-center" style="width:20%">Giới thiệu</th>
                                                <th class="text-center" style="width:15%">Trạng thái</th>
                                                <th class="text-center" style="width:20%">Hành động</th>
                                            </tr>
                                            </thead>

                                            <tbody>
                                            @php $count = 0; @endphp
                                            @foreach ($products as $value)
                                                    <tr>
                                                        <td class="text-center">{{$count + 1}}</td>
                                                        <td class="text-center">
                                                            <a href="{{route('products.edit', $value->id)}}">
                                                                <img
                                                                    src="{{url('/')}}/{{$value->Pro_avatar}}"
                                                                    width="150"></a>
                                                        </td>
                                                        <input type="hidden" value="{{$value->Pro_name}}">
                                                        <td class="text-center">
                                                            <a href="{{route('products.edit', $value->id)}}">{{$value->Pro_name}}</a>
                                                        </td>
                                                        <td class="text-center">
                                                            {{$value->Pro_description}}
                                                        </td>
                                                        <td class="text-center">
                                                            @if($value->Pro_active)
                                                                <button type="button"
                                                                        class="btn btn-round btn-success btn-xs btnChangeStatus' . $value->id . '"
                                                                        onclick="btnChangeStatus(' . $value->id . ')">
                                                                    Hiển thị
                                                                </button>
                                                            @else
                                                                <button type="button"
                                                                        class="btn btn-round btn-danger btn-xs btnChangeStatus' . $value->id . '"
                                                                        onclick="btnChangeStatus(' . $value->id . ')">
                                                                    Không hiển thị
                                                                </button>
                                                            @endif
                                                        </td>
                                                        <td class="text-center">
                                                            <a href="{{route('products.edit', $value->id)}}" style="min-width:100px;"
                                                               class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Cập nhật</a>
                                                            <form action="{{route('products.destroy', $value->id)}}" method="post">
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                {{csrf_field()}}
                                                                <button type="submit" onclick="return ConfirmDelete()"
                                                                        class="btn btn-danger btn-xs" name="actiondelete" value="1"
                                                                        style="min-width:100px;"><i
                                                                        class="fa fa-trash"></i> Xóa
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                    @php $count++;@endphp

                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                {{--<script type="text/javascript">--}}
                                {{--//----------------Datatables-------------}}
                                {{--var $datatable = $('#datatable-buttons{{$i}}');--}}

                                {{--$datatable.dataTable({--}}
                                {{--'order': [[1, 'asc']],--}}
                                {{--'columnDefs': [--}}
                                {{--{orderable: true, targets: [0]}--}}
                                {{--]--}}
                                {{--});--}}
                                {{--</script>--}}
                            @endforeach
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
    <script type="text/javascript">
        //----------------Datatables-----------
        var $datatable = $('#datatable-buttons');

        $datatable.dataTable({
            'order': [[1, 'asc']],
            'columnDefs': [
                {orderable: true, targets: [0]}
            ]
        });

        $(":input").inputmask();
        function ConfirmDelete() {
            var x = confirm("Bạn có thực sự muốn xóa sản phẩm này?");
            if (x)
                return true;
            else
                return false;
        }
    </script>

@endpush
