<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $primaryKey = 'code';
    protected $fillable = ['code','name','email','phone','dept_id,photo'];
    public function tablet(){
        return $this->hasOne(Tablet::class,'std_id','code')->withDefault(['tablet_name'=>'no tablet']);
    }
    public function department(){
        return $this->belongsTo(Department::class,'dept_id','department_num');
    }
    public function courses(){
        return $this->belongsToMany(Course::class,'students_courses','std_id','crs_id','code','courses_id')->withPivot('degree');
    }
}
