<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function manager()
    {
        $items= Author::all();
        return view('manager',['items' => $items]);
    }
}
