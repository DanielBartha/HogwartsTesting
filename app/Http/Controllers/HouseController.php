<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreHouseRequest;
use App\Http\Requests\UpdateHouseRequest;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $houses = House::paginate(15);

        return view('houses.index', compact('houses'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('houses.create');
    }

    public function cancelAlert(Request $request)
    {
        $request->session()->flash('alertCancellation', 'You have cancelled the form creation.');

        return redirect()->route('houses.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHouseRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $house = House::create($this->validateHouse($request));

        $request->session()->flash('alert', 'House successfully created.');

        return redirect(route('houses.index'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(House $house)
    {
        return view('houses.show', compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(House $house)
    {
        return view('houses.edit', compact('house'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHouseRequest  $request
     * @param  \App\Models\House  $house
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, House $house)
    {
        $house->update($this->validateHouse($request));

        return redirect(route('house.index', compact('house')));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\House  $house
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(House $house)
    {
        $house->delete();

        return redirect(route('houses.index', compact('house')));
    }

    protected function validateHouse(Request $request) {
        return $request->validate([
            'name' => 'required',
            'color' => 'required',
            'points' => 'required'
        ]);
    }
}
