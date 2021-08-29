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

        public function edit(Request $request)
        {
            $param = ['id' => $request->id];
            $item = DB::select('select * from address where id = :id', $param);
            return view('address.edit', ['form' => $item[0]]);
        }

        public function update(Request $request)
        {
            $param = [
                'id' => $request->id,
                'name' => $request->name,
                'postal' => $request->postal,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'todo' => $request->todo,    
            ];
            DB::update('update address set name = :name, postal = :postal, address = :address, phone = :phone, email = :email, todo = :todo where id = :id', $param);
            return redirect('/address');

        }

        public function delete(Request $request)
        {
            $param = ['id' => $request->id];
            $item = DB::select('select * from address where id = :id', $param);
            return view('address.delete', ['form' => $item[0]]);
        }

        public function remove(Request $request)
        {
            $param = ['id' => $request->id];
            DB::delete('delete from address where id = :id', $param);
            return redirect('/address');
        }
}