<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
   function index(){
    //Where book id >=3 and <= 7
    $books = DB::table('books')->whereBetween('id' ,[3, 7])->get();

    // Different Version of between
    $books = DB::table('books')
    ->where('id', '>=', 3)
    ->where('id', '<=', 7)
    ->get();

    //Where id=3 or id =7 | Only show  id 3 and 7
    $books = DB::table('books')->whereIn('id', [3, 7])->get();

    return response($books);
   }
}
