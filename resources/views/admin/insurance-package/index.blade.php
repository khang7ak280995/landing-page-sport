@extends('admin.layout.default')

@section('title', 'Danh sách gói BH')

@section('content')

    <div class="pagetitle">
        <h1>Slide Home</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Insurance
                    <Package></Package>
                </li>
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

                        <table class="table-index" id="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Tên</th>
                                <th class="text-center">Mô tả</th>
                                <th class="text-center">Ảnh</th>
                                <th class="text-center">Giá tiền</th>
                                <th class="text-center">Mức thưởng</th>
                                <th class="text-center">Quy định hố</th>
                                <th class="text-center">Ghi chú</th>
                                <th class="text-center">Hiển thị</th>
                                <th class="text-center">Hiển thị trang Home</th>
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
                ajax: '{!! route('cms.'.\App\Helpers\Constant::INSURANCE_PACKAGE.'.getDataTable') !!}',
                scrollX: true,
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        className: "text-center"
                    },
                    {data: 'title', name: 'name', orderable: false, searchable: false},
                    {data: 'description', name: 'email', orderable: false, searchable: false},
                    {data: 'link_image', name: 'link_image', orderable: false, searchable: false},
                    {data: 'amount', name: 'amount', orderable: false, searchable: false},
                    {data: 'bonuses', name: 'bonuses', orderable: false, searchable: false},
                    {data: 'hole_regulation', name: 'hole_regulation', orderable: false, searchable: false},
                    {data: 'note', name: 'note', orderable: false, searchable: false},
                    {data: 'is_show', name: 'is_show', orderable: false, searchable: false, className: "text-center"},
                    {data: 'is_show_home_page', name: 'is_show_home_page', orderable: false, searchable: false},
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