<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rdj\Rajaongkir\Facades\Rajaongkir;

class InternationalOriginController extends Controller
{
    // get international origin data
    // params: ['id' as city_id, 'province' as province_id]
    public function index(Request $request)
    {
        $getData = Rajaongkir::setEndpoint('v2/internationalOrigin')
            ->setBase(env("RAJAONGKIR_TYPE"))
            ->setQuery($request->query())
            ->get();

        return response()->json($getData['rajaongkir']);
    }
}
