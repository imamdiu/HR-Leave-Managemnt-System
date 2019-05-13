<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\imageInfo;

use Image;
use DB;

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
      //   return view('admin.imageInfo.show');
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
        $data=array();
         $image=$request->file('image');

        if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/employee/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['image']=$image_url;
                $employee=DB::table('image_infos')
                         ->insert($data);
              if ($employee) {
                 $notification=array(
                 'messege'=>'Successfully Employee Inserted ',
                 'alert-type'=>'success'
                  );
                return Redirect()->route('home')->with($notification);
             }else{
              $notification=array(
                 'messege'=>'error ',
                 'alert-type'=>'success'
                  );
                 return Redirect()->back()->with($notification);
             }

            }else{

              return Redirect()->back();

            }
        }else{
              return Redirect()->back();
        }

        //$data['name']=$request->name;

        // $this->validate($request, [

        //     'image' => 'required',

        // ]);

        // if ($request->hasFile('image')) {

        //      $imageName = $request->image->store('public');
        // }

        // $imageInfo = new imageInfo;

        // $imageInfo->image = $imageName;

        //  $imageInfo->save();

        // return redirect(route('imageInfo.index'));
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
         $data=array();
        
        //$data['city']=$request->city;
        $image=$request->image;


         if ($image) {
       $image_name=str_random(20);
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='public/employee/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       if ($success) {
          $data['image']=$image_url;
             $img=DB::table('image_infos')->where('id',$id)->first();
             $image_path = $img->image;
             $done=unlink($image_path);
          $user=DB::table('image_infos')->where('id',$id)->update($data);
         if ($user) {
                $notification=array(
                'messege'=>'Employee Update Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back();//->route('all.image_infos')->with($notification);
            }else{
              return Redirect()->back();
             }
          }
      }else{
         $oldphoto=$request->old_photo;
         if ($oldphoto) {
          $data['image']=$oldphoto;
          $user=DB::table('image_infos')->where('id',$id)->update($data);
         if ($user) {
                $notification=array(
                'messege'=>'Employee Update Successfully',
                'alert-type'=>'success'
                 );
               return Redirect()->back();//->route('all.image_infos')->with($notification);
            }else{
              return Redirect()->back();
             }
          }
       }
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
