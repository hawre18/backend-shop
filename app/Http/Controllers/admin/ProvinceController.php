<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ProvinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(View::exists('index.admin.provinces.index')){
            $provinces=Province::all();
            return view('index.admin.provinces.index',compact(['provinces']));
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
        if(View::exists('index.admin.provinces.create')){
            return view('index.admin.provinces.create');
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
            'name'=>'required|min:2|max:100|alpha',
        ]);
        try{
            $province=new Province();
            $province->name=$request->input('name');
            $province->save();
            Session::flash('province_success','عملیات موفقیت آمیز بود');
            return redirect('admin/provinces');
        }catch (\Exception $er){
            Session::flash('province_error','خطا در انجام عملیات');
            return redirect('admin/provinces');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function show(Province $province)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $province=Province::where('id',$id)->first();
        if($province!=null){
            if (View::exists('index.admin.provinces.update')){
                return view('index.admin.provinces.update',compact(['province']));
            }
            else{
                abort(Response::HTTP_NOT_FOUND);
            }
        }
        else{
            abort(Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $province=Province::where('id',$id)->first();
        if($province!=null){
            $this->validate(request(),[
                'name'=>'required|min:2|max:100|alpha',
            ]);
            try{
                $province->name=$request->input('name');
                $province->save();
                Session::flash('province_success','عملیات موفقیت آمیز بود');
                return redirect('admin/provinces');
            }catch (\Exception $er){
                Session::flash('province_error','خطا در انجام عملیات');
                return redirect('admin/provinces');
            }
        }else{
            abort(Response::HTTP_BAD_REQUEST);
        }

    }
    public function delete($id)
    {
        $province=Province::where('id',$id)->first();
        if($province!=null){
            try{
                $province->delete();
                Session::flash('province_success','عملیات موفقیت آمیز بود');
                return redirect('admin/provinces');
            }catch (\Exception $er){
                Session::flash('province_error','خطا در انجام عملیات');
                return redirect('admin/provinces');
            }
        }else{
            abort(Response::HTTP_BAD_REQUEST);
        }


    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Province  $province
     * @return \Illuminate\Http\Response
     */
    public function destroy(Province $province)
    {
        //
    }
}
