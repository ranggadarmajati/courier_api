<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Rdj\Rajaongkir\Facades\Rajaongkir;

class InternationalDestinationController extends Controller
{
    // get international destination
    // params: ['id' as country_id]
    public function index(Request $request)
    {
        $getData = Rajaongkir::setEndpoint('v2/internationalDestination')
            ->setBase(env("RAJAONGKIR_TYPE"))
            ->setQuery($request->query())
            ->get();

        return response()->json($getData['rajaongkir']);
    }
}
