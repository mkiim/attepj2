<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Work;

class WorkController extends Controller
{
    public function work(Request $request)
    {
        $items = Work::all();
        return view('work.index', ['items' => $items]);
    }

public function up()
{
    Schema::create('users',function (Blueprint $table){
    $table->bigIncrements('id');
    $table->string('name');
    });
}
}