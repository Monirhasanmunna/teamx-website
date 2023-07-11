<?php

use App\Models\Home;
use App\Models\ApplicationSetting;
use App\Models\AboutUs;
use App\Models\OthersBanner;


// general_setting
if(!function_exists('general_setting')){
    function general_setting($key)
    {
        $setting = ApplicationSetting::where('key', $key)->pluck('value')->first();

        return $setting;
    }
}

// Home Page
if(!function_exists('home_content')){
    function home_content($key)
    {
        $home = Home::where('key', $key)->pluck('value')->first();

        return $home;
    }
}

// AboutUs Page
if(!function_exists('about_us_content')){
    function about_us_content($key)
    {
        $about_us = AboutUs::where('key', $key)->pluck('value')->first();

        return $about_us;
    }
}


// others_banner
if(!function_exists('others_banner')){
    function others_banner($key)
    {
        $others_banner_part = OthersBanner::where('key', $key)->pluck('value')->first();

        return $others_banner_part;
    }
}