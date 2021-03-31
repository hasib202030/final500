@extends('layouts.master')

@section('content')

    <div class="col-lg-12">
        <h4>Student List</h4>

        <table class="table table-broder datatable">
            <thead>
            <tr>
                <th>SL No</th>
                <th>Student Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Created At</th>

                <th>Action</th>

            </tr>
            </thead>
            <tbody>
            @if($users)

                @foreach($users as $key => $user)
                    <tr>
                        <td>{{ ++$key}}</td>
                        <td>{{ $user->name ?? '' }}</td>
                        <td>{{ $user->email ?? '' }}</td>
                        <td>{{ $user->mobile ?? '' }}</td>
                        <td>{{ $user->created_at->format('yy-m-d') ?? '' }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-info">Edit </a>

                            @if(auth()->id() != $user->id)
                                <a href="javascript:;" class="btn btn-sm bg-danger sa-delete" data-form-id="user-delete{{ $user->id }}">Delete </a>

                                <form id="user-delete{{ $user->id}}" action="{{ route('users.destroy', $user->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                @endif


                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection


