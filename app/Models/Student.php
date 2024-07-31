<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'student_name','class_teacher_id','class','admission_date','yearly_fees','created_at','updated_at'
        // add all other fields
    ];

    protected $table = 'students';

    protected $dates = ['deleted_at'];

    // Define the belongsTo relationship
    public function teacher()
    {
        return $this->belongsTo(ClassTeacher::class);
    }
}
