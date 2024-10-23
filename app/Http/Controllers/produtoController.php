<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use App\Models\Ingredienteativo;
use App\Models\Produto;
use App\Models\TipoProduto;
use Illuminate\Http\Request;

class produtoController extends Controller
{
    public function index()
    {
        $produto = Produto::all();
        $ingrediente = Ingredienteativo::all();
        $ingrediente_todos = Ingrediente::all();
        $tipoproduto_todos = TipoProduto::all(); //para o modal
        $tipoproduto = TipoProduto::with('produto')->get(); //para a tabela
        // tetse

        return view('produto.index',compact('produto', 'tipoproduto','ingrediente','tipoproduto_todos','ingrediente_todos'));
    }
    public function SalvarNovoProduto(Request $request){
        $pro_nome = $request->input('pro_nome');
        $pro_preco = $request->input('pro_preco');
        $pro_descricao = $request->input('pro_descricao');
        $tip_id = $request->input('tip_id');

        $produto = new Produto();
        $produto->pro_nome = $pro_nome;
        $produto->pro_preco = $pro_preco;
        $produto->pro_descricao = $pro_descricao;
        $produto->tip_id = $tip_id;
        $produto->save();

        $ingrediente_ids = $request->input('igrediente_id');


        $tarefa_id = $request->input('tarefa_id');
        $tarefa = Tarefa::where("id", $tarefa_id)->first();
        $tarefa->meta_id = $meta->id;

        $ingrediente = new Ingredienteativo();
        $ingrediente->igrediente_id = $igrediente_id;
        $ingrediente->ativo = 1;
        $ingrediente->save();

        



    }
}
