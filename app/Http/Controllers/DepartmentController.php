<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
class DepartmentController extends Controller
{
    //
    public function index(){
        $department = Department::all();
        return view('department.index',compact('department'));
    }
    public function create()
    {
        
        return view('department.create');
    }
    public function store (Request $request){
        Department::create($request->all());
        return redirect('/department');
    }
    public function edit($department)
    {
        $department = DB::table('departments')->where('did',$department)->first();
       
        return view('department.edit',compact('department'));

    }
    public function update(Request $request,$department)
    {
        $data = array();
        $data['did'] = $request->did;
        $data['dname'] = $request->dname;
        DB::table('departments')->where('did',$department)->update($data);
        return redirect('/department');
    }
    public function delete($department)
    {
        $delete =   DB::table('departments')->where('did',$department)->delete();
        return redirect()->back();
    }
}
