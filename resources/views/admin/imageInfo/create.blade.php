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
                    <form role="form-horizontal" action="{{ route('imageInfo.store') }}" method="post" enctype="multipart/form-data">

              {{ csrf_field()}}

                    
                            <div class="box box-primary">
                                <div class="box-body">
                                
                                        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                                            <div class="form-group">
                         <img id="image" src="#" height="200"width="200">
                         <!-- <img id="image" src="#" /> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                                                <!-- <input type="file" name="file" id="file">
                                                <input type="submit" value="Upload" name="submit">
                                                <input type="hidden" value="{{ csrf_token() }}" name="_token"> -->

<input type="file"  name="photo" accept="image/*"  required onchange="readURL(this);"> 
<!-- <input type="file" class="form-control" name="image" id="image"value=""> -->

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

  <script type="text/javascript">
    function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#image')
                  .attr('src', e.target.result)
                  .width(200)
                  .height(200);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>

@endsection