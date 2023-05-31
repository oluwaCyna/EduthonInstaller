<?php

namespace Delwathon\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;

class PurchaseController extends Controller
{
    /**
     * Display the installer welcome page.
     *
     * @return \Illuminate\Http\Response
     */
    public function purchase()
    {
        return view('vendor.installer.purchase');
    }
}
