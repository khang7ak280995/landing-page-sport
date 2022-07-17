@extends('frontend.layouts.main')
@section('style')
    <style>
        ::-webkit-input-placeholder { /* Edge */
            color: grey;
        }

        :-ms-input-placeholder { /* Internet Explorer */
            color: grey;
        }

        ::placeholder {
            color: grey;
        }
    </style>

@endsection
@section('content')
    <section class="insurance-headline">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>
                        Bảo Hiểm HIO Theo Ngày
                    </h1>
                    <p>

                    </p>
                </div>
                <ul class="row single-icons-wrapper">
                    @foreach($listInsurancePackage as $insurancePackageItem)
                        <li class="icon">
                            <div class="single-icon {{ $loop->last ? 'last' : '' }}">
                                <a href="{{ route('insurance-package.detail', $insurancePackageItem->slug) }}">
                                    <img src="{{ asset($insurancePackageItem->icon) }}" alt="">
                                    <h4>
                                        {{ $insurancePackageItem->title }}
                                    </h4>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!-- insurance headline end -->

    <!-- Mô tả sp -->
    @php
        if(!isset($insurancePackage)){
            $insurancePackage = $listInsurancePackage->first();
        }
    @endphp
    <section class="wrapper100percent section1">
        <div class="sectionwrapper"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h3>
                        {{ $insurancePackage->title }}
                    </h3>
                    <br>
                    <p>
                        {{ $insurancePackage->description }}
                    </p>
                    <div class="col-md-8 padding-out">
                        <ul class="insurance-list">
                            <li>
                                <b>Giá tiền:</b> <span>{{ number_format($insurancePackage->amount) }} VNĐ</span>
                            </li>
                            <li>
                                <b>Mức thưởng:</b> <span>{{ number_format($insurancePackage->bonuses) }} VNĐ</span>
                            </li>
                            <li>
                                <b>Hố quy định:</b> <span>{{ $insurancePackage->hole_regulation }}</span>
                            </li>
                        </ul>

                        <ul class="ul-list">
                            <li>
                                <i class="fa fa-check"></i> {{ $insurancePackage->note }}
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset($insurancePackage->link_image) }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Mô tả sp end -->

    <!-- Lý do chonj -->
    <section class="wrapper100percent insurance-section1">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mobile-change">
                    <img src="{{asset('frontend/images/about.png')}}" alt="">
                </div>
                <div class="col-lg-7">
                    <br><br>
                    <h3>
                        Lý do nên chọn gói HIO theo ngày?
                    </h3>
                    <br>
                    <p>
                        "Chơi một tý, vui hết ý", chỉ với mức phí nhỏ golfer có cơ hội nhận về giải thưởng cao gấp 1000
                        lần, phù hợp cho các giải đấu, outing hoặc mua tặng bạn bè,...

                    </p>
                    <ul class="row">
                        <li class="col-md-6 padding-out">
                            <div class="img-wrapper">
                                <div class="img-wrapper-inner">
                                    <img src="{{ asset('images/icon-homeb.png') }}" alt="">
                                </div>
                            </div>
                            <div class="text-wrapper">
                                <h4>
                                    Đăng ký đơn giản - Trả thưởng nhanh chóng
                                </h4>
                                <p>
                                    Suas iracundia his ea errem ridens nam an veniam.
                                </p>
                            </div>
                        </li>
                        <li class="col-md-6 padding-out">
                            <div class="img-wrapper">
                                <div class="img-wrapper-inner">
                                    <img src="images/icon-carb.png" alt="">
                                </div>
                            </div>
                            <div class="text-wrapper">
                                <h4>
                                    Mức phí thấp - Giải thưởng lớn
                                </h4>
                                <p>
                                    Suas iracundia his ea errem ridens nam an veniam.
                                </p>
                            </div>
                        </li>
                        <li class="col-md-6 padding-out">
                            <div class="img-wrapper">
                                <div class="img-wrapper-inner">
                                    <img src="images/icon-travelb.png" alt="">
                                </div>
                            </div>
                            <div class="text-wrapper">
                                <h4>
                                    Hạn mức thưởng lên tới 500 triệu
                                </h4>
                                <p>
                                    Suas iracundia his ea errem ridens nam an veniam.
                                </p>
                            </div>
                        </li>
                        <li class="col-md-6 padding-out">
                            <div class="img-wrapper">
                                <div class="img-wrapper-inner">
                                    <img src="images/icon-luxuryb.png" alt="">
                                </div>
                            </div>
                            <div class="text-wrapper">
                                <h4>
                                    Hình thức chơi trước trả sau DQR
                                </h4>
                                <p>
                                    Suas iracundia his ea errem ridens nam an veniam.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Lý do chọn end -->

    <!-- FAQ -->
    <section class="wrapper100percent section3" id="">
        <div class="container form-style-product">
            <h3>Đăng ký mua bảo hiểm HIO</h3>
            <!-- comment-form -->
            <form class="wrapper100percent" method="post" id="form-register">
                <div id="main">
                    <div>
                        <p><input type="text" placeholder="Tên" name="name" id="name" style="color: black"/></p>
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
                    <div class="buttoncontact text-center">
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

    </section>
    <!-- FAQ end -->
@endsection

@push('scripts')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript">
        const homeForm = document.getElementById("form-register");
        $('#form-register').on('submit', function (e) {
            e.preventDefault();

            let name = $('#name').val();
            let vga_code = $('#vga_code').val();
            let phone = $('#phone').val();
            let package_buy = $("#form_service").val();

            $.ajax({
                url: "{{url('/api/v1/customer-register-insurance')}}",
                type: "POST",
                data: {
                    "_token": "{{ csrf_token() }}",
                    name: name,
                    vga_code: vga_code,
                    phone: phone,
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