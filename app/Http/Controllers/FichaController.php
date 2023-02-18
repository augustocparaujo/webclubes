<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Titular;

class FichaController extends Controller
{

    //buscra a ficha
    public function fichas(){
        //mandar pra um controller pra buscar no banco de dados
        $busca = request('search');

        if($busca != ''){

            $titulares = Titular::where('nome','LIKE','%'.$busca.'%')->get();

        }else{
            $titulares = '';
        }
        //$titulares = Titular::where('nome', $busca)->get();

        return view('fichas', ['titular'=>$titulares]);

        }

    //cadastrar fichar
    public function fichaCadastrar(){

        return view('fichas.cadastrar');
    }

    //exibir ficha
    public function fichaExibir($id){

        $titular= Titular::findOrFail($id);

        return view('fichas.exibir',['titular'=>$titular]);

    }

    //salvar ficha nova
    public function store(Request $request){

        $ficha = new Titular;
        $ficha->codigo = $request->codigo;
        $ficha->titulo = $request->titular;
        $ficha->categoria = $request->categoria;
        $ficha->tipodepessoa = $request->tipodepessoa;
        $ficha->nome = $request->nome;
        $ficha->fantasia = $request->fantasia;
        $ficha->cpf = $request->cpf;
        $ficha->cnpj = $request->cnpj;
        $ficha->ie = $request->ie;
        $ficha->rg = $request->rg;
        $ficha->cnh = $request->cnh;
        $ficha->nascimento = $request->nascimento;
        $ficha->escolaridade = $request->escolaridade;
        $ficha->tiposanguineo = $request->tiposanguineo;
        $ficha->naturalidade = $request->naturalidade;
        $ficha->nacionalidade = $request->nacionalidade;
        $ficha->profissao = $request->profissao;
        $ficha->sexo = $request->sexo;
        $ficha->estadocivil = $request->estadocivil;
        $ficha->cep = $request->cep;
        $ficha->endereco = $request->endereco;
        $ficha->bairro = $request->bairro;
        $ficha->municipio = $request->municipio;
        $ficha->uf = $request->uf;
        $ficha->complemento = $request->complemento;
        $ficha->telefone = $request->telefone;
        $ficha->telefone2 = $request->telefone2;
        $ficha->telefone3 = $request->telefone3;
        $ficha->email = $request->email;
        $ficha->debitoautomatico = $request->debitoautomatico;
        $ficha->agenciadigito = $request->agenciadigito;
        $ficha->contadigito = $request->contadigito;
        $ficha->idclientebanco = $request->idclientebanco;
        $ficha->diavencimento = $request->diavencimento;
        $ficha->inicioisencao = $request->inicioisencao;
        $ficha->vendedor = $request->vendedor;
        $ficha->cartaocreditonumero = $request->cartaocreditonumero;
        $ficha->cartaocrediromesano = $request->cartaocreditomesano;
        $ficha->idusercad = $request->idusercad;
        $ficha->dataadmissao = $request->dataadmissao;
        $ficha->datacadastro = $request->datacadastro;

        //image upload
        if($request->hasFile('foto') && $request->file('foto')->isValid()){ //verifica se é uma imagem valida
            //encapsula pra sempre ser uado
            $requestImage = $request->foto;
            //extesão do arquivo
            $extensao = $requestImage->extension();
            //novo nome
            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).'.'.$extensao;
            //upload imagem // mover salvar com nome novo
            $requestImage->move(public_path('img/fotos'), $imageName);
            //nome que vai pro banco
            $ficha->foto = $imageName;

        }

        $ficha->save();

        //redirecionar pra uma página
        return redirect('/fichas')->with('success','Cadastrado');

    }

    //alterar ficha
    public function update(Request $request){
        //$id = $request->id;

        Titular::findOrFail($request->id)->update($request->all());

        return back()->with('success','Atualizado');
    }

}
