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
          <h3 class="box-title">All Contact Infos are here {{ Auth::user()->name }} </h3>

          <a class=" col-lg-offset-4 btn btn-info" href="{{ route('contactInfo.create')}}"> Add New Contact Info</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>

            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL NO.</th>
                  <th>Employee ID</th>
                  <th>Mobile</th>
                  <th>Telephone</th>
                  <th>Email</th>

                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
               @foreach($contactInfos as $contactInfo) 
                <tr>
                  
                  <td> {{ $loop->index + 1}}</td>
                   <td> {{ $contactInfo->emp_id}}</td>
                  <td> {{ $contactInfo->mobile}}</td>
                  <td> {{ $contactInfo->mobile2}}</td>
                   <td> {{ $contactInfo->email2}}</td>
                  

                  <td> <a href="{{ route('contactInfo.edit', $contactInfo->id)}}"> <span class="glyphicon glyphicon-edit"></span></a></td>
                 <!--  <td> <a href=""> <span class="glyphicon glyphicon-trash"></span></a></td> -->
                    <td>
                        <form id="delete-form-{{ $contactInfo->id}}" method="POST" action=" {{ route('contactInfo.destroy',$contactInfo->id)}}" style="display: none">
                          {{ csrf_field()}}
                          {{ method_field('DELETE')}}
                        </form>
                      
                        <a href="" onclick="
                        if(confirm('Are you want to sure, You want to delete this?'))
                          {
                            event.preventDefault();
                            document.getElementById('delete-form-{{ $contactInfo->id }}').submit();
               
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
                  <th>Mobile</th>
                  <th>Telephone</th>
                  <th>Email</th>

                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
         
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
@endsection