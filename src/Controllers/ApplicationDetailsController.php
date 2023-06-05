<?php

namespace Delwathon\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Validator;

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

    /**
     * Processes the newly saved environment configuration (Form Wizard).
     *
     * @param Request $request
     * @param Redirector $redirect
     * @return \Illuminate\Http\RedirectResponse
     */
    public function applicationDetailsSave(Request $request, Redirector $redirect)
    {
        $rules = config('installer.application_details.form.rules');
        $messages = [
            'application_details.required' => trans('installer_messages.application_details.menu.form.name_required'),
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return $redirect->route('LaravelInstaller::applicationDetails')->withInput()->withErrors($validator->errors());
        }

        // Store the valiadated details in session
        session(['application_details' => $request->all()]);

        return $redirect->route('LaravelInstaller::environment');
    }
        
}
