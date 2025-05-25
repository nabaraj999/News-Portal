<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Article;
use App\Models\Company;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Cookie;
use App\Http\Controllers\Frontend\BaseController;

class PageController extends BaseController
{
    public function home()
    {
        $latest_articles = Article::orderBy('id', 'desc')->where('status', 'approved')->limit(5)->get();

        $trending_articles = Article::orderBy('views', 'desc')->where('status', 'approved')->limit(8)->get();
        return view('frontend.home', compact('latest_articles', 'trending_articles'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $articles = $category->articles()->where('status', 'approved')->paginate(1);
        return view('frontend.category', compact('articles', 'category'));
    }

    public function article($id)
    {
        $article = Article::find($id);
        $data = Cookie::get("article$id");
        if (!$data) {
            $article->increment('views');
            Cookie::queue("article$id", $id);
        }
        return view('frontend.article', compact('article'));
    }
}
