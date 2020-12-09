@extends('back.layouts.master')
@section('content')
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Cars Models</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Utility</a></li>
                                    <li class="breadcrumb-item active">Starter Page</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <p id="p"></p>
                <!-- end page title -->
                <div class="row">
                    {{--                    @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif--}}

                    <div class="col-12">
                        <button type="button" class="btn btn-success btn-rounded waves-effect waves-light mb-2 mr-2" data-toggle="modal" data-target="#myModal">
                            <i class="mdi mdi-plus mr-1"></i> Add New Models</button>



                        <div class="card">
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Model Name</th>
                                        <th>Mark Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                <tbody>

                                        <tr>
                                            <td>dffgb</td>
                                            <td>rtghh</td>
                                            <td>
                                                <a href="javascript:void(0)" class="mr-3 text-primary model_click " data-toggle="modal" model_id="" data-target="#myModaledit" data-placement="top" title="" data-original-title="Edit">
                                            <i class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" id="make_del" class="text-danger show-alert " data-toggle="modal" data-target="#myModaldelete"  m-id="{{--{{$make->id}}--}}" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    @endsection
    @section('style')
        <!-- DataTables -->
            <link href="{{asset('admin')}}/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
            <link href="{{asset('admin')}}/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
            <!-- Responsive datatable examples -->
            <link href="{{asset('admin')}}/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    @endsection
    @section('script')
        <!-- Required datatable js -->
            <script src="{{asset('admin')}}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
            <script src="{{asset('admin')}}/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
            <!-- Buttons examples -->
            <script src="{{asset('admin')}}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
            <script src="{{asset('admin')}}/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
            <script src="{{asset('admin')}}/assets/libs/jszip/jszip.min.js"></script>
            <script src="{{asset('admin')}}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
            <script src="{{asset('admin')}}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
            <script src="{{asset('admin')}}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
            <script src="{{asset('admin')}}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
            <script src="{{asset('admin')}}/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
            <!-- Responsive examples -->
            <script src="{{asset('admin')}}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
            <script src="{{asset('admin')}}/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
            <!-- Datatable init js -->
            <script src="{{asset('admin')}}/assets/js/pages/datatables.init.js"></script>



@endsection
