@extends('backend.layout.master')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Customers Manage</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <div class="col-sm-2" style="padding: 0px;">
                            <button class="btn btn-danger form-control btnDelete">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </div>
                        <div class="col-sm-2 pull-right" style="padding: 0px;">
                            <button class="btn btn-success form-control btnAddNew" data-toggle="modal" data-target="#addNewModal">
                                <i class="fa fa-user-plus"></i> Add Customer
                            </button>
                        </div>
                        <div class="clearfix"></div>
                        <!-- Modal -->
                        <div class="modal fade" id="addNewModal" tabindex="-1" role="dialog" aria-labelledby="addNewModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form class="form-horizontal form-label-left" id="frmAddCustomer" validate autocomplete="off" method="post">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Add Customer</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fullname">Full Name <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="fullname" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="fullname" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="birthdate">Birth Date <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" class="form-control has-feedback-left" id="birthdate" data-inputmask="'mask': '99/99/9999'" name="birthdate">
                                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                            <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="password" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="password" required="required" type="password">
                                                        </div>
                                                    </div>
                                                    <!--                                                    <div class="item form-group">
                                                                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Gender <span class="required">*</span>
                                                                                                            </label>
                                                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                                                <h5>
                                                                                                                    Male: <input type="radio" class="flat" name="gender" id="genderM" value="1" checked="" required /> 
                                                                                                                    Female: <input type="radio" class="flat" name="gender" id="genderF" value="0" />
                                                                                                                </h5>
                                                                                                            </div>
                                                                                                        </div>-->
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Phone Number <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="number" name="phone_number" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Address<span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="number" name="address" required="required" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success">Add new</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="x_content">
                        <table id="datatable-buttons" class="table table-striped table-bordered jambo_table table-responsive bulk_action">
                            <thead>
                                <tr>
                                    <th class="text-center " style="width:5%" >
                                        <input type="checkbox" id="check-all" class="flat" name="table_records">
                                    </th>
                                    <th class="text-center" style="width:5%">STT</th>
                                    <th class="text-center" style="width:25%">Fullname</th>
                                    <th class="text-center" style="width:10%">Birth Date</th>
                                    <th class="text-center" style="width:15%">Email</th>
                                    <th class="text-center" style="width:15%">Phone number</th>
                                    <th class="text-center" style="width:10%">Status</th>
                                    <th class="text-center" style="width:15%">Action</th>

                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                
                                foreach ($arrCustomers as $key => $value):
                                    ?>
                                    <tr>
                                        <td class="text-center" style="width:5%">
                                            <input type="checkbox" data-id="<?php echo $value->id; ?>" class="flat checkbox" name="table_records">
                                        </td>
                                        <td class="text-center" style="width:5%"><?php echo (int) ($key + 1) ?></td>
                                        <td class="text-center" style="width:25%"><a href="javascript:void(0)" style="font-weight: bold;" ng-click="showInfoCustomerModal('<?php echo $value->id; ?>')"><?php echo $value->fullname; ?></a></td>
                                        <td class="text-center" style="width:10%">
                                            <?php 
                                                $date = date_create($value->birth_date);
                                                echo date_format($date, 'd-m-Y');
                                            ?>
                                        </td>
                                        <td class="text-center" style="width:15%"><?php echo $value->email; ?></td>
                                        <td class="text-center" style="width:15%"><?php echo $value->phone_number; ?></td>
                                        <td class="text-center" style="width:10%">
                                            <?php echo $value->status ? 
                                                    '<button type="button" class="btn btn-round btn-success btn-xs btnChangeStatus' . $value->id . '" onclick="btnChangeStatus(' . $value->id . ')">Active</button>' : 
                                                    '<button type="button" class="btn btn-round btn-danger btn-xs btnChangeStatus' . $value->id . '" onclick="btnChangeStatus(' . $value->id . ')">Not Active</button>'; ?>
                                        </td>
                                        <td class="text-center" style="width:15%">
                                            <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> Delete</button>
                                        </td>

                                    </tr>
<?php endforeach; ?>
                            </tbody>
                        </table>
                        <div class="modal fade" id="customerInfoModal" tabindex="-1" role="dialog" aria-labelledby="customerInfoModal" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <form class="form-horizontal form-label-left" id="frmUpdateCustomer" validate autocomplete="off" method="post">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Customer Info</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="hidden" name="_token" value="{{ csrf_token()}}">
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="name" class="form-control col-md-7 col-xs-12" ng-model="customerInfo.name" value="@{{customerInfo.name}}" data-validate-length-range="6" data-validate-words="2" name="name" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="fullname">Full Name <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input id="fullname" class="form-control col-md-7 col-xs-12" ng-model="customerInfo.fullname" value="@{{customerInfo.fullname}}" data-validate-length-range="6" data-validate-words="2" name="fullname" required="required" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="birthdate">Birth Date <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" class="form-control has-feedback-left" ng-model="customerInfo.birth_date" value="@{{customerInfo.birth_date}}" id="birthdate" data-inputmask="'mask': '99/99/9999'" name="birthdate">
                                                            <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                                                            <span id="inputSuccess2Status" class="sr-only">(success)</span>
                                                        </div>
                                                    </div>
                                                    <!--                                                    <div class="item form-group">
                                                                                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Gender <span class="required">*</span>
                                                                                                            </label>
                                                                                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                                                                                <h5>
                                                                                                                    <label>
                                                                                                                        Male: <input type="radio" class="flat" name="gender" value="1" checked=""/>
                                                                                                                    </label>
                                                                                                                    <label>
                                                                                                                        Female: <input type="radio" class="flat" name="gender" value="0"/>
                                                                                                                    </label>
                                                                                                                    
                                                                                                                </h5>
                                                                                                            </div>
                                                                                                        </div>-->
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="email" id="email" name="email" ng-model="customerInfo.email" value="@{{customerInfo.email}}" required="required" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Phone Number <span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="number" name="phone_number" ng-model="customerInfo.phone_number" value="@{{customerInfo.phone_number}}" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                                    <div class="item form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Address<span class="required">*</span>
                                                        </label>
                                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                                            <input type="text" id="number" name="address" ng-model="customerInfo.address" value="@{{customerInfo.address}}" required="required" class="form-control col-md-7 col-xs-12">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-success btnUpdateCustomer" data-id='@{{customerInfo.id}}' ng-click="updateCustomerInfo()">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /page content -->
@endsection

@push('js')

<!-- Datatables -->
<script src="{{asset('public/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('public/libs/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('public/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('public/libs/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('public/libs/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('public/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('public/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('public/libs/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('public/libs/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('public/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('public/libs/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('public/libs/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
<script src="{{asset('public/libs/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('public/libs/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('public/libs/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('public/libs/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js')}}"></script>

<!-- Custom Theme Scripts -->

<script type="text/javascript" src="{{asset('public/backend/js/products.js')}}"></script>

<script type="text/javascript" src="{{asset('public/build/js/custom.js')}}"></script>
<script type="text/javascript" src="<?php echo FULL_SITE_ROOT; ?>public/backend/js/customers.js"></script>
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
</script>
@endpush