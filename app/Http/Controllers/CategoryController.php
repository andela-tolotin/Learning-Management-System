<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function store(CategoryRequest $request)
    {
        $category = Category::create([
            'name'        => $request->input('name'),
            'description' => $request->input('description'),
        ]);

        if (! is_null($category)) {
            return redirect('/dashboard/category/add')->with(
                'status', 
                'Sucessfully created!'
            );
        } 

        return redirect('/dashboard/category/add')->with(
            'status', 
            'Oops! Something went wrong!'
        );
    }

}
