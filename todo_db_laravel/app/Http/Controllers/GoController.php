<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoController extends Controller
{
    public function ses_get(Request $request)
    {
        $sesdata = $request->session()->get('msg');
        return view('go.session', ['session_data' => $sesdata]);
    }



    public function ses_put(Request $request)
    {
        $msg = $request->input;
        $request->session()->put('msg', $msg);
        return redirect('go/session');
    }
}
