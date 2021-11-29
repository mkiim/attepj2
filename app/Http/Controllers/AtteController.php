<?php

namespace App\Http\Controllers;

use App\Models\Log;
use Illuminate\Http\Request;

class AtteController extends Controller
{
    public function index()
    {
        $items = Log::all();
        return view('log.index',['items'=> $items]);
    }
}
