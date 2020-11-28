<?php

namespace App\Http\Controllers;
use DB;
use App\Employee;
use DataTables;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(Request $request)
    {

        if ($request->ajax()) {

            $data = Employee::latest()->get();


            return Datatables::of($data)

                    ->addIndexColumn()

                    ->addColumn('action', function($row){

                           $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editEmployee">Actualizar datos</a>';

                        //    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteEmployee">Delete</a>';

                            return $btn;

                    })

                    ->rawColumns(['action'])

                    ->make(true);

        }
        return view('employees.index');

    }
    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return response()->json($employee);
    }

    public function editEmployee($id)
    {
        $employee = Employee::findOrFail($id);
        // return response()->json($employee->user);
        return view('employees.edit',compact('employee'));
    }




    public function update(Request $request ,$id)
    {

        $employee =Employee::findOrFail($id);
        $employee->name =$request->name;
        $employee->lastname =$request->lastname;
        $employee->nuip =$request->nuip;
        $employee->phone =$request->phone;
        $employee->save();

        return response()->json($employee);
    }
}
