<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Resources\RifaResource;
use App\Models\Rifa;

class RifaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rifa = Rifa::paginate(10);
        return RifaResource::collection($rifa);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rifa = new Rifa();
        $rifa -> $name = $request -> name;
        $rifa -> $rifaCategory = $request -> rifa_category;
        if ($rifa -> save()) {
            return new RifaResource($rifa);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $rifa = Rifa::findOrFail($id);
        return new RifaResource($rifa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rifa = Rifa::findOrFail($id);
        $rifa -> name = $request -> name;
        $rifa -> rifaCategory = $request -> rifa_category;
        if ($rifa -> save()) {
            return new RifaResource($rifa);
        }
    }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
      function destroy($id)
    {
        $rifa = Rifa::findOrFail($id);
        if ($rifa -> delete()) {
            return new RifaResource($rifa);
        }

    }

