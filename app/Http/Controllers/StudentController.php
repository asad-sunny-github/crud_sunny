<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $student;
    protected $students;

    public function index()
    {
        return view('add-student');
    }

    public function create(Request $request)
    {
        if (!$request->name==null && !$request->email==null && !$request->mobile==null){
            Student::insert([
                'name'=>$request->name,
                'email'=>$request->email,
                'mobile'=>$request->mobile
            ]);
            return redirect()->back()->with('message', 'Student info save successfully.');
        }
        else{
            return redirect()->back()->with('message', 'Not Saved ! All field should be filled !');
        }

    }
    public function manage()
    {
        $this->students = Student::orderBy('id', 'desc')->get();
        return view('manage-student', ['students' => $this->students]);
    }

    public function edit($id)
    {
        $this->student = Student::find($id);
        return view('edit-student', ['student' =>$this->student]);
    }
    public function update(Request $request, $id)
    {
        if($request->has('name')){
            Student::where('id',$id)->update(['name'=>$request->name]);
        }
        if ($request->has('email')){
            Student::where('id',$id)->update(['email'=>$request->email]);
        }
        if ($request->has('mobile')){
            Student::where('id',$id)->update(['mobile'=>$request->mobile]);
        }

        return redirect('/manage-student')->with('message', 'Student info update successfully.');
    }
    public function delete($id)
    {
        Student::where(['id'=>$id])->delete();

        return redirect('/manage-student')->with('message', 'Student info delete successfully.');

    }
}
