<?php

namespace App\Http\Controllers;

use App\medicalexaminations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicalexaminationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = medicalexaminations::all();
        return view('control.medicalexaminations.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = medicalexaminations::all();
        return view('control.medicalexaminations.create', compact('data'));
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
            'details' => $request->details,
            'sick' => $request->sick,
            'user' => Auth::user()->id
        ];
        medicalexaminations::create($data);
        return redirect('medicalexaminations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\medicalexaminations  $medicalexaminations
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = medicalexaminations::find($id);
        return view('control.medicalexaminations.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\medicalexaminations  $medicalexaminations
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = medicalexaminations::find($id);
        return view('control.medicalexaminations.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\medicalexaminations  $medicalexaminations
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = [
            'name' => $request->name,
            'details' => $request->details,
            'sick' => $request->sick,
            'user' => Auth::user()->id
        ];
        medicalexaminations::where('id', $id)->update($data);
        return redirect('medicalexaminations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\medicalexaminations  $medicalexaminations
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $medicalexaminations = medicalexaminations::find($id);
        $medicalexaminations->delete($id);
        return redirect('medicalexaminations');
    }
}
