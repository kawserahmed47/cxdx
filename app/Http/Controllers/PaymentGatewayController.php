<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentGatewayController extends Controller
{
    public function gourl()
    {
        return view('pages.payment_gateway.gourl');
    }

    public function payeer()
    {
        return view('pages.payment_gateway.payeer');
    }

    public function paypal()
    {
        return view('pages.payment_gateway.paypal');
    }

    public function paystack()
    {
        return view('pages.payment_gateway.paystack');
    }

    public function phone()
    {
        return view('pages.payment_gateway.phone');
    }

    public function stripe()
    {
        return view('pages.payment_gateway.stripe');
    }
}
