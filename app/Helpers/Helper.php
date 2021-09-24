<?php

use Carbon\Carbon;

if (!function_exists('encrypt_decrypt')) {
    function encrypt_decrypt($action, $string, $key_string, $iv_string)
    {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        // hash
        $key = $key_string;
        // iv - encrypt method AES-256-CBC expects 16 bytes 
        $iv = substr(hash('sha256', $iv_string), 0, 16);

        if ($action == 'encrypt') {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            // $output = base64_encode($output);
        } else if ($action == 'decrypt') {
            // $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
            $output = openssl_decrypt($string, $encrypt_method, $key, 0, $iv);
        }

        return $output;
    }
}

if (!function_exists(('customDate'))) {
    function customDate($date, $dateFormat)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format($dateFormat);
    }
}
