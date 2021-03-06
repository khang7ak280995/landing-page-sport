@extends('admin.layout.default')

@section('title', 'Danh sach Slide home')

@section('content')

    <div class="pagetitle">
        <h1>Slide Home</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Slide Home</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    @include('admin.component.alert-error')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Custom Styled Validation</h5>

                        <table class="table-index display" id="table">
                            <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Description</th>
                                <th class="text-center">Image</th>
                                <th class="text-center">Show</th>
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
                ajax: '{!! route('cms.'.\App\Helpers\Constant::SLIDE_HOME.'.getDataTable') !!}',
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
                    {data: 'is_show', name: 'is_show', orderable: false, searchable: false, className: "text-center"},
                    {
                        data: 'action',
                        name: 'action',
                        className: "d-flex justify-content-around",
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
        HelperAdmin.confirmDelete()
    </script>
@endpush