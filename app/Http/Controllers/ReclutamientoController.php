<?php

namespace App\Http\Controllers;

use App\Models\Reclutamiento;
use Illuminate\Http\Request;

class ReclutamientoController extends Controller
{    /**
    * Display a listing of the resource.
    */
   public function index()
   {
     $reclutamientos= Reclutamiento::all();
     return response()->json($reclutamientos,200);
   }

   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
       //
   }

   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {

       $reclutamiento= Reclutamiento::create($request->all());;
       $reclutamiento->save();
       return response()->json($reclutamiento,200);
   }

   /**
    * Display the specified resource.
    */
   public function show(string $id)
   {
    $reclutamiento= Reclutamiento::find($id);
      return response()->json($reclutamiento,200);
   }

   /**
    * Show the form for editing the specified resource.
    */
   public function edit(string $id)
   {
       //
   }

   /**
    * Update the specified resource in storage.
    */
   public function update(Request $request, string $id)
   {
    $reclutamiento= Reclutamiento::findOrFail( $id );
    $reclutamiento->update($request->all());
    $reclutamiento->save();
       return response()->json($reclutamiento,200);
   }

   /**
    * Remove the specified resource from storage.
    */
   public function destroy(string $id)
   {
    $reclutamiento= Reclutamiento::findOrFail( $id )->delete();
      return response()->json($reclutamiento, 200);
   }
}
