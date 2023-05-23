<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> Login Form</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" />
</head>

<body class="main-bg" style="background-color: #176a7c;">
  <!-- Login Form -->
  @extends('layout')

@section('title', 'register')

@section('content')
  <div class="container" >
    <div class="row justify-content-center mt-5">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3" style="color: pink;">Update Student</h2>
          </div>
          <div class="card-body" style="background-color:  #D87093;">
            <form action="{{ route('save-edit-students',['id' => $students['id']])}}" method="POST">
              @csrf
              <div class="mb-4">
                <label for="first_name" class="form-label" style="color: pink;">First Name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="{{$students->first_name}}" />
              </div>
              <div class="mb-4">
                <label for="middle_name" class="form-label" style="color: pink;">Middle Name</label>
                <input type="text" class="form-control" id="middle_name"  name="middle_name" value="{{$students->middle_name}}"/>
              </div>
              <div class="mb-4">
                <label for="last_name" class="form-label" style="color: pink;">Last Name</label>
                <input type="text" class="form-control" id="last_name"  name="last_name" value="{{$students->last_name}}"/>
              </div>
              <div class="mb-4">
                <label for="date_of_birth" class="form-label" style="color: pink;">Date of Birth</label>
                <input type="date" class="form-control" id="date_of_birth"  name="date_of_birth" value="{{$students->date_of_birth}}"/>
              </div>
              <div class="mb-4">
                <label for="address" class="form-label" style="color: pink;">Address</label>
                <input type="text" class="form-control" id="address"  name="address" value="{{$students->address}}"/>
              </div>
              <div class="mb-4">
                <input type="checkbox" class="form-check-input" id="remember" name="checkbox" />
                <label for="remember" class="form-label" style="color: pink;">Remember Me</label>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-info text-light main-bg">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection
</body>

</html>