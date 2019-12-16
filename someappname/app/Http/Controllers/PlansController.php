<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PlansController extends Controller
{
    public function easy()
    {

        return view('plans.easy');
    }

    public function inter()
    {
        return view('plans.inter');
    }
    public function advanced()
    {
        return view('plans.advanced');
}

}
