<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rdj\Rajaongkir\Facades\Rajaongkir;

class CostController extends Controller
{
    // get cost
    // params: ['origin', 'originType', 'city', 'destination', 'destinationType', 'weight', 'courier']
    public function index(Request $request)
    {
        $getData = Rajaongkir::setEndpoint('cost')
            ->setBase(env("RAJAONGKIR_TYPE"))
            ->setBody($request->query())
            ->post();

        return response()->json($getData['rajaongkir']);
    }

    // get international cost
    // params ['origin' as city_id, 'destination' as country_id, 'courier', 'weight']
    public function internationalCost(Request $request)
    {
        $getData = Rajaongkir::setEndpoint('v2/internationalCost')
            ->setBase(env("RAJAONGKIR_TYPE"))
            ->setBody($request->query())
            ->post();

        return response()->json($getData['rajaongkir']);
    }

    // get currency idr to usd
    public function currency()
    {
        $getData = Rajaongkir::setEndpoint('currency')
            ->setBase(env("RAJAONGKIR_TYPE"))
            ->setQuery([])
            ->get();

        return response()->json($getData["rajaongkir"]);
    }
}
