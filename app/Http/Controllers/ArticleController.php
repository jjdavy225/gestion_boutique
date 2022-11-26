<?php
namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles= Article::all();
        return view("article.index", compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'libelle' => 'required|max:25',
                'prix_vente' => 'required|max:25',
                'volume' => 'required|max:25',
            ]
        );

        $article = new Article();
        $article->libele = $request->libele;
        $article->prix_vente = $request->prix_vente;
        $article->volume = $request->volume;
        $article->save();
        if( $article){
            return redirect()->route('article.index')->with('toast_success', 'Article enrgistré avec succès !');
        }else{
            return redirect()->back()->with('toast_error', 'Article non enrgistré !');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article= Article::find($id);
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find( $id );
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $article = Article::find( $id );
        $request->validate(
            [
                'libelle' => 'required|max:25',
                'prix_vente' => 'required|max:25',
                'volume' => 'required|max:25',
            ]
        );

        $article = new Article();
        $article->libele = $request->libelle;
        $article->prix_vente = $request->prix_vente;
        $article->volume = $request->volume;
        $article->save();
        if( $article){
            return redirect()->route('article.index')->with('toast_success', 'Article enrgistré avec succès !');
        }else{
            return redirect()->back()->with('toast_error', 'Article non enrgistré !');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find( $id );

        if( $article){
            $article->delete();
            return redirect()->back()->with('toast_success', 'Article bien supprimé !');
        }else{
            return redirect()->back()->with('toast_error', 'Article non supprimé !');
        }



    }
}
