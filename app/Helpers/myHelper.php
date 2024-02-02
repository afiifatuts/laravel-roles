<?php

use App\Models\Navigation;

if (!function_exists('getMainMenu')) {
    function getMenus()
    {
        return Navigation::with('subMenus')->whereNull('main_menu')->get();
    }
}
