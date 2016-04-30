<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Video;
use App\Category;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\VideoRequest;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class VideoController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('dashboard.pages.add_video', compact('categories'));
    }

    public function store(VideoRequest $request)
    {
        $category = Video::create([
            'title'        => $request->input('title'),
            'url'          => $request->input('url'),
            'category_id'  => $request->input('category'),
            'description'  => $request->input('description'),
            ]);

        if (! is_null($category)) {
            return redirect('/dashboard/video/add')->with(
                'status', 
                'Sucessfully created!'
                );
        } 

        return redirect('/dashboard/video/add')->with(
            'status', 
            'Oops! Something went wrong!'
            );
    }

    public function viewAllVideos()
    {
        $user_id = 1;

        $videos = Video::with('category')->getVideosByUserId($user_id)
        ->paginate(10);

        $pendingVideos = Video::with('category')->allTrashedVideos($user_id)
        ->paginate(10);

        return view('dashboard.pages.list_all_videos', compact('videos', 'pendingVideos'));

    }
}
