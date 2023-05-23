

<head>
<link rel='stylesheet' href='<?php echo asset('storage/css/styles.css') ?>' />
</head>
@extends('layout')

@section('title', 'List')

@section('content') 
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead class="thead-light">
            <tr>
              <th>First Name</th>
              <th>Middle Name</th>
              <th>Last Name</th>
              <th>Date of Birth</th>
              <th>Address</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($students as $student)
            <tr>
              <td>{{ $student->first_name}} </td>
              <td>{{ $student->middle_name}}</td>
              <td>{{ $student->last_name }}</td>
              <td>{{ date_format(date_create($student->date_of_birth), 'M d, Y') }}</td>
              <td>{{ $student->address }}</td>
              <td>
                <a href="{{ route('edit-students', ['id' => $student->id]) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('student-delete', ['id' => $student->id]) }}" class="btn btn-danger">Delete</a>
                
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>


@endsection