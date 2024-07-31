@extends('layouts.app')

@section('content')
<div class="container">
<div class="row mt-5">
<h3>Add New Students</h3>
</div>

<form  method="POST" action="{{ route('students.update', ['student' => $student->id]) }}" enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="jumbotron">
<div class="row">
    <!--Student Name-->
  <div class="col-md-4">
  <div class="form-group">
    <label for="StudentName">Student Name</label>
    <input type="text" class="form-control" id="StudentName" name="student_name" placeholder="Enter Student Name" value="{{ $student->student_name }}" required>
  </div>
  </div>

  <div class="col-md-4">
  <div class="form-group">
    <label for="ClassTeacher">Class Teacher</label>
    <select class="form-control" id="ClassTeacher" name="class_teacher_id">
    <option value="{{ $classTeacher->id }}">{{ $classTeacher->teacher_name }}</option> 
    @foreach ($classTeachers as $classTeachers)
    <option value="{{ $classTeachers->id }}">{{ $classTeachers->teacher_name }}</option>
    @endforeach
    </select>
  </div>
  </div>
  <!--Class-->
  <div class="col-md-4">
  <div class="form-group">
    <label for="Class">Class</label>
    <input type="text" class="form-control" id="Class" name="class" placeholder="Enter Student Class" value="{{ $student->class }}" required>
  </div>
  </div>
</div>
<div class="row mt-3">
<!--Admission Date-->
  <div class="col-md-4">
    <div class="form-group">
      <label for="Admission Date">Admission Date</label>
      <input type="date" class="form-control" id="Admission Date" name="admission_date" value="{{ $student->admission_date }}" >
    </div>
  </div>
  <!--Yearly Fees-->
  <div class="col-md-4">
  <div class="form-group">
    <label for="Yearly Fees">Yearly Fees</label>
    <input type="text" class="form-control numeric" id="Yearly Fees" name="yearly_fees" placeholder="Enter Yearly Fees" value="{{ $student->yearly_fees }}" required>
    <span style="color:red">Please Enter Numeric Value</span>
  </div>
 
  </div>
  </div>

  <div class="row mt-15">
       <div class="col-sm-3">  
        <button class="btn btn-info" type="submit">Save</button>
        <button class="btn btn-warning" type="reset">Reset</button>
        </div>
      </div> 


</div>
  </form>

  </div>
@endsection
