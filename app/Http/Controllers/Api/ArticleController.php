<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // Retrieve a list of all articles (public)
    public function index()
    {
        return response()->json(Article::all(), 200);
    }

    // Retrieve a single article by ID (public)
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return response()->json($article, 200);
    }

    // Create a new article (authenticated users only)
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'published_at' => 'required|date',
        ]);

        $article = new Article([
            'title' => $request->title,
            'body' => $request->body,
            'published_at' => $request->published_at,
            'user_id' => Auth::id(),
        ]);

        $article->save();

        return response()->json($article, 201);
    }

    // Update an existing article (only by the author)
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);

        if ($article->user_id != Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'published_at' => 'required|date',
        ]);

        $article->update([
            'title' => $request->title,
            'body' => $request->body,
            'published_at' => $request->published_at,
        ]);

        return response()->json($article, 200);
    }

    // Delete an article (only by the author)
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        if ($article->user_id != Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $article->delete();

        return response()->json(null, 204);
    }
}
