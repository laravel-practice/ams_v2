<?php

namespace App\Http\Controllers\Admin;

use App\Models\Employee;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data=[];
        // $data['rows'] = Employee::all();
        // dd($data);
        // return view('admin.post.index', compact('data'));
        return view('admin.employee.index', compact('data'));
    }

    public function getUsers()
    {
                // $data=[];
        // $data['rows'] = Employee::all();
        return Datatables::of(Employee::query())->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $row = $request->all();
        // dd($row);
        $row = new Employee();
        $row->employee_id = $request->get('employee_id');
        $row->name = $request->get('name');
        $row->address = $request->get('address');
        $row->email = $request->get('email');
        $row->contact = $request->get('contact');
        $row->gender = $request->get('gender');
        $row->designation = $request->get('designation');
        $row->save();
        return redirect ('admin/employee');
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
        // dd($id);
        $data = [];
        $data['row'] = Employee::find($id);
        return view ('admin/employee/edit', compact('data'));
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
        $row = Employee::find($id);
        $row->employee_id = $request->get('employee_id');
        $row->name = $request->get('name');
        $row->address = $request->get('address');
        $row->email = $request->get('email');
        $row->contact = $request->get('contact');
        $row->gender = $request->get('gender');
        $row->designation = $request->get('designation');
        $row->save();
        return redirect ('admin/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Employee::find($id);
        $row->delete();
        return redirect ('admin/employee');
    }
}
