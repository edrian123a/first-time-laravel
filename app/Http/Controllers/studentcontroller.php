<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student_tables;
use RealRashid\SweetAlert\Facades\Alert;


class studentcontroller extends Controller
{
    public function index(){
       $fetchstudent = student_tables::paginate(9);
       return view('student')->with('fetchstudent', $fetchstudent);
   }

   public function store(Request $request){
    // process ng adding
    $addingstudent = new student_tables;
    $addingstudent->student_firstname = $request->input('firstname');
    $addingstudent->student_middlename = $request->input('middlename');
    $addingstudent->student_surname = $request->input('surname');
    $addingstudent->age = $request->input('age');
    $addingstudent->save();

    return redirect('student')->withSuccess('Student Successfully!');


   }

   public function create(){
     return  view('addingstudent');
   }

   public function show($id){
         $fetchstudent = student_tables::find($id);
         return view('showingstudent')->with('fetchstudent', $fetchstudent);


   }

    public function update(Request $request, $id){
        // dito lalagay yung process ng edit
        $fetchstudent = student_tables::find($id);
        $fetchstudent->student_firstname = $request->firstname;
        $fetchstudent->student_middlename = $request->middlename;
        $fetchstudent->student_surname = $request->surname;
        $fetchstudent->age = $request->age;
        $fetchstudent->save();

     return redirect('student')->withSuccess('Updated Successfully!');

    }



    public function destroy($id){


          $fetchstudent = student_tables::find($id);
          $fetchstudent->delete();
          return redirect('student')->withSuccess('Deleted Successfully!');




     
    } 


    public function edit($id){

        // edit lang pero wala pang process
         $fetchstudent = student_tables::find($id);
         return view('updatingstudent')->with('fetchstudent', $fetchstudent);

    }


}
