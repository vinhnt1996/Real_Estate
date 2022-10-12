@extends("admin.layout.master")
@section("admin")
    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Data Tables</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                            <li class="breadcrumb-item active">Data Tables</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">List Admin</h4>
                                        <div id="datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                            <div class="row">
                                                <div class="col-sm-12 col-md-6">
                                                    <div class="dataTables_length" id="datatable_length">
                                                        </div></div><div class="col-sm-12 col-md-6"><div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="datatable" class="table table-bordered dt-responsive nowrap dataTable no-footer dtr-inline" style="border-collapse: collapse; border-spacing: 0px; width: 100%;" role="grid" aria-describedby="datatable_info">
                                            <thead>
                                            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 128px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 199px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 89px;" aria-label="Office: activate to sort column ascending">Address</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 39px;" aria-label="Age: activate to sort column ascending">Age</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 84px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" style="width: 75px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                            </thead>
                                            <tbody>
                                                <tr class="odd">
                                                    <td class="sorting_1 dtr-control">Airi Satou</td>
                                                    <td>Accountant</td>
                                                    <td>Tokyo</td>
                                                    <td>33</td>
                                                    <td>2008/11/28</td>
                                                    <td>$162,700</td>
                                                </tr>
                                            </tbody>
                                        </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="datatable_info" role="status" aria-live="polite"></div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable_paginate"><ul class="pagination pagination-rounded"><li class="paginate_button page-item previous disabled" id="datatable_previous"><a href="#" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="mdi mdi-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="datatable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="datatable_next"><a href="#" aria-controls="datatable" data-dt-idx="7" tabindex="0" class="page-link"><i class="mdi mdi-chevron-right"></i></a></li></ul></div></div></div></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                       

                       


                       


                      

                       


                        

                        
                    </div>
@endsection