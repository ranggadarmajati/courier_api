<?php

namespace App\Http\Controllers;

use Rdj\Rajaongkir\Facades\Rajaongkir;
use Illuminate\Http\Request;

class CityController extends Controller
{
    // get city data
    // params: ['id', 'province']
    public function index(Request $request)
    {   
        $getData = Rajaongkir::setEndpoint('city')
            ->setBase(env("RAJAONGKIR_TYPE"))
            ->setQuery($request->query())
            ->get();

        return response()->json($getData['rajaongkir']);
    }

    // get city by id
    public function show($id)
    {
        $getData = Rajaongkir::setEndpoint('city')
            ->setBase(env("RAJAONGKIR_TYPE"))
            ->setQuery(['id' => $id])
            ->get();

        return response()->json($getData['rajaongkir']);
    }
}
