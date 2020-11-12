<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $primaryKey = 'dept_no';

    public function department_relate()
    {
        return $this->hasOne('App\Models\DeptManager', 'dept_no');
    }
}
