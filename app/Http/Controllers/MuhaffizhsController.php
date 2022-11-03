<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Muhaffizh;
use App\Http\Requests\MuhaffizhRequest;

class MuhaffizhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muhaffizhs= Muhaffizh::all();
        return view('muhaffizhs.index', ['muhaffizhs'=>$muhaffizhs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('muhaffizhs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  MuhaffizhRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MuhaffizhRequest $request)
    {
        $muhaffizh = new Muhaffizh;
		$muhaffizh->nama = $request->input('nama');
        $muhaffizh->save();

        return redirect()->route('muhaffizhs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $muhaffizh = Muhaffizh::findOrFail($id);
        return view('muhaffizhs.show',['muhaffizh'=>$muhaffizh]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $muhaffizh = Muhaffizh::findOrFail($id);
        return view('muhaffizhs.edit',['muhaffizh'=>$muhaffizh]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  MuhaffizhRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MuhaffizhRequest $request, $id)
    {
        $muhaffizh = Muhaffizh::findOrFail($id);
		$muhaffizh->nama = $request->input('nama');
        $muhaffizh->save();

        return redirect()->route('muhaffizhs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $muhaffizh = Muhaffizh::findOrFail($id);
        $muhaffizh->delete();

        return redirect()->route('muhaffizhs.index');
    }
}
