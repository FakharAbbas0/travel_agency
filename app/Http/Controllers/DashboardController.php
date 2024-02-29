<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function dashboardPage(){
        $data = [];
        $data['oneQ'] = Question::where('book_id',1)->count();
        $data['twoQ'] = Question::where('book_id',2)->count();
        $data['threeQ'] = Question::where('book_id',3)->count();
        $data['fourQ'] = Question::where('book_id',4)->count();
        $data['fiveQ'] = Question::where('book_id',5)->count();
        $data['sixQ'] = Question::where('book_id',6)->count();
        $data['sevenQ'] = Question::where('book_id',7)->count();
        $data['eightQ'] = Question::where('book_id',8)->count();
        $data['nineQ'] = Question::where('book_id',9)->count();
        $data['tenQ'] = Question::where('book_id',10)->count();
        $data['elevenQ'] = Question::where('book_id',11)->count();
        $data['twelveQ'] = Question::where('book_id',12)->count(); 
        return view('admin.dashboard',$data);
    }
}
