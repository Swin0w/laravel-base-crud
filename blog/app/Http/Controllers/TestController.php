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
}
