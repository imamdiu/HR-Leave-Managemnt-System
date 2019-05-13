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
    <div class="row">



        <form class="form-horizontal" action="{{ route('contactInfo.update',$contactInfo->id)}}" method="POST">
          {{ csrf_field()}}
          {{ method_field('PUT')}}

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">

                          <div class="form-group">
                            <label for="input1" class="col-sm-4 control-label">Mobile NO.</label>                   
                            <div class="col-sm-7">
                                <input type="number" name="mobile"  class="form-control" id="mobile" value="{{ $contactInfo->mobile}}" placeholder="Mobile NO."/>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="mobile4" class="col-sm-4 control-label">Mobile No 2 (Optional)</label>
                            <div class="col-sm-7">
                                <input type="number" name="mobile2"  class="form-control" id="mobile2" value="{{ $contactInfo->mobile2}}"placeholder="Mobile No 2 (Optional)"/>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="email2" class="col-sm-4 control-label">Email 2 (Optional)</label>
                            <div class="col-sm-7">
                                <input type="text" name="email2"  class="form-control" id="email2" value="{{ $contactInfo->email2}}"placeholder="Alternate Email (Optional)"/>
                            </div>
                        </div>  



                       
                    </div>
                    <div class="box-footer">
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (right) -col-md-6----->


            <div class=" col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                <div class="row">
                    <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit"
                            aria-hidden="true"></span><b> &nbsp Update Contact Info</b></button>

                </div>
            </div>
    </div><!-- /.row -->
</section><!-- /.content -->
    <!-- /.content -->
  </div>
@endsection
