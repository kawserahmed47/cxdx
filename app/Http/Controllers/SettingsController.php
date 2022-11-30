<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function appSettings()
    {
        return view('pages.settings.app_settings');
    }

    public function feesSettings()
    {
        return view('pages.settings.fees_settings');
    }

    public function commissionSetup()
    {
        return view('pages.settings.commission_setup');
    }

    public function emailSmsSettings()
    {
        return view('pages.settings.email_sms_settings');
    }

    public function emailGateway()
    {
        return view('pages.settings.email_gateway');
    }

    public function smsGateway()
    {
        return view('pages.settings.sms_gateway');
    }

    public function languageSettings()
    {
        return view('pages.settings.language_settings');
    }
}
