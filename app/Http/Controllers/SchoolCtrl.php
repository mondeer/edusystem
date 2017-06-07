<?php

namespace transcounty\Http\Controllers;

use Illuminate\Http\Request;
use transcounty\School;
use Sentinel;

class SchoolCtrl extends Controller
{
    public function create() {
      return view('county.schools.create');
    }

    public function postCreate(Request $request){
      $school = new School;

      $school->registration = $request->input('registration');
      $school->name = $request->input('name');
      $school->email = $request->input('email');
      $school->location = $request->input('location');
      $school->reg_date = $request->input('reg_date');
      $school->save();

      $user = Sentinel::registerAndActivate([
        'email'=>$school->email,
        'password'=>$school->registration,
        'first_name'=>$school->name,
      ]);

      $role = Sentinel::findRoleBySlug('school');
      $role->users()->attach($user);

      return redirect('/county/schools/view');
    }

    public function view() {
      $schools = School::simplePaginate('15');

      return view('county.schools.view')->with('schools', $schools);
    }
    public function edit($id) {
      $school = School::findOrFail($id);

      return view('county.schools.update')->with('school', $school);
    }

    public function update(Request $request, $id) {
      $school = School::findOrFail($id);

      $school->name = $request->input('name');
      $school->email = $request->input('email');
      $school->location = $request->input('location');
      $school->save();

      return redirect('/county/schools/view');
    }

    public function destroy($id) {
      $school = School::findOrFail($id);

      $email = [
        'login' => $school->email,
      ];

      $user = Sentinel::findByCredentials($email);

      $user->delete();

      $school->delete();

      return redirect()->back();
    }
}
