<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        //return Offer::all();

        View::share([
            'offers' => Offer::paginate(10),
        ]);

        return view('offers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Offer|\Illuminate\Database\Eloquent\Model
     */
    public function store(\App\Http\Requests\OfferRequest $request)
    {
        return Offer::create($request->validated());
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Offer $offer
     * @return Offer|Offer[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public function show(Offer $offer)
    {
        return Offer::findOrFail($offer->id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Offer $offer
     * @return Offer|Offer[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public function update(Request $request, Offer $offer)
    {
        $offer = Offer::findOrFail($offer->id);
        $offer->fill($request->except(['offer_id']));
        $offer->save();
        return $offer;
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
