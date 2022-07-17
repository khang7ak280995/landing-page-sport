@extends('frontend.layouts.main')
@section('content')
    <div class="mainheadlinewrapperpage">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="mainheadlinepage">
                        <h1>{{ $golfer->name }}</h1>
                        <p>Golfer</p>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <ol class="breadcrumb">
                        <li><a href="{{ route('home') }}">Trang chu</a></li>
                        <li class="active">Golfer trúng HIO</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <!-- one section -->
    <section class="wrapper100percent section1">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h4>
                        {{ $golfer->name }}
                    </h4>
                    <br>
                    <p>
                        {{ $golfer->description }}
                    </p>
                    <div class="col-md-12 padding-out">
                        <ul class="insurance-list">
                            <li>
                                <b>Số tiền trúng:</b>
                                <span>{{ number_format($golfer->amount) }} VNĐ</span>
                            </li>
                            <li>
                                <b>Sân - Hố:</b>
                                <span>{{ $golfer->facility }} - {{ $golfer->yard }} yard</span>
                            </li>
                            <li>
                                <b>Gậy:</b>
                                <span>{{ $golfer->stick }}</span>
                            </li>
                            <li>
                                <b>HDC:</b>
                                <span>{{ $golfer->hdc }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{ asset($golfer->link_image) }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- one section end -->

    <!-- one section -->
    <section class="wrapper100percent section1">
        <div class="sectionwrapper" id="menu4"></div>
        <div class="mainheadlinewrapper">
            <div class="mainheadline">
                <h2>Golfer Trúng HIO</h2>
                {{--                <h3>Suas iracundia his ea errem ridens nam an veniam equidem. Lorem ipsum dolor sit amet lore ipsum--}}
                {{--                    dolor sit amet--}}
                {{--                </h3>--}}
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($golferRelate as $golferItem)
                    @if($golfer->id == $golferItem->id)
                        @continue
                    @endif
                    <article class="col-sm-4 masonrys text-center">
                        <a href="{{ route(\App\Helpers\Constant::LIST_GOLFER_WIN_HIO . '.detail', $golferItem->slug) }}">
                            <img src="{{ asset($golferItem->link_image) }}" alt=""/>
                        </a>
                        <h4>{{ $golferItem->name }}</h4>
                        <span>Golfer trúng giải hio</span>
                        <br>
                        <p>{{ number_format($golferItem->amount) }} VNĐ | {{ $golferItem->yard }} yard | {{ $golferItem->stick }} | {{ $golferItem->facility }} | HDC:{{ $golferItem->hdc }}
                        </p>

                    </article>
                @endforeach
            </div>
        </div>
        <!-- container end -->
        <br>
    </section>
    <!-- one section end -->
@endsection