<?php

namespace App\Http\Controllers;

use App\individuals;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndividualsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = individuals::all();
        return view('control.individuals.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = individuals::all();
        return view('control.individuals.create', compact('data'));
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
            'sick' => $request->sick,
            'name' => $request->name,
            'sick' => Auth::user()->id
        ];
        individuals::create($data);
        return Redirect('individuals');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\individuals  $individuals
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = individuals::find($id);
        return view('control.individuals.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\individuals  $individuals
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = individuals::find($id);
        return view('control.individuals.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\individuals  $individuals
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = [
            'sick' => $request->sick,
            'name' => $request->name,
            'sick' => Auth::user()->id
        ];
        individuals::where('id', $id)->update($data);
        return Redirect('individuals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\individuals  $individuals
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $individuals = individuals::find($id);
        $individuals->delete($id);
        return Redirect('individuals');
    }
}
