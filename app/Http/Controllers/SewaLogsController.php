<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SewaLogsController extends Controller
{
    public function index()
    {
       return view('admin.sewalogs');
    }
}
