@extends('layouts.master')

@section('content')

<div class="col-lg-12">
<h4>Departments List</h4>

<table class="table table-broder datatable">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Department Name</th>
                        <th>Action</th>                      

                    </tr>
                </thead>
                <tbody>
                  @if($departments)

                    @foreach($departments as $key => $department)
                            <tr>
                                <td>{{ ++$key}}</td>
                                <td>{{ $department->name ?? '' }}</td>
                                <td>
                                  <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-sm btn-info">edit </a>
                                  
                                  <a href="javascript:;" class="btn btn-sm bg-danger sa-delete" data-form-id="department-delete{{ $department->id }}">Delete </a>

                                    <form id="department-delete{{ $department->id}}" action="{{ route('departments.destroy', $department->id)}}" method="POST">
                                      @csrf
                                      @method('DELETE')
                                    </form>

                                </td>
                            </tr>
                    @endforeach
                  @endif
                </tbody>

             </table>
</div>


@endsection