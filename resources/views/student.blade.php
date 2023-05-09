@extends('layouts.app')
@section('title')
STUDENT INFORMATION
@endsection 



@section('content')




<div class="row">
	
	<div class="col-sm-1"></div>

	<div class="col-sm-10">

<div class="card p-5 m-5">
<a class="mb-3" href="/student/create"><button class="btn btn-success">Add Student</button></a>

		<table class="table">
<tr class="table-danger">
	 <th scope="col">ID</th>
	 <th scope="col">Firstname</th>
	 <th scope="col">Middlename</th>
	 <th scope="col">Surname</th>
	 <th scope="col">Age</th>
	 <th scope="col" class="text-center">Action</th>
</tr>



	@forelse($fetchstudent as $student)

<tr class="text-center">

	<th scope="row">{{$student->id}}</td>
	<td>{{$student->student_firstname}}</td>
	<td>{{$student->student_middlename}}</td>
	<td>{{$student->student_surname}}</td>
	<td>{{$student->age}}</td>
	<td><a href="/student/{{$student->id}}"><button class="btn btn-secondary">View</button></a> | <a href="/student/{{$student->id}}/edit"><button class="btn btn-primary">Update</button></a> |  <a onclick="return confirmation()" class="btn btn-danger" data-confirm-delete="true">Delete</a> 
	</td>

</tr>

	@empty
	<div class="text-gray-700">No data found</div>
	@endforelse






</table></div>


<div class="col-sm-1"></div>

</div>

</div>




{{$fetchstudent ->links()}}

@endsection



<script type="text/javascript">
function confirmation(){
Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {


//ito yung problem ko sir...
 window.location.href = "<?php echo URL::to('destroy', $student->id);


 
 ?>";

    // Swal.fire(
    //   'Deleted!',
    //   'Your file has been deleted.',
    //   'success'
    // )

  }
})


}




</script>






<!-- for additional footer lang ito
@section('footer')
@parent
<p>This is the additional footer</p>
@endsection -->


