<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Models\Course;
use App\Models\Department;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;



class StudentController extends Controller
{
    public function index(){
        // all students view
        // $students=[
        //     ['code'=>123,'name'=>'ali','email'=>'ali@gmail.com'  ,'department'=>'cs'],
        //     ['code'=>125,'name'=>'sara','email'=>'sara@gmail.com','department'=>'cs'],
        //     ['code'=>123,'name'=>'mona','email'=>'mona@gmail.com','department'=>'cs']
        // ];
        $students=Student::get();
        return view('admin.students.index',compact('students'));
    }
    public function show($id){
        $courses=Course::get();
        $student=Student::findOrFail($id);
        $tab=$student->tablet->tablet_name;
        // return $student;
        return view('admin.students.show',compact('student','tab','courses'));
        
    }
     public function destroy($id){
        $student = Student::findOrFail($id);
        
        if(!empty($student->photo)&&Storage::exists($student->photo)){
            Storage::delete($student->photo);
        }
        Student::destroy($id);
        return redirect()->route('admin.students.index')->with('msg','success delete');
        }

    public function create(){
        // add student view
        $departments=Department::get();
        return view('admin.students.create',compact('departments'));
    }
    public function store(StudentRequest $request){
        
        $student=new Student();
        // كاءن من المودل يحمل خواص الاعبده
        $student->code=$request->code;
        $student->name=$request->name;
        $student->email=$request->email;
        $student->phone=$request->phone;
        $student->dept_id=$request->department;
        if($request->hasFile('photo')){
        // $student->photo=$request->photo->getClientOriginalName();
        $photo=$request->file('photo');
        $photoName=$photo->getClientOriginalName();
        $path = $photo->storeAs('images', $photoName, 'public');
        $student->photo = $path;}



        $student->save();
        return redirect()->route('admin.students.create')->with('msg','success create');
    }

    public function edit($id){
        $departments=Department::get();
        $student=Student::findOrFail($id);
        return view('admin.students.edit',compact('student','departments'));
    }
    public function update(StudentRequest $request, $id)
{
    $student = Student::findOrFail($id);
    $data = $request->validated();
    if ($request->hasFile('photo')) {
        $photo = $request->file('photo');
        $photoName = $photo->getClientOriginalName();
        $path = $photo->storeAs('images', $photoName, 'public');
        if (!empty($student->photo) && Storage::exists($student->photo)) {
            Storage::delete($student->photo);
        }
        $student->photo = $path;
    }
    $student->fill($data);
    $student->save();
    return redirect()->back()->with('msg', 'updated..');
}
    public function destroyArchive($id){
        $student=Student :: withTrashed()->where('code',$id);
        $student->forceDelete();
        return redirect()->back()->with('msg', 'force delete ..');
    }

    public function restore($id){
        $student=Student :: withTrashed()->where('code',$id);
        $student->restore();
        return redirect()->route('admin.students.index')->with('msg', 'restored ..');
    }


public function addCourses(Request $request,$id){
    $student=Student::findorfail($id);
    $student->courses ()->syncWithoutDetaching($request->courses);
    return redirect()->back();
}



public function archive(){
    $students = Student::onlyTrashed()->get();
    return view('admin.students.archive',compact('students'));

}


}
