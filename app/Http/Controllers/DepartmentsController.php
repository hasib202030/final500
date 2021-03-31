<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::orderby('created_at', 'DESC')->get();

        return view('departments.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // laravel 8 new valadation style
       $validated = $request->validate([
        'name' => 'required|unique:departments|max:50',
        ]);
            $department = new Department();            
            $department->name = $request->name;
            $department->save();

            flash('category create succfully')->success();
            return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('departments.edit', compact('department'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         // laravel 8 new valadation style
         $validated = $request->validate([
            'name' => 'required|unique:departments|max:50,name,' . $id
          ]);

          $department = Department::findOrFail($id);
          $department->name = $request->name;
          $department->save;

          flash('department updated succfully')->success();
          return redirect()->route('departments.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // delete category
         $department = Department::findOrFail($id);
         $department->delete();
 
         flash('department deleted succfully')->success();
           return redirect()->route('departments.index');
    }
}
