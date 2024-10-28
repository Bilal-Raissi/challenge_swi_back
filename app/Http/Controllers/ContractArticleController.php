<?php

namespace App\Http\Controllers;

use App\Models\ContractArticle;
use Illuminate\Http\Request;

class ContractArticleController extends Controller
{
    // GET: Récupérer tous les articles de contrat
    public function index()
    {
        $articles = ContractArticle::all(); // Récupère tous les articles
        return response()->json($articles, 200);
    }

    // POST: Créer un nouvel article de contrat
    public function store(Request $request)
    {
        // Validation des données entrantes
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // Création du nouvel article
        $article = ContractArticle::create($validatedData);

        return response()->json($article, 201); // 201: Créé avec succès
    }

    // PUT: Modifier un article de contrat existant
    public function update(Request $request, $id)
    {
        // Validation des données
        $validatedData = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'content' => 'sometimes|required|string',
        ]);

        $article = ContractArticle::find($id);

        if (!$article) {
            return response()->json(['message' => 'Article not found'], 404);
        }

        // Mise à jour de l'article avec les données validées
        $article->update($validatedData);

        return response()->json($article, 200);
    }

    // DELETE: Supprimer un article de contrat
    public function destroy($id)
    {
        $article = ContractArticle::find($id);

        if (!$article) {
            return response()->json(['message' => 'Article not found'], 404);
        }

        // Suppression de l'article
        $article->delete();

        return response()->json(['message' => 'Article deleted'], 200);
    }
}
