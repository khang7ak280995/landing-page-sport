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
    </ul>

</aside>
<!-- End Sidebar-->