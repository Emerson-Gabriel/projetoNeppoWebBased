<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projeto Neppo</title>
        <link rel="shortcut icon" href="https://www.neppo.com.br/themes/wc_conversion/images/favicon.png"/>
        <link rel="stylesheet" href="<?= asset('css/style.css') ?>" type="text/css">
        <link rel="stylesheet" href="<?= asset('css/materialdesignicons.min.css') ?>">
        <link rel="stylesheet" href="<?= asset('css/bootstrap.min.css') ?>">  
        <link rel="stylesheet" href="<?= asset('css/owl.carousel.min.css') ?>"> 
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Source+Sans+Pro|Raleway" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
        <link rel="stylesheet" href="<?= asset('css/style.css') ?>">           
        <!--Begin JS-->
        <script type="text/javascript" src="<?= asset('js/jquery.min.js') ?>"></script>      
        <script type="text/javascript" src="<?= asset('js/bootstrap.min.js') ?>"></script>
        <script type="text/javascript" src="<?= asset('js/owl.carousel.js') ?>"></script>
        <script type="text/javascript" src="<?= asset('js/jquery.maskedinput.js') ?>"></script>   
        <script type="text/javascript" src="<?= asset('js/utils.js') ?>"></script>   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

    </head>
    <body>
        <nav class="navbar navbar-fixed-left navbar-minimal animate" role="navigation">
            <span id="text_menu" class="">
                Menu
            </span>
            <div class="navbar-toggler animate">
                <span class="menu-icon"></span>
            </div>
            <ul class="navbar-menu animate">
                 <li>
                    <a href="/pessoa/cadastrar" class="animate">
                        <span class="desc animate"> Cadastrar </span>
                        <span class="mdi mdi-18px mdi-account-plus"></span>
                    </a>
                </li>
                <li>
                    <a href="/pessoa/visualizar" class="animate">
                        <span class="desc animate"> Visualizar </span>
                        <span class="mdi mdi-view-list mdi-18px"></span>
                    </a>
                </li>
                <li>
                    <a href="/pessoa/grafico-sexo" class="animate">
                        <span class="desc animate"> Gerar Grafico Sexo</span>
                        <span class="mdi mdi-18px mdi-chart-areaspline"></span>
                    </a>
                </li>
                <li>
                    <a href="/pessoa/grafico-idade" class="animate">
                        <span class="desc animate"> Gerar Grafico Idade</span>
                        <span class="mdi mdi-18px mdi-chart-areaspline"></span>
                    </a>
                </li>
                <li>
                    <a href="mailto:emersong730@gmail.com?Subject=Entrar%20em%20contato" class="animate">
                        <span class="desc animate"> Entrar em contato </span>
                        <span class="mdi mdi-18px mdi-account-multiple "></span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- | Begin Of Header | -->
        <header class="col-xs-12 ">
            <div class="row">
                <div id="topo" class="container">
                    <!-- | Menu | -->
                    <div class="text-center margin_top_7x   ">
                        <h5>
                            Projeto Neppo Frontend Web Based
                        </h5>
                    </div>
                    <!--| End Menu |-->
                </div>                
                <div class="container-fluid">

                </div>
            </div>
        </header>                         
        <!-- | End Of Head | -->
        <section  class="col-xs-12 bg-grey">          
            <div class="row bg-white">
                @yield("conteudo")
            </div>
        </section>
        <!-- | End Of Body | -->
        <!-- | Begin Of Footer | -->
        <footer  class="col-xs-12">          
            <div class="row">
                <div class="container-fluid text-center">
                    - Emerson Gabriel -
                </div>
            </div>
        </footer>
        <!-- | End Of Footer | -->		
    </body>
    
            <script>
            $(document).ready(function() {
                $('.navbar-toggler').on('click', function (event) {
                    event.preventDefault();
                    $(this).closest('.navbar-minimal').toggleClass('open');
                });
            });
        </script>
</html>