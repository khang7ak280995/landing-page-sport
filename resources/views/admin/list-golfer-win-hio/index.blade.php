@extends('admin.layout.default')

@section('title', \App\Helpers\Constant::TEXT_CONVERT[\App\Helpers\Constant::INSURANCE_PACKAGE])

@section('content')

    <div class="pagetitle">
        <h1>Slide Home</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Danh sách Golfer trúng HIO</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    @include('admin.component.alert-error')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Table Insurance Package</h5>

                        <table class="display table-index" id="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Ngày trúng</th>
                                <th class="text-center">Ảnh</th>
                                <th class="text-center">Giá trị</th>
                                <th class="text-center">Khoảng cách</th>
                                <th class="text-center">Gậy</th>
                                <th class="text-center">Sân</th>
                                <th class="text-center">HDC</th>
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
                ajax: '{!! route('cms.'.\App\Helpers\Constant::LIST_GOLFER_WIN_HIO.'.getDataTable') !!}',
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
                    {data: 'date_post', name: 'date_post', orderable: false, searchable: false},
                    {data: 'link_image', name: 'link_image', orderable: false, searchable: false},
                    {data: 'amount', name: 'amount', orderable: false, searchable: false},
                    {data: 'yard', name: 'yard', orderable: false, searchable: false},
                    {data: 'stick', name: 'stick', orderable: false, searchable: false},
                    {data: 'facility', name: 'facility', orderable: false, searchable: false},
                    {data: 'hdc', name: 'hdc', orderable: false, searchable: false},
                    {data: 'is_show', name: 'is_show', orderable: false, searchable: false, className: "text-center"},
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