@extends('admin.layout.default')

@section('title', isset($query) ? 'Chỉnh sửa Golfer trúng HIO' : 'Tạo Golfer trúng HIO')

@section('content')

    <div class="pagetitle">
        <h1>Golfer trúng HIO</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Golfer Win HIO</li>
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
                            {{ isset($query) ? 'Chỉnh sửa Golfer trúng HIO' : 'Tạo Golfer trúng HIO' }}
                        </h5>

                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate
                              @if(isset($query))
                                  action="{{ route('cms.'.\App\Helpers\Constant::LIST_GOLFER_WIN_HIO.'.update', $query->id) }}"
                              @else
                                  action="{{ route('cms.'.\App\Helpers\Constant::LIST_GOLFER_WIN_HIO.'.store') }}"
                              @endif
                              method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-sm-2 col-form-label form-label">Tên Golfer</label>
                                <div class="col-sm-10">
                                    <input name="name" type="text" class="form-control" id="name"
                                           value="{{ isset($query) ? $query->name : '' }}"
                                           placeholder="Tên Golfer........" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="date_post" class="col-sm-2 col-form-label form-label">Ngày trúng</label>
                                <div class="col-sm-10">
                                    <input name="date_post" type="date" class="form-control" id="date_post"
                                           value="{{ isset($query) ? $query->date_post : '' }}" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="amount" class="col-sm-2 col-form-label form-label">Giá tiền</label>
                                <div class="col-sm-10">
                                    <input name="amount" type="text" class="form-control textOnlyNumber" id="amount"
                                           value="{{ isset($query) ? $query->amount : '' }}"
                                           placeholder="Giá tiền......." required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="yard" class="col-sm-2 col-form-label form-label">Khoảng cách</label>
                                <div class="col-sm-10">
                                    <input name="yard" type="text" class="form-control textOnlyNumber" id="yard"
                                           value="{{ isset($query) ? $query->yard : '' }}"
                                           placeholder="Khoảng cách: 350 yard......." required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="stick" class="col-sm-2 col-form-label form-label">Thông tin gậy</label>
                                <div class="col-sm-10">
                                    <input name="stick" type="text" class="form-control" id="stick"
                                           value="{{ isset($query) ? $query->stick : '' }}"
                                           placeholder="Gậy 8 sắt ......." required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="facility" class="col-sm-2 col-form-label form-label">Sân</label>
                                <div class="col-sm-10">
                                    <input name="facility" type="text" class="form-control" id="facility"
                                           value="{{ isset($query) ? $query->facility : '' }}"
                                           placeholder="Tên sân ......." required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="hdc" class="col-sm-2 col-form-label form-label">Điểm Cap</label>
                                <div class="col-sm-10">
                                    <input name="hdc" type="text" class="form-control" id="hdc"
                                           value="{{ isset($query) ? $query->hdc : '' }}"
                                           placeholder="Điểm Cap: 5.1 ......." required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="image" class="col-sm-2 col-form-label form-label">Image</label>
                                <div class="col-sm-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="form-control image" type="file"
                                                   {{ !isset($query) ? 'required' : '' }}
                                                   name="image">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <img id="imageUser-Edit" class="previewImg"
                                                     src="{{ isset($query) ? asset($query->link_image) : '' }}"
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