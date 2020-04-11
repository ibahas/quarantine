<?php

namespace App\Http\Controllers;

use App\sick;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = sick::all();
        return view('control.sick.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = sick::all();
        return view('control.sick.create', compact('data'));
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
            'bod' => $request->bod,
            'city' => $request->city,
            'address' => $request->address,
            'personalstatus' => $request->personalstatus,
            'gender' => $request->gender,
            'user' => Auth::user()->id,
            'status' => 1,
        ];

        sick::create($data);
        return redirect('sick');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\sick  $sick
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = sick::find($id);
        return view('control.sick.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\sick  $sick
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = sick::find($id);
        return view('control.sick.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\sick  $sick
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = [
            'name' => $request->name,
            'bod' => $request->bod,
            'city' => $request->city,
            'address' => $request->address,
            'personalstatus' => $request->personalstatus,
            'gender' => $request->gender,
            'status' => $request->status,
        ];
        sick::where('id', $id)->update($data);
        return redirect('sick');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\sick  $sick
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sick = sick::find($id);
        $sick->delete($id);
        return redirect('sick');
    }
}
