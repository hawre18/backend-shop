<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Baner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class BanerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        if (View::exists('index.admin.baners.index')){
        $baners=Baner::all();
        return view('index.admin.baners.index',compact('baners'));
    }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (view::exists('index.admin.baners.create')){
        $baners=Baner::all();
        return view('index.admin.baners.create',compact(['baners']));
        }else{
            abort(Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(),[
                 'title'=>'required|min:3|max:100|regex:/^[ آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/',

        ]);
        try {
           $baner=new Baner();
           $baner->title=$request->input('title');
           $baner->description=$request->input('description');
           $baner->status=$request->input('status');
           $baner->link=$request->input('link');
           $baner->image_id=$request->input('image_id');
           $baner->save();
           Session::flash('baner_success','با موفقیت ایجاد شد');
           return redirect('admin/baners');
        }catch (\Exception $er){
            Session::flash('baner_error','خطا در ذخیره سازی');
            return redirect('admin/baners/create');
        }
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
    public function edit($id)
    {
            $baners = Baner::all();
            $baner=Baner::findorfail($id);
            return view('index.admin.baners.update',compact('baner','baners'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'title'=>'required|min:3|max:100|regex:/^[ آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/',

        ]);
        try {
            $baner=Baner::findorfail($id);
            $baner->title=$request->input('title');
            $baner->description=$request->input('description');
            $baner->link=$request->input('link');
            $baner->save();
            Session::flash('baner_success','با موفقیت ایجاد شد');
            return redirect('admin/baners');
        }catch (\Exception $er){
            Session::flash('baner_error','خطا در ذخیره سازی');
            return Redirect()->back();
        }
    }

    public function delete($id)
    {
        try {
            $baner = Baner::findorfail($id);
            $baner->delete();
            Session::flash('baner_success', 'عملیات موفقیت آمیز بود');
            return redirect('admin/baners');
        }catch (\Exception $er){
            Session::flash('baner_error' ,'خطا در انجام عملیات');
            return redirect('admin/baners');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Baner  $baner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
