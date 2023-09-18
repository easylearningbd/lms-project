<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SmtpSetting;
use Intervention\Image\Facades\Image;

class SettingController extends Controller
{
    public function SmtpSetting(){

        $smpt = SmtpSetting::find(1);
        return view('admin.backend.setting.smpt_update',compact('smpt'));

    }// End Method 






}
 