@extends('admin.layout.default')

@section('title', isset($query) ? 'Chỉnh sửa Faq' : 'Tạo Faq')

@section('content')

    <div class="pagetitle">
        <h1>Các câu hỏi thường gặp</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Faq</li>
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
                            {{ isset($query) ? 'Chỉnh sửa Faq' : 'Tạo Faq' }}
                        </h5>

                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate
                              @if(isset($query))
                                  action="{{ route('cms.'.\App\Helpers\Constant::FAQ.'.update', $query->id) }}"
                              @else
                                  action="{{ route('cms.'.\App\Helpers\Constant::FAQ.'.store') }}"
                              @endif
                              method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label form-label">Tiêu đề</label>
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
                                <label for="content" class="col-sm-2 col-form-label form-label">Nội dung</label>
                                <div class="col-sm-10">
                                    <textarea name="content" type="text" class="form-control"
                                              id="content"
                                              placeholder="Nội dung ......."
                                              required>{{ isset($query) ? $query->content : '' }}</textarea>
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