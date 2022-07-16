@extends('frontend.layouts.main')
@section('content')
    <div class="mainheadlinewrapperpage">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="mainheadlinepage">
                        <h1>John Doe</h1>
                        <p>Insurance Agent</p>
                    </div>
                </div>
                <div class="col-sm-4 text-right">
                    <ol class="breadcrumb">
                        <li><a href="#">Trang chu</a></li>
                        <li class="active">Golfer trung hio</li>
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
                        Le Van Tung
                    </h4>
                    <br>
                    <p>
                        Suas iracundia his ea errem ridens nam an veniam equidem. Lorem ipsum dolor sit amet lore ipsum dolor sit amet.
                        Suas iracundia his ea errem ridens nam an veniam equidem. Lorem ipsum dolor sit amet lore ipsum dolor sit amet
                        Suas iracundia his ea errem ridens nam an veniam equidem. Lorem ipsum dolor sit amet lore ipsum dolor sit amet.
                        Suas iracundia his ea errem ridens nam an veniam equidem. Lorem ipsum dolor sit amet lore ipsum dolor sit amet
                        Suas iracundia his ea errem ridens nam an veniam equidem. Lorem ipsum dolor sit amet lore ipsum dolor sit amet.
                        Suas iracundia his ea errem ridens nam an veniam equidem. Lorem ipsum dolor sit amet lore ipsum dolor sit amet
                    </p>
                    <div class="col-md-12 padding-out">
                        <ul class="insurance-list">
                            <li>
                                <b>Years of experience:</b>     <span>9</span>
                            </li>
                            <li>
                                <b>Hometown:</b>     <span>NYC</span>
                            </li>
                            <li>
                                <b>Contract signed:</b>     <span>97</span>
                            </li>
                            <li>
                                <b>Available for work:</b>     <span>yes</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <img src="{{asset('frontend/images/man.jpg')}}" alt="">
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
                <h2>Golfer Trung HIO</h2>
                <h3>Suas iracundia his ea errem ridens nam an veniam equidem. Lorem ipsum dolor sit amet lore ipsum dolor sit amet
                </h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- teamcolumn  -->
                <div class="col-md-4">
                    <div class="teamcolumn">
                        <div class="teamcolumn-inner">
                            <figure class="view1 view-first1">
                                <img src="images/team1.jpg" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="#">read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="team-name">
                                <h4>Courteney Green</h4>
                                <h6>Founder</h6>
                                <p>Insurance agent with over 15 years of experience in insurance business.
                                </p>
                                <a href="https://www.facebook.com/pages/Rayoflightthemes/408688349185439"><i class="teamicon fa fa-facebook"></i></a>
                                <a href="#"><i class="teamicon fa fa-twitter"></i></a>
                                <a href="#"><i class="teamicon fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- teamcolumn end -->
                <!-- teamcolumn  -->
                <div class="col-md-4">
                    <div class="teamcolumn">
                        <div class="teamcolumn-inner">
                            <figure class="view1 view-first1">
                                <img src="images/team2.jpg" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="#">read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="team-name">
                                <h4>John Doe</h4>
                                <h6>Manager</h6>
                                <p>Insurance agent with over 10 years of experience in insurance business.
                                </p>
                                <a href="https://www.facebook.com/pages/Rayoflightthemes/408688349185439"><i class="teamicon fa fa-facebook"></i></a>
                                <a href="#"><i class="teamicon fa fa-twitter"></i></a>
                                <a href="#"><i class="teamicon fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- teamcolumn end -->
                <!-- teamcolumn  -->
                <div class="col-md-4">
                    <div class="teamcolumn">
                        <div class="teamcolumn-inner">
                            <figure class="view1 view-first1">
                                <img src="images/team3.jpg" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="#">read more <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="team-name">
                                <h4>Jane Doe</h4>
                                <h6>Agent</h6>
                                <p>Insurance agent with over 5 years of experience in insurance business.
                                </p>
                                <a href="https://www.facebook.com/pages/Rayoflightthemes/408688349185439"><i class="teamicon fa fa-facebook"></i></a>
                                <a href="#"><i class="teamicon fa fa-twitter"></i></a>
                                <a href="#"><i class="teamicon fa fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- teamcolumn end -->
            </div>
        </div>
        <!-- container end -->
        <br>
    </section>
    <!-- one section end -->
@endsection