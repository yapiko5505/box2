<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddressController extends Controller
{
    //

        public function index(Request $request)
        {   
            $items = DB::table('addresss')->get();
            return view('address.index', ['items'=> $items]);
        }

        public function post(Request $request)
        {
            $items = DB::select('select * from addresss');
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
            DB::table('addresss')->insert($param);
             return redirect('/address');
        }

        public function show(Request $request)
        {
            $id = $request->id;
            $item = DB::table('addresss')->where('id', $id)->first();
            return view('address.show', ['item' => $item]);
        }

        public function edit(Request $request)
        {
            $item = DB::table('addresss')
                    ->where('id', $request->id)->first();
            return view('address.edit', ['form' => $item]);
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
            DB::table('addresss')
                ->where('id', $request->id)
                ->update($param);
            return redirect('/address');

        }

        public function delete(Request $request)
        {
            $item = DB::table('addresss')
                ->where('id', $request->id)->first();
            return view('address.delete', ['form' => $item]);
        }

        public function remove(Request $request)
        {
            DB::table('addresss')
            ->where('id', $request->id)->delete();
            return redirect('/address');
        }
}