<?php

namespace Delwathon\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;
use Delwathon\LaravelInstaller\Helpers\PurchaseChecker;
use GuzzleHttp\Psr7\Request;

class PurchaseController extends Controller
{
    /**
     * Display the installer purchase page.
     *
     * @return \Illuminate\Http\Response
     */
    public function purchase()
    {
        return view('vendor.installer.purchase');
    }

    /**
     * Verify the purchase code.
     *
     * @return \Illuminate\Http\Response
     */
    public function verifyPurchase(Request $request)
    {
        $purchaseChecker = new PurchaseChecker($request);
    }
    
}
