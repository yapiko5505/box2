<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressController extends Controller
{
    //

        public function index()
        {   
            $data = [
                'msg'=>'これはbladeを利用したサンプルです。',
            ];

             return view('address.index');
        }
}