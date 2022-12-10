<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKabkotRequest;
use App\Http\Requests\UpdateKabkotRequest;
use App\Models\Kabkot;

class KabkotController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
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
   * @param  \App\Http\Requests\StoreKabkotRequest  $request
   * @return \Illuminate\Http\Response
   */
  public function store(StoreKabkotRequest $request)
  {
    //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Kabkot  $kabKot
   * @return \Illuminate\Http\Response
   */
  public function show(Kabkot $kabKot)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Kabkot  $kabKot
   * @return \Illuminate\Http\Response
   */
  public function edit(Kabkot $kabKot)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \App\Http\Requests\UpdateKabkotRequest  $request
   * @param  \App\Models\Kabkot  $kabKot
   * @return \Illuminate\Http\Response
   */
  public function update(UpdateKabkotRequest $request, Kabkot $kabKot)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Kabkot  $kabKot
   * @return \Illuminate\Http\Response
   */
  public function destroy(Kabkot $kabKot)
  {
    //
  }
}
