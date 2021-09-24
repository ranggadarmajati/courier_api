<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ClientKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $date = date('d-m-Y');
        $clientKey = $request->header('clientKey');
        if(!$clientKey || $clientKey == null){
            return response()->json(["code" => 403, "message" => "unauthorized"]);
        }
        $decrypted = encrypt_decrypt('decrypt', $clientKey, env("SECRET_KEY"), env("IV_KEY"));
        if($decrypted !== $date){
            return response()->json(["code" => 403, "message" => "invalid client key"]);
        }
        return $next($request);
    }
}
