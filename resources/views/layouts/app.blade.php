<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <title>WEB CLUBES</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="https://augustocezar.com.br/assets/img/now-logo.png">
    <!-- site css -->
    <link rel="stylesheet" href="/css/site.min.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,800,700,400italic,600italic,700italic,800italic,300italic" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/js/site.min.js"></script>
    <!--busca cep -->
    <script src="/js/buscacep.js"></script>
    <!-- mascaras -->
    <script src="/js/jquery.mask.js"></script>
    <script src="/js/jquery.maskMoney.js"></script>
    <script src="/js/meusscripts.js"></script>

    <script>
        $(document).ready(function(){
            $('.alert-message').fadeIn().delay(6000).fadeOut();
        });
    </script>
    <style>
        .divRetorno {
            position: absolute;
            position: fixed;
            z-index: 1 !important;
            top: 10% !important;
            right: 0.5%;
            display: block;
            /*flutuando*/
            margin: 3px !important;
        }
    </style>
  </head>
  <body>
    <!--nav-->
    <nav role="navigation" class="navbar navbar-custom">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="{{ route('dashboard') }}" class="navbar-brand"><img src="https://augustocezar.com.br/assets/img/now-logo.png" width="20px" alt="icone sistema"/></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href=""><i class="glyphicon glyphicon-fullscreen"></i> FullScren</a></li>
              <li class="active"><a href="/">{{date("d/m/Y H:m:s")}}</a></li>
              <!-- <li class="disabled"><a href="#">Link</a></li> -->
              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#"><i class="glyphicon glyphicon-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                <ul role="menu" class="dropdown-menu">
                    <li>
                        <a href="{{ route('profile.show') }}"><i class="fa fa-sliders"></i> Perfil</a>
                    </li>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" name="sair">
                        @csrf
                        @method('post')
                        <li>
                            <a href="#" onclick="document.sair.submit(); return false;"><i class="fa fa-sign-out"></i> Sair</a>
                        </li>
                    </form>
                </ul>
              </li>
            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    <!--header-->
    <div class="container-fluid">
    <!--documents-->
        <div class="row row-offcanvas row-offcanvas-left">
          <div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
            <ul class="list-group panel">
                <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>MENU</b></li>
                <li class="list-group-item">
                    <form action="/fichas">
                    <div class="input-group form-search">
                        <input type="text" class="form-control search-query" id="search" name="search" placeholder="Buscar nome">
                        <span class="input-group-btn">
                            <button data-type="last" class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    </form>
                </li>
                <li class="list-group-item dashboard"><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i>Dashboard </a></li>
                <li class="list-group-item fichas"><a href="/fichas"><i class="glyphicon glyphicon-user"></i>Fichas </a></li>
                <li class="list-group-item cadastrar"><a href="/fichas/cadastrar"><i class="glyphicon glyphicon-list-alt"></i>Cadastrar</a></li>
                <li class="list-group-item caixa"><a href="/caixa"><i class="glyphicon glyphicon-th-list"></i>Caixa </a></li>
                <li class="list-group-item relatorio"><a href="/relatorio"><i class="glyphicon glyphicon-folder-open"></i>Relatório </a></li>
                <li class="list-group-item almoxarifado"><a href="/almoxarifado"><i class="fa fa-cubes"></i> Almoxarificado</a></li>
                <li>
                  <a href="#demo4" class="list-group-item" data-toggle="collapse"><i class="fa fa-gears"></i>Configurações  <span class="glyphicon glyphicon-chevron-right"></span></a>
                    <li class="collapse configuracoes" id="demo4">
                        <a href="/dadosdaempresa" class="list-group-item dadosdaempresa">Dados da empresa</a>
                        <a href="/parametros" class="list-group-item parametros">Parâmetros</a>
                        <a href="/usuarios" class="list-group-item usuarios">Usuários</a>
                    </li>
                </li>
              </ul>
          </div>
          <!--flash message -->
          <div class="divRetorno"> @include('flash-message')</div>

          <div class="col-xs-12 col-sm-9 content">

            <!-- inicio corpo -->
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">
                    <a href="javascript:void(0);" class="toggle-sidebar">
                        <span class="fa fa-angle-double-left" data-toggle="offcanvas" title="Maximize Panel"></span>
                        {{ $title }}
                    </a>
                </h3>
              </div>

              <div class="panel-body">
                <!--- aqui entrar o body-->

                <div class="content-row">
                    <div class="row">
                        <div class="col-md-12">
                            {{$slot}}
                        </div>
                    </div>
                </div>

              <!-- panel body -->
              </div>
            </div>
            <!-- final corpo -->

        </div><!-- body-->
        <!-- content -->
      </div>
    </div>
  </body>
</html>


