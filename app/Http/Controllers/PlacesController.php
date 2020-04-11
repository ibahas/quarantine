<?php

namespace App\Http\Controllers;

use App\places;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = places::all();
        return view('control.places.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = places::all();
        return view('control.places.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = [
            'name' => $request->name,
            'date' => $request->date,
            'user' => Auth::user()->id,
            'sick' => $request->sick,
        ];

        places::create($data);
        return redirect('places');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\places  $places
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = places::find($id);
        return view('control.places.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\places  $places
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = places::find($id);
        return view('control.places.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\places  $places
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = [
            'name' => $request->name,
            'date' => $request->date,
            'user' => Auth::user()->id,
            'sick' => $request->sick,
        ];

        places::where('id', $id)->update($data);
        return redirect('places');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\places  $places
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $places = places::find($id);
        $places->delete($id);
        return redirect('places');
    }
}
