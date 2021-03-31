@extends('layouts.master')

@section('content')

<div class="col-lg-12">
<h4>curse List</h4>

<table class="table table-broder datatable">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>curse Name</th>
                        <th>Action</th>                      

                    </tr>
                </thead>
                <tbody>
                  @if($courses)

                    @foreach($courses as $key => $course)
                            <tr>
                                <td>{{ ++$key}}</td>
                                <td>{{ $course->name ?? '' }}</td>
                                <td>
                                  <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-sm btn-info">edit </a>
                                  
                                  <a href="javascript:;" class="btn btn-sm bg-danger sa-delete" data-form-id="course-delete{{ $course->id }}">Delete </a>

                                    <form id="course-delete{{ $course->id}}" action="{{ route('courses.destroy', $course->id)}}" method="POST">
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