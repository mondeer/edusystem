<?php

namespace transcounty\Http\Controllers;

use Illuminate\Http\Request;
use Kagga\Telco\facades\Telco;

class SmsCtrl extends Controller
{
    public function sms() {
      return view('send');
    }

    public function smsPost(Request $request) {
      $mobile = $request->input('mobile');

      $name = $request->input('name');

      $message = ('Hi '.$name.', Gideon Moi wishes to inform you of his aspiration to serve you for another 5 years as your senator, you are a blessing');

      Telco::send($mobile, $message);

      return redirect()->back();
    }
}
