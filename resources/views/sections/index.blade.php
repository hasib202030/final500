@extends('layouts.master')

@section('content')

<div class="col-lg-12">
<h4>User List</h4>

<table class="table table-broder datatable">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th> Name</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                  @if($sections)

                    @foreach($sections as $key => $section)
                            <tr>
                                <td>{{ ++$key}}</td>
                                <td>{{ $section->name ?? '' }}</td>
                                <td>
                                  <a href="{{ route('sections.edit', $section->id) }}" class="btn btn-sm btn-info">edit </a>

                                  <a href="javascript:;" class="btn btn-sm bg-danger sa-delete" data-form-id="section-delete{{ $section->id }}">Delete </a>

                                    <form id="section-delete{{ $section->id}}" action="{{ route('sections.destroy', $section->id)}}" method="POST">
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
