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
   <div class="col-md-6 col-md-offset-3 col-sm-10 col-sm-offset-1 col-xs-10 col-xs-offset-1">
                <div class="row">
                    <form role="form-horizontal" action="{{ route('imageInfo.update',$imageInfo->id) }}" method="post" enctype="multipart/form-data">

              {{ csrf_field()}}
              {{ method_field('PUT')}}
                    
                            <div class="box box-primary">
                                <div class="box-body">
                                
                                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                                          
                               <div class="form-group">
                                  <img id="image" src="#" />
                                    <label for="exampleInputPassword11">New Photo</label>
                                    <input type="file"  name="image" accept="image/*"   onchange="readURL(this);">
                                </div>

                                <div class="form-group">

              <img src="{{ URL::to($imageInfo->image) }}"  style="height: 80px; width: 80px;">
              <input type="hidden" name="old_photo" value="{{ $imageInfo->image }}">
                               
                                </div>



<!-- <img src="{{ asset($imageInfo->image)}} 

" height="200"width="200"> -->
                                            </div>
                                        

                                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
<input type="file" class="form-control" name="image" accept="image/*" id="image"value="">
                                        </div>

                                </div>

                        </div>
                </div>
            </div>

                    <div class=" col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                        <div class="form-group">
                            <div class="row">
                                <button type="submit" name="Submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span><b> &nbsp Update Profile Image</b></button>
                            </div>
                        </div>
                    </div>  
            </form>
    <!-- /.content -->
  </div>
@endsection