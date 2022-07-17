@extends('admin.layout.default')

@section('title', 'Con số ấn tượng')

@section('content')

    <div class="pagetitle">
        <h1>{{ \App\Helpers\Constant::TEXT_CONVERT[\App\Helpers\Constant::IMPRESSIVE_NUMBER] }}</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Impressive Number</li>
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
                                  action="{{ route('cms.'.\App\Helpers\Constant::IMPRESSIVE_NUMBER.'.update', $query->id) }}"
                              @else
                                  action="{{ route('cms.'.\App\Helpers\Constant::IMPRESSIVE_NUMBER.'.store') }}"
                              @endif
                              method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="number" class="col-sm-2 col-form-label form-label">Số</label>
                                <div class="col-sm-10">
                                    <input name="number" type="text" class="form-control textOnlyNumber" id="number"
                                           value="{{ isset($query) ? $query->number : '' }}"
                                           placeholder="Nhập số........" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label form-label">Tên gói</label>
                                <div class="col-sm-10">
                                    <input name="title" type="text" class="form-control" id="title"
                                           value="{{ isset($query) ? $query->title : '' }}"
                                           placeholder="Tiêu đề ........" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="sub_title" class="col-sm-2 col-form-label form-label">Mô tả</label>
                                <div class="col-sm-10">
                                    <input name="sub_title" type="text" class="form-control" id="sub_title"
                                           value="{{ isset($query) ? $query->sub_title : '' }}"
                                           placeholder="Mô tả......." required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="icon" class="col-sm-2 col-form-label form-label">Icon</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="form-control icon" type="file"
                                                   {{ !isset($query) ? 'required' : '' }}
                                                   name="icon">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <img id="imageUser-Edit" class="previewImgIcon"
                                                     src="{{ isset($query) ? asset($query->icon) : '' }}"
                                                     style="width: 100%">
                                            </div>
                                        </div>
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