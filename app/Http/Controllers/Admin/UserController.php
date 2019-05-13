<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Admin\user;
use App\Model\Admin\admin;
use App\Model\Admin\personalInfo;
use App\Model\Admin\contactInfo;
use App\Model\Admin\imageInfo;
use Illuminate\Support\Facades\Auth;
use DB;

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
       
        $users=DB::table('admins')->get();
        return view('admin.user.show', compact('users'));


        // if(Auth::user()->role_id == 1)
        // {
        // $users=DB::table('admins')->get();
        // return view('admin.user.show', compact('users'));
        // }

        // else if(Auth::user()->role_id == 2)
        // {
        // $users=DB::table('admins')->where("id", Auth::user()->id)->get();
        // return view('admin.user.show', compact('users'));
        // }

        // if(Auth::user()->emp_id == 'AD001')
        // {
        // $users=DB::table('admins')->get();
        // return view('admin.user.show', compact('users'));
        // }

        // if(Auth::user()->emp_id == 'AD002')
        // {
        // $users=DB::table('admins')->where("id", Auth::user()->id)->get();
        // return view('admin.user.show', compact('users'));
        // }


       // return view('all_product', compact('product'));

         //$users = DB::table('admins')
            // ->where('id', $id)
            // ->first();

       // $users = user::all();
        // return view('admin.user.show', compact('users'));
       // return view('admin.user.show');
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
           //Convert date  dd-mm-yy to Y-m-d..........
            // joining_date = date("Y-m-d", strtotime(joining_date));
            // last_leave_date = date("Y-m-d", strtotime(last_leave_date));

//return $request->all();

         $this->validate($request, [
            'emp_id' => 'required|max:50|unique:admins',
            'name' => 'required|max:50|unique:admins',

        ]);


          $request['password'] = bcrypt($request->password);
          admin::create($request->all());

         // $admin = new admin;
        // $admin->emp_id = $request->emp_id;
       // $admin->name = $request->name;
      // $admin->email = $request->email;
     // $admin->password = $request->password;
    // $admin->status = $request->status;
   //$admin->save();

        $personalInfo = new personalInfo;
        $personalInfo->emp_id = $request->emp_id;
        $personalInfo->save();

        $contactInfo = new contactInfo;
        $contactInfo->emp_id = $request->emp_id;
        $contactInfo->save();

        // $imageInfo = new imageInfo;
        // $imageInfo->emp_id = $request->emp_id;
        // $imageInfo->save();
             
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
        $user_edit = DB::table('admins')
            ->where('id', $id)
            ->first();
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

        $user = admin::where('id', $id)->update($request->except('_token', '_method', 'role'));

        return redirect(route('user.index'))->with('message', 'User Update Sucessfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
       // return $id;
        admin::where('id', $id)->delete();

        return redirect()->back();
    }
}
