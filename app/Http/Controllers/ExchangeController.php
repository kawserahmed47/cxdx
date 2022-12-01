<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    public function exchangeList()
    {
        return view('pages.exchange.list');
    }

    public function cryptoCurrency()
    {
        return view('pages.exchange.crypto_currency');
    }

    public function localCurrency()
    {
        return view('pages.exchange.local_currency');
    }

    public function exchangeWallet()
    {
        return view('pages.exchange.exchange_wallet');
    }

    public function exchangeWalletInfo()
    {
        return view('pages.exchange.wallet_info');
    }
}
