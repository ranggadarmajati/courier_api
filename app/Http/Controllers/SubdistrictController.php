<?php

namespace App\Http\Controllers;

use Rdj\Rajaongkir\Facades\Rajaongkir;
use Illuminate\Http\Request;

class SubdistrictController extends Controller
{
    // get subdistrict data
    // params ['id' as subdistrict_id, 'city' as city_id]
    public function index(Request $request)
    {
        $getData = Rajaongkir::setEndpoint('subdistrict')
            ->setBase(env("RAJAONGKIR_TYPE"))
            ->setQuery($request->query())
            ->get();

        return response()->json($getData['rajaongkir']);
    }

    // get subdistrict by id
    public function show($id)
    {
        $getData = Rajaongkir::setEndpoint('subdistrict')
            ->setBase(env("RAJAONGKIR_TYPE"))
            ->setQuery(['id' => $id])
            ->get();

        return response()->json($getData['rajaongkir']);
    }
}
