<?php

namespace Delwathon\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;

class LicenseController extends Controller
{
    /**
     * Display the installer license page.
     *
     * @return \Illuminate\Http\Response
     */
    public function license()
    {
        return view('vendor.installer.license');
    }
}
