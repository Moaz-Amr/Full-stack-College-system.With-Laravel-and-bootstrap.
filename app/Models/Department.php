<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $primaryKey='department_num';
    public function students(){
        return $this->hasMany(Student :: class,'dept_id','department_num');
    }
}
