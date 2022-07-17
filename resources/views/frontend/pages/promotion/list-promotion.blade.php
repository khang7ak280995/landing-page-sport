@extends('frontend.layouts.main')
@section('content')
    <div class="mainheadlinewrapperpage">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="mainheadlinepage">
                        <h1>Khuyến mại</h1>
                        <p>Khuyến mại.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <ol class="breadcrumb">
                        <li><a href="/">Home</a></li>
                        <li class="active">Khuyến mại</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper100percent startAnimation animated" data-animate="fadeInUp">
        <div class="container">
            <div class="row blogpost">
                <div class="masonrycontainer2" id="masonrycontainer2">
                    @forelse ($promotions as $item)
                        <article class="col-sm-6 masonrys">
                            <img src="{{asset($item->image)}}" alt=""/>
                            <div class="meta">
                                <p>  <i class="fa fa-clock-o"></i>  {{$item->created_at}} </p>
                                <p> <i class="fa fa-user"></i>   <a href="">   Admin</a>  </p>
{{--                                <p> <i class="fa fa-comment"></i>   <a href="">  Comments</a>  </p>--}}
{{--                                <p> <i class="fa fa-heart"></i>   <a href="">  Favourites</a>  </p>--}}
                            </div>
                            <h4>{{$item->title}}</h4>
                            <br>
                            <p>
                                {{$item->description}}
                            </p>
                            <div class="button1">
                                <a href="{{route('detail-promotion',$item->id)}}">Xem thêm </a>
                            </div>
                        </article>
                    @empty
                        <p>Không có khuyến mãi</p>
                    @endforelse


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
                <div class="col-sm-12">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
    </nav>
@endsection