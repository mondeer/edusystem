<?php

namespace transcounty\Http\Controllers;

use Illuminate\Http\Request;
use transcounty\School;
use transcounty\Asset;
use Sentinel;

class AssetCtrl extends Controller
{
    public function index() {
      return view('schools.assets.request');
    }

    public function reqAsset(Request $request) {
      $asset = new Asset();

      $email = Sentinel::getUser()->email;

      $school = School::where('email', $email)->get()->first();

      $asset->school_id = $school->id;
      $asset->asset_name = $request->input('asset_name');
      $asset->asset_type = $request->input('asset_type');
      $asset->price = $request->input('price');
      $asset->manufacturer = $request->input('manufacturer');
      $asset->state = $request->input('state');
      $asset->status = ('pending');
      $asset->save();

      return redirect('/schooladmin/assets/view');
    }

    public function viewAssets() {
      $email = Sentinel::getUser()->email;

      $school = School::where('email', $email)->get()->first();

      $assets = Asset::where('school_id', $school->id)->get();

      return view('school.assets.view')->with('assets', $assets);
    }
}
