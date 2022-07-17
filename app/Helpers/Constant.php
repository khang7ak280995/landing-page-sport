<?php

namespace App\Helpers;

class Constant
{
    const SLIDE_HOME = 'slide-home',
        INSURANCE_PACKAGE = 'insurance-package',
        LIST_GOLFER_WIN_HIO = 'list-golfer-win-hio',
        FAQ = 'faq',
        IMPRESSIVE_NUMBER = 'impressive-number',
        USER = 'user';

    const TEXT_CONVERT = [
        self::SLIDE_HOME => 'Slide Ảnh trang home',
        self::INSURANCE_PACKAGE => 'Gói sản phẩm',
        self::LIST_GOLFER_WIN_HIO => 'Danh sách Golfer trúng HIO',
        self::FAQ => 'Các câu hỏi thường gặp',
        self::IMPRESSIVE_NUMBER => 'Con số ấn tượng',
        self::USER => 'Quản lý tài khoản'
    ];
}