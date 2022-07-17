@extends('admin.layout.default')

@section('title', 'Danh sách khách hàng đăng kí')

@section('content')
    <div class="pagetitle">
        <h1>Danh sách khách hàng đăng kí</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Danh sách</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5 class="card-title" style="padding-left: 20px"> </h5>
                    <div class="card-body">
                        <table class="table table-bordered" id="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Vga Code</th>
                                <th>Package Buy</th>
                                <th>Trạng thái</th>
                                <th>Ngày tạo</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="ajaxModel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modelHeading"></h4>
                </div>
                <div class="modal-body">
                    <form id="propertyForm" name="propertyForm" class="form-horizontal" action="{{route('cms.customer-register.store')}}" method="POST">
                        @csrf
                        <input type="hidden" name="property_id" id="property_id">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" class="form-control" id="status" placeholder=""
                                       name="status" value="1" style="display: none" >
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn bg-primary" id="saveBtn" value="create">Xác nhận</button>
                            <button type="button" class="btn bg-secondary" data-bs-dismiss="modal">Đóng</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <script >
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('#table').DataTable({
                dom: "Bfrtip",
                processing: true,
                serverSide: true,
                ajax: "{{ route('cms.customer-register.index') }}",
                language: {
                    search: 'Nhập từ cần tìm',
                    lengthMenu: "Hiện thị _MENU_  kết quả",
                    info: "Hiển thị từ _START_ đến _END_ của _TOTAL_ kết quả",
                    paginate: {first: "Premier", previous: "Trang trước", next: "Trang sau", last: "Dernier"},
                    emptyTable: 'Không có dữ liệu'
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'phone', name: 'phone'},
                    {data: 'vga_code', name: 'vga_code'},
                    {data: 'package_buy', name: 'package_buy'},
                    {data: 'status', name: 'status'},
                    {data: 'created_at', name: 'created_at'},
                    {data: 'action', name: 'action', searchable: false},
                ],
                columnDefs:[{
                    "defaultContent": "",
                    "targets": "_all"
                }]
            });
        });
        $('body').on('click', '.editProperty', function () {
            var property_id = $(this).data('id');
            $.get("{{ route('cms.customer-register.index') }}" + '/' + property_id + '/edit', function (data) {
                $('#modelHeading').html("Xác nhận xử lý");
                $('#saveBtn').val("edit-property");
                $('#ajaxModel').modal('show');
                $('#property_id').val(data.id);
                // $('#status').val(data.status);
            })
        });
        $('div.alert').delay(5000).slideUp(300);
    </script>

@endpush