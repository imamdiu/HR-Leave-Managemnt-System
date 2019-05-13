@extends('admin.layouts.app')

@section('main-content')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Advanced Form Elements for Update PersonlInfo {{ Auth::user()->name }} 
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



        <form class="form-horizontal" action="{{ route('personalInfo.update',$personalInfo->id)}}" method="POST">
          {{ csrf_field()}}
          {{ method_field('PUT')}}

            <div class="col-md-6">
                <div class="box box-primary">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="fname" class="col-sm-4 control-label">First Name</label>
                            <div class="col-sm-7">
                                <input type="text" name="fname" class="form-control" user_id="fname"
                                    value="{{ $personalInfo->fname}}" placeholder="First Name" required="required" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lname" class="col-sm-4 control-label">Last Name</label>
                            <div class="col-sm-7">
                                <input type="text" name="lname" class="form-control" user_id="lname"
                                    value="{{ $personalInfo->lname}}" placeholder="Last Name" required="required" />
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="input1" class="col-sm-4 control-label">Father's Name</label>
                            <div class="col-sm-7">
                                <input type="text" name="father_name" class="form-control" user_id="input1"
                                    value="{{ $personalInfo->father_name}}" placeholder="Father's Name"
                                    required="required" />
                            </div>
                        </div>



                        <div class="form-group">
                            <label for="input1" class="col-sm-4 control-label" required>Mothers Name</label>
                            <div class="col-sm-7">
                                <input type="text" name="mother_name" class="form-control" user_id="input1"
                                    value="{{ $personalInfo->mother_name}}" placeholder="Mothers Name" />
                            </div>
                        </div>




                        <div class="form-group" class="radio">
                            <label for="gender" class="col-sm-4 control-label">Gender</label>
                            <div class="col-sm-7">

             
<label><input type="radio" name="gender" value="male"  @if(old('gender',$personalInfo->gender)=='male') checked @endif > Male<br></label>
<label><input type="radio" name="gender" value="female"@if(old('gender',$personalInfo->gender)=='female') checked @endif > Female<br></label>
<label><input type="radio" name="gender" value="others"@if(old('gender',$personalInfo->gender)=='others') checked @endif > Other's<br></label>

                            </div>           </div>
                        <div class="form-group">
                            <label for="dob" class="col-sm-4 control-label"> <strong>Date of Birth </strong></label>
                            <div class="col-sm-7">
                                <input type="text" name="dob" class="form-control" value="{{ $personalInfo->dob}}"
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
                                    <input type="text" name="dob" class="form-control pull-right" value="{{ $personalInfo->dob}}" id="date" />
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

                                <select id="marital_status" name="marital_status" class="form-control" >

 <option vlaue="Married"{{ ($personalInfo->marital_status == 'MarriedUnmarried') ? ' selected' : '' }}>Married</option>
 <option vlaue="Unmarried"{{ ($personalInfo->marital_status == 'Unmarried') ? ' selected' : '' }}>Unmarried</option>
 <option vlaue="Widowed"{{ ($personalInfo->marital_status == 'Widowed') ? ' selected' : '' }}>Widowed</option>
 <option vlaue="Single"{{ ($personalInfo->marital_status == 'Single') ? ' selected' : '' }}>Single</option>
 
                                </select>


                            </div>
                        </div>

                        <div class="form-group">
                            <label for="blood" class="col-sm-4 control-label" required>Blood Group</label>
                            <div class="col-sm-7">
                               <select id="blood" name="blood" class="form-control" />

 <option vlaue="A +ve"{{ ($personalInfo->blood == 'A +ve') ? ' selected' : '' }}>A +ve</option>
 <option vlaue="A -ve"{{ ($personalInfo->blood == 'A -ve') ? ' selected' : '' }}>A -ve</option>
 <option vlaue="B +ve"{{ ($personalInfo->blood == 'B +ve') ? ' selected' : '' }}>B +ve</option>
 <option vlaue="B -ve"{{ ($personalInfo->blood == 'B -ve') ? ' selected' : '' }}>B -ve</option>
 <option vlaue="AB +ve"{{ ($personalInfo->blood == 'AB +ve') ? ' selected' : '' }}>AB +ve</option>
 <option vlaue="AB -ve"{{ ($personalInfo->blood == 'AB -ve') ? ' selected' : '' }}>AB -ve</option>
 <option vlaue="O +ve"{{ ($personalInfo->blood == 'O +ve') ? ' selected' : '' }}>O +ve</option>
 <option vlaue="O -ve"{{ ($personalInfo->blood == 'O -ve') ? ' selected' : '' }}>O -ve</option>

                                </select>

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="religion" class="col-sm-4 control-label"> <strong>Religion </strong></label>
                            <div class="col-sm-7">
                                <select id="religion" name="religion" class="form-control" />

 <option vlaue="Islam"{{ ($personalInfo->religion == 'Islam') ? ' selected' : '' }}>Islam</option>
 <option vlaue="Hindu"{{ ($personalInfo->religion == 'Hindu') ? ' selected' : '' }}>Hindu</option>
 <option vlaue="Christian"{{ ($personalInfo->religion == 'Christian') ? ' selected' : '' }}>Christian</option>
 <option vlaue="Buddhist"{{ ($personalInfo->religion == 'Buddhist') ? ' selected' : '' }}>Buddhist</option>
 <option vlaue="Others"{{ ($personalInfo->religion == 'Others') ? ' selected' : '' }}>Others</option>


                                </select>
                            </div>

                        </div>


                        <div class="form-group">
                            <label for="nationality" class="col-sm-4 control-label">
                                <strong>Nationality</strong></label>
                            <div class="col-sm-7">
                            <select id="nationality" name="nationality" class="form-control" />
                                
 <option vlaue="Bangladeshi"{{ ($personalInfo->nationality == 'Bangladeshi') ? ' selected' : '' }}>Bangladeshi</option>
 <option vlaue="Asian"{{ ($personalInfo->nationality == 'Asian') ? ' selected' : '' }}>Asian</option>
 <option vlaue="American"{{ ($personalInfo->nationality == 'American') ? ' selected' : '' }}>American</option>
 <option vlaue="South African"{{ ($personalInfo->nationality == 'South African') ? ' selected' : '' }}>South African</option>
 <option vlaue="Austrilian"{{ ($personalInfo->nationality == 'Austrilian') ? ' selected' : '' }}>Austrilian</option>
 <option vlaue="European"{{ ($personalInfo->nationality == 'European') ? ' selected' : '' }}>European</option>
 <option vlaue="Others"{{ ($personalInfo->nationality == 'Others') ? ' selected' : '' }}>Others</option>
                             </select>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nid" class="col-sm-4 control-label"> <strong>National ID </strong></label>
                            <div class="col-sm-7">
                                <input type="number" name="nid" class="form-control" value="{{ $personalInfo->nid}}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="about_you" class="col-sm-4 control-label">About You</label>
                            <div class="col-sm-7">

                                <textarea class="form-control" rows="3" name="about_you" id="about_you"
                                    placeholder="Please write About You"> {{ $personalInfo->about_you}}</textarea>
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
