<?php

namespace transcounty\Http\Controllers;

use Illuminate\Http\Request;
use transcounty\Teacher;
use transcounty\School;
use Sentinel;

class TutorCtrl extends Controller
{
    public function index() {
      return view('schools.teachers.create');
    }

    public function addTutor(Request $request) {
      $tutor = new Teacher();

      $email = Sentinel::getUser()->email;

      $school = School::where('email', $email)->get()->first();

      $tutor->school_id = $school->id;
      $tutor->first_name = $request->input('first_name');
      $tutor->last_name = $request->input('last_name');
      $tutor->email = $request->input('email');
      $tutor->national_id = $request->input('national_id');
      $tutor->gender = $request->input('gender');
      $tutor->dob = $request->input('dob');
      $tutor->phone = $request->input('phone');
      $tutor->address = $request->input('address');
      $tutor->photo = $request->input('photo');
      $tutor->save();

      $user = Sentinel::registerAndActivate([
        'email'=>$tutor->email,
        'password'=>$tutor->national_id,
        'first_name'=>$tutor->first_name,
        'last_name'=>$tutor->last_name,
      ]);

      $role = Sentinel::findRoleBySlug('tutor');
      $role->users()->attach($user);

      return redirect('/schooladmin/teacher/view');
    }

    public function viewTutor() {
      $email = Sentinel::getUser()->email;

      $school = School::where('email', $email)->get()->first();

      $tutors = Teacher::where('school_id', $school->id)->get();

      return view('schools.teachers.view')->with('tutors', $tutors);
    }

    public function destroy($id) {
      $tutor = Teacher::findOrFail($id);

      $email = [
        'login' => $tutor->email,
      ];

      $user = Sentinel::findByCredentials($email);

      $user->delete();

      $tutor->delete();

      return redirect()->back();
    }

    public function viewTutors() {
      $tutors = Teacher::all();

      return view('county.teachers.view')->with('tutors', $tutors);
    }
}
