<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\imageInfo;

class ImageInfoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imageInfos = imageInfo::all();
         return view('admin.imageInfo.show',compact('imageInfos'));
         return view('admin.imageInfo.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.imageInfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'image' => 'required',

        ]);

        if ($request->hasFile('image')) {

             $imageName = $request->image->store('public');
        }

        $imageInfo = new imageInfo;

        $imageInfo->image = $imageName;

         $imageInfo->save();

        return redirect(route('imageInfo.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $imageInfo = imageInfo::where('id',$id)->first();
        return view('admin.imageInfo.edit',compact('imageInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'image' => 'required',

        ]);

        if ($request->hasFile('image')) {

            //return $request->image->getClientOriginalName();

            $imageName = $request->image->store('public');
        }

        $imageInfo = imageInfo::find($id);

        $imageInfo->image = $imageName;

       
        $imageInfo->save();

        return redirect(route('imageInfo.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        imageInfo::where('id', $id)->delete();

        return redirect()->back();
    }
}
