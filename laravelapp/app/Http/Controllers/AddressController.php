<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    //

        public function index(Request $request)
        {   
            $items = DB::select('select * from address');
            return view('address.index', ['items'=> $items]);
        }

        public function post(Request $request)
        {
            $items = DB::select('select * from address');
            return view('address.index', ['items'=> $items]);
        }

        public function add(Request $request)
        {
            return view('address.add');
        }

        public function create(Request $request)
        {
            $param = [
                'name' => $request->name,
                'postal' => $request->postal,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'todo' => $request->todo,
            ];
            DB::insert('insert into address(name, postal, address, phone, email, todo) values
             (:name, :postal, :address, :phone, :email, :todo)', $param);
             return redirect('/address');
        }
}