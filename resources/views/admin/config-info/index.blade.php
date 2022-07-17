
@extends('admin.layout.default')

@section('title', 'Danh sách config')

@section('content')
    <div class="container-fluid">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if(session('message'))
            <div class="alert alert-success" role="alert">
                {{session('message')}}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger" role="alert">
                {{session('error')}}
            </div>
        @endif
        <div class="card">

            <div class="col-lg-12">
                <h2 class="h2 text-center">Danh sách thông tin config</h2>

            </div>
            <div class="pl-3">
                <button type="button" class="btn btn-info" href="" id="createNewProperty" data-toggle="modal" data-target="#ajaxModel"> Tạo config+</button>
            </div>
            <br>
            <table class="display table-bordered w-100 responsive" id="configTable">
                <thead>
                <tr class="text-center">
                    <th>STT</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Type</th>
                    <th>Hành động</th>
                </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
            <div class="modal fade" id="ajaxModel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="modelHeading">Thêm thông tin config</h4>
                        </div>
                        <div class="modal-body">
                            <form class="form-horizontal" action="{{route('cms.config-info.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="property_id" id="property_id">
                                <div class="form-group">
                                    <label for="title" class="col-sm-10 control-label">Title <span
                                                class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="title" name="title"
                                               placeholder="Nhập title config" value="" maxlength="50">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="content" class="col-sm-10 control-label">Content <span
                                                class="text-danger">*</span></label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" id="content" name="content"
                                               placeholder="Nhập content config" value="" maxlength="50">
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center pt-3">
                                    <button type="submit" class="btn btn-primary" value="create">Cập nhật
                                    </button>
                                    <button type="button" class="btn btn-secondary"  data-dismiss="modal">Hủy</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table = $('#configTable').DataTable({
                dom: "Bfrtip",
                processing: true,
                serverSide: true,
                ajax: "{{ route('cms.config-info.index') }}",
                language: {
                    search: 'Nhập tên',
                    lengthMenu: "Hiện thị _MENU_  kết quả",
                    info: "Hiển thị từ _START_ đến _END_ của _TOTAL_ kết quả",
                    paginate: {first: "Premier", previous: "Trang trước", next: "Trang sau", last: "Dernier"},
                    emptyTable: 'Không có dữ liệu'
                },
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'title', name: 'title'},
                    {data: 'content', name: 'content'},
                    {data: 'type', name: 'type'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                columnDefs: [
                    {
                        "targets": 0,
                        "className": "text-center",
                    },
                    {
                        "targets": 3,
                        "className": "text-center",
                    },
                ],

            });

            $('body').on('click', '.editProperty', function () {
                var property_id = $(this).data('id');
                $.get("{{ route('cms.config-info.index') }}" + '/' + property_id + '/edit', function (data) {
                    $('#modelHeading').html("Cập nhật thông tin config");
                    $('#saveBtn').val("edit-property");
                    $('#ajaxModel').modal('show');
                    $('#property_id').val(data.id);
                    $('#title').val(data.title);
                    $('#type').val(data.type);
                    $('#content').val(data.content);
                })
            });
            $('body').on('click', '.deleteProperty', function () {

                var config_id = $(this).data("id");
                confirm("Bạn có chắc chắn muốn xóa !");

                $.ajax({
                    type: "POST",
                    url: "{{ url('cms/config-info/destroy') }}" + '/' + config_id,
                    success: function (data) {
                        table.draw();
                    },
                    error: function (data) {
                        console.log('Error:', data);
                    }
                });
            });

        });

        $('div.alert').delay(5000).slideUp(500);
    </script>

@endpush
