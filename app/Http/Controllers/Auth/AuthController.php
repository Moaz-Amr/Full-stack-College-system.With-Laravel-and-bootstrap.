<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;

class AuthController extends Controller
{
    public function logout(){
        Auth::logout();
        return redirect()->route('auth.login');
    }

    public function login(){
        return view('auth.login');
    }
    public function register(){
        return view('auth.register');
    }



    public function handleRegister(Request $request){
    $data=$request->validate([
    'name'=>'required',
    'email'=>'email|required|unique:users,email',
    'password'=>'required'
    ]);
    $data['password' ]=Hash::make($request->password);
    $user=User::create($data);
    Auth::login($user);
    return redirect()->route('admin.students.index') ;

    }


        








        


    public function handleLogin(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->route('admin.students.index');
    }

    return back()->withErrors([
        'email' => 'Your email or Password Invalid',
    ]);
}

public function handleStudentLogin(Request $request)
{
    $credentials = $request->validate([
        'code' => 'required|string',
        'name' => 'required|string'
    ]);

    $student = Student::where('code', $credentials['code'])->first();

    if ($student && $student->name === $credentials['name']) {

        $request->session()->put('student_code', $student->code);
        $request->session()->regenerate();
        
        return redirect()->route('admin.students.show',$student->code);
    }

    return back()->withErrors([
        'code' => 'بيانات الاعتماد غير صحيحة',
    ]);
}



}
