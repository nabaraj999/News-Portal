<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->get();
        return view('admin.article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.article.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->meta_keywords = $request->meta_keywords;
        $article->meta_description = $request->meta_description;
        $file = $request->image;
        if ($file) {
            $filename = time() . "." . $file->getClientOriginalExtension();
            $file->move('storage', $filename);
            $article->image = "storage/$filename";
        }
        $article->save();

        $article->categories()->attach($request->categories);

        return redirect()->route('admin.article.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        $categories = Category::all();
        return view('admin.article.edit',compact('article','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $article = Article::findOrFail($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->meta_keywords = $request->meta_keywords;
        $article->meta_description = $request->meta_description;
        $article->status = $request->status;
        $file = $request->image;
        if ($file) {
            $filename = time() . "." . $file->getClientOriginalExtension();
            $file->move('storage', $filename);
            $article->image = "storage/$filename";
        }
        $article->save();

        $article->categories()->sync($request->categories);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
