@extends('frontend.layouts.main')
@section('content')
<div class="mainheadlinewrapperpage">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="mainheadlinepage">
                    <h1>Khuyến mại</h1>
                    <p>Khuyến mại</p>
                </div>
            </div>
            <div class="col-sm-4 text-right">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li><a href="{{route('promotions')}}">Khuyến mại</a></li>
                    <li class="active">{{$promotion->title}}</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="wrapper100percent">
    <div class="container blogpost">
        <div class="row">
            <div class="col-md-8">
                <div class="detail_promotion">
                    <img src="{{asset($promotion->image)}}" alt=""/>
                </div>
                <p>  <i class="fa fa-clock-o"></i>  {{$promotion->created_at}} </p>
                <br>
                <br>
                <h4>{{$promotion->title}}</h4>
                <br>
                <p>{{$promotion->description}}
                </p>
                <div>
                 {!! $promotion->content !!}
                </div>

            </div>

            <div class="col-md-4">
                <div class="sidebar">
                    <div class="widget">
                        <input type="text" placeholder="search">
                    </div>
                    <div class="widget">
                        <h4>Các chương trình KM khác</h4>
                        <ul>
                            @forelse ($promotions as $item)
                            <li>
                                <a href="{{route('detail-promotion',$item->slug)}}">{{$item->title}} <i class="fa fa-angle-right"></i></a>
                            </li>
                            @empty
                                <p>Không có khuyến mãi</p>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
</div>

<!-- content is above this -->
<div class="push"></div>

@endsection