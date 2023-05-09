@extends('layouts.app')
@section('title')
ADDING FORM IN STUDENT INFORMATION
@endsection 

@section('content')

<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">

<div class="card p-4 mt-5">

	<h1 class="card-title text-primary text-center">ADDING STUDENT</h1>
	<div class="card-body">
<form action="/student" method="POST">
<!-- 	cross site request forgery csrf -->
	@csrf
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="Firstname" name="firstname" placeholder="Firstname">
  <label for="Firstname">Firstname</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" id="Middlename" name="middlename" placeholder="Middlename">
  <label for="Middlename">Middlename</label>
</div>

<div class="form-floating mb-3">
  <input type="text" class="form-control" id="Surname" name="surname"  placeholder="Surname">
  <label for="Surname">Surname</label>
</div>

<div class="form-floating mb-3">
  <input type="int" class="form-control" id="Age"  name="age" placeholder="Age">
  <label for="Age">Age</label>
</div>

<div class="form">
  <input type="submit" name="submit" class="form-control btn btn-primary btn-lg">
</div>




</form>

</div>
	</div>
	


	</div>
	<div class="col-sm-2"></div>

</div>




@endsection
