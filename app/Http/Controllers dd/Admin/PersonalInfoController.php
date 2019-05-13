<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\personalInfo;

class PersonalInfoController extends Controller
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
        $personalInfos = personalInfo::all();
        return view('admin.personalInfo.show',compact('personalInfos'));
        return view('admin.personalInfo.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.personalInfo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request, [

            'fname' => 'required',
            'lname' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'gender' => 'required',


           
        ]);
        $personalInfo = new personalInfo;
       
        $personalInfo->fname = $request->fname;
        $personalInfo->lname = $request->lname;
        $personalInfo->father_name = $request->father_name;
        $personalInfo->mother_name = $request->mother_name;
        $personalInfo->gender = $request->gender;
        $personalInfo->dob = $request->dob;
         
         $personalInfo->marital_status = $request->marital_status;
         $personalInfo->blood = $request->blood;
         $personalInfo->religion = $request->religion;
         $personalInfo->nationality = $request->nationality;
         $personalInfo->nid = $request->nid;
         $personalInfo->about_you = $request->about_you;

        $personalInfo->save();

        return redirect(route('personalInfo.index'));
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
        $personalInfo = personalInfo::where('id',$id)->first();
        return view('admin.personalInfo.edit',compact('personalInfo'));
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

            'fname' => 'required',
            'about_you' => 'required',
            'blood' => 'required',
            
        ]);
        $personalInfo = personalInfo::find($id);
       
        $personalInfo->fname = $request->fname;
        $personalInfo->lname = $request->lname;
        $personalInfo->father_name = $request->father_name;
        $personalInfo->mother_name = $request->mother_name;
        $personalInfo->gender = $request->gender;
        $personalInfo->dob = $request->dob;
         
         $personalInfo->marital_status = $request->marital_status;
         $personalInfo->blood = $request->blood;
         $personalInfo->religion = $request->religion;
         $personalInfo->nationality = $request->nationality;
         $personalInfo->nid = $request->nid;
         $personalInfo->about_you = $request->about_you;

        $personalInfo->save();

        return redirect(route('personalInfo.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         personalInfo::where('id', $id)->delete();

        return redirect()->back();
    }
}
