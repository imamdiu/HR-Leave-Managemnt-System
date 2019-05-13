<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Admin\user;
use App\Model\Admin\admin;
use App\Model\Admin\personalInfo;
use App\Model\Admin\contactInfo;
use DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
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
      //   if(Auth::user()->rolee == 2)
      //   {
      //   $users=DB::table('admins')->where('id',Auth::user()->id)->get();
      //   return view('admin.user.show', compact('users'));
      // }

      // if(Auth::user()->rolee == 1)
      //   {

        $users = admin::all();
        return view('admin.user.show', compact('users'));
        
        // $users = user::all();
        // return view('admin.personalInfo.show',compact('users'));

        // $users=DB::table('personal_infos')->get();

        // return view('admin.user.show', compact('users'));

       // return $request->all();
      //}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
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
            'emp_id' => 'required|max:50|unique:admins',
            'name' => 'required|max:50|unique:admins',

        ]);

        $admin = new admin;
        $admin->emp_id = $request->emp_id;
        $admin->name = $request->name;
        $admin->email = $request->email;
      ///  $admin->rolee = $request->rolee;
        $admin->save();

        $personalInfo = new personalInfo;
        $personalInfo->emp_id = $request->emp_id;
        $personalInfo->save();

        $contactInfo = new contactInfo;
        $contactInfo->emp_id = $request->emp_id;
        $contactInfo->save();

        // $data=array();
        // $data['emp_id']=$request->emp_id;
        // DB::table('contact_infos')->insert($data);
       // return $request->all();

        //     $this->validate($request, [
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:admins',
            
        //     //'status' => 'required',
        // ]);
  
        // admin::create($request->name);


             
        return redirect(route('user.index'));
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
        $user_edits = DB::table('admins')
            ->where('id', $id)
            ->first();

        //return "yes";
        return view('admin.user.edit', compact('user_edits'));
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
           
        ]);

         $request->status ?: $request['status'] = 0;

        $user = admin::where('id', $id)->update($request->except('_token', '_method', 'role'));

        return redirect(route('user.index'))->with('message', 'User Update Sucessfully');


        //return $request->all();
        // $data=array();
        // $data['name']=$request->name;
        // $data['email']=$request->email;
        // $data['phone']=$request->phone;
        //  $data['status']=$request->status;
       
        // $request->status ?: $request['status'] = 0;

        // $product=DB::table('admins')->where('id',$id)->update($data);
        // return redirect(route('user.index'))->with('message', 'User Update Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        admin::where('id', $id)->delete();

        return redirect()->back()->with('message', 'User Delete Sucessfully');
    }
}
