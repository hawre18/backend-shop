<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Baner;
use Illuminate\Http\Request;
class BanerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index.admin.baners.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index.admin.baners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $baner=new Baner();
        $baner->title=$request->input('title');
        $baner->link=$request->input('link');
        $baner->description=$request->input('description');
        $baner->status=$request->input('status');
        $baner->image_id=$request->input('image_id');
        $baner->save();
        return "save";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function show(Baner $baner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function edit(Baner $baner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Baner $baner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Baner $baner)
    {
        //
    }
}
