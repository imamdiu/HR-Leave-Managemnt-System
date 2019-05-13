@extends('admin.layouts.app')

@section('main-content')


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
        <li class="active">Advanced Elements </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Update Post </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          
            <div class="box box-primary">
            <!-- <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div> -->
            <!-- /.box-header -->
            <!-- form start -->

@if (count($errors)>0)
    @foreach($errors->all() as $error)

        <p class="alert alert-danger">{{ $error }}</p>
        
    @endforeach
@endif

            <form role="form" action="{{ route('post.update',$post->id)}}" method="POST">
              {{ csrf_field()}}
              {{ method_field('PUT')}}

              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Post Title</label>
                  <input type="text" name="post_title" class="form-control" name="post_title" id="exampleInputEmail1" placeholder="Enter post tile" value="{{ $post->post_title}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Post Sub Title</label>
                  <input type="text" name="post_sub_title"class="form-control" name="post_sub_title" id="exampleInputEmail1" placeholder="Enter post Sub tile" value="{{ $post->post_sub_title}}">
                </div>
               
                <div class="form-group">
                  <label>Post Content</label>
                  <textarea class="form-control" name="post_content" rows="3" placeholder="Enter ...">{{ $post->post_content}}</textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-success" href="{{ route('post.index')}}"> Back</a>
              </div>
            </form>
          </div>

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Visit <a href="https://select2.github.io/">Select2 documentation</a> for more examples and information about
          the plugin.
        </div>
      </div>
      <!-- /.box -->

     
    </section>
    <!-- /.content -->
  </div>
@endsection