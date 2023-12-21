<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settingData = Setting::create([
            'name' => 'site_title',
            'value' => 'Laravel OmniDashboard',
        ]);
        $settingData = Setting::create([
            'name' => 'site_address',
            'value' => 'Dhaka, Bangladesh',
        ]);
        $settingData = Setting::create([
            'name' => 'site_phone',
            'value' => '+880 123456789',
        ]);
        $settingData = Setting::create([
            'name' => 'site_facebook_link',
            'value' => 'https://facebook.com',
        ]);
        $settingData = Setting::create([
            'name' => 'site_twitter_link',
            'value' => 'https://twitter.com',
        ]);
        $settingData = Setting::create([
            'name' => 'site_instagram_link',
            'value' => 'https://instagram.com',
        ]);
        $settingData = Setting::create([
            'name' => 'site_description',
            'value' => 'This is a laravel omni dashboard',
        ]);
        $settingData = Setting::create([
            'name' => 'bg_color',
            'value' => '#ffffff',
        ]);
        $settingData = Setting::create([
            'name' => 'site_logo',
            'value' => 'logo.png',
        ]);
        $settingData = Setting::create([
            'name' => 'site_favicon',
            'value' => 'favicon.png',
        ]);
        $settingData = Setting::create([
            'name' => 'site_footer',
            'value' => 'Laravel OmniDashboard',
        ]);
        $settingData = Setting::create([
            'name' => 'site_footer_link',
            'value' => 'https://laravel.com',
        ]);
        $settingData = Setting::create([
            'name' => 'site_footer_description',
            'value' => 'This is a laravel omni dashboard',
        ]);
        $settingData = Setting::create([
            'name' => 'site_footer_year',
            'value' => '2023',
        ]);
        $settingData = Setting::create([
            'name' => 'site_footer_text',
            'value' => 'All rights reserved',
        ]);

    }
}
