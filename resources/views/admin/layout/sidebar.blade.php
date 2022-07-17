<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="#">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#{{ \App\Helpers\Constant::SLIDE_HOME }}-nav"
               data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>
                    {{ \App\Helpers\Constant::TEXT_CONVERT[\App\Helpers\Constant::SLIDE_HOME] }}
                </span><i
                        class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="{{ \App\Helpers\Constant::SLIDE_HOME }}-nav" class="nav-content collapse "
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('cms.' .\App\Helpers\Constant::SLIDE_HOME.'.index') }}">
                        <i class="bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cms.' . \App\Helpers\Constant::SLIDE_HOME . '.create-edit') }}">
                        <i class="bi bi-circle"></i><span>Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Slide Image Home Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#{{ \App\Helpers\Constant::INSURANCE_PACKAGE }}-nav"
               data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>
                    {{ \App\Helpers\Constant::TEXT_CONVERT[\App\Helpers\Constant::INSURANCE_PACKAGE] }}
                </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="{{ \App\Helpers\Constant::INSURANCE_PACKAGE }}-nav" class="nav-content collapse "
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('cms.' .\App\Helpers\Constant::INSURANCE_PACKAGE.'.index') }}">
                        <i class="bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cms.' . \App\Helpers\Constant::INSURANCE_PACKAGE . '.create-edit') }}">
                        <i class="bi bi-circle"></i><span>Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Insurance Package Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#promotion-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Khuyến mại</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="promotion-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{route('cms.promotion.index')}}">
                        <i class="bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#{{ \App\Helpers\Constant::LIST_GOLFER_WIN_HIO }}-nav"
               data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>
                    {{ \App\Helpers\Constant::TEXT_CONVERT[\App\Helpers\Constant::LIST_GOLFER_WIN_HIO] }}
                </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="{{ \App\Helpers\Constant::LIST_GOLFER_WIN_HIO }}-nav" class="nav-content collapse "
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('cms.' .\App\Helpers\Constant::LIST_GOLFER_WIN_HIO.'.index') }}">
                        <i class="bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cms.' . \App\Helpers\Constant::LIST_GOLFER_WIN_HIO . '.create-edit') }}">
                        <i class="bi bi-circle"></i><span>Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li><!-- End List Golfer Win HIO Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#{{ \App\Helpers\Constant::IMPRESSIVE_NUMBER }}-nav"
               data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>
                    {{ \App\Helpers\Constant::TEXT_CONVERT[\App\Helpers\Constant::IMPRESSIVE_NUMBER] }}
                </span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="{{ \App\Helpers\Constant::IMPRESSIVE_NUMBER }}-nav" class="nav-content collapse "
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('cms.' .\App\Helpers\Constant::IMPRESSIVE_NUMBER.'.index') }}">
                        <i class="bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cms.' . \App\Helpers\Constant::IMPRESSIVE_NUMBER . '.create-edit') }}">
                        <i class="bi bi-circle"></i><span>Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#{{ \App\Helpers\Constant::FAQ }}-nav"
               data-bs-toggle="collapse" href="#">
                <i class="bi bi-question-circle"></i>
                <span>
                    {{ \App\Helpers\Constant::TEXT_CONVERT[\App\Helpers\Constant::FAQ] }}
                </span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="{{ \App\Helpers\Constant::FAQ }}-nav" class="nav-content collapse "
                data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('cms.' .\App\Helpers\Constant::FAQ.'.index') }}">
                        <i class="bi bi-circle"></i><span>Danh sách</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cms.' . \App\Helpers\Constant::FAQ . '.create-edit') }}">
                        <i class="bi bi-circle"></i><span>Thêm mới</span>
                    </a>
                </li>
            </ul>
        </li><!-- End FAQ Nav -->

        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>F.A.Q</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-contact.html">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('cms.config-info.index')}}">
                <i class="bi bi-envelope"></i>
                <span>Danh sách config</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('cms.become-agent.index')}}">
                <i class="bi bi-envelope"></i>
                <span>Danh sách ưu đãi</span>
            </a>
        </li><!-- End Contact Page Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="{{route('cms.customer-register.index')}}">
                <i class="bi bi-envelope"></i>
                <span>Danh sách đăng kí BH</span>
            </a>
        </li><!-- End Contact Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-register.html">
                <i class="bi bi-card-list"></i>
                <span>Register</span>
            </a>
        </li><!-- End Register Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-login.html">
                <i class="bi bi-box-arrow-in-right"></i>
                <span>Login</span>
            </a>
        </li><!-- End Login Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-error-404.html">
                <i class="bi bi-dash-circle"></i>
                <span>Error 404</span>
            </a>
        </li><!-- End Error 404 Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="pages-blank.html">
                <i class="bi bi-file-earmark"></i>
                <span>Blank</span>
            </a>
        </li><!-- End Blank Page Nav -->

    </ul>

</aside>
<!-- End Sidebar-->