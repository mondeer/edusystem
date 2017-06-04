<?php

namespace transcounty\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginCtrl extends Controller
{
  public function login(Request $request) {

    if ( Sentinel::forceAuthenticate($request->all()) ) {

      if(Sentinel::getUser()->roles()->first()->slug == 'system')
        return redirect('/system/admin');
      elseif (Sentinel::getUser()->roles()->first()->slug == 'county')
        return redirect('/county/admin');
      elseif (Sentinel::getUser()->roles()->first()->slug == 'school')
        return redirect('/school/admin');
      elseif (Sentinel::getUser()->roles()->first()->slug == 'student')
        return redirect('/students/homepage');


    } else {
      return redirect()->back()->with(['error' => 'Have you forgoten your credentials?']);
    }

  }

  public function logout() {
    Sentinel::logout();

    return redirect('/');
  }
}
