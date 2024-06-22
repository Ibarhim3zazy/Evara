<?php

namespace App\Http\Controllers\user;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\user\StorePostRequest;
use App\Http\Requests\user\UpdatePostRequest;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(6);
        $blogCategories = BlogCategory::all();
        return view('user.blogs.index', compact(['blogs', 'blogCategories']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogCategories = BlogCategory::get();
        return view('user.blogs.create', compact('blogCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $data = $request->validated();
        $image = $request->image;

        if ($request->hasFile('image')) {
            $newImageName = time() . '-' . Hash::make($image->getClientOriginalName(),['.']) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('images/Blogs', $newImageName, 'public');
            $data['image'] = $newImageName;
        }
        $data['user_id'] = Auth::user()->id;
        Blog::create($data);
        return back()->with('blogCreateStatus', 'your blog created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blogs = Blog::where('blog_category_id', $id)->orderBy('id', 'desc')->paginate(6);
        $blogCategories = BlogCategory::all();
        return view('user.blogs.category', compact(['blogs', 'blogCategories']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        $blogCategories = BlogCategory::all();
        return view('user.blogs.edit', compact(['blog', 'blogCategories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, string $id)
    {
        $data = $request->validated();
        $blog = Blog::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->image;
            $newImageName = time() .'-'. Hash::make($image->getClientOriginalName()) .'.'. $image->getClientOriginalExtension();
            $image->storeAs('images/Blogs',$newImageName,'public');
            $data['image'] = $newImageName;
            Storage::delete('images/Blogs/' .$blog->image);
        }

        $blog->update($data);
        return redirect()->route('blogs.index')->with('blogUpdateStatus', 'your blog has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);
        Storage::delete('images/Blogs/' .$blog->image);
        $blog->delete();

        return back()->with('blogDeleteStatus', 'your blog has been deleted successfully');
    }
}
