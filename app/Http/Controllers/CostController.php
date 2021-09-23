<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rdj\Rajaongkir\Facades\Rajaongkir;

class CostController extends Controller
{
    // get cost
    public function index(Request $request)
    {
        $getData = Rajaongkir::setEndpoint('cost')
            ->setBase(env("RAJAONGKIR_TYPE"))
            ->setBody($request->query())
            ->post();

        return response()->json($getData['rajaongkir']);
    }
}
