<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

use App\Http\Requests;


class PagesController extends Controller
{
    public function index()
    {
    	$articles = Article::all();
    	return view('home',compact('articles'));
    }
}
