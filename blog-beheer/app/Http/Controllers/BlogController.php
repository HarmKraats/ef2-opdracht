<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Blog;
use Illuminate\Support\Facades\Lang;

class BlogController extends Controller
{
    // Get all blogs
    
    public function index()
    {
        // Get all blogs
        $blogs = Blog::orderBy('date', 'desc')->get();
    
        // Format the date to "Dinsdag 18 april 2017" in Dutch
        foreach ($blogs as $blog) {
            $date = Carbon::parse($blog->date);
            $formattedDate = $date->locale('nl')->isoFormat('dddd D MMMM YYYY');
            $blog->date = ucfirst($formattedDate);
        }
    
        // Return the blogs
        return response()->json($blogs);
    }
    


    // Get a blog
    public function show($id)
    {
        // Get the blog
        $blog = Blog::find($id);

        // Format the date to Full day, month, and year in Dutch
        $date = Carbon::parse($blog->date);

        $formattedDate = $date->locale('nl')->isoFormat('dddd D MMMM YYYY');
        $blog->date = ucfirst($formattedDate);

        // Return the blog
        return response()->json($blog);
    }

    // Create a new blog
    public function create(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        // Create a new blog
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->date = Carbon::now()->format('Y-m-d');
        $blog->save();

        // Return the blog
        return response()->json($blog);
    }

    // delete a blog
    public function delete($id)
    {
        // Get the blog
        $blog = Blog::find($id);

        // Delete the blog
        $blog->delete();

        // Return the blog
        return response()->json($blog);
    }
}
