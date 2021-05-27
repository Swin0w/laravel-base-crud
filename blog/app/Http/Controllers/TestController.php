<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ospiti;

class TestController extends Controller
{
    public function home() {
        $guests = Ospiti::all();
        return view('pages.home', compact('guests'));
    }
    public function info($id) {
        $ospite = Ospiti::findOrFail($id);
        return view ('pages.info', compact('ospite'));
    }
    public function gen_guest() {
        return view ('pages.gen_guest');
    }
    public function store(Request $request) {

        $validate = $request -> validate([
            'name' => 'required|max:100',
            'lastname' => 'required|max:100',
            'date_of_birth' => 'required|date',
            'document_type' => 'required',
            'document_number' => 'required',
        ]);

        $ospite = Ospiti::create($validate);
        return redirect() -> route('info', $ospite -> id);
    }
}
