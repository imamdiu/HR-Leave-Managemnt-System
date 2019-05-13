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
        $users = personalInfo::all();
        return view('admin.user.show',compact('users'));

        // $users=DB::table('admins')->get();
        // return view('admin.user.show', compact('users'));

      //   if(Auth::user()->status == 0)
      //   {
      //   $users=DB::table('admins')->where('emp_id',Auth::user()->emp_id)->get();
      //   return view('admin.user.show', compact('users'));
      // }

      // if(Auth::user()->status == 1)
      //   {
      //   $users=DB::table('admins')->get();
      //   return view('admin.user.show', compact('users'));
      // }
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
        $user_edit = DB::table('admins')->where('user_edit',$user_edit)->get();

        // $user_edit = DB::table('admins')
        //     ->where('emp_id', $emp_id)
        //     ->first();
        //return "yes";
        return view('admin.user.edit', compact('user_edit'));
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

 return $request->all();

        // $user = admin::where('emp_idemp_id', $emp_idemp_id)->update($request->except('_token', '_method', 'role'));

        // return redirect(route('user.index'))->with('message', 'User Update Sucessfully');


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

        
        user::where('id', $id)->delete();

        return redirect()->back();
    }
}
