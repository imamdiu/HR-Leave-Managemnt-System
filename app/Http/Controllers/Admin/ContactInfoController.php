<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Admin\contactInfo;

class ContactInfoController extends Controller
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
         $contactInfos = contactInfo::all();
         return view('admin.contactInfo.show',compact('contactInfos'));
        return view('admin.contactInfo.show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.contactInfo.create');
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

            'mobile' => 'required',
            // 'mobile2' => 'required',
            'email2' => 'required',


           
        ]);

      contactInfo::create($request->all());
        // $contactInfo = new contactInfo;
       
        // $contactInfo->mobile = $request->mobile;
        // $contactInfo->mobile2 = $request->mobile2;
        // $contactInfo->email2 = $request->email2;
        

        $contactInfo->save();

        return redirect(route('contactInfo.index'));
      //  return $request->all();

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
        $contactInfo = contactInfo::where('id',$id)->first();
        return view('admin.contactInfo.edit',compact('contactInfo'));
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

            'mobile' => 'required',
            // 'mobile2' => 'required',
            'email2' => 'required',


           
        ]);
       
        $contactInfo = contactInfo::find($id);

        $contactInfo->mobile = $request->mobile;
        $contactInfo->mobile2 = $request->mobile2;
        $contactInfo->email2 = $request->email2;
        

        $contactInfo->save();

        return redirect(route('contactInfo.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         contactInfo::where('id', $id)->delete();

        return redirect()->back();
    }
}
