@extends('layouts.master')

@section('content')
   <!-- Content Header (Page header) -->
   <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Course</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Course  edit</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 <!-- /.col-md-6 -->
 <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0">Edit  Course</h5>
              </div>
             
            

             <!-- form start -->
             <form role="form" action="{{ route('courses.update', $course->id )}}" method="post">
               @csrf
               @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Course Name</label>
                    <input name="name" type="text" class="form-control"  placeholder=" v Name" value="{{ $course->name }}">
                    
                  @if($errors->has('name'))
                  <span class="text-danger"> {{ $errors->first('name') }}</span>

                  @endif 


                  </div>                    
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
              </div>
              </div>
            </div>
@endsection