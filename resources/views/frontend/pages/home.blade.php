@extends('frontend.layouts.main')
@section('content')
    <section class="wrapper100percent">
        <div class="flexslider">
            <ul class="slides">
                @if(isset($slideImage))
                    @foreach($slideImage as $item)
                        <li>
                            <img src="{{ asset($item->link_image) }}" alt=""/>
                            <div class="flex-caption flex-caption1">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-5 col-md-6 col-lg-push-8 col-md-push-6">
                                            <h1>
                                                {{ $item->title }}
                                            </h1>
                                            <p>
                                                {{ $item->description }}
                                            </p>
                                            <div class="button1">
                                                <a href="#menu6">Đăng Ký</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @else
                    <li>
                        <img src="{{ asset('frontend/images/slider1.jpg') }}" alt=""/>
                        <div class="flex-caption flex-caption1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-lg-push-8 col-md-push-6">
                                        <h1>
                                            Trao thưởng nhanh chóng - Thủ tục đơn giản
                                        </h1>
                                        <p>
                                            Trả thưởng trong 48h kể từ khi hoàn tất hồ sơ
                                        </p>
                                        <div class="button1">
                                            <a href="#menu6">Đăng Ký</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('frontend/images/slider1.jpg') }}" alt=""/>
                        <div class="flex-caption flex-caption1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-lg-push-8 col-md-push-6">
                                        <h1>
                                            Hội viên Năm "Cứ mua là trúng"
                                        </h1>
                                        <p>
                                            Đặc quyền 5K: Không giới hạn khoảng cách - Không giới hạn số lần trúng -
                                            Không
                                            giới hạn số trận đánh - Không cần khai báo khi chơi - Không thu thêm phí
                                            thường
                                            niên
                                        </p>
                                        <div class="button1">
                                            <a href="#menu6">Đăng Ký</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="{{ asset('frontend/images/slider1.jpg') }}" alt=""/>
                        <div class="flex-caption flex-caption1">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5 col-md-6 col-lg-push-8 col-md-push-6">
                                        <h1>
                                            Dịch vụ giải thưởng HIO theo ngày
                                        </h1>
                                        <p>
                                            "Chơi một tý, vui hết ý", chỉ với mức phí nhỏ golfer có cơ hội nhận về giải
                                            thưởng cao gấp 1000 lần, phù hợp cho các giải đấu, outing hoặc mua tặng bạn
                                            bè,..
                                        </p>
                                        <div class="button1">
                                            <a href="#menu6">Đăng Ký</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endif
            </ul>
        </div>
    </section>
    <!--slider end-->

    <!-- Start Gói Sản Phẩm -->
    <section class="wrapper100percent section">
        <div class="sectionwrapper" id="menu2"></div>
        <div class="mainheadlinewrapper">
            <div class="mainheadline">
                <h2>Gói Sản Phẩm</h2>
                <h3>

                </h3>
            </div>
        </div>
        <div class="wrapper100percent">
            <div class="row">
                <div class="services">
                    @foreach($insurancePackage as $packageItem)
                        <div class="one-service color{{ $loop->index + 1 }}">
                            <ul>
                                <li>
                                    <img src="{{ asset($packageItem->icon) }}" alt="">
                                    <h3>{{ $packageItem->title }}</h3>
                                    <ul>
                                        <li>
                                            <p>
                                                {{ $packageItem->description }}...
                                            </p>
                                            <a href="{{ route('insurance-package.detail', $packageItem->slug) }}">
                                                Xem thêm <i class="fa fa-angle-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- container end -->
    </section>
    <!-- Gói Sản Phẩm end -->

    <!-- Start About us -->
    <section class="wrapper100percent section">
        <div class="sectionwrapper" id="menu3"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <h3>Trở Thành Đại Lý Của VGS Sport</h3>
                    <br>
                    <p>
                        Suas iracundia his ea. Ex nec veniam singulis. No errem ridens eam, nam an veniam equidem nam an
                        veniam equidem. No errem ridens eam, nam an veniam equidem lorem. Eu legendos definitiones vim,
                        ea menandri voluptatum convenire quo ad lorem ipsum dolor.
                    </p>
                    <ul class="ul-list">
                        <li>
                            <i class="fa fa-check"></i> Ưu đãi & chiết khấu cao
                        </li>
                        <li>
                            <i class="fa fa-check"></i> Đại lý có thể là cá nhân, tổ chức hoặc doanh nghiệp
                        </li>
                        <li>
                            <i class="fa fa-check"></i> Hình thức đăng kí đơn giản
                        </li>
                        <li>
                            <i class="fa fa-check"></i> Được phép phân phối tất cả sản phẩm của VGS Sport
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="images/about.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- About us end -->

    <!-- Con số ấn tượng -->
    <section class="wrapper100percent timerwrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        @foreach($impressiveNumber as $impressiveNumberItem)
                            <div class="col-sm-4">
                                <div class="onecounter">
                                    <div class="onecounter-left">
                                        <img width="55px" height="61px" src="{{ asset($impressiveNumberItem->icon) }}" alt="">
                                    </div>
                                    <div class="onecounter-right">
                                        <p><span class="timer" data-to="{{ $impressiveNumberItem->number }}" data-speed="1000"
                                                 data-refresh-interval="1">1</span></p>
                                        <p>{{ $impressiveNumberItem->title }}</p>
                                        <h6>{{ $impressiveNumberItem->sub_title }}</h6>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- row end -->
                </div>
            </div>
        </div>
    </section>
    <!-- Con số ấn tượng end -->


    <div class="wrapper100percent section1a">
        <!-- carousel-->
        <div class="row gallery js-flickity" data-flickity-options='{
        "contain": true,
        "imagesLoaded": true,
        "autoPlay": true,
        "pageDots": false,
        "prevNextButtons": false,
        "wrapAround": false
        }'>

            <!-- carousel end -->
        </div>
    </div>

    <!--Chương Trình Khuyến Mại -->
    <section class="wrapper100percent section1">
        <div class="sectionwrapper" id="menu3"></div>
        <div class="mainheadlinewrapper">
            <div class="mainheadline">
                <h2>Chương Trình Khuyến Mại</h2>
                <h3>Ưu đãi dành riêng cho CLB
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
                                        <a class="text" href="team_single.html">Xem thêm <i
                                                    class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="team-name">
                                <h4>Ưu đãi đặc biệt 1</h4>
                                <h6>Founder</h6>
                                <p>Insurance agent with over 15 years of experience in insurance business.
                                </p>

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
                                        <a class="text" href="team_single.html">Xem thêm <i
                                                    class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="team-name">
                                <h4>Ưu đãi đặc biệt 2</h4>
                                <h6>Manager</h6>
                                <p>Insurance agent with over 10 years of experience in insurance business.
                                </p>

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
                                        <a class="text" href="team_single.html">Xem thêm <i
                                                    class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="team-name">
                                <h4>Ưu đãi đặc biệt 3</h4>
                                <h6>Agent</h6>
                                <p>Insurance agent with over 5 years of experience in insurance business.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- teamcolumn end -->
            </div>
        </div>
        <!-- container end -->
    </section>
    <!-- Chương Trình Khuyến Mại end -->

    <!-- Trúng HIO -->
    <section class="wrapper100percent section1">
        <div class="sectionwrapper" id="menu5"></div>
        <div class="mainheadlinewrapper">
            <div class="mainheadline">
                <h2>Golfer Trúng HIO</h2>
                <h3>Suas iracundia his ea errem ridens nam an veniam equidem. Lorem ipsum dolor sit amet lore ipsum
                    dolor sit amet
                </h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="wrapper100percent">
                    <div class="gallery js-flickity" data-flickity-options='{
        "contain": true,
        "imagesLoaded": true,
        "autoPlay": true,
        "pageDots": true,
        "prevNextButtons": false,
        "wrapAround": false
        }'>
                        <!-- one post -->
                        <div class="col-sm-4 homeblog">
                            <figure class="view1 view-first1">
                                <img src="images/bloghome1.jpg" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="blogpost.html">Xem thêm <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="wrapper100percent">
                                <h4>Golfer Nguyễn Tiến Minh </h4>
                                <div class="date">
                                    <p><i class="fa fa-clock-o"></i> 22/12/2015 </p>
                                    <p><i class="fa fa-user"></i> <a href=""> Admin</a></p>
                                </div>
                                <p>420,000,000đ
                                    149 yard | Gậy 8 sắt | SkyLake | HDC: 11 </p>
                            </div>
                        </div>
                        <!-- one post end -->
                        <!-- one post -->
                        <div class="col-sm-4 homeblog">
                            <figure class="view1 view-first1">
                                <img src="images/bloghome2.jpg" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="blogpost.html">Xem thêm <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="wrapper100percent">
                                <h4>Golfer Nguyễn Văn Cường</h4>
                                <div class="date">
                                    <p><i class="fa fa-clock-o"></i> 22/12/2015 </p>
                                    <p><i class="fa fa-user"></i> <a href=""> Admin</a></p>
                                </div>
                                <p>420,000,000đ
                                    159 yard | Gậy 8 sắt | Long Biên | HDC: 5.9</p>
                            </div>
                        </div>
                        <!-- one post end -->
                        <!-- one post -->
                        <div class="col-sm-4 homeblog">
                            <figure class="view1 view-first1">
                                <img src="images/bloghome3.jpg" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="blogpost.html">Xem thêm <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="wrapper100percent">
                                <h4>Golfer Nguyễn Trần Trọng Nghĩa</h4>
                                <div class="date">
                                    <p><i class="fa fa-clock-o"></i> 22/12/2015 </p>
                                    <p><i class="fa fa-user"></i> <a href=""> Admin</a></p>
                                </div>
                                <p>300,000,000đ
                                    120 yard | Gậy 8 sắt | The Buffs Hồ Tràm | HDC: 15.3 </p>
                            </div>
                        </div>
                        <!-- one post end -->
                        <!-- one post -->
                        <div class="col-sm-4 homeblog">
                            <figure class="view1 view-first1">
                                <img src="images/bloghome1.jpg" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="blogpost.html">Xem thêm <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="wrapper100percent">
                                <h4>Golfer Nguyễn Tiến Minh </h4>
                                <div class="date">
                                    <p><i class="fa fa-clock-o"></i> 22/12/2015 </p>
                                    <p><i class="fa fa-user"></i> <a href=""> Admin</a></p>
                                </div>
                                <p>420,000,000đ
                                    149 yard | Gậy 8 sắt | SkyLake | HDC: 11 </p>
                            </div>
                        </div>
                        <!-- one post end -->
                        <!-- one post -->
                        <div class="col-sm-4 homeblog">
                            <figure class="view1 view-first1">
                                <img src="images/bloghome2.jpg" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="blogpost.html">Xem thêm <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="wrapper100percent">
                                <h4>Golfer Nguyễn Văn Cường</h4>
                                <div class="date">
                                    <p><i class="fa fa-clock-o"></i> 22/12/2015 </p>
                                    <p><i class="fa fa-user"></i> <a href=""> Admin</a></p>
                                </div>
                                <p>420,000,000đ
                                    159 yard | Gậy 8 sắt | Long Biên | HDC: 5.9</p>
                            </div>
                        </div>
                        <!-- one post end -->
                        <!-- one post -->
                        <div class="col-sm-4 homeblog">
                            <figure class="view1 view-first1">
                                <img src="images/bloghome3.jpg" alt="">
                                <figcaption class="mask">
                                    <div class="maskinner">
                                        <a class="text" href="blogpost.html">Xem thêm <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </figcaption>
                            </figure>
                            <div class="wrapper100percent">
                                <h4>Golfer Nguyễn Trần Trọng Nghĩa</h4>
                                <div class="date">
                                    <p><i class="fa fa-clock-o"></i> 22/12/2015 </p>
                                    <p><i class="fa fa-user"></i> <a href=""> Admin</a></p>
                                </div>
                                <p>300,000,000đ
                                    120 yard | Gậy 8 sắt | The Buffs Hồ Tràm | HDC: 15.3 </p>
                            </div>
                        </div>
                        <!-- one post end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trúng HIO end -->


    <!-- FAQ -->
    <section class="wrapper100percent section3" id="menu6">
        <div class="left">
            <div class="left-inner">
                <h3>FAQ</h3>
                <br>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                   aria-expanded="true" aria-controls="collapseOne">
                                    Dịch vụ giải thưởng HIO là gì?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                             aria-labelledby="headingOne">
                            <div class="panel-body">
                                Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw
                                denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore
                                sustainable.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Điều kiện để tham gia dịch vụ HIO của VGS Sport?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Bassumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                haven't heard of them accusamus labore sustainable.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Làm sao để đăng kí mua dịch vụ giải thưởng HIO của VGS Sport?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingThree">
                            <div class="panel-body">
                                Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
                                assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                haven't heard of them accusamus labore sustainable.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Hạn mức giải thưởng tối đa golfer có thể nhận được là bao nhiêu?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingFour">
                            <div class="panel-body">
                                Bassumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                haven't heard of them accusamus labore sustainable.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Bảo hiểm HIO có giới hạn khoảng cách không?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel"
                             aria-labelledby="headingFive">
                            <div class="panel-body">
                                Bassumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson
                                cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings
                                occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                                haven't heard of them accusamus labore sustainable.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="right-inner">
                <h3>Đăng ký mua bảo hiểm HIO</h3>
                <!-- comment-form -->
                <form class="wrapper100percent" method="post" action="sendEmail.php">
                    <div id="main">

                        <div>
                            <p><input type="text" placeholder="Tên" name="name" id="name"/></p>
                        </div>
                        <div>
                            <p><input type="text" placeholder="Mã VGA" name="email" id="email"/></p>
                        </div>
                        <div>
                            <p><input type="text" placeholder="Số điện thoại" name="subject" id="subject"/></p>
                        </div>
                        <div>
                            <select id="form_service" name="service" placeholder="Service">
                                <option value="0"> Gói sản phẩm quan tâm</option>
                                <option value="1"> Gói D</option>
                                <option value="2"> Gói M</option>
                                <option value="3"> Gói Y</option>
                            </select>
                        </div>
                        <p>
                            <textarea placeholder="your message" name="comments" id="comments" rows="5"
                                      cols="5"></textarea>
                        </p>
                        <div class="buttoncontact">
                            <p>
                                <input type="submit" name="submit" id="submit" value="Gửi đi"/>
                            </p>
                        </div>
                        <ul class="col-sm-12" id="response"></ul>
                    </div>

                </form>
                <!-- comment-form-end end -->
            </div>
        </div>
    </section>
    <!-- FAQ end -->


    <!-- Map -->
    <section class="wrapper100percent section">
        <div class="sectionwrapper"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="map-overlay" onClick="style.pointerEvents='none'"></div>
                    <div class="map">
                        <iframe
                                src="https://maps.google.com/maps?sll=42.3232039,-71.1423464&amp;sspn=0.0974788,0.1757965&amp;q=new+yourk+near+Brookline,+MA&amp;ie=UTF8&amp;hq=new+york&amp;hnear=Brookline,+Norfolk+County,+Massachusetts&amp;t=m&amp;ll=42.343748,-71.142702&amp;spn=0.081827,0.222714&amp;output=embed">
                        </iframe>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="address">
                        <h4>Thông tin liên hệ</h4>
                        <p>Praesent tempus lacus sit enenatis
                            laoreet enean aliquet faucibus.
                        </p>
                        <ul class="ul-list">
                            <li>
                                <i class="fa fa-phone"></i> 033 25 11111
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> contact@vgssport.com
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i> Số 20 Võ Chí Công, Quận Cầu Giấy, Tp. Hà Nội, Việt Nam
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </section>
    <!-- Map end -->
@endsection