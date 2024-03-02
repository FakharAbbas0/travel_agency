<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboardPage(){
        $data = []; 
        return view('admin.dashboard',$data);
    }
}
