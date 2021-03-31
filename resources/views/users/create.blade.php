@extends('layouts.master')

@section('content')

    <div class="col-lg-2"> </div>

    <div class="col-lg-8">

        <form action="{{ route('users.store')}}" method="POST">

            @csrf
            <div class="form-group">
                <label for="exampleInputPassword1">Student Name<span class="text-danger"> *</span></label>
                <input name="name" type="text" class="form-control" id="exampleInputPassword1" placeholder="Student Name">

                @if($errors->has('name'))
                    <span class="text-danger"> {{ $errors->first('name') }}</span>

                @endif

            </div>


            <div class="form-group">
                <label for="exampleInputPassword1">Student Email<span class="text-danger"> *</span></label>
                <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">

                @if($errors->has('email'))
                    <span class="text-danger"> {{ $errors->first('email') }}</span>

                @endif

            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Father Name<span class="text-danger"> *</span></label>
                <input name="father_name" type="text" class="form-control" id="exampleInputPassword1" placeholder="father name">

                @if($errors->has('father_name'))
                    <span class="text-danger"> {{ $errors->first('father_name') }}</span>

                @endif

            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password<span class="text-danger"> *</span></label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">

                @if($errors->has('password'))
                    <span class="text-danger"> {{ $errors->first('password') }}</span>

                @endif

            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Confirmation Password<span class="text-danger"> *</span></label>
                <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1" placeholder=" Enter Confirmation Password">


            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-lg-2"> </div>

@endsection
