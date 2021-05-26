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
}
