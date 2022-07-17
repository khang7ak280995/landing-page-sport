@extends('admin.layout.default')

@section('title', 'Danh sách khuyến mại')

@section('content')

    <div class="pagetitle">
        <h1>Danh sách khuyến mại</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Khuyến mại</li>
                <li class="breadcrumb-item active">Danh sách</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
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
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h5 class="card-title" style="padding-left: 20px"><a href="{{route('cms.promotion.create-edit')}}" class="btn btn-primary">Tạo khuyến mại</a> </h5>
                    <div class="card-body">
                        <table class="table table-bordered" id="table">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Nội dung</th>
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
@endsection

@push('scripts')
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var table= $('#table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('cms.promotion.index') !!}',
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'title', name: 'name' },
                    { data: 'content', name: 'content' },
                    { data: 'status', name: 'status' },
                    { data: 'created_at', name: 'created_at' },
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

            $('body').on('click', '.deleteProperty', function () {

                var config_id = $(this).data("id");
                confirm("Bạn có chắc chắn muốn xóa !");

                $.ajax({
                    type: "POST",
                    url: "{{ url('cms/promotion/delete') }}" + '/' + config_id,
                    success: function (data) {
                        console.log(data);
                        table.draw();
                    },
                    error: function (data) {
                        console.log(1111)
                        console.log('Error:', data);
                    }
                });
            });
        });
    </script>
@endpush