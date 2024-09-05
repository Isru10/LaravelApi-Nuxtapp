<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Blog::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = null;
        }

        $blog = Blog::create([
            'title' => $request->title,
            'body' => $request->body,
            'image_path' => $imagePath,
        ]);

        return response()->json($blog, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $blog=Blog::findorfail($id);
        return $blog;
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog=Blog::find($id);
        if($blog){
            return response()->json(["blog"=>$blog,"status"=>200],200);
        }
        else{
            return response()->json(["message"=>"no such blog!","status"=>404],404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $blog=Blog::find($id);

        if ($request->hasFile('image')) {
            // Delete the old image
            if ($blog->image_path) {
                Storage::disk('public')->delete($blog->image_path);
            }
            $imagePath = $request->file('image')->store('images', 'public');
        } else {
            $imagePath = $blog->image_path;
        }

        $blog->update([
            'title' => $request->title,
            'body' => $request->body,
            'image_path' => $imagePath,
        ]);

        return response()->json($blog);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        if ($blog->image_path) {
            Storage::disk('public')->delete($blog->image_path);
        }
        $blog->delete();

        return response()->json("deleted blog", 204);

    }
}
