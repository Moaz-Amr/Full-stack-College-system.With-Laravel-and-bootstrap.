<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }


    protected function onCreate(){
        return [
            
            'code'=>['required','integer'],
            'name'=>['required'],
            'email'=>['required','email'],
            'phon'=>['nullable'],
            'department'=>['integer'],
            'photo'=>['image']
    ];
    }
    protected function onUpdate(){
        return [
            
            'name'=>['required'],
            'email'=>['required','email'],
            'phon'=>['nullable'],
            'department'=>['integer'] ,  
            'photo'=>['image','nullable']

    ];
    }
    public function rules(): array
    {
        if(request()->isMethod('post')){
            return $this->onCreate();
            }else{
            return $this->onUpdate();}
            
    }
}
