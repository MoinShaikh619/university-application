<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            ['student_name' => 'Shubham', 'class_teacher_id' => '1','class'=>'10th','admission_date'=>'2023-06-25 15:30:00','yearly_fees'=>'20000','created_at'=>now(),'updated_at'=>now()],
            ['student_name' => 'Anurag', 'class_teacher_id' => '1','class'=>'8th','admission_date'=>'2023-06-26 15:30:00','yearly_fees'=>'15000','created_at'=>now(),'updated_at'=>now()],
            ['student_name' => 'Shivani', 'class_teacher_id' => '1','class'=>'9th','admission_date'=>'2023-06-27 15:30:00','yearly_fees'=>'18000','created_at'=>now(),'updated_at'=>now()],
            ['student_name' => 'Prachi', 'class_teacher_id' => '1','class'=>'5th','admission_date'=>'2023-06-28 15:30:00','yearly_fees'=>'9000','created_at'=>now(),'updated_at'=>now()],
            ['student_name' => 'Moin', 'class_teacher_id' => '1','class'=>'10th','admission_date'=>'2023-06-25 15:30:00','yearly_fees'=>'20000','created_at'=>now(),'updated_at'=>now()],
            ['student_name' => 'Vrushab', 'class_teacher_id' => '1','class'=>'8th','admission_date'=>'2023-06-26 15:30:00','yearly_fees'=>'15000','created_at'=>now(),'updated_at'=>now()],
            ['student_name' => 'Shivam', 'class_teacher_id' => '1','class'=>'9th','admission_date'=>'2023-06-27 15:30:00','yearly_fees'=>'18000','created_at'=>now(),'updated_at'=>now()],
            ['student_name' => 'Shehzad', 'class_teacher_id' => '1','class'=>'5th','admission_date'=>'2023-06-28 15:30:00','yearly_fees'=>'9000','created_at'=>now(),'updated_at'=>now()],
            ['student_name' => 'Mansi', 'class_teacher_id' => '1','class'=>'10th','admission_date'=>'2023-06-25 15:30:00','yearly_fees'=>'20000','created_at'=>now(),'updated_at'=>now()],
            ['student_name' => 'Dinesh', 'class_teacher_id' => '1','class'=>'8th','admission_date'=>'2023-06-26 15:30:00','yearly_fees'=>'15000','created_at'=>now(),'updated_at'=>now()],
            ['student_name' => 'Abhay', 'class_teacher_id' => '1','class'=>'9th','admission_date'=>'2023-06-27 15:30:00','yearly_fees'=>'18000','created_at'=>now(),'updated_at'=>now()],
            ['student_name' => 'Ayaz', 'class_teacher_id' => '1','class'=>'5th','admission_date'=>'2023-06-28 15:30:00','yearly_fees'=>'9000','created_at'=>now(),'updated_at'=>now()],
        ]);
    }
}
