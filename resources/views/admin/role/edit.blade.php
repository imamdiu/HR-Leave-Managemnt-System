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
            <form role="form" action="{{ route('role.update', $role_edit->id)}}" method="post">
              {{ csrf_field()}}

              {{ method_field('PATCH') }}

              <div class="box-body">
              <div class="col-lg-offset-3 col-lg-6">
                <div class="form-group">
                  <label for="role_name">Role Titles</label>
                  <input type="text" class="form-control" id="role_name" name="role_name" placeholder="Enter role Title" value="{{ $role_edit->role_name }}">
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