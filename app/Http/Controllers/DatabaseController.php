<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use View;

class DatabaseController extends Controller
{
    public function FetchData($table, $id, $column)
    {
        $databaseStuff = $column.' -> Jano Peterson';

        return View::make('database')->with('stuff', $databaseStuff);
    }
}
