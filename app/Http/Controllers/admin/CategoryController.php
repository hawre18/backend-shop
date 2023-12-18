<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(View::exists('index.admin.categories.index')){
            $categories=Category::with('childrenRecursive')
                ->where('parent_id',null)->paginate(20);
            return view('index.admin.categories.index',compact('categories'));
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
        if(View::exists('index.admin.categories.create')){
            $categories=Category::all();
            return view('index.admin.categories.create',compact(['categories']));
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
            'parent_id'=>'numeric'
        ]);
        try{
            $category=new Category();
            $category->name=$request->input('name');
            $category->title=$request->input('title');
            $category->parent_id=$request->input('parent_id');
            $category->save();
            Session::flash('category_success','عملیات موفقیت آمیز بود');
            return redirect('admin/categories');
        }catch (\Exception $er){
            Session::flash('category_error','خطا در انجام عملیات');
            return redirect('admin/categories');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories=Category::all();
        $category=Category::findorfail($id);
        return view('index.admin.categories.update',compact(['category','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate(request(),[
            'title'=>'required|min:3|max:100|alpha',
            'name'=>'required|min:3|max:100|alpha',
            'parent_id'=>'numeric'
        ]);
        try {
            $category=Category::findorfail($id);
            $category->name=$request->input('name');
            $category->title=$request->input('title');
            $category->parent_id=$request->input('parent_id');
            $category->save();
            Session::flash('category_success','عملیات موفقیت آمیز بود');
            return redirect('admin/categories');
        }catch (\Exception $er){
            Session::flash('category_error','خطا در انجام عملیات');
            return redirect('admin/categories');
        }
    }

    public function delete($id)
    {
        try{
            $category=Category::findorfail($id);
            $category->delete();
            Session::flash('category_success','عملیات موفقیت آمیز بود');
            return redirect('admin/categories');
        }catch (\Exception $er){
            Session::flash('category_error','خطا در انجام عملیات');
            return redirect('admin/categories');
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
