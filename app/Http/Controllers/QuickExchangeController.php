<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuickExchangeController extends Controller
{
    public function exchangeCoin()
    {
        return view('pages.quick_exchange.exchange_coin');
    }

    public function exchangeCoinForm()
    {
        $data['editable'] = false;
        return view('pages.quick_exchange.exchange_coin_form', $data);
    }

    public function exchangeCoinFormEdit()
    {
        $data['editable'] = true;
        return view('pages.quick_exchange.exchange_coin_form', $data);
    }

    public function fiatCurrency()
    {
        return view('pages.quick_exchange.fiat_currency');
    }

    public function exchangeRequest()
    {
        return view('pages.quick_exchange.exchange_request');
    }

    public function exchangeRequestEdit()
    {
        return view('pages.quick_exchange.exchange_request_edit');
    }

    public function exchangeOrder()
    {
        return view('pages.quick_exchange.exchange_order');
    }

    public function documentation()
    {
        return view('pages.quick_exchange.documentation');
    }
}
