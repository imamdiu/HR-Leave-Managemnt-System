@extends('admin.layouts.app')

@section('main-content')


<section class="content">
  <div class="row">
            <!-- /.box-header -->
            @include('includes.messages')
            <!-- form start -->
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
              


              <!--  <div class="col-lg-6"--->
                 
<div class="col-md-6">
      <div class="box box-primary">
          <div class="box-body">

              <div class="box-footer">
         </div>
          </div>
          
          <!-- <div class="box-footer">
            <button type="reset" value="Reset" class="btn btn-mg  btn-success">Reset</button>
            <button type="submit" class="btn btn-info pull-right">Update</button>
          </div> -->
          
          </div>
          <!-- /.box -->
        </div>

              <div class=" col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
            <div class="row">
            <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><b> &nbsp Update Personal Info</b></button>
            
            </div>
          </div>


            </form>
         </div>
  <!-- End Row-->
</section>
@endsection



@extends('admin.layouts.app')

@section('main-content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advanced Form Elements for create User
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
      
        <div class="box-header with-border">
          <h3 class="box-title">Select2</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          
           
            <!-- /.box-header -->
            @include('includes.messages')
            <!-- form start -->
            <form role="form" action="{{ route('user.store') }}" method="POST">
              @csrf
              
    <div class="col-md-6">
      <div class="box box-primary">

            
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
              
               <div class="col-lg-6">
                 

              </div>
              <!-- /.box-body -->

              <div class=" col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
            <div class="row">
            <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><b> &nbsp Update Personal Info</b></button>
            
            </div>
          </div>

            </form>
          </div>

        </div>
       

      </div>
      <!-- /.box -->

     
    </section>
    <!-- /.content -->
  </div>
@endsection


@extends('admin.layouts.app')

@section('main-content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <!-- Main content -->
    <section class="content">

            <!-- /.box-header -->
            @include('includes.messages')
            <!-- form start -->
            <form role="form" action="{{ route('user.store') }}" method="POST">
              @csrf
              
    <div class="col-md-6">
      <div class="box box-primary">

            
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
              
               <div class="col-lg-6">
                 

              </div>
              <!-- /.box-body -->

              <div class=" col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
            <div class="row">
            <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><b> &nbsp Update Personal Info</b></button>
            
            </div>
          </div>

            </form>
          </div>

        </div>
       

      </div>
      <!-- /.box -->

     
    </section>
    <!-- /.content -->
  </div>
@endsection