<?php

namespace App\Http\Controllers;

use App\leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = leave::all();
        return view('control.leave.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = leave::all();
        return view('control.leave.create', compact('data'));
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
            'city' => $request->city,
            'address' => $request->address,
            'status' => $request->status,
            'homeid' => $request->homeid,
            'user' => Auth::user()->id,
        ];
        leave::create($data);
        return redirect('leave');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = leave::find($id);
        return view('control.leave.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = leave::find($id);
        return view('control.leave.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = [
            'name' => $request->name,
            'city' => $request->city,
            'address' => $request->address,
            'status' => $request->status,
            'homeid' => $request->homeid,
        ];
        leave::where('id', $id)->update($data);
        return redirect('leave');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $leave = leave::find($id);
        $leave->delete($id);
        return redirect('leave');
    }
}
