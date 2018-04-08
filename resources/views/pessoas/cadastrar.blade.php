@extends('pessoas.master')
@section('conteudo')

<div class="container border-conteudo margin_top_7x">
    <div class="row ">
        <div class="col-xs-offset-0 col-xs-12 col-sm-offset-1 col-sm-10">
            <div class="row">
                <div class="jumbotron">
                    <h5>
                        Formulário para o cadastro de pessoas [Projeto Neppo]
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <form id="cadastrar-form" action="/pessoa/salvar" method="post" class="margin_top">
            <input type="hidden" name="_token" value ="{{csrf_token()}}" />
            <div class="col-xs-12 col-xs-offset-0 ">
                <div class="row no_margin_xs">
                    <div class="col-sm-3 text-right text-left-xs">
                        <label for="nome">Nome:</label>
                    </div>
                    <div class="col-sm-7 col-xs-12 ">
                        <div class="row">
                            <input value ="{{$pessoa->nome}}" id="nome" type="text" class="required form_input" name="nome" placeholder="Digite seu nome" >                                        
                        </div>
                    </div>
                </div>
                <div class="row margin_top no_margin_xs">
                    <div class="col-sm-3 text-right text-left-xs">
                        <label for="dataNascimento">Data de Nascimento:</label>
                    </div>
                    <div class="col-sm-7 col-xs-12">
                        <div class="row ">
                            <input type="date" value="{{$pessoa->dataNascimento}}" class="form_input required" id="dataNascimento" name="dataNascimento" />
                            
                        </div>
                    </div>
                </div>
                <div class="row margin_top no_margin_xs">
                    <div class="col-sm-3 text-right text-left-xs">
                        <label for="documentoDeIdentificacao">Documento de Identificação:</label>
                    </div>
                    <div class="col-sm-7 col-xs-12 ">
                        <div class="row">
                            <input type="text" id="documentoDeIdentificacao" value="{{$pessoa->documentoDeIdentificacao}}" class="required form_input" name="documentoDeIdentificacao"  placeholder="Digite seu documento de identificação" >
                        </div>
                    </div>
                </div>
                <div class="row margin_top no_margin_xs">
                    <div class="col-sm-3 text-right text-left-xs">
                        <label for="sexo">Sexo:</label>
                    </div>
                    <div class="col-sm-7 col-xs-12">
                        <div class="row">
                            <div class=" ">
                                <select name="sexo" id="sexo" class="form_input required" >
                                    @if($pessoa->sexo == "Masculino")
                                    <option value="{{$pessoa->sexo}}" selected="selected">{{$pessoa->sexo}}</option>
                                    <option value="Feminino">Feminino</option>
                                    @elseif($pessoa->sexo == "Feminino")
                                    <option value="{{$pessoa->sexo}}">{{$pessoa->sexo}}</option>
                                    <option value="Masculino">Masculino</option>
                                    @else
                                    <option value="0" disabled selected=""></option>
                                    <option value="Feminino">Feminino</option>
                                    <option value="Masculino">Masculino</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="row margin_top no_margin_xs">
                    <div class="col-sm-3 text-right text-left-xs">
                        <label for="endereco">Endereço:</label>
                    </div>
                    <div class="col-sm-7 col-xs-12">
                        <div class="row">
                            <input type="text" value="{{$pessoa->endereco}}" id="endereco" class=" form_input" name="endereco"  placeholder="Digite seu endereço" >
                        </div>
                    </div>
                </div> 
                <div class="row margin_top text-right ">
                    <div class="col-sm-10">
                        <div class="row no_row_xs">
                            <input type="hidden"  value="{{$pessoa->id}}" class="form-control-file" name="id">
                            <button type="submit" class="btn btn-submit bold text_white">SALVAR</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $("#cadastrar-form").validate({
        errorPlacement: function (error, element) {
            error.appendTo(element.parent("td").next("td"));//retirando o label para erro
        },
        rules: {
            nome: {
                required:true
            },
            dataDeNascimento:{
                required:true
            },
            documentoDeIdentificacao:{
                required:true
            },
            sexo:{
                required:true
            }
        }
    });
</script>

@stop