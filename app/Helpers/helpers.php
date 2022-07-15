<?php
/**
 * Link asset of admin base
 */
if(!function_exists('admin_asset')) {
    function admin_asset($path)
    {
        return asset('admin_assets/'. $path);
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
    function list_menu_admin($menus) {
        $html = '';
        $parent = 0;
        foreach ($menus as $key=>$menu) {
            $item = $menu['item'];
            $child = $menu['children'];
            $html .= '<li class="dd-item" data-id="'. @$item->id .'">
                            <div class="dd-handle"><a href="'. route('admin.menu_item.editAdd', @$item->id) .'" target="_blank">'. @$item->name .'</a></div>';
            if (!empty($child)) {
                $html .= '<ol class="dd-list">';
                $html .= list_menu_admin($child);
                $html .= '</ol>';
            }

            $html .=   '</li>';
            $parent = $item->id;
        }
        return $html;
    }
}
?>
