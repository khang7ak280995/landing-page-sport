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
                        <li><a href="#">Home</a></li>
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
                    <!-- blogpost one -->
                    <article class="col-sm-6 masonrys">
                        <img src="{{asset('frontend/images/img2.jpg')}}" alt=""/>
                        <div class="meta">
                            <p>  <i class="fa fa-clock-o"></i>  December 11 </p>
                            <p> <i class="fa fa-user"></i>   <a href="">   Admin</a>  </p>
                            <p> <i class="fa fa-comment"></i>   <a href="">  Comments</a>  </p>
                            <p> <i class="fa fa-heart"></i>   <a href="">  Favourites</a>  </p>
                        </div>
                        <h4>Chuong trinh chien dich 1</h4>
                        <br>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                            Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                        </p>
                        <div class="button1">
                            <a href="">Xem thêm </a>
                        </div>
                    </article>
                    <!-- blogpost one end -->
                    <!-- blogpost one -->
                    <article class="col-sm-6 masonrys">
                        <img src="{{asset('frontend/images/img2.jpg')}}" alt=""/>
                        <div class="meta">
                            <p>  <i class="fa fa-clock-o"></i>  December 11 </p>
                            <p> <i class="fa fa-user"></i>   <a href="">   Admin</a>  </p>
                            <p> <i class="fa fa-comment"></i>   <a href="">  Comments</a>  </p>
                            <p> <i class="fa fa-heart"></i>   <a href="">  Favourites</a>  </p>
                        </div>
                        <h4>Chuong trinh chien dich 2</h4>
                        <br>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit el illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.
                        </p>
                        <div class="button1">
                            <a href="">Xem thêm </a>
                        </div>
                    </article>
                    <!-- blogpost one end -->

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