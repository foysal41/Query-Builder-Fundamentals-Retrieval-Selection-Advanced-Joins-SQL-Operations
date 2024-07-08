<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
   function index(){
    

   // Maximum price retrive from books
        // $max = DB::table('books')->max('price');
        // return response($max);

    // Find the book with maximum price | Higest Price Book
        $max = DB::table('books')->max('price');
        $maxPriceBook = DB::table('books')->wherePrice($max)->get();
        return response()->json($maxPriceBook);

    // Order by with book name use title | Start from 5,4, 3, 2, 1
        $books = DB::table('books')->orderBy('title')->get();
        return response()->json($books);
        

    // Order by with book name use title
        $books = DB::table('books')->orderBy('title' , 'desc')->get();
        return response()->json($books);


   }
}
