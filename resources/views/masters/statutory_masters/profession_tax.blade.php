@extends('layout/layout')
@section('content')
    <div id="content" class="main-content">
        <div class="layout-px-spacing">


            <div style="margin-top: 3%;">
                @include('layout.alerts')

                <div>
                    <div>
                        <button type="button" class="btn btn-info mb-2 mr-2" data-toggle="modal"
                            data-target=".add-edit_modal"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>Add Profession Tax</button>


                        {{-- <button type="button" class="btn btn-danger mb-2 mr-2" data-toggle="modal"
                                data-target="#exampleModalRemoveAnimation"><svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                                        clip-rule="evenodd" />
                                </svg>
                                Bulk Delete
                            </button> --}}

                    </div>
                    <!-- Model Start -->
                    <div class="modal fade add-edit_modal" tabindex="-1" role="dialog"
                        aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Add New Profession Tax</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-x">
                                            <line x1="18" y1="6" x2="6" y2="18"></line>
                                            <line x1="6" y1="6" x2="18" y2="18"></line>
                                        </svg>
                                    </button>
                                </div>

                                <form method="post" id="profession_tax_form" enctype="multipart/form-data">

                                    @csrf

                                    <input type="hidden" name="id" id="profession_tax_id">
                                    <input type="hidden" name="old_file1" id="old_file1">
                                    

                                    <div class="row" style="padding: 10px;">

                                        <div class="col-md-6 form-group">
                                            <label>Modify Profession Tax Master</label>
                                            <input type="file" class="form-control" name="profession_tax_file" id="profession_tax_file">
                                            <span id="store_logo1"></span>
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label>Chart A</label>
                                            <input type="text" name="chartA" id="chartA" required
                                                class="form-control" placeholder="">
                                        </div>

                                        <div class="form-group" align="center" style="margin-top: 5%; padding-left:45%;">
                                            <button formaction="{{ route('statutory_masters.store-profession-tax') }}" type="submit"
                                            id="add-edit-btn" class="btn btn-warning">Add</button>
                                          
                                        </div>
                                       

                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- model end -->


            


                <!--bulk delete Model Start -->
                <div>
                    <div id="modalRemoveAnimation" class="col-lg-12 layout-spacing">
                        <div id="exampleModalRemoveAnimation" class="modal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalPopoversLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header" id="exampleModalPopoversLabel">
                                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                          <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                                        </button>
                                                      </div> -->
                                        <div class="modal-body">
                                            <p class="modal-text">Parberp.com says<br>
                                                Please select atleast one Checkbox
                                            </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-dark" data-dismiss="modal"><i
                                                    class="flaticon-cancel-12"></i> OK</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- model end -->

                <!--view Model Start -->
                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                    aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="myExtraLargeModalLabel">Promotion Info.</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-x">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg>
                                </button>
                            </div>

                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                    Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- model end -->
                <div class="row" id="cancel-row">

                    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                        <div class="widget-content widget-content-area br-6">
                            <div class="table-responsive mb-4 mt-4">
                                <table  class="table table-hover non-hover datatable_server" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Sr.No.</th>
                                            <th>Profession Tax</th>

                                            <th>Chart</th>

                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                       



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
@stop


