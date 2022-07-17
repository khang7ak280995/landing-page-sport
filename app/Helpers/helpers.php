<?php
/**
 * Link asset of admin base
 */
if (!function_exists('admin_asset')) {
    function admin_asset($path)
    {
        return asset('admin_assets/' . $path);
    }
}
/**
 * Function to handling price
 */
if (!function_exists('show_price')) {
    function show_price($price)
    {
        return number_format($price);
    }
}

if (!function_exists('setting')) {
    function setting($key)
    {
        return \App\Models\Admin\Setting::getSetting($key);
    }
}

if (!function_exists('list_menu_admin')) {
    function list_menu_admin($menus)
    {
        $html = '';
        $parent = 0;
        foreach ($menus as $key => $menu) {
            $item = $menu['item'];
            $child = $menu['children'];
            $html .= '<li class="dd-item" data-id="' . @$item->id . '">
                            <div class="dd-handle"><a href="' . route('admin.menu_item.editAdd', @$item->id) . '" target="_blank">' . @$item->name . '</a></div>';
            if (!empty($child)) {
                $html .= '<ol class="dd-list">';
                $html .= list_menu_admin($child);
                $html .= '</ol>';
            }

            $html .= '</li>';
            $parent = $item->id;
        }
        return $html;
    }
}

if (!function_exists('create_slug')) {
    function create_slug($string)
    {
        $search = array(
            '#(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)#',
            '#(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)#',
            '#(ì|í|ị|ỉ|ĩ)#',
            '#(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)#',
            '#(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)#',
            '#(ỳ|ý|ỵ|ỷ|ỹ)#',
            '#(đ)#',
            '#(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)#',
            '#(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)#',
            '#(Ì|Í|Ị|Ỉ|Ĩ)#',
            '#(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)#',
            '#(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)#',
            '#(Ỳ|Ý|Ỵ|Ỷ|Ỹ)#',
            '#(Đ)#',
            "/[^a-zA-Z0-9\-\_]/",
        );
        $replace = array(
            'a',
            'e',
            'i',
            'o',
            'u',
            'y',
            'd',
            'A',
            'E',
            'I',
            'O',
            'U',
            'Y',
            'D',
            '-',
        );
        $string = preg_replace($search, $replace, $string);
        $string = preg_replace('/(-)+/', '-', $string);
        $string = strtolower($string);
        return $string;
    }
}
