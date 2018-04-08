<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use DateTime;

class PessoaController extends Controller {

    //criando o controler da classe pessoa
    function index(Request $request) {
        if ($request->get("id") == null) {
            $pessoa = new Pessoa();
        } else {
            $pessoa = Pessoa::Where('id', $request->get("id"))->first();
        }
        return view('pessoas.cadastrar', array('pessoa' => $pessoa));
    }

    function listar() {
        return view('pessoas.visualizar', array('pessoas' => Pessoa::All()));
    }

    function salvar(Request $request) {
        if ($request->get('id') == null) { //se entrar aqui eu sei que é para editar
            $pessoa = new Pessoa();
        } else {
            $pessoa = Pessoa::Where('id', $request->get('id'))->first();
        }
        $pessoa->nome = $request->get('nome');
        $pessoa->dataNascimento = $request->get('dataNascimento');
        $pessoa->documentoDeIdentificacao = $request->get('documentoDeIdentificacao');
        $pessoa->sexo = $request->get('sexo');
        $pessoa->endereco = $request->get('endereco');
        $pessoa->save();

        // aqui eu devo redirecionar para o cadastro ou remover o / salvar da URL
        return redirect()->action('PessoaController@listar');
    }

    function excluir(Request $request) {
        if ($request->get('id') != null) {
            $pessoa = Pessoa::Where('id', $request->get('id'))->first();
            $pessoa->delete();
            return redirect()->action('PessoaController@listar');
        }
    }

    function graficoSexo() {
        $qtdSexoM = Pessoa::Where('sexo', 'Masculino')->count();
        $qtdSexoF = Pessoa::Where('sexo', 'Feminino')->count();
        $qtds = array(
            "m" => $qtdSexoM,
            "f" => $qtdSexoF
        );

        return view('pessoas.grafico-sexo', array('qtds' => $qtds));
    }

    function idade($data_nascimento) {
        $dn = new DateTime($data_nascimento);
        $agora = new DateTime ();

        $idade = $agora->diff($dn);
        return $idade->y;
    }

    function graficoIdade() {
//        SELECT YEAR(FROM_DAYS(TO_DAYS(NOW())-TO_DAYS(dataNascimento))) AS idade FROM pessoas
//        $teste = DB::table('pessoas')-->select(DB::raw('year(from_days(to_days(now()) - to_days(dataNascimento)))) as idade')-->get());
        
        $faixa1 = 0; // de 0 a 10
        $faixa2 = 0; // de 10 a 20
        $faixa3 = 0; // de 20 a 30
        $faixa4 = 0; // de 30 a 40
        $faixa5 = 0; // de 40 +
        $idade = Pessoa::select('pessoa')->select('dataNascimento')->get();
        foreach ($idade as $row) {
            $idade = $this->idade($row['dataNascimento']);
            if($idade <= 10){
                $faixa1++;
            }else if($idade >=11 && $idade <= 20){
                $faixa2++;
            }else if($idade >=21 && $idade <= 30){
                $faixa3++;
            }else if($idade >=31 && $idade <= 40){
                $faixa4++;
            }else if($idade >=40){
                $faixa5++;
            }
        }

//        return view('pessoas.grafico-idade', array('pessoas' => $idade));

        $faixas = array(
            1 => $faixa1,
            2 => $faixa2,
            3 => $faixa3,
            4 => $faixa4,
            5 => $faixa5
        );
        return view('pessoas.grafico-idade', array('faixas' => $faixas));
    }

}
