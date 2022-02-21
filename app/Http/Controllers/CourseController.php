<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Department;
use Illuminate\Support\Facades\DB;
class CourseController extends Controller
{
    //
    public function index()
    {
        $course= Course::get();
       
        return view('course.index',compact('course'));
    }
    public function create()
    {
        
        $department=Department::get();
        return view('course.create',compact('department'));
    }
    public function store (Request $request){
        Course::create($request->all());
        return redirect('/course');
    }
    
    public function edit($course){
        $course = DB::table('courses')->where('cid',$course)->first();
        $department=Department::get();
        return view('course.edit',compact('course','department'));

    }
    public function update(Request $request,$course)
    {
        $data = array();
        $data['cid'] = $request->cid;
        $data['cname'] = $request->cname;
        $data['did'] = $request->did;
        DB::table('courses')->where('cid',$course)->update($data);
        return redirect('/course');
    }
    public function delete($course)
    {
        $delete =   DB::table('courses')->where('cid',$course)->delete();
        return redirect()->back();
    }
}
