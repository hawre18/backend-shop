<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(View::exists('index.admin.cities.index')){
            $cities=City::with('province')->paginate(20);
            return view('index.admin.cities.index',compact(['cities']));
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
        if('index.admin.cities.create'){
            $provinces=Province::all();
            return view('index.admin.cities.create',compact(['provinces']));
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
            'province_id'=>'required',
        ]);
        try{
            $city=new City();
            $city->name=$request->input('name');
            $city->province_id=$request->input('province_id');
            $city->save();
            Session::flash('city_success','عملیات موفقیت آمیز بود');
            return redirect('admin/cities');
        }catch (\Exception $er){
            Session::flash('city_error','خطا در انجام عملیات');
            return redirect('admin/cities');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function show(City $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $provinces=Province::all();
        $city=City::where('id',$id)->first();
        if($city!=null){
            if (View::exists('index.admin.cities.update')){
                return view('index.admin.cities.update',compact(['city','provinces']));
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
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $city=City::where('id',$id)->first();
        if($city!=null){
            $this->validate(request(),[
                'name'=>'required|min:2|max:100|alpha',
                'province_id'=>'required',
            ]);
            try{
                $city->name=$request->input('name');
                $city->province_id=$request->input('province_id');
                $city->save();
                Session::flash('city_success','عملیات موفقیت آمیز بود');
                return redirect('admin/cities');
            }catch (\Exception $er){
                Session::flash('city_error','خطا در انجام عملیات');
                return redirect('admin/cities');
            }
        }else{
            abort(Response::HTTP_BAD_REQUEST);
        }
    }

    public function delete($id)
    {
        $city=City::where('id',$id)->first();
        if($city!=null){
            try{
                $city->delete();
                Session::flash('city_success','عملیات موفقیت آمیز بود');
                return redirect('admin/cities');
            }catch (\Exception $er){
                Session::flash('city_error','خطا در انجام عملیات');
                return redirect('admin/cities');
            }
        }else{
            abort(Response::HTTP_BAD_REQUEST);
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\City  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(City $city)
    {
        //
    }
}
