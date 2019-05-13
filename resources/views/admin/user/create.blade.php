@extends('admin.layouts.app')

@section('main-content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <br> 
 <form role="form" action="{{ route('user.store') }}" method="POST">
              @csrf
              
    <div class="col-md-6">
      <div class="box box-primary">
          <div class="box-body">
            
                <div class="form-group">
                  <label for="exampleInputEmail1">User Id</label>
                  <input type="text" class="form-control" name="emp_id" id="exampleInputEmail1" placeholder="Enter User Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">User Name</label>
                  <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter User Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" name="email" id="exampleInputEmail1" placeholder="Enter Email">
                </div>

                <div class="form-group">
                  <label for="password">password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" value="{{ old('password') }}">
                </div>

                 <div class="form-group">
                  <label for="password_confirmation">Confirm Password</label>
                  <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Confirm Password">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword21">Add Role</label>
                  @php
                  $cat=DB::table('roles')->get();
                  @endphp
                  <select name="role_id" class="form-control">
                    @foreach($cat as $row)
                     <option value="{{ $row->role_id}}">{{ $row->role_name }}</option>
                    @endforeach
                  </select>
              </div>

                 <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Active
                  </label>
                </div>

          </div>
        </div>
      </div>

    <div class="col-md-6">
      <div class="box box-primary">
          <div class="box-body">

            <div class="form-group">
              <label for="department" class="col-sm-4 control-label">Department</label>
                <select id="department" name="department" class="form-control" required="required"/>
                  <OPTION value="">Select Department</OPTION>
                  <OPTION VALUE="Admin" >Admin</OPTION>
                  <OPTION VALUE="Marketing">Marketing</OPTION>
                  <OPTION VALUE="Design" >Design</OPTION>
                  <OPTION VALUE="IT" >IT </OPTION>
                  <OPTION VALUE="Office Assistant">Office Assistant</OPTION>
                  <OPTION VALUE="Others" >Other's </OPTION>
                </select>
            </div>
            <div class="form-group">
              <label for="department" class="col-sm-4 control-label">Designation </label>
                <select id="designation" name="designation" class="form-control" />
                  <OPTION value="">Select Designation</OPTION>
                  <OPTION VALUE="COO" >COO</OPTION>
                  <OPTION VALUE="Accounts Manager">Accounts Manager</OPTION>
                  <OPTION VALUE="Senior Accounts">Senior Accounts</OPTION>
                  <OPTION VALUE="Jonior Accounts" >Jonior Accounts </OPTION>
                  <OPTION VALUE="Manager" >Manager</OPTION>
                  <OPTION VALUE="Senior Executive Sales & Maeketing">Senior Executive Sales & Maeketing</OPTION>
                  <OPTION VALUE="Executive Sales & Maeketing" >Executive Sales & Maeketing</OPTION>
                  <OPTION VALUE="Head of Design" >Head of Design</OPTION>
                  <OPTION VALUE="Senior Design Engineer" >Senior Design Engineer </OPTION>
                  <OPTION VALUE="Jonior Design Engineer">Jonior Design Engineer </OPTION>
                  <OPTION VALUE="Head of IT">Head of IT</OPTION>
                  <OPTION VALUE="Assistant of IT" >Assistant of IT</OPTION>
                  <OPTION VALUE="Head of Office Assistant" >Head of Office Assistant</OPTION>
                  <OPTION VALUE="Jonior Office Assistant" >Jonior Office Assistant</OPTION>
                  <OPTION VALUE="Others" >Other's</OPTION>             
                </select>
            </div>
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label"  required>Joining Date</label>
            
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                    </div>
                  <input type="text" name="joining_date"  class="form-control" id="joining_date"placeholder="Joining Date" />
                </div>
            
            </div>

            <div class="form-group">
              <label for="emp_leave_enjoy" class="col-sm-4 control-label"  required>Leave Enjoy</label>
              
                <input type="text" name="emp_leave_enjoy"  class="form-control" id="input1"placeholder="Toatl Leave Enjoy" />
            
            </div>
            
            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label"  required>Leave  Balance</label>
             
                <input type="text" name="emp_leave_balance"  class="form-control" id="input1" placeholder="Leave  Balance" />
              
            </div>

            <div class="form-group">
              <label for="input1" class="col-sm-4 control-label"  required>Last Leave Date</label>
             
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                    </div>
                  <input type="text" name="last_leave_date"  class="form-control" id="last_leave_date" placeholder="Last Leave Date" />
                </div>
             
            </div>
            

          </div>
      </div>

       <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><b> &nbsp Update Personal Info</b></button>
        </div>
        <hr>
    </div> 


         


</form>

  </div>
@endsection