<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeptManager extends Model
{
    use HasFactory;

    protected $table = 'dept_manager';
    protected $primaryKey = 'emp_no';

    // หัวหน้า มี ลูกน้อง 
    // public function emp_relate()
    // {
    //     return $this->hasOne('App\Models\Employee', 'emp_no'); // อันหลังคือ foren key
    // }

    // // หัวหน้าต้องมี / เป็นของ แผนกควบคุม
    // public function dept_relate()
    // {
    //     return $this->belongsTo('App\Models\Department', 'dept_no');
    // }

}
