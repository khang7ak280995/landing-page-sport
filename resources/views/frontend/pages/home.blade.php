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
                        @forelse($endows as $item)
                            <li>
                                <i class="fa fa-check"></i> {{$item->content}}
                            </li>
                        @empty
                            <p>Không có uu dai</p>
                        @endforelse
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
                                        <img width="55px" height="61px" src="{{ asset($impressiveNumberItem->icon) }}"
                                             alt="">
                                    </div>
                                    <div class="onecounter-right">
                                        <p><span class="timer" data-to="{{ $impressiveNumberItem->number }}"
                                                 data-speed="1000"
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
                @forelse ($promotions as $item)
                    <div class="col-md-4">
                        <div class="teamcolumn">
                            <div class="teamcolumn-inner">
                                <figure class="view1 view-first1">
                                    <img src="{{asset($item->image)}}" alt="">
                                    <figcaption class="mask">
                                        <div class="maskinner">
                                            <a class="text" href="{{route('detail-promotion',$item->slug)}}">Xem thêm <i
                                                        class="fa fa-angle-right"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="team-name">
                                    <h4>{{$item->title}}</h4>
                                    <h6>Founder</h6>
                                    <p>{{$item->description}}
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- teamcolumn end -->
                @empty
                    <p>Không có khuyến mãi</p>
                @endforelse
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
                    @forelse($golferHios as $item)
                        <!-- one post -->
                            <div class="col-sm-4 homeblog">
                                <figure class="view1 view-first1">
                                    <img src="{{asset($item->link_image)}}" alt="">
                                    <figcaption class="mask">
                                        <div class="maskinner">
                                            <a class="text" href="{{ route(\App\Helpers\Constant::LIST_GOLFER_WIN_HIO . '.detail', $item->slug) }}">Xem thêm <i
                                                        class="fa fa-angle-right"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
                                <div class="wrapper100percent">
                                    <h4>{{$item->name}} </h4>
                                    <div class="date">
                                        <p><i class="fa fa-clock-o"></i> {{$item->created_at}} </p>
                                        <p><i class="fa fa-user"></i> <a href=""> Admin</a></p>
                                    </div>
                                    <p>{{$item->amount}}đ
                                       {{$item->yard}} | {{$item->stick}} | {{$item->facility}} | HDC: {{$item->hdc}} </p>
                                </div>
                            </div>
                            <!-- one post end -->
                        @empty
                            <p>Không co golfer</p>
                        @endforelse
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
                    @forelse($faqs as $item)
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                       href="#{{$item->id}}" aria-expanded="false" aria-controls="collapseFive">
                                        {{$item->title}}
                                    </a>
                                </h4>
                            </div>
                            <div id="{{$item->id}}" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="headingFive">
                                <div class="panel-body">
                                    {{$item->content}}
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>Không có FAQ</p>
                    @endforelse
                </div>
            </div>
        </div>
        <div class="right">
            <div class="right-inner">
                <h3>Đăng ký mua bảo hiểm HIO</h3>
                <!-- comment-form -->
                <form class="wrapper100percent" method="post" id="form-register-insurance">
                    @csrf
                    <div id="main">

                        <div>
                            <p><input type="text" placeholder="Tên" name="name" id="name"/></p>
                        </div>
                        <div>
                            <p><input type="text" placeholder="Mã VGA" name="vga_code" id="vga_code"/></p>
                        </div>
                        <div>
                            <p><input type="text" placeholder="Số điện thoại" name="phone" id="phone"/></p>
                        </div>
                        <div>
                            <select id="form_service" name="service" placeholder="Service">
                                <option value="0"> Gói sản phẩm quan tâm</option>
                                <option value="D"> Gói D</option>
                                <option value="M"> Gói M</option>
                                <option value="Y"> Gói Y</option>
                            </select>
                        </div>
                        <p>
                            <textarea placeholder="your message" name="notes" id="notes" rows="5" cols="5"></textarea>
                        </p>
                        <div class="buttoncontact">
                            <p>
                                <button type="submit" class="btn btn-info" name="submit" id="submit" value="Gửi đi">Gửi
                                    thông tin
                                </button>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6146558536643!2d105.80327821473176!3d21.048099185987788!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab229fcbe2ab%3A0xe66c43cd49fe57c3!2zMjAgxJAuIFbDtSBDaMOtIEPDtG5nLCBYdcOibiBMYSwgVMOieSBI4buTLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1658054169897!5m2!1svi!2s"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                                <i class="fa fa-phone"></i> {{ isset($contact['phone']) ? $contact['phone'] : "" }}
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i>{{ isset($contact['email']) ? $contact['email'] : "" }}
                            </li>
                            <li>
                                <i class="fa fa-map-marker"></i> {{ isset($contact['address']) ? $contact['address'] : "" }}
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
@push('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        const homeForm = document.getElementById("form-register-insurance");
        $('#form-register-insurance').on('submit', function (e) {
            e.preventDefault();

            let name = $('#name').val();
            let vga_code = $('#vga_code').val();
            let phone = $('#phone').val();
            let message = $('#notes').val();
            let package_buy = $("#form_service").val();

            $.ajax({
                url: "{{url('/api/v1/customer-register-insurance')}}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    name: name,
                    vga_code: vga_code,
                    phone: phone,
                    note: message,
                    package_buy: package_buy,
                },
                success: function (response) {
                    swal("Chúc mừng!", "bạn đã đăng kí thành công!", "success");
                    homeForm.reset()
                    $('#successMsg').show();
                },
                error: function (response) {
                    $('#nameErrorMsg').text(response.responseJSON.errors.name);
                    $('#emailErrorMsg').text(response.responseJSON.errors.email);
                    $('#mobileErrorMsg').text(response.responseJSON.errors.mobile);
                    $('#messageErrorMsg').text(response.responseJSON.errors.message);
                },
            });
        });
    </script>
@endpush