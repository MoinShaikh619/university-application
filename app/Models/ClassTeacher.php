<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassTeacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_name','teacher_subject_name','created_at','updated_at'
        // add all other fields
    ];

    protected $table = 'class_teachers';

    // Define the hasMany relationship
    public function student()
    {
        return $this->hasMany(Student::class, 'class_teacher_id', 'id');
    }
}
