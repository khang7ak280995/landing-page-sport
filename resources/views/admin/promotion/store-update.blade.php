@extends('admin.layout.default')

@section('title', 'Thêm chương trình khuyến mại')

@section('content')

    <div class="pagetitle">
        <h1>Thêm chương trình khuyến mại</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('cms.promotion.index')}}">Khuyến mại</a></li>
                <li class="breadcrumb-item active">Thêm mới</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

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
                    <div class="card-body">
                        <h5 class="card-title"></h5>

                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate
                              @if(isset($promotion))
                              action="{{ route('cms.promotion.update', $promotion->id) }}"
                              @else
                              action="{{ route('cms.promotion.store') }}"
                              @endif
                              method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label form-label">Title</label>
                                <div class="col-sm-10">
                                    <input name="title" type="text" class="form-control" id="title"
                                           value="{{old('title', @$promotion->title)}}"
                                           placeholder="Title........" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="description" class="col-sm-2 col-form-label form-label">Description</label>
                                <div class="col-sm-10">
                                    <input name="description" type="text" class="form-control" id="description"
                                           value="{{old('description', @$promotion->description)}}"
                                           placeholder="Description......." value="" required>
                                    <div class="valid-feedback">
                                        Looks good!
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="content" class="col-sm-2 col-form-label form-label">Nội dung</label>
                                <div class="col-sm-10">
                                    <textarea class="ckeditor" id="content_promotion" name="content" rows="6" cols="" style="width: 100%" >{{old('content', @$promotion->content)}}</textarea>
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
                                                   {{ !isset($promotion) ? 'required' : '' }}
                                                   name="image" >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <img id="imageUser-Edit" class="previewImg" src="{{ isset($promotion) ? asset($promotion->link_image) : '' }}" style="width: 100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <button class="btn btn-primary" type="submit">Cập nhật</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        initialCkeditor("content_promotion", "/");
        $('div.alert').delay(5000).slideUp(300);
    </script>
@endpush