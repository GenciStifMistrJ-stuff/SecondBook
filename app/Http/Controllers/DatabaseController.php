<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use View;
use DB;

class DatabaseController extends Controller
{
    public function FetchData($table, $id, $column)
    {
        $databaseStuff = User::all();//DB::table('users')->where('id', '=', 1)->orWhere('id', '=', 3)->select(['name', 'password'])->get();//User::all()


        return View::make('database')->with('databaseStuff', $databaseStuff);
    }
}
