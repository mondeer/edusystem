<?php

namespace transcounty\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class RegisterCtrl extends Controller
{
  public function register() {
    return view('auths.register');
  }

  public function postRegister(Request $request) {
    $user = Sentinel::registerAndActivate([
      'email'=>$request->input('email'),
      'password'=>$request->input('password'),
      'first_name'=>$request->input('first_name'),
      'last_name'=>$request->input('last_name'),
    ]);

    $system = Sentinel::findRoleBySlug('system');
    $county = Sentinel::findRoleBySlug('county');
    $school = Sentinel::findRoleBySlug('school');

    $role = $request->input('role');

    if($role =='system'){
      $system->users()->attach($user);
    }
    elseif($request->input('role')=='county'){
      $county->users()->attach($user);
    }
    elseif($request->input('role')=='school'){
      $school->users()->attach($user);
    }

    return redirect('/');

  }
}
