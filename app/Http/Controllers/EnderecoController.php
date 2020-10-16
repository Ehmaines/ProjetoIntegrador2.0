<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Produto;
use App\TipoProduto;
use App\Endereco;
use DB;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $enderecos = json_decode(json_encode(DB::select("select * from enderecos where Enderecos.Users_id = :id_user", ['id_user' => $user->id])), true);
        return view('Endereco.endereco')->with('enderecos', $enderecos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('Endereco.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        print_r($user->id);
        $endereco = new Endereco();
        $endereco->Users_id = $user->id;
        $endereco->bairro = $request->bairro;
        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->complemento = $request->complemento;
        $endereco->save();
        $response['success'] = true;
        $response['message'] = "Pedido criado com sucesso";
        return redirect()->route('endereco');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resEndereco = json_decode(json_encode(DB::select("select * from enderecos where Enderecos.id = :id_endereco", ['id_endereco' => $id])), true);
        if(isset($resEndereco))
        {
            return view('endereco.edit')->with('resEndereco', $resEndereco[0]);
            //print_r();
        }
        return redirect()->route('endereco');
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
        $endereco = Endereco::find($id);
        if(isset($endereco)){
            $endereco->bairro = $request->bairro;
            $endereco->logradouro = $request->logradouro;
            $endereco->numero = $request->numero;
            $endereco->complemento = $request->complemento;
            $endereco->update();
        }
    return redirect()->route('endereco');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $endereco = Endereco::find($id);
        if(isset($endereco))
        {
            $endereco->delete();
        }
        return redirect()->route('endereco');
    }
}
