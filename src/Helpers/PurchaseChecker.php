<?php

namespace Delwathon\LaravelInstaller\Helpers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class PurchaseChecker
{
    /**
     * @var string
     */
    private $secretKey;

    /**
     * @var string
     */
    private $purchaseCode;

    /**
     * Set the secret key and purchase code values.
     */
    public function __construct($request)
    {
        $this->secretKey = $request->secret_key;
        $this->purchaseCode = $request->purchase_code;
    }

     /**
     * Get the the secret key.
     *
     * @return string
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

     /**
     * Get the the purchase code.
     *
     * @return string
     */
    public function getPurchaseCode()
    {
        return $this->purchaseCode;
    }

    /**
     * Make a POST request.
     *
     * @param  string $url
     * @param  null|array $header
     * @param  array $data
     * @return array
     */
    public function apiPostRequestCall($url, $header = null, $data)
    {
        $ch = curl_init($url);
        curl_setopt_array($ch, array(
            CURLOPT_POST => TRUE,
            CURLOPT_RETURNTRANSFER => TRUE,
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_POSTFIELDS => json_encode($data)
        ));
        $response = curl_exec($ch);

        return (json_decode($response));
    }
}
