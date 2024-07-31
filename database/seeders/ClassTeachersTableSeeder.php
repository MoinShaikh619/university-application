<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassTeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('class_teachers')->insert([
            ['teacher_name' => 'Mrs. Shaikh', 'teacher_subject_name' => 'English','created_at'=>now(),'updated_at'=>now()],
            ['teacher_name' => 'Mr.Mishra', 'teacher_subject_name' => 'Hindi','created_at'=>now(),'updated_at'=>now()],
            ['teacher_name' => 'Mr.Janrao', 'teacher_subject_name' => 'Marathi','created_at'=>now(),'updated_at'=>now()],
            ['teacher_name' => 'Mrs.Farhat', 'teacher_subject_name' => 'Maths','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
