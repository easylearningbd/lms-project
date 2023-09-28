<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\User;
use App\Models\Payment;

class ReportController extends Controller
{
    public function ReportView(){

        return view('admin.backend.report.report_view');

    } // End Method 





}
 