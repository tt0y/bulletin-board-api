<?php

namespace App\Http\Controllers;

use App\Models\Offer;

use App\Http\Requests\OfferRequest as Request;

class ApiOfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        return Response()->json(Offer::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        return Response()->json(Offer::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Offer $offer
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(Offer $offer)
    {
        return Response()->json(Offer::findOrFail($offer->id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Offer $offer
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, Offer $offer)
    {
        $offer = Offer::findOrFail($offer->id);
        $offer->fill($request->except(['offer_id']));
        $offer->save();
        return response()->json($offer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Offer $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer = Offer::findOrFail($offer->id);
        if ($offer->delete()) return response(null, 204);
    }
}
