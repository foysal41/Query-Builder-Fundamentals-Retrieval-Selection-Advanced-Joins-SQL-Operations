<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    function index(){
       $books= DB::table('books')->get();
    

       $count = DB::table('books')->count();
       return response()->json($count);
    }
}
