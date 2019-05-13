@extends('admin.layouts.app')

@section('main-content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
         
          <!-- /.box -->

          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Role</h3>
            </div>
            <!-- /.box-header -->
            @include('includes.messages')
            <!-- form start -->
            <form role="form" action="{{ route('role.update', $role->id)}}" method="post">
              {{ csrf_field()}}

              {{ method_field('PATCH') }}

              <div class="box-body">
<div class="col-lg-offset-3 col-lg-6">
<div class="form-group">
                  <label for="name">Role Titles</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Enter role Title" value="{{ $role->name }}">
                </div>

               <div class="row">
                <div class="col-lg-4">
                  <label for="name">Posts Permissions</label>
                  @foreach ($permissions as $permission)
                    @if ($permission->for == 'post')
                      <div class="checkbox">
                        <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}"
                          
                          @foreach ($role->permissions as $role_permit)

                          @if ($role_permit->id == $permission->id)
                              checked
                          @endif
                              
                          @endforeach
                          
                          >{{ $permission->name }}</label>
                      </div>
                    @endif
                  @endforeach
                </div>
                
                <div class="col-lg-4">
                  <label for="name">User Permissions</label>
                    @foreach ($permissions as $permission)
                      @if ($permission->for == 'user')
                        <div class="checkbox">
                          <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}"
                            
                            @foreach ($role->permissions as $role_permit)

                          @if ($role_permit->id == $permission->id)
                              checked
                          @endif
                              
                          @endforeach

                            >{{ $permission->name }}</label>
                        </div>
                      @endif
                    @endforeach
                </div>

                <div class="col-lg-4">
                  <label for="name">User Permissions</label>
                    @foreach ($permissions as $permission)
                      @if ($permission->for == 'other')
                        <div class="checkbox">
                          <label><input type="checkbox" name="permission[]" value="{{ $permission->id }}"
                            
                            @foreach ($role->permissions as $role_permit)

                          @if ($role_permit->id == $permission->id)
                              checked
                          @endif
                              
                          @endforeach
                            
                            >{{ $permission->name }}</label>
                        </div>
                      @endif
                    @endforeach
                </div>
              </div>
              

                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('role.index')}}" class="btn btn-warning"> Back </a>
              
              
              </div>

</div>

                
              
            </form>
          </div>
          <!-- /.box -->


          

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection

  // $this->validate($request, [

        //     'image' => 'required',

        // ]);

        // if ($request->hasFile('image')) {

        //     //return $request->image->getClientOriginalName();

        //     $imageName = $request->image->store('public');
        // }

        // $imageInfo = imageInfo::find($id);

        // $imageInfo->image = $imageName;

       
        // $imageInfo->save();

        // return redirect(route('imageInfo.index'));
    }

 //   $data=array();
        
      //   $image=$request->photo;

      //   if ($image) {
      //  $image_name=str_random(20);
      //  $ext=strtolower($image->getClientOriginalExtension());
      //  $image_full_name=$image_name.'.'.$ext;
      //  $upload_path='public/employee/';
      //  $image_url=$upload_path.$image_full_name;
      //  $success=$image->move($upload_path,$image_full_name);
      //  if ($success) {
      //     $data['photo']=$image_url;
      //        $img=DB::table('employees')->where('id',$id)->first();
      //        $image_path = $img->photo;
      //        $done=unlink($image_path);
      //     $user=DB::table('employees')->where('id',$id)->update($data);
      //    if ($user) {
      //           $notification=array(
      //           'messege'=>'Employee Update Successfully',
      //           'alert-type'=>'success'
      //            );
      //          return Redirect()->route('all.employee')->with($notification);
      //       }else{
      //         return Redirect()->back();
      //        }
      //     }
      // }else{
      //    $oldphoto=$request->old_photo;
      //    if ($oldphoto) {
      //     $data['photo']=$oldphoto;
      //     $user=DB::table('employees')->where('id',$id)->update($data);
      //    // if ($user) {
      //    //        $notification=array(
      //    //        'messege'=>'Employee Update Successfully',
      //    //        'alert-type'=>'success'
      //    //         );
      //    //       return Redirect()->route('all.employee')->with($notification);
      //    //    }else{
      //    //      return Redirect()->back();
      //    //     }
      //     }
      //  }

   <!--  <a href="{{ route('user.index')}}" class="btn btn-warning"> Back </a> -->
   
             <!--  <div class="form-group">
                <label>Assign Role</label>
                <div class="row">
                  @foreach ($roles as $role)
                      <div class="col-lg-3">
                        <div class="checkbox">
                          <label ><input type="checkbox" name="role[]" value="{{ $role->id }}"
                            
                            @foreach ($user->roles as $user_role)
                              @if (($user_role->id === $role->id))
                                  checked
                              @endif
                                
                            @endforeach> {{ $role->name }}</label>
                        </div>
                      </div>
                  @endforeach
              </div> -->

 (old('status')==1 || $user->status == 1)
                      checked

 @if
                   
                    @endif value="1"

