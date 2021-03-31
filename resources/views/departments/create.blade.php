@extends('layouts.master')

@section('content')

<div class="col-lg-6">
<form action="{{ route('departments.store')}}" method="POST">

@csrf
   <div class="form-group">
    <label for="exampleInputPassword1">Department Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Department Name">
  
    @if($errors->has('name'))
                  <span class="text-danger"> {{ $errors->first('name') }}</span>

                  @endif 
 
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


@endsection