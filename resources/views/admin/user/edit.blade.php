@extends('admin.layouts.app')

@section('main-content')


<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      @include('includes.messages')
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
         
          <!-- /.box -->

          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Admin</h3>
            </div>
            <!-- /.box-header -->
            @include('includes.messages')
            <!-- form start 

            -->
            <form role="form" action="{{ route('user.update',$user_edit->id)}}" method="post">
             @csrf

              {{ method_field('PUT')}}

              <div class="box-body">
					<div class="col-lg-offset-3 col-lg-6">
					<div class="form-group">
                  <label for="name">User Name </label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="User Name" 
                  value="@if (old('name')){{ old('name') }}@else{{ $user_edit->name }} @endif">
                </div>

               

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" 
                  value="@if (old('email')){{ old('email') }}@else{{ $user_edit->email }} @endif">
                </div>

                


                 <div class="form-group">
                  <label for="confirm_passowrd">Status</label>
                  <div class="checkbox">
                    <label ><input type="checkbox" name="status" 
                    @if (old('status')==1 || $user_edit->status == 1)
                      checked
                    @endif value="1">Status</label>
                  </div>
                </div>

               



                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
                        
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