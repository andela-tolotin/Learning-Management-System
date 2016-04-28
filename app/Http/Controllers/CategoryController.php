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
        if ($this->validateRequest($request)) {
            return redirect('/dashboard/add-category')->with([
                'status', 
                'Category already exists!'
            ]);

        } else {
            $category = Category::create([
                'name'        => $request->input('name'),
                'description' => $request->input('description'),
            ]);

            if (! is_null($category)) {
                return redirect('/dashboard/add-category')->with(
                    'status', 
                    'Sucessfully created!'
                );
            } 

            return redirect('/dashboard/add-category')->with(
                'status', 
                'Oops! Something went wrong!'
            );

        }
    }

    private function validateRequest($request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories|max:50',
            'description' => 'required|max:160',
        ]);

        if ($validator->fails()) {
            return true;

        }
    }
}
