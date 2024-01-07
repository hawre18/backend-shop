<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;





class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(View::exists('index.admin.attributeGroups.index')){
            $attributeGroups=Attribute::all();
            return view('index.admin.attributeGroups.index',compact('attributeGroups'));
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
        if(View::exists('index.admin.attributeGroups.create')){
            $attributeGroups=Attribute::all();
            return view('index.admin.attributeGroups.create',compact(['attributeGroups']));
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
            'title'=>'required|min:3|max:100|alpha',
            'name'=>'required|min:3|max:100|alpha',

        ]);
        try{
            $attribute=new Attribute();
            $attribute->name=$request->input('name');
            $attribute->title=$request->input('title');
            $attribute->save();
            Session::flash('attribute_success','عملیات موفقیت آمیز بود');
            return redirect('admin/attributeGroups');
        }catch (\Exception $er){
            Session::flash('attribute_error','خطا در انجام عملیات');
            return redirect('admin/attributeGroups');
        }

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attribute  $atribute
     * @return \Illuminate\Http\Response
     */
    public function show(Atribute $atribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribute  $atribute
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attributeGroups=Attribute::all();
        $attribute=Attribute::findorfail($id);
        return view('index.admin.attributeGroups.update',compact(['attribute','attributeGroups']));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attribute  $atribute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'title'=>'required|min:3|max:100|alpha',
            'name'=>'required|min:3|max:100|alpha',

        ]);
        try {
            $attribute=Attribute::findorfail($id);
            $attribute->name=$request->input('name');
            $attribute->title=$request->input('title');
            $attribute->save();
            Session::flash('attribute_success','عملیات موفقیت آمیز بود');
            return redirect('admin/attributeGroups');
        }catch (\Exception $er){
            Session::flash('attribute_error','خطا در انجام عملیات');
            return redirect('admin/attributeGroups');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attribute  $atribute
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        try {
            $attribute = Attribute::findorfail($id);
            $attribute->delete();
            Session::flash('attribute_success', 'عملیات موفقیت آمیز بود');
            return redirect('admin/attributeGroups');
        } catch (\Exception $er) {
            Session::flash('attribute_error', 'خطا در انجام عملیات');
            return redirect('admin/attributeGroups');
        }

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
public function destroy($id)
{

}
}
