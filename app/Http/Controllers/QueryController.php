<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryController extends Controller
{
   function index(){
    

    $books = DB::table('books')

    /*
    একটা টেবিলের সাথে আরেকটা টেবিলের মধ্যে জয়েন তৈরি করতে হলে. 
    ->join('authors', 'books.author_id', '=' , 'authors.id')
    এর মানে হচ্ছে: 
    'authors' (টেবিলের মধ্যে একটি জয়েন অপারেশন করে।)
    books.author_id ((ডট) চিহ্নটি টেবিল এবং কলামের মধ্যে একটি সম্পর্ক স্থাপন করে।)
    '=' (এখানে, 'books' টেবিলের 'author_id' কলামের মান এবং 'authors' টেবিলের 'id' কলামের মান সমান হতে হবে। )
    ‘authors.id’ = (টেবিলের কোনো লেখকের 'id' এর সাথে মেলে সেই বই এবং লেখকের তথ্য একত্রে পাওয়া যাবে।)

    */ 

    ->join('authors', 'books.author_id', '=' , 'authors.id')
    ->select('books.title', 'authors.name as author_name', 'books.author_id', 'books.id')
    //দেখতে চাই এক নাম্বার authors কতগুলো বই আছে 
    ->where('authors.id', 1)
    ->get();

    return response()->json($books);


    

   }
}
