<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function dep(int $dep)
    {
        $res = DB::table('villes_france_free')->where('ville_departement', $dep)->get();

        return response()->json(['res' => $res]);
    }

    /**
     * Display the specified resource.
     */
    public function ville(string $ville)
    {
        $res = DB::table('villes_france_free')->where('ville_nom', $ville)->first();

        return response()->json(['res' => $res]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function code(int $code)
    {
        $res = DB::table('villes_france_free')->where('ville_departement', ($code/1000))->get();

        return response()->json(['res' => $res]);
    }
}
