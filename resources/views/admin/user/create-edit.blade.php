@extends('admin.layout.default')

@section('title', 'User')

@section('content')

    <div class="pagetitle">
        <h1>{{ \App\Helpers\Constant::TEXT_CONVERT[\App\Helpers\Constant::USER] }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">User</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    @include('admin.component.alert-error')

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ isset($query) ? 'Chỉnh sửa' : 'Tạo mới' }}
                        </h5>

                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate
                              @if(isset($query))
                                  action="{{ route('cms.'.\App\Helpers\Constant::USER.'.update', $query->id) }}"
                              @else
                                  action="{{ route('cms.'.\App\Helpers\Constant::USER.'.store') }}"
                              @endif
                              method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label form-label">Tên</label>
                                <div class="col-sm-10">
                                    <input name="name" type="text" class="form-control" id="name"
                                           value="{{ isset($query) ? $query->name : '' }}"
                                           placeholder="Nhập tên ........" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="email" class="col-sm-2 col-form-label form-label">Email</label>
                                <div class="col-sm-10">
                                    <input name="email" type="email" class="form-control" id="email"
                                           value="{{ isset($query) ? $query->email : '' }}"
                                           placeholder="Tiêu đề ........" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-2 col-form-label form-label">Mật khẩu</label>
                                <div class="col-sm-10">
                                    <input name="password" type="password" class="form-control" id="password"
                                           {{ !isset($query) ? 'required' : '' }}
                                           placeholder="Mật khẩu......." >
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <button class="btn btn-primary" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection