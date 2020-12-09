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
                        <!-- Modal insert -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="outer-repeater" id="model_add" >
                                            <div data-repeater-list="outer-group" class="outer">
                                                <div data-repeater-item="" class="outer">
                                                    <div class="form-group row mb-4">
                                                        @csrf
                                                        <label for="taskname" class="col-form-label col-lg-6">Mark Name</label>
                                                        <div class="col-lg-12">
                                                            <div class="form-group">
                                                                <select id="formrow-inputState" name="make_id" class="form-control">
                                                                    <option selected="">Choose...</option>
                                                                    @foreach($makes as $make)
                                                                    <option value="{{$make->id}}">{{$make->make_name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                        </div>
                                                        <label for="taskname" class="col-form-label col-lg-6">Model Name</label>
                                                        <div class="col-lg-12">
                                                            <input id="taskname" name="model_name" type="text" placeholder="Enter  model..." class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-start">
                                                <div class="col-lg-4">
                                                    <button type="button" id="model_click" class="btn btn-primary">Create Model</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal insert -->
                        {{--   my modal edit--}}
                        <div class="modal fade" id="myModaledit" role="dialog">
                            <div class="modal-dialog">

                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="outer-repeater" id="make_edit" >
                                            <div data-repeater-list="outer-group" class="outer">
                                                <div data-repeater-item="" class="outer">
                                                    <div class="col-lg-12">
                                                        <div class="form-group row mb-4">
                                                            <label for="taskname" class="col-form-label col-lg-6">Make Name</label>
                                                            @csrf
                                                            <select id="make_id" name="make_id" class="form-control">
                                                                @foreach($makes as $make)
                                                                    <option id="select" value="{{$make->id}}">{{$make->make_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row mb-4">
                                                        <label for="taskname" class="col-form-label col-lg-6">Model Name</label>
                                                        <div class="col-lg-12" id="in">

                                                            <label for="model_edit_name"></label>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row justify-content-start">
                                                <div class="col-lg-4">
                                                    <button type="button" id="model_click_edit" class="btn btn-primary">Update Model</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--   my modal edit--}}
                        {{--   my modal delete--}}
                        {{--
                                                <div class="modal fade" id="myModaldelete" role="dialog">
                                                    <div class="modal-dialog">

                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form method="POST" action="{{route('make_delete')}}" id="make_delete" >
                                                                    <div data-repeater-list="outer-group" class="outer">
                                                                        <div data-repeater-item="" class="outer">
                                                                            <div class="form-group row mb-4">
                                                                                @csrf
                                                                                <label for="taskname" class="col-form-label col-lg-6">Make Delete?</label>
                                                                                <input type="hidden" value="" name="delete_id" id="delete_id">

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row justify-content-start">
                                                                        <div class="col-lg-4">
                                                                            <button type="submit" id="make_click_delete" class="btn btn-primary">Delete Make</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        --}}
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
                                    @foreach($models as $model)
                                        <tr>
                                            <td id="trid{{$model->id}}">{{$model->model_name}}</td>
                                            <td id="trid2{{$model->make_id}}">{{$model->make_name}} </td>
                                            <td>
                                                <a href="javascript:void(0)" class="mr-3 text-primary model_click " data-toggle="modal" model_id="{{$model->id}}" data-target="#myModaledit" data-placement="top" title="" data-original-title="Edit">
                                            <i class="mdi mdi-pencil font-size-18"></i></a>
                                                <a href="javascript:void(0);" id="make_del" class="text-danger show-alert " data-toggle="modal" data-target="#myModaldelete"  m-id="{{--{{$make->id}}--}}" data-placement="top" title="" data-original-title="Delete"><i class="mdi mdi-close font-size-18"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
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

            <script>
                // When the user clicks on div, open the popup
                function myFunction() {
                    var popup = document.getElementById("myPopup");
                    popup.classList.toggle("show");
                }
            </script>
            {{--    model add script--}}
            <script>
                $( document ).ready(function() {
                    var button = document.querySelector('#model_click')
                    button.addEventListener('click', function (e){
                        e.preventDefault();
                        $.ajax({
                            type:'POST',
                            url: "{{route('model_add')}}",
                            //  url:'http://127.0.0.1:8000/back/attributes',
                            data:$('#model_add').serialize(),
                            success:function (e){
                                location.reload();
                                $('#myModal').modal('toggle');
                                location.reload();

                            }
                        });
                    })

                });
            </script>
            {{--    edit show model script--}}
            <script>

                $(function (){
                    $('.model_click').click(function (){

                        id=$(this)[0].getAttribute('model_id');

           $.ajax({
                            type:'get',
                            url: "{{route('get_model')}}",
                            data:{id:id},
                            success:function (e) {
                                $("#in").html('<input type="text" id="model_edit_name" name="model_name"  class="form-control" >' +
                                    '<input type="hidden" id="model_edit_id" name="model_id"  class="form-control" >');
                                $("#model_edit_name").val(e.model_name);
                                $("#model_edit_id").val(e.id);

                            }

                        })
                    })
                })
            </script>
            {{--    update  modal script--}}
            <script>
                $( document ).ready(function() {
                    var button = document.querySelector('#model_click_edit')
                    button.addEventListener('click', function (e){
                        e.preventDefault();
                        id=$("#model_edit_id").val();
                        model_edit_name=$("#model_edit_name").val();
                        make_id=$("#make_id").val();
                        _token=$("input[name=_token]").val();
                        $.ajax({
                            type:'PUT',
                            url: "{{route('model_update')}}",
                            data:{
                                id:id,
                                model_edit_name:model_edit_name,
                                make_id:make_id,
                                _token:_token
                            },
                            success:function (e){
                                $('#trid'+e.id).text(e.model_name);
                                location.reload();
                               /* $('#trid2'+e.make_id).text(e.make_name);*/
                                $('#myModaledit').modal('toggle');
                            }
                        });
                    })
                });
            </script>

            <script>
    {{--
                $(function (){
                    $('.make_click_delete').click(function (){
                        id=$(this)[0].getAttribute('m-id');
                        $("#myModaldelete").mo
                       console.log(id);

                    })
                })
            </script>--}}


@endsection
