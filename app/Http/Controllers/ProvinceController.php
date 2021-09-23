<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Rdj\Rajaongkir\Facades\Rajaongkir;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    // get province
    // params: ['id' as province_id]
    public function index(Request $request)
    {
        $getProvince = Rajaongkir::setEndpoint('province')
            ->setBase(env("RAJAONGKIR_TYPE"))
            ->setQuery($request->query())
            ->get();

        return response()->json($getProvince['rajaongkir']);
    }

    // get province by id
    public function show($id)
    {
        $getProvince = Rajaongkir::setEndpoint('province')
            ->setBase(env("RAJAONGKIR_TYPE"))
            ->setQuery(['id' => $id])
            ->get();

        return response()->json($getProvince['rajaongkir']);
    }
}
