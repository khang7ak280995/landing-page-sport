@extends('admin.layout.default')

@section('title', 'Chỉnh sửa thông tin gói HIO')

@section('content')

    <div class="pagetitle">
        <h1>Form Validation</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Insurance Package</li>
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
                            {{ isset($query) ? 'Chỉnh sửa gói BH' : 'Tạo gói BH' }}
                        </h5>

                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate
                              @if(isset($query))
                                  action="{{ route('cms.'.\App\Helpers\Constant::INSURANCE_PACKAGE.'.update', $query->id) }}"
                              @else
                                  action="{{ route('cms.'.\App\Helpers\Constant::INSURANCE_PACKAGE.'.store') }}"
                              @endif
                              method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label form-label">Tên gói</label>
                                <div class="col-sm-10">
                                    <input name="title" type="text" class="form-control" id="title"
                                           value="{{ isset($query) ? $query->title : '' }}"
                                           placeholder="Tên gói........" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label form-label">Mô tả</label>
                                <div class="col-sm-10">
                                    <input name="description" type="text" class="form-control" id="description"
                                           value="{{ isset($query) ? $query->description : '' }}"
                                           placeholder="Mô tả......." required>
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
                                <label for="bonuses" class="col-sm-2 col-form-label form-label">Mức thưởng</label>
                                <div class="col-sm-10">
                                    <input name="bonuses" type="text" class="form-control textOnlyNumber" id="bonuses"
                                           value="{{ isset($query) ? $query->bonuses : '' }}"
                                           placeholder="Mức thưởng......." required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="hole_regulation" class="col-sm-2 col-form-label form-label">Hố quy
                                    định</label>
                                <div class="col-sm-10">
                                    <input name="hole_regulation" type="text" class="form-control" id="hole_regulation"
                                           value="{{ isset($query) ? $query->hole_regulation : '' }}"
                                           placeholder="Hố quy định......." required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="note" class="col-sm-2 col-form-label form-label">Ghi chú</label>
                                <div class="col-sm-10">
                                    <input name="note" type="text" class="form-control" id="note"
                                           value="{{ isset($query) ? $query->note : '' }}"
                                           placeholder="Ghi chú......." required>
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