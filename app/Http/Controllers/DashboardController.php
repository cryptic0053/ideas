<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){

        $users=[['name'=> 'Argha','age'=>22],
                ['name'=>'Eren','age'=>17]];


        return view('dashboard',['users'=>$users]);
    }
}
