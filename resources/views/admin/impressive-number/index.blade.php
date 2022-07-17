@extends('admin.layout.default')

@section('title', 'Danh sách gói BH')

@section('content')

    <div class="pagetitle">
        <h1>{{ \App\Helpers\Constant::TEXT_CONVERT[\App\Helpers\Constant::IMPRESSIVE_NUMBER] }}</h1>
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
                        <h5 class="card-title">Impressive Number</h5>

                        <table class="display  table-index" id="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Số</th>
                                <th class="text-center">Tiêu đề</th>
                                <th class="text-center">Tiêu đề phụ</th>
                                <th class="text-center">Icon</th>
                                <th class="text-center">Hiển thị</th>
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
                ajax: '{!! route('cms.'.\App\Helpers\Constant::IMPRESSIVE_NUMBER.'.getDataTable') !!}',
                scrollX: true,
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        className: "text-center"
                    },
                    {data: 'number', name: 'number', orderable: false, searchable: false},
                    {data: 'title', name: 'title', orderable: false, searchable: false},
                    {data: 'sub_title', name: 'sub_title', orderable: false, searchable: false},
                    {data: 'icon', name: 'icon', orderable: false, searchable: false, className: "text-center"},
                    {data: 'is_show', name: 'is_show', orderable: false, searchable: false},
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