@if (old('phone')){{ old('phone') }}@else{{ $user->phone }} @endif
@if (old('email')){{ old('email') }}@else{{ $user->email }} @endif
@if (old('name')){{ old('name') }}@else{{ $user->name }} @endif

  {{ route('admin.user.update',$user->id)}}


 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advanced Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

     
    </section>
    <!-- /.content -->
  </div>


  <section class="content">
  <div class="row">
  <form class="form-horizontal" method="POST">
    <div class="col-md-6">
      <div class="box box-primary">
          <div class="box-body">

            <div class="form-group">
              <label for="user_role_id" class="col-sm-4 control-label">User Role ID</label>
              <div class="col-sm-7">
                <input type="text" name="user_role_id"  class="form-control" id="user_role_id" value="" placeholder="user_role_id" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label for="user_id" class="col-sm-4 control-label">User ID</label>
              <div class="col-sm-7">
                <input type="text" name="user_id"  class="form-control" id="user_id" value="" placeholder="user_id" readonly/>
              </div>
            </div>
            <div class="form-group">
              <label for="user_name" class="col-sm-4 control-label">User Name</label>
              <div class="col-sm-7">
                <input type="text" name="user_name"  class="form-control" id="user_name" value="" placeholder="Emppyee Name" />
              </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-4 control-label">Email</label>
              <div class="col-sm-7">
                <input type="text" name="email"  class="form-control" id="email" value="" placeholder="Email" required="required"/>
              </div>
            </div>

          
            
            </div>
            </div>
            </div>
            </div>
    
        <!-- /.col (right) -col-md-6----->
          <div class=" col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
            <div class="row">
            <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><b> &nbsp Update Personal Info</b></button>

            </div>
          </div>
        </form>
        <!-- /.box-body -->

  </div>
  <!-- End Row-->
</section>


  <div class="form-group">
              <label for="department" class="col-sm-4 control-label">Department</label>
              <div class="col-sm-7">
                <select id="department" name="department" class="form-control" required="required"/>
                  <OPTION value="">Select Department</OPTION>
                  <OPTION VALUE="Admin" <?php if ($r['department'] == 'Admin') {
                                    echo "selected";
                                } ?>>Admin</OPTION>
                  <OPTION VALUE="Marketing" <?php if ($r['department'] == 'Marketing') {
                                        echo "selected";
                                    } ?>>Marketing</OPTION>
                  <OPTION VALUE="Design" <?php if ($r['department'] == 'Design') {
                                    echo "selected";
                                } ?>>Design</OPTION>
                  <OPTION VALUE="IT" <?php if ($r['department'] == 'IT') {
                                echo "selected";
                            } ?>>IT </OPTION>
                  <OPTION VALUE="Office Assistant" <?php if ($r['department'] == 'Office Assistant') {
                                                echo "selected";
                                            } ?>>Office Assistant</OPTION>
                  <OPTION VALUE="Others" <?php if ($r['department'] == 'Others') {
                                    echo "selected";
                                } ?>>Other's </OPTION>

                </select>
              </div>
            </div>


