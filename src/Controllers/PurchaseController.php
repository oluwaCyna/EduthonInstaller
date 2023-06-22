<?php

namespace Delwathon\LaravelInstaller\Controllers;

use Delwathon\LaravelInstaller\Helpers\PurchaseChecker;
use Exception;
use Illuminate\Routing\Controller;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Validator;

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
    public function verifyPurchase(Request $request, Redirector $redirect)
    {
        $purchaseChecker = new PurchaseChecker($request);

        $rules = config('installer.purchase.form.rules');

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $redirect->route('LaravelInstaller::purchase')->withInput()->withErrors($validator->errors());
        }

        try {
            $header = array(
                'Content-Type: application/json'
            );
            $secretKeyresponse = $purchaseChecker->apiPostRequestCall(config('installer.purchase.api.authenticate'), $header, array('secret_key' => $purchaseChecker->getSecretKey()));
            if ($secretKeyresponse->message === 'success') {
                $header = array(
                    'Authorization: Bearer ' . $secretKeyresponse->token,
                    'Content-Type: application/json'
                );
                $data =  array(
                    'purchase_code' => $purchaseChecker->getPurchaseCode(),
                    'url' => request()->getHttpHost(),
                    'client_id' => $secretKeyresponse->user->id
                );

                try {
                    $purchaseCodeResponse = $purchaseChecker->apiPostRequestCall(config('installer.purchase.api.verify'), $header, $data);
                    if ($purchaseCodeResponse->message === 'success') {
                        // Store the pc and sk in cookies
                        setcookie('pc', json_encode($purchaseChecker->getPurchaseCode()), time() + 60 * 60 * 24 * 365);
                        setcookie('sk', json_encode($purchaseChecker->getSecretKey()), time() + 60 * 60 * 24 * 365);
                        
                        return $redirect->route('LaravelInstaller::requirements');
                    } else {
                        return $redirect->route('LaravelInstaller::purchase')->withInput()->withErrors($purchaseCodeResponse->message);
                    }
                } catch (Exception $e) {
                    return $redirect->route('LaravelInstaller::purchase')->withInput()->withErrors($e->getMessage());
                }
            } else {
                return $redirect->route('LaravelInstaller::purchase')->withInput()->withErrors($secretKeyresponse->message);
            }
        } catch (Exception $e) {
            return $redirect->route('LaravelInstaller::purchase')->withInput()->withErrors($e->getMessage());
        }
    }
}
