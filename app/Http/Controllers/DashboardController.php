<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $times = DB::table('contents')
                ->select('post_time')
                ->get();

        $monthList = [
            'January' => 0,
            'February' => 0,
            'March' => 0,
            'April' => 0, 
            'May' => 0, 
            'June'=> 0, 
            'July' => 0, 
            'August' => 0, 
            'September' => 0, 
            'October' => 0, 
            'November' => 0, 
            'December' => 0];

        $total = 0;

        foreach ($times as $time) {
            $month = date('F', strtotime($time->post_time));
            $year = date('Y', strtotime($time->post_time));
            
            if ($year == now()->year)
            {
                $monthList[$month] += 1;
                $total += 1;
            }
        }

        $data = json_encode($monthList);

        return view('dashboard.index', compact('data', 'total', 'year'));
    }
}
