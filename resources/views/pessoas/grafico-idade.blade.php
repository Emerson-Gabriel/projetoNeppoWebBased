@extends('pessoas.master')
@section('conteudo')



<div class="container border-conteudo  margin_top_7x">
    <div class="row ">
        <div class="col-xs-offset-0 col-xs-12 col-sm-offset-1 col-sm-10">
            <div class="row">
                <div class="jumbotron">
                    <h5>
                        Gerando Gráficos de Idade
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center ">
        Faixa de 0 a 10 anos = {{$faixas[1]}}<br/>
        Faixa de 10 a 20 anos= {{$faixas[2]}}<br/>
        faixa de 20 a 30 anos= {{$faixas[3]}}<br/>
        faixa de 30 a 40 anos= {{$faixas[4]}}<br/>
        faixa maiores que 40 anos= {{$faixas[5]}}<br/>
        <div id="canvas-holder" style="width:40%" class="center-block">
            <canvas id="grafico1"></canvas>
        </div>
        <script>
            var randomScalingFactor = function () {
                return Math.round(Math.random() * 100);
            };

            var config = {
                type: 'doughnut',
                data: {
                    datasets: [{
                            data: [
                                {{$faixas[1]}},
                                {{$faixas[2]}},
                                {{$faixas[3]}},
                                {{$faixas[4]}},
                                {{$faixas[5]}},
                            ],
                            backgroundColor: [
                                window.chartColors.red,
                                window.chartColors.orange,
                                window.chartColors.yellow,
                                window.chartColors.green,
                                window.chartColors.blue,
                            ],
                            label: 'Dataset 1'
                        }],
                    labels: [
                        '0 a 10',
                        '10 a 20',
                        '20 a 30',
                        '30 a 40',
                        'Maiores de 40'
                    ]
                },
                options: {
                    responsive: true,
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true
                    },
                    animation: {
                        animateScale: true,
                        animateRotate: true
                    }
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