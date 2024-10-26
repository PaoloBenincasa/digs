<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiskController extends Controller
{
    public function create(){
    return view('disk.create');
    }
}
