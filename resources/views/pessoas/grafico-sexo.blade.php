@extends('pessoas.master')
@section('conteudo')



<div class="container border-conteudo  margin_top_7x">
    <div class="row ">
        <div class="col-xs-offset-0 col-xs-12 col-sm-offset-1 col-sm-10">
            <div class="row">
                <div class="jumbotron">
                    <h5>
                        Gerando Gráficos de Sexo
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center ">
        <div id="canvas-holder" style="width:40%" class="center-block">
            <canvas id="grafico1"></canvas>
        </div>
        {{$qtds['f']}} Pessoas do sexo feminino.
        <br/>
        {{$qtds['m']}} Pessoas do sexo masculino.
        <script>
            var randomScalingFactor = function () {
                return Math.round(Math.random() * 100);
            };

            var config = {
                type: 'pie',
                data: {
                    datasets: [{
                            data: [ {{$qtds['f']}},{{$qtds['m']}}], //inclui buscas aaqui
                            backgroundColor: [
                                window.chartColors.red,
                                window.chartColors.blue,
                            ],
                            label: 'Dataset 1'
                        }],
                    labels: [//nome dos dados
                        'Mulheres',
                        'Homens'
                    ]
                },
                options: {
                    responsive: true
                }
            };

            window.onload = function () {
                var ctx = document.getElementById('grafico1').getContext('2d');
                window.myPie = new Chart(ctx, config);
            };

            var colorNames = Object.keys(window.chartColors);

        </script>
    </div>
</div>

<script>
    
</script>



@stop