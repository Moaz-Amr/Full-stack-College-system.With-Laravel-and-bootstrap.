<?php

namespace App\Http\Controllers;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function show($id){
        $department=Department::find($id);
        $students=$department->students()->pluck('name');
        return view('admin.departments.show', compact('department','students'));
    }
    public function department(){
        $department=Department::get();
        return view('admin.departments.department',compact('department'));
    }
        }

