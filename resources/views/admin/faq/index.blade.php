@extends('admin.layout.default')

@section('title', \App\Helpers\Constant::TEXT_CONVERT[\App\Helpers\Constant::FAQ])

@section('content')

    <div class="pagetitle">
        <h1>Slide Home</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Danh sách Các câu hỏi thường gặp</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    @include('admin.component.alert-error')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Table FAQ</h5>

                        <table class="table-index" id="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Tiêu đề</th>
                                <th class="text-center">Nội dung</th>
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
                ajax: '{!! route('cms.'.\App\Helpers\Constant::FAQ.'.getDataTable') !!}',
                scrollX: true,
                columns: [
                    {
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false,
                        className: "text-center"
                    },
                    {data: 'title', name: 'title', orderable: false, searchable: false},
                    {data: 'content', name: 'content', orderable: false, searchable: false},
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