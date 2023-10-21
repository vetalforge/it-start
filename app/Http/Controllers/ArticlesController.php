<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function index(Request $request)
    {
        $article = Article::where('name', $request->name)->first();

        if (isset($article)) {
            $language = app()->getLocale();
            $title = 'title_' . $language;
            $description = 'description_' . $language;
            $title = $article->$title;
            $description = $article->$description;

            return view('pages.article', [
                'title' => $title,
                'description' => $description,
            ]);
        } else {
            return response()->view('errors.404', [], 404);
        }

    }
}
