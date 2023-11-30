<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produto;

class ProdutoController extends Controller
{

    // public readonly produto $produto;

    // public function __construct(){
    //     $this-> $produto = new produto();
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produto = produto::all();
        return view('produtos', ['produtos' => $produto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $created = produto::create([
            'nome' => $request->input('nome'),
            'descricao' => $request->input('descricao'),
            'preco' => $request->input('preco')
        ]);

        if ($created){
            return redirect()->back()->with('message','sucesso');
        }   

        return redirect()->back()->with('message','erro');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $produto = Produto::findOrFail($id);

        return view('show',['produto'=>$produto ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {        
        $produto = Produto::findOrFail($id);

        return view('edit',['produto'=>$produto]);
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
        $produto = Produto::findOrFail($id);
        $produto->update([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco
        ]);
        if ($produto){
            return redirect()->back()->with('message','sucesso');
        }   

        return redirect()->back()->with('message','erro');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect()->route('produtos.index');
    }
}
