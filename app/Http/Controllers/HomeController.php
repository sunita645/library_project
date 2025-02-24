<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){
    $data = Book::all();
    return view('home.index',compact('data'));
   
  }
  
}