<!--div class="form-group">
              <label for="input1" class="col-sm-4 control-label"  required>Designation</label>
              <div class="col-sm-7">
                <input type="text" name="designation"  class="form-control" id="input1" value="<?php echo $r['designation']; ?>"placeholder="Designation" />
              </div>
            </div-->

            <div class="form-group">
              <label for="department" class="col-sm-4 control-label">Designation </label>
              <div class="col-sm-7">
                <select id="designation" name="designation" class="form-control" />
                  <OPTION value="">Select Designation</OPTION>
                  <OPTION VALUE="COO" <?php if ($r['designation'] == 'COO') {
                                echo "selected";
                            } ?>>COO</OPTION>
                  <OPTION VALUE="Accounts Manager" <?php if ($r['designation'] == 'Accounts Manager') {
                                                echo "selected";
                                            } ?>>Accounts Manager</OPTION>
                  <OPTION VALUE="Senior Accounts" <?php if ($r['designation'] == 'Senior Accounts') {
                                            echo "selected";
                                        } ?>>Senior Accounts</OPTION>
                  <OPTION VALUE="Jonior Accounts" <?php if ($r['designation'] == 'Jonior Accounts') {
                                            echo "selected";
                                        } ?>>Jonior Accounts </OPTION>
                  <OPTION VALUE="Manager" <?php if ($r['designation'] == 'Manager') {
                                    echo "selected";
                                } ?>>Manager</OPTION>
                  <OPTION VALUE="Senior Executive Sales & Maeketing" <?php if ($r['designation'] == 'Senior Executive Sales & Maeketing') {
                                                                echo "selected";
                                                            } ?>>Senior Executive Sales & Maeketing</OPTION>
                  <OPTION VALUE="Executive Sales & Maeketing" <?php if ($r['designation'] == 'Executive Sales & Maeketing') {
                                                        echo "selected";
                                                    } ?>>Executive Sales & Maeketing</OPTION>
                  <OPTION VALUE="Head of Design" <?php if ($r['designation'] == 'Head of Design') {
                                            echo "selected";
                                        } ?>>Head of Design</OPTION>
                  <OPTION VALUE="Senior Design Engineer" <?php if ($r['designation'] == 'Senior Design Engineer') {
                                                    echo "selected";
                                                } ?>>Senior Design Engineer </OPTION>
                  <OPTION VALUE="Jonior Design Engineer" <?php if ($r['designation'] == 'Jonior Design Engineer') {
                                                    echo "selected";
                                                } ?>>Jonior Design Engineer </OPTION>
                  <OPTION VALUE="Head of IT" <?php if ($r['designation'] == 'Head of IT') {
                                        echo "selected";
                                    } ?>>Head of IT</OPTION>
                  <OPTION VALUE="Assistant of IT" <?php if ($r['designation'] == 'Assistant of IT') {
                                            echo "selected";
                                        } ?>>Assistant of IT</OPTION>
                  <OPTION VALUE="Head of Office Assistant" <?php if ($r['designation'] == 'Head of Office Assistant') {
                                                        echo "selected";
                                                    } ?>>Head of Office Assistant</OPTION>
                  <OPTION VALUE="Jonior Office Assistant" <?php if ($r['designation'] == 'Jonior Office Assistant') {
                                                    echo "selected";
                                                } ?>>Jonior Office Assistant</OPTION>
                  <OPTION VALUE="Others" <?php if ($r['designation'] == 'Others') {
                                    echo "selected";
                                } ?>>Other's</OPTION>
                </select>
              </div>

<div class="col-md-6">
      <div class="box box-primary">
          <div class="box-body">

            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label"  required>Joining Date</label>
              <div class="col-sm-7">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                    </div>
                  <input type="text" name="joining_date"  class="form-control" id="joining_date" value="<?php echo $r['joining_date']; ?>"placeholder="Joining Date" />
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="emp_leave_enjoy" class="col-sm-4 control-label"  required>Leave Enjoy</label>
              <div class="col-sm-7">
                <input type="text" name="emp_leave_enjoy"  class="form-control" id="input1" value="<?php echo $r['emp_leave_enjoy']; ?>"placeholder="Toatl Leave Enjoy" />
              </div>
            </div>

            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label"  required>Leave  Balance</label>
              <div class="col-sm-7">
                <input type="text" name="emp_leave_balance"  class="form-control" id="input1" value="<?php echo $r['emp_leave_balance']; ?>"placeholder="Leave  Balance" />
              </div>
            </div>
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label"  required>Last Leave Date</label>
              <div class="col-sm-7">
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                    </div>
                  <input type="text" name="last_leave_date"  class="form-control" id="last_leave_date" value="<?php echo $r['last_leave_date']; ?>"placeholder="Last Leave Date" />
                </div>
              </div>
            </div>
            <hr>
            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-7">
              <div class="checkbox">
                <label>
                <input type="checkbox"> Remember me
                </label>
              </div>
              </div>
            </div>
            <div class="box-footer">
         </div>
          </div>



          </div>
          <!-- /.box -->
        </div>

 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advanced Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">All users are here </h3>

          <a class=" col-lg-offset-4 btn btn-info" href="{{ route('user.create')}}"> Add New user</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>



      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
