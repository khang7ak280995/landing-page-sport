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
                        <li><a href="#">Home</a></li>
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
                    <article class="col-sm-4 masonrys text-center">
                        <img src="{{asset('frontend/images/img2.jpg')}}" alt=""/>
                        <h4>john doe</h4>
                        <span>Golfer trúng giải hio</span>
                        <br>
                        <p>420000000 yarn| Gậy 8 sắt| Long Biên | HDC:5.9
                        </p>

                    </article>
                    <article class="col-sm-4 masonrys text-center">
                        <img src="{{asset('frontend/images/img2.jpg')}}" alt=""/>
                        <h4>john doe</h4>
                        <span>Golfer trúng giải hio</span>
                        <br>
                        <p>420000000 yarn| Gậy 8 sắt| Long Biên | HDC:5.9
                        </p>

                    </article>
                    <article class="col-sm-4 masonrys text-center">
                        <img src="{{asset('frontend/images/img2.jpg')}}" alt=""/>
                        <h4>john doe</h4>
                        <span>Golfer trúng giải hio</span>
                        <br>
                        <p>420000000 yarn| Gậy 8 sắt| Long Biên | HDC:5.9
                        </p>

                    </article>
                    <article class="col-sm-4 masonrys text-center">
                        <img src="{{asset('frontend/images/img2.jpg')}}" alt=""/>
                        <h4>john doe</h4>
                        <span>Golfer trúng giải hio</span>
                        <br>
                        <p>420000000 yarn| Gậy 8 sắt| Long Biên | HDC:5.9
                        </p>

                    </article>
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