@extends('frontend.layouts.main')
@section('content')
    <div class="mainheadlinewrapperpage">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="mainheadlinepage">
                        <h1>Danh sách golfer trúng HIO</h1>
                        <p>Golfer trúng HIO.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Golfer trúng HIO</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper100percent startAnimation animated" data-animate="fadeInUp">
        <div class="container">
            <div class="row blogpost">
                <div class="masonrycontainer2" id="masonrycontainer2">
                    @foreach($listGolfer as $golfer)
                        <article class="col-sm-4 masonrys text-center">
                            <a href="{{ route(\App\Helpers\Constant::LIST_GOLFER_WIN_HIO . '.detail', $golfer->slug) }}">
                                <img src="{{ asset($golfer->link_image) }}" alt=""/>
                            </a>
                            <h4>{{ $golfer->name }}</h4>
                            <span>Golfer trúng giải hio</span>
                            <br>
                            <p>{{ number_format($golfer->amount) }} VNĐ | {{ $golfer->yard }} yard | {{ $golfer->stick }} | {{ $golfer->facility }} | HDC:{{ $golfer->hdc }}
                            </p>

                        </article>
                    @endforeach
                </div>
                <!-- masonrycontainer end -->
            </div>
            <!-- row end -->
        </div>
        <!-- container end -->
    </div>
    <!-- wrapper100percent end -->
    <nav class="wrapper100percent">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    {{ $listGolfer->links() }}
                </div>
            </div>
        </div>
        <br>
    </nav>
@endsection