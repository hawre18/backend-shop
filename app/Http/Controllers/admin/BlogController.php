<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(View::exists('index.admin.blogs.index')){
            $blogs=Blog::all();
            return view('index.admin.blogs.index',compact('blogs'));
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
        if(View::exists('index.admin.blogs.create')){
            $blogs=Blog::all();
            return view('index.admin.blogs.create',compact(['blogs']));
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
            'title'=>'required|min:3|max:100|regex:/^[a-zA-Z0-9 آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/',
            'image_id'=>'required',
            
         ]);
         try{
             $blog=new Blog();
             $blog->title=$request->input('title');
             $blog->body=$request->input('body');
             $blog->image_id=$request->input('image_id');
             $blog->save();
             Session::flash('blog_success','عملیات موفقیت آمیز بود');
             return redirect('admin/blogs');
         }catch (\Exception $er){
             Session::flash('blog_error','خطا در انجام عملیات');
             return Redirect('admin/blogs/create');
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog, $id)
    {
        $blogs=Blog::all();
        $blog=Blog::findorfail($id);
        return view('index.admin.blogs.update',compact(['blog','blogs']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog, $id)
    {
        $this->validate(request(),[
            'title'=>'required|min:3|max:100|regex:/^[a-zA-Z0-9 آابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهیئ\s]+$/',
            'image_id'=>'required',
         ]);
         try{
             $blog=Blog::findorfail($id);
             $blog->title=$request->input('title');
             $blog->body=$request->input('body');
             $blog->image_id=$request->input('image_id');
             $blog->save();
             Session::flash('blog_success','عملیات موفقیت آمیز بود');
             return redirect('admin/blogs');
         }catch (\Exception $er){
             Session::flash('blog_error','خطا در انجام عملیات');
             return Redirect()->back();
         }
    }

    public function delete($id)
    {
        try{
            $blog=Blog::findorfail($id);
            $blog->delete();
            Session::flash('blog_success','عملیات موفقیت آمیز بود');
            return redirect('admin/blogs');
        }catch (\Exception $er){
            Session::flash('blog_error','خطا در انجام عملیات');
            return redirect('admin/blogs');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }


    public function uploadPhoto(Request $request){
        $uploadedFile=$request->file('file');
        $filename=time().$uploadedFile->getClientOriginalName();
        $original_name=$uploadedFile->getClientOriginalName();
        Storage::disk('local')->putFileas(
            'public/'.Carbon::now()->year.'/sellers/photos/documents',$uploadedFile,$filename
        );
        $image=new Photo();
        $image->originalName=$original_name;
        $image->path=$filename;
        $image->save();
        return response()->json([
            'image_id'=>$image->id
        ]);
    }
}
