<?php

namespace transcounty\Http\Controllers;

use Illuminate\Http\Request;
use transcounty\School;
use transcounty\Student;
use Sentinel;
use PDF;

class StudentCtrl extends Controller
{
    public function index() {
      return view('schools.students.enroll');
    }

    public function enrollStudent(Request $request) {
      $student = new Student();

      $email = Sentinel::getUser()->email;

      $school = School::where('email', $email)->get()->first();

      $student->school_id = $school->id;
      $student->first_name = $request->input('first_name');
      $student->middle_name = $request->input('middle_name');
      $student->last_name = $request->input('last_name');
      $student->national_id = $request->input('national_id');
      $student->gender = $request->input('gender');
      $student->dob = $request->input('dob');
      $student->reg_no = $request->input('reg_no');
      $student->course = $request->input('course');
      $student->email = $request->input('email');
      $student->mobile = $request->input('mobile');
      $student->address = $request->input('address');
      $student->next_of_kin = $request->input('next_of_kin');
      $student->next_of_kin_contact = $request->input('next_of_kin_contact');
      $student->guardian = $request->input('guardian');
      $student->save();

      // return json_encode($student);
      return redirect()->back();
    }

    public function viewStudent() {
      $email = Sentinel::getUser()->email;

      $school = School::where('email', $email)->get()->first();

      $students = Student::where('school_id', $school->id)->get();

      return view('schools.students.view')->with('students', $students);
    }

    public function downloadStudents() {
      $email = Sentinel::getUser()->email;

      $school = School::where('email', $email)->get()->first();

      $students = Student::where('school_id', $school->id)->get();

      $pdf = PDF::loadView('schools.students.report', compact('students', 'school'))->setPaper('a4', 'landscape');
      return $pdf->download('students.pdf');
    }

    public function students() {
      $students = School::with('students')->get();

      return view('county.students.view')->with('students', $students);
    }

    public function destroy($id) {
      $student = Student::findOrFail($id);

      $student->delete();

      return redirect()->back();
    }




}
