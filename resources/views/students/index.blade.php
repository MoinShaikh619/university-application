@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">

<div class="col-sm-12">
    <h1>Students</h1>
    <div class="text-right">
        <a href="{{ route('students.create') }}" class="btn btn-success">Create Student</a>
        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
    </div>

    <table id="students-table" class="display">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Class Teacher Name</th>
                <th>Class</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{ $student->student_name }}</td>
                    <td>{{ $student->yearly_fees }}</td>
                    <td>{{ $student->class }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" >Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
@endsection

