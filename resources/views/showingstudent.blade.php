@extends('layouts.app')
@section('title')
SHOWING STUDENT INFORMATION
@endsection 

@section('content')






<div class="row">
	
	<div class="col-sm-2"></div>

	<div class="col-sm-8">

<div class="card p-5 m-5"> 
	<h2 class="card-title text-primary text-center">STUDENT DATA</h2>

	<div class="card-body">
		<table class="table">
<tr class="table-primary">
	 <th scope="col">ID</th>
	 <th scope="col">Firstname</th>
	 <th scope="col">Middlename</th>
	 <th scope="col">Surname</th>
	 <th scope="col">Age</th>
</tr>



<tr class="">

	<th scope="row">{{$fetchstudent->id}}</td>
	<td>{{$fetchstudent->student_firstname}}</td>
	<td>{{$fetchstudent->student_middlename}}</td>
	<td>{{$fetchstudent->student_surname}}</td>
	<td>{{$fetchstudent->age}}</td>

</tr>








</table>
	<a href="/student"><button type="button" class="btn btn-danger  btn-lg float-end" style="margin-left: 10px;">Close</button></a></div>



<div class="col-sm-2"></div>

</div>

</div>

</div>
@endsection