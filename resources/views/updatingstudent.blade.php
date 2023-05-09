@extends('layouts.app')
@section('title')
UPDATING FORM IN STUDENT INFORMATION
@endsection 

@section('content')



<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">

<div class="card p-4 mt-5">

	<h1 class="card-title text-primary text-center">ADDING STUDENT</h1>
	<div class="card-body">
<form action="/student/{{$fetchstudent->id}}" method="POST">
<!-- 	cross site request forgery csrf -->
	@method('PUT')
	@csrf
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="Firstname" name="firstname" placeholder="Firstname" value="{{$fetchstudent->student_firstname}}">
  <label for="Firstname">Firstname</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" id="Middlename" name="middlename" placeholder="Middlename" value="{{$fetchstudent->student_middlename}}">
  <label for="Middlename">Middlename</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" id="Surname" name="surname"  placeholder="Surname" value="{{$fetchstudent->student_surname}}">
  <label for="Surname">Surname</label>
</div>

<div class="form-floating mb-3">
  <input type="int" class="form-control" id="Age"  name="age" placeholder="Age" value="{{$fetchstudent->age}}">
  <label for="Age">Age</label>
</div>

<div class="form mt-4">
	<a href="/student"><button type="button" class="btn btn-danger  btn-lg float-end" style="margin-left: 10px;">Close</button></a>
  <input type="submit" name="submit" class="btn btn-primary btn-lg float-end">
  
</div>




</form>

</div>
	</div>
	


	</div>
	<div class="col-sm-2"></div>

</div>



@endsection
