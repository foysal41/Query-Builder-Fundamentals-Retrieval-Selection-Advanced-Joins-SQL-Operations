<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
   function index(){
    /*Multiple Where uses
    Example: Where id < 5 and price <=14*/
    $books = DB::table('books')->where([
        ['id' , '<=' , 5],
        ['Price' , '<=' , 14]
    ])->get();

    //Another way to write multiple where
    $books = DB::table('books') ->where('id', '<=', 5) ->where('price', '<=', 14)->get();


    return response($books);

   }
}
