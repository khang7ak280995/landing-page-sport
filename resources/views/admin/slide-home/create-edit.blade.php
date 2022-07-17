@extends('admin.layout.default')

@section('title', 'Danh sach Slide home')

@section('content')

    <div class="pagetitle">
        <h1>Form Validation</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Validation</li>
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

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Custom Styled Validation</h5>

                        <!-- Custom Styled Validation -->
                        <form class="row g-3 needs-validation" novalidate
                              @if(isset($query))
                                  action="{{ route('cms.slide-home.update', $query->id) }}"
                              @else
                                  action="{{ route('cms.slide-home.store') }}"
                              @endif
                              method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="title" class="col-sm-2 col-form-label form-label">Title</label>
                                <div class="col-sm-10">
                                    <input name="title" type="text" class="form-control" id="title"
                                           value="{{ isset($query) ? $query->title : '' }}"
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
                                           value="{{ isset($query) ? $query->description : '' }}"
                                           placeholder="Description......." value="" required>
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
                                                   name="image" >
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <img id="imageUser-Edit" class="previewImg" src="{{ isset($query) ? asset($query->link_image) : '' }}" style="width: 100%">
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