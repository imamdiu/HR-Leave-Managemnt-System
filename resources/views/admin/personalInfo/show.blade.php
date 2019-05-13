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
        <li class="active">Advanced Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">All personalInfos are here {{ Auth::user()->name }} </h3>

          <a class=" col-lg-offset-4 btn btn-info" href="{{ route('personalInfo.create')}}"> Add New personalInfo</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>

            <div class="box-body">
              <div class="card-content table-responsive">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL NO.</th>
                  <th>Employee ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Date OF Birth</th>

                  <th>Marital Status</th>
                  <th>Blood Group</th>
                  <th>Religion</th>
                  <th>Nationality</th>
                  <th>National ID</th>
                  <th>About You</th>

                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
               @foreach($personalInfos as $personalInfo) 
                <tr>
                  
                  <td> {{ $loop->index + 1}}</td>
                   <td> {{ $personalInfo->emp_id}}</td>
                  <td> {{ $personalInfo->fname}}</td>
                  <td> {{ $personalInfo->lname}}</td>
                  <td> {{ $personalInfo->gender}}</td>
                  <td> {{ $personalInfo->dob}}</td>
                  <td> {{ $personalInfo->marital_status}}</td>
                   <td> {{ $personalInfo->blood}}</td>
                    <td> {{ $personalInfo->religion}}</td>
                     <td> {{ $personalInfo->nationality}}</td>

                  
                  <td> {{ $personalInfo->nid}}</td>
                  <td> {{ $personalInfo-> about_you}}</td>
                 <!--  <td> {{ $personalInfo->personalInfo_content}}</td> -->
                  

                  <td> <a href="{{ route('personalInfo.edit', $personalInfo->id)}}"> <span class="glyphicon glyphicon-edit"></span></a></td>
                 <!--  <td> <a href=""> <span class="glyphicon glyphicon-trash"></span></a></td> -->
                    <td>
                        <form id="delete-form-{{ $personalInfo->id}}" method="POST" action=" {{ route('personalInfo.destroy',$personalInfo->id)}}" style="display: none">
                          {{ csrf_field()}}
                          {{ method_field('DELETE')}}
                        </form>
                      
                        <a href="" onclick="
                        if(confirm('Are you want to sure, You want to delete this?'))
                          {
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $personalInfo->id }}').submit();
               
                           }else{
                            
                            event.preventDefault();

                          }"> <span class="glyphicon glyphicon-trash"></span></a> 
                    
                    </td>       
                </tr>
                @endforeach
              
                </tbody>
                <tfoot>
                <tr>

                  <th>SL NO.</th>
                  <th>Employee ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Gender</th>
                  <th>Date OF Birth</th> 

                  <th>Marital Status</th>
                  <th>Blood Group</th>
                  <th>Religion</th>
                  <th>Nationality</th>
                  <th>National ID</th>
                  <th>About You</th>

                  <th>Edit</th>
                  <th>Delete</th>
                  
                </tr>
                </tfoot>
              </table>
            </div>
            
            </div>
            <!-- /.box-body -->
         
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
@endsection