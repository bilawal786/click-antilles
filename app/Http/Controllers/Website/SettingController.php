<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Model\BusinessSetting;
use App\Model\HelpTopic;

class SettingController extends Controller
{
    public function about_us()
    {
        $about_us = BusinessSetting::where('type', 'about_us')->first();
        return view('website.setting.about-us', [
            'about_us' => $about_us,
        ]);
    }
    public function termsandCondition()
    {
        $terms_condition = BusinessSetting::where('type', 'terms_condition')->first();
        return view('website.setting.terms', compact('terms_condition'));
    }

    public function privacy_policy()
    {
        $privacy_policy = BusinessSetting::where('type', 'privacy_policy')->first();
        return view('website.setting.privacy', compact('privacy_policy'));
    }
    public function helpTopic()
    {
        $helps = HelpTopic::Status()->latest()->get();
        return view('website.setting.faq', compact('helps'));
    }
}
