<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
    function index(){
        //important হচ্ছে author বা books থেকে important রেকর্ড তুলে আনতে পারি। এবং বিভিন্ন টেবিল থাকে join  করে রেকর্ড তুলে আনতে পারি

        //"এখানে প্রথম দুইটা রেকর্ড তুলে আনতে চাইলে লিমিট(২) ব্যবহার হয়েছে "

       $authors = DB::table('authors')->limit(2)->get();

       //"এবার যদি বলি প্রথম দুইটা পর থাকে পরের দুইটা তুলে আনো "
       
       $authors = DB::table('authors')->limit(3)->offset(2)->get();

       return response()->json($authors);
    }
}
