<header>
    <div class="navbar-fixed-top">
        <div class="top1 top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="{{isset($contact['twitter']) ? $contact['twitter'] : ""}}" target="_blank"><i class="fa fa-twitter"></i></a>
                        <a href="{{isset($contact['facebook']) ? $contact['facebook'] : ""}}" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a href="{{isset($contact['linkedin']) ? $contact['linkedin'] : ""}}" target="_blank"><i class="fa fa-linkedin" ></i></a>
                        <a href="skype:...?call"><i class="fa fa-phone"> <span>{{ isset($contact['phone']) ? $contact['phone'] : "" }}</span></i></a>
                        <a href="mailto:someone@yoursite.com"><i class="fa fa-envelope last"> <span>{{ isset($contact['email']) ? $contact['email'] : "" }}</span></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu -->
        <nav class="navbar navbar-height1 scroll menuswitch-js">
            <div class="container navbar-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="responsive-wrapper">
                            <a class="navbar-brand" href="{{route('home')}}">
                                <img src="{{asset('frontend/images/logo.svg')}}">
                            </a>
                            <div class="navbar-header">
                                <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse" type="button">
                                    <span class="sr-only"></span>
                                    <span class="icon-bar icon-bar1"></span>
                                    <span class="icon-bar icon-bar2"></span>
                                    <span class="icon-bar icon-bar3"></span>
                                </button>
                            </div>
                        </div>
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                            <div class="cl-effect-12">
                                <ul class="nav navbar-nav pull-right">
                                    <li><a href="{{ route('home') }}">Trang ch???</a></li>
                                    <li><a href="{{ route('insurance-package.detail') }}">G??i s???n ph???m</a></li>
                                    <li><a href="{{route('promotions')}}">Khuy???n m???i</a></li>
{{--                                    <li><a href="">Con s??? ???n t?????ng</a></li>--}}
                                    <li><a href="{{ route(\App\Helpers\Constant::LIST_GOLFER_WIN_HIO . '.home') }}">Golfer tr??ng HIO</a></li>
                                    <li><a href="">????ng k?? ?????i l??</a></li>
                                    <li><a href="">Li??n h???</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- menu end -->
    </div>
</header>