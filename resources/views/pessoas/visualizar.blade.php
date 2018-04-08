@extends('pessoas.master')
@section('conteudo')

<div class="container border-conteudo  margin_top_7x">
    <div class="row ">
        <div class="col-xs-offset-0 col-xs-12 col-sm-offset-1 col-sm-10">
            <div class="row">
                <div class="jumbotron">
                    <h5>
                        Tabela de listagem de pessoas [Projeto Neppo]
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class=" ">
        <table id="tabela" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Documento de Identificacao</th>
                    <th>Data de Nascimento</th>
                    <th>Sexo</th>
                    <th>Endereço</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pessoas as $row)
                <tr>
                    <td> {{$row->nome}} </td>
                    <td> {{$row->documentoDeIdentificacao}} </td>
                    <td> {{$row->dataNascimento}} </td>
                    <td> {{$row->sexo}} </td>
                    <td> {{$row->endereco}} </td>
                    <td>
                        <a href="/pessoa/cadastrar?id={{$row->id}}">
                            <div class="btn-primary bg-blue btn text_white">
                                <i class="mdi text_white mdi-pencil"></i>
                            </div>
                        </a>
                    </td>
                    <td>
                        <a onclick="return confirm('Deseja realmente excluir?')" href="/pessoa/excluir?id={{$row->id}}">
                            <div class="btn-danger btn text_white">
                                <i class="mdi text_white mdi-close-outline"></i>
                            </div>
                        </a>
                    </td>
                </tr>   
                @endforeach   
            </tbody>
        </table>
    </div>
</div>

<script>
    $('#tabela').DataTable({
        "pagingType": "simple",
        language: {
            "sEmptyTable": "Nenhum registro encontrado",
            "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
            "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
            "sInfoFiltered": "(Filtrados de _MAX_ registros)",
            "sInfoPostFix": "",
            "sInfoThousands": ".",
            "sLengthMenu": "_MENU_ Resultados por página",
            "sLoadingRecords": "Carregando...",
            "sProcessing": "Processando...",
            "sZeroRecords": "Nenhum registro encontrado",
            "sSearch": "Pesquisar",
            "oPaginate": {
                "sNext": "Próximo",
                "sPrevious": "Anterior",
                "sFirst": "Primeiro",
                "sLast": "Último"
            },
            "oAria": {
                "sSortAscending": ": Ordenar colunas de forma ascendente",
                "sSortDescending": ": Ordenar colunas de forma descendente"
            }
        }
    });
</script>

@stop