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
                    <li><a href="#">Khuyến mại</a></li>
                    <li class="active">Chuong trinh khuyen mai 1</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="wrapper100percent">
    <div class="container blogpost">
        <div class="row">
            <div class="col-md-8">
                <img src="{{asset('frontend/images/img1.jpg')}}" alt=""/>
                <br>
                <br>
                <h4>This is headline</h4>
                <br>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                    Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                </p>
                <div class="panel panel-default">
                    <div class="panel-body">
                        Lorem ipsum dolor situtem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat
                    </div>
                </div>
                <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                </p>

                <h4>This is headline</h4>
                <br>
                <ul class="ul-list">
                    <li>
                        <i class="fa fa-check"></i> Ne nec detracto appellantur nec detracto appellantur
                    </li>
                    <li>
                        <i class="fa fa-check"></i> Aperiam accusamus vel eunec detracto appellantur
                    </li>
                    <li>
                        <i class="fa fa-check"></i> Nam albucius ponderum rationibu nec detracto appellantur
                    </li>
                    <li>
                        <i class="fa fa-check"></i> Ne nec detracto appellantur nec detracto appellantur
                    </li>
                    <li>
                        <i class="fa fa-check"></i> Aperiam accusamus vel eunec detracto appellantur
                    </li>
                    <li>
                        <i class="fa fa-check"></i> Nam albucius ponderum rationibu nec detracto appellantur
                    </li>
                </ul>

                <h4>This is headline</h4>
                <br>

            </div>

            <div class="col-md-4">
                <div class="sidebar">
                    <div class="widget">
                        <input type="text" placeholder="search">
                    </div>
                    <div class="widget">
                        <h4>Các chương trình KM khác</h4>
                        <ul>
                            <li>
                                <a href="">Ne nec detracto appellantur <i class="fa fa-angle-right"></i></a>
                            </li>
                            <li>
                                <a href="">Aperiam accusamus vel eu <i class="fa fa-angle-right"></i></a>
                            </li>
                            <li>
                                <a href="">Nam albucius ponderum rationibu <i class="fa fa-angle-right"></i></a>
                            </li>
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