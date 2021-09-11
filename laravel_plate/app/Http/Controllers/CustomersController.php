<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::table('customers')->get();
        return view('customer.index', ['items' => $items]);
    }


    public function add(Request $request)
    {
        return view('customer.add');
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
        DB::table('customers')->insert($param);
        return redirect('/customer');
    }
}
