<?php

namespace Delwathon\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;

class ApplicationDetailsController extends Controller
{
    /**
     * Display the installer welcome page.
     *
     * @return \Illuminate\Http\Response
     */
    public function applicationDetails()
    {
        return view('vendor.installer.application-details');
    }
}
