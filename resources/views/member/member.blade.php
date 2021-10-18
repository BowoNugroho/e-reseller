@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-md-6 mb-4 ">
                <div class="card shadow mb-4">
                    <div class="card-header d-sm-flex align-items-center justify-content-between  py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Members</h6>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-bs-toggle="modal"
                            data-bs-target="#exampleModal"><i class="bi bi-person-plus-fill"></i> Tambah Member</a>
                        @include('member.create')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No WA</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                    </tr>
                                    <tr>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                    </tr>
                                    <tr>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                    </tr>
                                    <tr>
                                        <td>Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                    </tr>
                                    <tr>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                    </tr>
                                    <tr>
                                        <td>Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                    </tr>
                                    <tr>
                                        <td>Angelica Ramos</td>
                                        <td>Chief Executive Officer (CEO)</td>
                                        <td>London</td>
                                        <td>47</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Edinburgh</td>
                                        <td>42</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Singapore</td>
                                        <td>28</td>
                                    </tr>
                                    <tr>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>San Francisco</td>
                                        <td>28</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 mb-4 ">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Informasi Detail Member</h6>
                        <div class="dropdown no-arrow">
                            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).on('ajaxComplete', function() {
            $(function() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
            });

            $(".ajaxSubmit").on('submit', function(e) {
                var form = $(this);

                $.ajax({
                    type: "POST",
                    url: form.attr('action'),
                    data: form.serialize(),
                    success: function(data, textStatus, jqXHR) {
                        var data = jqXHR.responseJSON;
                        window.location.href = data.url;
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        var data = jqXHR.responseJSON;
                        errorsHtml = '<div class="alert alert-danger"> <
                        ul > ';

                        $.each(data, function(key, value) {
                            errorsHtml += '<li>' + value[0] + '</li>';
                        });
                        errorsHtml += '</ul> < /
                        di > ';
                        $(".modalError").html(errorsHtml);
                    }
                });
                e.preventDefault();
                e.unbind();
            });
        });
    </script>
@endsection
