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

        <form class="form-horizontal" action="{{ route('personalInfo.store')}}" method="POST">
          {{ csrf_field()}}

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="fname" class="col-sm-4 control-label">First Name</label>
                            <div class="col-sm-7">
                                <input type="text" name="fname" class="form-control" user_id="fname"
                                    value="" placeholder="First Name" required="required" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lname" class="col-sm-4 control-label">Last Name</label>
                            <div class="col-sm-7">
                                <input type="text" name="lname" class="form-control" user_id="lname"
                                    value="" placeholder="Last Name" required="required" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="input1" class="col-sm-4 control-label">Father's Name</label>
                            <div class="col-sm-7">
                                <input type="text" name="father_name" class="form-control" user_id="input1"
                                    value="" placeholder="Father's Name"
                                    required="required" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="input1" class="col-sm-4 control-label" required>Mother's Name</label>
                            <div class="col-sm-7">
                                <input type="text" name="mother_name" class="form-control" user_id="input1"
                                    value="" placeholder="Mother's Name" />
                            </div>
                        </div>


                        <div class="form-group" class="radio">
                            <label for="gender" class="col-sm-4 control-label">Gender</label>
                            <div class="col-sm-7">
                                <label>
                                    <input type="radio" name="gender" user_id="OPTIONsRadios1" value="male"
                                        checked> Male
                                </label>
                                <label>
                                    <input type="radio" name="gender" user_id="OPTIONsRadios1" value="female"
                                        > Female
                                </label>
                                <label>
                                    <input type="radio" name="gender" user_id="OPTIONsRadios1" value="others"
                                        > Other's
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dob" class="col-sm-4 control-label"> <strong>Date of Birth </strong></label>
                            <div class="col-sm-7">
                                <input type="text" name="dob" class="form-control" value=""
                                    disabled>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="dob" class="col-sm-4 control-label">Change Date of Birth</label>
                            <div class="col-sm-7">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <!--input type="text" name="dob" class="form-control" user_id="date"-->
                                    <input type="text" name="dob" class="form-control pull-right" id="date" />
                                </div>
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

            <!-- /.col (right) -col-md-6----->

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="marital_status" class="col-sm-4 control-label">Marital Status</label>
                            <div class="col-sm-7">
                                <select id="marital_status" name="marital_status" class="form-control"required="required" />
                                <option>Select Please</option>
                                <option value="Married">Married</option>
                                <option value="Unmarried">Unmarried</option>
                                <option value="Widowed">Widowed</option>
                                <option value="Single" >Single</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="blood" class="col-sm-4 control-label" required>Blood Group</label>
                            <div class="col-sm-7">
                               <select id="blood" name="blood" class="form-control" required="required" />
                                <option>Select Please</option>
                                <OPTION VALUE="A +ve">A +ve
                                </OPTION>
                                <OPTION VALUE="A -ve">A -ve
                                </OPTION>
                                <OPTION VALUE="B +ve">B +ve
                                </OPTION>
                                <OPTION VALUE="B -ve">B -ve
                                </OPTION>
                                <OPTION VALUE="O +ve">O +ve
                                </OPTION>
                                <OPTION VALUE="O -ve">O -ve
                                </OPTION>
                                <OPTION VALUE="AB +ve">AB +ve
                                </OPTION>
                                <OPTION VALUE="AB -ve">AB -ve
                                </OPTION>
                                </select>
                              
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="religion" class="col-sm-4 control-label"> <strong>Religion </strong></label>
                            <div class="col-sm-7">
                                <select id="religion" name="religion" class="form-control" required="required" />
                                <option>Select Please</option>
                                <OPTION VALUE="Islam">Islam
                                </OPTION>
                                <OPTION VALUE="Hindu">Hindu
                                </OPTION>
                                <OPTION VALUE="Christian" >
                                    Christian</OPTION>
                                <OPTION VALUE="Buddhist">
                                    Buddhist </OPTION>
                                <OPTION VALUE="Others" >
                                    Other's </OPTION>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nationality" class="col-sm-4 control-label">
                                <strong>Nationality</strong></label>
                            <div class="col-sm-7">
                               <select id="nationality" name="nationality" class="form-control" required="required" />
                                <option>Select Please</option>
                                <OPTION VALUE="Bangladeshi"
                                   >Bangladeshi
                                </OPTION>
                                <OPTION VALUE="Asian">Asian
                                </OPTION>
                                <OPTION VALUE="American"
                                   >American</OPTION>
                                <OPTION VALUE="South African"
                                    >South African
                                </OPTION>
                                <OPTION VALUE="Austrilian"
                                   >Austrilian
                                </OPTION>
                                <OPTION VALUE="European"
                                   >European </OPTION>
                                <OPTION VALUE="Others">
                                    Other's </OPTION>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nid" class="col-sm-4 control-label"> <strong>National ID </strong></label>
                            <div class="col-sm-7">
                                <input type="number" name="nid" class="form-control" value="" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="about_you" class="col-sm-4 control-label">About You</label>
                            <div class="col-sm-7">

                                <textarea class="form-control" rows="3" name="about_you" id="about_you"
                                    placeholder="Please write About You"> </textarea>
                            </div>
                        </div>

                    </div>

                    <div class="box-footer">
                        <!-- <button type="reset" value="Reset" class="btn btn-mg  btn-success">Reset</button>
      <button type="submit" class="btn btn-info pull-right">Update</button> -->
                    </div>

                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col (right) -col-md-6----->



            <div class=" col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
                <div class="row">
                    <button type="submit" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-edit"
                            aria-hidden="true"></span><b> &nbsp Update Personal Info</b></button>

                </div>
            </div>

        </form>
        <!--end form--->
        <br>
        <hr>


    </div><!-- /.row -->
</section><!-- /.content -->
    <!-- /.content -->
  </div>
@endsection