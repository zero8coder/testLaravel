<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ToolsController extends Controller
{
    public function index()
    {
        return view('tools.index');
    }
}
