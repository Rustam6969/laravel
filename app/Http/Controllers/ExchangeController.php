<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExchangeController extends Controller
{
    public function index()
    {
        return view('Exchange.index');
    }
}
