<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sidebar;

class AboutController extends Controller
{
    /*
    * Display the about page.
    */
    public function index() {
        $sidebar = Sidebar::all();
        return view('about', compact(["sidebar"]));
    }
}
