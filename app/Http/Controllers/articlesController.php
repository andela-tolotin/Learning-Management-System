<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Request;
use App\Http\Requests\createArticleRequest;

use App\Article;
use App\Http\Requests;

use App\Http\Controllers\Controller;

class articlesController extends Controller
{
   
   public function index()
   {
	   $articles = Article::latest('published_at')->unpublished()->get();

	   return view('articles.index',compact('articles'));
   }

	public function show($id)
	{
		$articles = Article::findOrFail($id);

		return view('articles.show',compact('articles'));
	}

	public function create()
	{
		return view('articles.create');
	}

	public function store(createArticleRequest $request)
	{

		Article::create($request->all());

		return redirect('article');

	}
}