@section('js')
    <script>
        $(document).ready(function() {


            $('#profession_tax_form').validate({
                //debug:true,
                ignore: ".ignore",
                rules: {
                    profession_tax_file: {
                        required: true,
                    },
                    chartA: {
                        required: true,
                    },
                   
                    
                },
                messages: {
                    profession_tax_file: {
                        required: "This field is required.",
                    },
                    chartA: {
                        required: "This field is required.",
                    },
                   

                },
                errorElement: 'label',
                errorPlacement: function(error, element) {
                    element.closest('.form-group').append(error);

                },
                submitHandler: function(form) {
                    // $("#load_screen").show();
                    return true;
                }
            });

            $(document).on('click', '.edit', function() {
                let id = $(this).attr('id');
                $.ajax({
                    url: "{{ route('statutory_masters.edit-profession-tax') }}",
                    method: "GET",
                    dataType: 'json',
                    data: {
                        id: id,
                    },
                    success: function(result) {
                        $("#profession_tax_file").addClass('ignore');
                        $("#profession_tax_id").val(result.id);
                        $("#chartA").val(result.chartA);

                        $("#store_logo1").text(result.profession_tax_file);
                        $("#old_file1").val(result.profession_tax_file);


                          $("#myLargeModalLabel").text("Edit Profession Tax Detail")
                        $("#add-edit-btn").text("Update");
                        let formaction = '{{ route('statutory_masters.update-profession-tax') }}';
                        $("#add-edit-btn").attr("formaction", formaction);

                    }

                })
            })

            $('.add-edit_modal').on('hidden.bs.modal', function() {
                $("#myLargeModalLabel").text("Add Profession Tax Detail");
                $("#store_logo").text('');

                $("#add-edit-btn").text("Add");
                $('#profession_tax_form').trigger("reset");
                let formaction = '{{ route('statutory_masters.store-profession-tax') }}';
                $("#add-edit-btn").attr("formaction", formaction);
                $("#asset_image").removeClass('ignore');


            });


            $(document).on('click', '.delete', function() {
                let id = $(this).attr('id');
                swal({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Delete',
                    padding: '2em'
                }).then(function(result) {
                    if (result.value) {
                        $.ajax({
                            url: "{{ route('statutory_masters.delete-profession-tax') }}",
                            method: "GET",
                            dataType: 'json',
                            data: {
                                id: id,
                            },
                            success: function(result) {
                                swal(
                                    'Deleted!',
                                    'Your Record has been deleted.',
                                    'success'
                                );
                                setTimeout(function() {
                                    location.reload();
                                }, 3000);
                            }
                        })
                    }
                })
            })


            var table = $('.datatable_server').DataTable({
                dom: '<"row"<"col-md-12"<"row"<"col-md-6"B><"col-md-6"f> > ><"col-md-12"rt> <"col-md-12"<"row"<"col-md-5"i><"col-md-7"p>>> >',
                buttons: {
                    buttons: [
                        // { extend: 'copy', className: 'btn' },
                        {
                            extend: 'csv',
                            className: 'btn'
                        },
                        {
                            extend: 'excel',
                            className: 'btn'
                        },
                        {
                            extend: 'print',
                            className: 'btn'
                        }
                    ]
                },
                "oLanguage": {
                    "oPaginate": {
                        "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                        "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                    },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "lengthChange": false,
                "paging": true,
                "searching": true,
                "serverSide": true,
                "pageLength": 10,
                "processing": true,
                "language": {
                    "emptyTable": "No Records Found",
                    "paginate": {
                        "previous": "<i class='fas fa-chevron-left'></i>",
                        "next": "<i class='fas fa-chevron-right'></i>",
                    },
                    "infoFiltered": "",
                    "processing": '<div class="loader_box sub_loader" > <div class="site_loader"><i class="fas fa-sync-alt fa-spin"></i></div> </div>'
                },

                "ajax": {
                    url: "{{ route('statutory_masters.get-profession-tax') }}",
                    type: "get",
                    data: function(d) {}
                },
                columns: [{
                        data: "DT_RowIndex",
                        orderable: true,
                        name: "DT_RowIndex",
                        width: "5%"
                    },
                    {
                        data: "profession_tax_file",
                        orderable: true,
                        name: "profession_tax_file" /*,width:"20%"*/
                    },

                    {
                        data: "chartA",
                        orderable: true,
                        name: "chartA",
                        width: "15%"
                    },
                   
                    
                    {
                        data: "action",
                        name: "action",
                        orderable: false,
                        className: "center text-center" /*,width:"10%"*/
                    },

                ],
                "order": [],
                "bFilter": false,
                "info": false,
                "responsive": true,
                "ordering": true,
            });
        })
    </script>
@stop
