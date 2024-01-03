<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Facade\FlareClient\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(\Illuminate\Support\Facades\View::exists('index.admin.brands.index')){
            $brands = Brand::all();
            return \view('index.admin.brands.index', compact('brands'));
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
        if(\Illuminate\Support\Facades\View::exists('index.admin.brands.create')){
            $brands=Brand::all();
            return view('index.admin.brands.create',compact(['brands']));
        }else{
            abort(\Symfony\Component\HttpFoundation\Response::HTTP_NOT_FOUND);
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
            'name'=>'required|min:3|max:100|regex:/^[a-zA-Z0-9 آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/',
            'description'=>'required|min:3|max:500|regex:/^[a-zA-Z0-9 آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/',
            'image_id'=>'numeric'
        ]);
        try{
            $brand=new Brand();
            $brand->name=$request->input('name');
            $brand->description=$request->input('description');
            $brand->image_id=$request->input('image_id');
            $brand->save();
            Session::flash('brand_success','عملیات موفقیت آمیز بود');
            return redirect('admin/brands');
        }catch (\Exception $er){
            Session::flash('brand_error','خطا در انجام عملیات');
            return redirect('admin/brands');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands=Brand::all();
        $brand=Brand::findorfail($id);
        return view('index.admin.brands.update',compact(['brand','brands']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $this->validate(request(),[
            'name'=>'required|min:3|max:100|regex:/^[a-zA-Z0-9 آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/',
            'description'=>'required|min:3|max:500|regex:/^[a-zA-Z0-9 آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/',
            'image_id'=>'numeric'
        ]);
        try {
            $brand=Brand::findorfaill($id);
            $brand->name=$request->input('name');
            $brand->description=$request->input('description');
            $brand->image_id=$request->input('image_id');
            $brand->save();
            Session::flash('brand_success','عملیات موفقیت آمیز بود');
            return redirect('admin/brands');
        }catch (\Exception $er){
            Session::flash('brand_error','خطا در انجام عملیات');
            return redirect('admin/brands');
        }
    }

    public function delete($id)
    {
        try{
            $brand=Brand::findorfail($id);
            $brand->delete();
            Session::flash('brand_success','عملیات موفقیت آمیز بود');
            return redirect('admin/brands');
        }catch (\Exception $er){
            Session::flash('brand_error','خطا در انجام عملیات');
            return redirect('admin/brands');
        }

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'ok';
        $brand=Brand::findorfild($id);
        $brand->delete();
        return 'delete';

    }
}
