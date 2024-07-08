<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    function index(){
        //Title: where condition দিয়ে যদি কোনো কিছু খুজতে চাইলে 

        $books = DB::table('books')->where('id', 1)->get();

        //Title: where ব্যবহার করে operator দিয়ে যদি কোন কিছু খুঁজতে চাইলে. যেমনঃ যে id দুই এর থেকে ছোট 

        $books = DB::table('books')->where('id','<', 2)->get();


        return response()->json($books);
    }
}
