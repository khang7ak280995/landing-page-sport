@extends('admin.layout.default')

@section('title', 'Danh sách User')

@section('content')

    <div class="pagetitle">
        <h1>{{ \App\Helpers\Constant::TEXT_CONVERT[\App\Helpers\Constant::USER] }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Impressive Number</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    @include('admin.component.alert-error')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">User</h5>

                        <table class="display  table-index" id="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(function () {
            $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('cms.'.\App\Helpers\Constant::USER.'.getDataTable') !!}',
                scrollX: true,
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        className: "text-center"
                    },
                    {data: 'name', name: 'name', orderable: false, searchable: false},
                    {data: 'email', name: 'email', orderable: false, searchable: false},
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
        HelperAdmin.confirmDelete()
    </script>
@endpush