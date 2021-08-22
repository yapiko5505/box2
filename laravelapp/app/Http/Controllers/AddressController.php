<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    //

        public function index()
        {   
            $data = ['one', 'two', 'three', 'four', 'five'];
            return view('address.index', ['data'=>$data]);
        }
}