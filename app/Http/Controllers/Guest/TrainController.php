<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Train;
use Carbon\Carbon;

class TrainController extends Controller
{   
    public function index(){
        $trains = Train::get();

        return view("trains.index", compact('trains'));
    }

    public function show(){

        $today = Carbon::now()->format('Y-m-d');

        $trains = Train::whereDate('orario_partenza', '=', $today)->get();

        return view("trains.show", compact('trains'));
    }
}
