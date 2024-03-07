<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    //dashboard
    public function dashboard()
    {
        return view('dashboard.dashboard');
    } 
    //add pendrive 
    
    public function editPendrive()
    {
        return view('pendrive.pendriveedit');
    }
   

    //chart => search record by date
    public function chartByDate()
    {
        return view('chart.chart');
    }

    //chart => search record by school name
    public function chartBySchool()
    {
        return view('chart.schoolchart');
    }

    

}
