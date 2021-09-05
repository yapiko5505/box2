<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function index(Request $request)
    {
        $items = Address::all();
        return view('addresses.index', ['items' => $items]);
    }

    public function add(Request $request)
    {
        return view('addresses.add');
    }

    public function create(Request $request)
    {
        $address = new Address;
        $form = $request->all();
        unset($form['_token']);
        $address->fill($form)->save();
        return redirect('/addresses');
    }

    public function find(Request $request)
    {
        return view('addresses.find', ['input' => '']);
    }

    public function search(Request $request)
    {
        $item = Address::find($request->input);
        $param = ['input' => $request->input, 'item' => $item];
        return view('addresses.find', $param);
    }

    public function edit(Request $request)
    {
        $address = Address::find($request->id);
        return view('addresses.edit', ['form' => $address]);
    }

    public function update(Request $request)
    {
        $address = Address::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $address->fill($form)->save();
        return redirect('/addresses');
    }

    public function delete(Request $request)
    {
        $address = Address::find($request->id);
        return view('addresses.del', ['form' => $address]);
    }   

    public function remove(Request $request)
    {
        Address::find($request->id)->delete();
        return redirect('/addresses');
    }
}
