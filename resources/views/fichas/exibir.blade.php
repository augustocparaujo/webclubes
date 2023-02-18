<x-app-layout>
<script>
    $('.fichas').addClass('active');
</script>
<center>
<div class="row">
<div class="col-md-12">
    <div class="btn-group">
      <a href="" type="button" class="btn btn-primary btn-lg"><i class="fa fa-user"></i> Dados</a>
      <a href="/financeiro/exibir/{{$titular->id}}" type="button" class="btn btn-primary btn-lg"><i class="fa fa-line-chart"></i> Financeiro</a>
      <a href="/historico/exibir/{{$titular->id}}" type="button" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-list-alt"></i> Historico</a>
      <a href="/documento/exibir/{{$titular->id}}" type="button" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-folder-open"></i> Documentos</a>
    </div>
  </div>
</div>
</center>

<form action="/fichas/update/{{$titular->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-4">
            Foto
            <input type="file" class="form-control" id="foto" name="foto" value="{{$titular->foto}}">
        </div>

        <div class="col-md-2">
            Código
            <input type="text" class="form-control" placeholder="Código" name="codigo" value="{{$titular->codigo}}" readonly>
        </div>

        <div class="col-md-2">
            Título
            <input type="text" class="form-control" placeholder="Título" name="titulo" value="{{$titular->titulo}}">
        </div>

        <div class="col-md-4">
            Categoria
            <select type="text" class="form-control" name="categoria">
                <option value="">Categoria</option>
                <option value="">{{$titular->categoria}}</option>
            </select>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="panel-heading panel-primary">
            <div class="panel-title"><b>Dados do titular</b></div>
        </div>
    <div class="col-md-2">
        Tipo pessoa
        <select type="text" class="form-control" id="tipodepessoa" name="tipodepessoa">
            <option value="{{$titular->tipodepessoa}}">{{$titular->tipodepessoa}}</option>
            <option value="Física">Física</option>
            <option value="Jurídica">Jurídica</option>
        </select>
    </div>

    <div class="col-md-6">
        Nome
        <input type="text" class="form-control" placeholder="Nome completo" name="nome" value="{{$titular->nome}}" required>
    </div>

    <div class="col-md-6 juridica">
        Fantasia
        <input type="text" class="form-control" placeholder="Fantasia" name="fantasia" value="{{$titular->fantasia}}">
    </div>

    <div class="col-md-4">
        Nascimento
        <input type="date" class="form-control" placeholder="Nascimento" name="nascimento" value="{{date($titular->nascimento)}}">
    </div>

    <div class="col-md-4 fisica">
        CPF
        <input type="text" class="form-control cpf2" placeholder="CPF" name="cpf" value="{{$titular->cpf}}">
    </div>

    <div class="col-md-2 fisica">
        RG
        <input type="text" class="form-control" placeholder="RG" name="rg" value="{{$titular->rg}}">
    </div>

    <div class="col-md-4 fisica">
        CNH
        <input type="text" class="form-control" placeholder="CNH" name="cnh" value="{{$titular->cnh}}">
    </div>

    <div class="col-md-4 juridica">
        CNPJ
        <input type="text" class="form-control cnpj" placeholder="CNPJ" name="cnpj" value="{{$titular->cnpj}}">
    </div>

    <div class="col-md-4 juridica">
        Insc.Estatual
        <input type="text" class="form-control" placeholder="Inscrição Estadual" name="ie" value="{{$titular->ie}}">
    </div>

    <div class="col-md-2 fisica">
        Sexo
        <select type="text" class="form-control" name="sexo" required>
            @if($titular->sexo == "M")
                <option value="M">Masculino</option>
            @else
                <option value="F">Feminino</option>
            @endif
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
        </select>
    </div>

    <div class="col-md-4 fisico">
        Escolaridade
        <select type="text" class="form-control" name="escolaridade">
            @if($titular->escolaridade != '')
                <option value="{{$titular->escolaridade}}">{{$titular->escolaridade}}</option>
            @endif
            <option value="">Escolaridade</option>
            <option value="Ensino fundamental">Ensino fundamental</option>
            <option value="Ensino médio">Ensino médio</option>
            <option value="Graduação">Graduação</option>
            <option value="Pós-graduação">Pós-graduação</option>
            <option value="Mestrado">Mestrado</option>
            <option value="Doutorado">Doutorado</option>
            <option value="Pós-doutorado">Pós-doutorado</option>
        </select>
    </div>

    <div class="col-md-2 fisico">
        Tipo de sangue
        <input type="text" class="form-control" placeholder="Tipo sangue" name="tiposanguineo" value="{{$titular->tiposanguineo}}">
    </div>

    <div class="col-md-4 fisico">
        Naturalidade
        <input type="text" class="form-control" placeholder="Naturalidade" name="naturalidade" value="{{$titular->naturalidade}}">
    </div>

    <div class="col-md-4 fisico">
        Nacionalidade
        <input type="text" class="form-control" placeholder="Nacionalidade" name="nacionalidade" value="{{$titular->nacionalidade}}">
    </div>

    <div class="col-md-4 fisico">
        Profissão
        <input type="text" class="form-control" placeholder="Profissão" name="profissao" value="{{$titular->profissao}}">
    </div>

    <div class="col-md-4 fisico">
        Estado civil
        <select type="text" class="form-control" name="estadocivil">
            @if($titular->estadocivil != '')
                <option value="{{$titular->estadocivil}}">{{$titular->estadocivil}}</option>
            @endif
            <option value="">Estado civil</option>
            <option value="Casado(a)">Casado(a)</option>
            <option value="Divorciado(a)">Divorciado(a)</option>
            <option value="Solteiro(a)">Solteiro(a)</option>
            <option value="União estável">União estável</option>
            <option value="Viúvo(a)">Viúvo(a)</option>
        </select>
    </div>

    </div>

    <div class="row">
        <div class="panel-heading panel-primary">
            <div class="panel-title"><b>Informações financeiras</b></div>
        </div>

        <div class="col-md-2">
            Vencimento
            <input type="text" class="form-control" placeholder="Vencimento" name="diavencimento" value="{{$titular->diavencimento}}" maxlength="2" minlength="2">
        </div>

        <div class="col-md-2">
            Débito
            <select type="text" class="form-control" name="debitoautomatico">
                @if($titular->debitoautomatico == 'V')
                    <option value="V">Sim</option>
                @else
                    <option value="F">Não</option>
                @endif
                <option value="V">Sim</option>
                <option value="F">Não</option>
            </select>
        </div>

        <div class="col-md-4">
            Agência/digito
            <input type="text" class="form-control" placeholder="Agência/Digito" name="agenciadigito" value="{{$titular->agenciadigito}}">
        </div>

        <div class="col-md-4">
            Conta/digito
            <input type="text" class="form-control" placeholder="Conta/Digito" name="contadigito" value="{{$titular->contadigito}}">
        </div>

        <div class="col-md-4">
            ID banco
            <input type="text" class="form-control" placeholder="Id banco" name="idclientebanco" value="{{$titular->idclientebanco}}">
        </div>

        <div class="col-md-4">
            Inicio isenção
            <input type="date" class="form-control" placeholder="Inicio isenção" name="inicioisencao" value="{{date($titular->inicioisencao)}}">
        </div>

        <div class="col-md-2">
            Vendedor
            <input type="text" class="form-control" placeholder="Vendedor" name="vendedor" value="{{$titular->vendedor}}">
        </div>

        <div class="col-md-4">
            Número cartão
            <input type="text" class="form-control cartaocredito" placeholder="N° Cartão" name="cartaocreditonumero" value="{{$titular->cartaocreditonumero}}">
        </div>

        <div class="col-md-2">
            Mês/Ano cartão
            <input type="text" class="form-control mesnao" placeholder="Mês/Ano" name="cartaocreditomesano" value="{{$titular->cartaocreditomesano}}">
        </div>

        <div class="col-md-4">
            Admissão
            <input type="date" class="form-control" placeholder="Admissão" name="dataadmissao" value="{{date($titular->dataadmissao)}}">
        </div>

    </div>


    <div class="row">
        <div class="panel-heading panel-primary">
            <div class="panel-title"><b>Informações de contato</b></div>
        </div>

        <div class="col-md-4">
            Telefone
            <input type="text" class="form-control celular" placeholder="Telefone" name="telefone" value="{{$titular->telefone}}">
        </div>

        <div class="col-md-4">
            Telefone
            <input type="text" class="form-control celular" placeholder="Telefone" name="telefone2" value="{{$titular->telefone2}}">
        </div>

        <div class="col-md-4">
            Telefone
            <input type="text" class="form-control celular" placeholder="Telefone" name="telefone3" value="{{$titular->telefone3}}">
        </div>

        <div class="col-md-4">
            E-mail
            <input type="email" class="form-control" placeholder="E-mail" name="email" value="{{$titular->email}}">
        </div>
    </div>

    <div class="row">
        <div class="panel-heading panel-primary">
            <div class="panel-title"><b>Informações de Endereço</b></div>
        </div>

        <div class="col-md-2">
            CEP
            <input type="text" class="form-control cepBusca" placeholder="CEP" name="cep" value="{{$titular->cep}}">
        </div>

        <div class="col-md-6">
            Endereço
            <input type="text" class="form-control enderecoBusca" placeholder="Endereço" name="endereco" value="{{$titular->endereco}}">
        </div>

        <div class="col-md-4">
            Bairro
            <input type="text" class="form-control bairroBusca" placeholder="Bairro" name="bairro" value="{{$titular->bairro}}">
        </div>

        <div class="col-md-4">
            Município
            <input type="text" class="form-control municipioBusca" placeholder="Município" name="municipio" value="{{$titular->municipio}}">
        </div>

        <div class="col-md-2">
            UF
            <input type="text" class="form-control ufBusca" placeholder="UF" name="uf" maxlength="2" minlength="2" value="{{$titular->uf}}">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            Complemento
            <input type="text" class="form-control" placeholder="Complemento" name="complemento" value="{{$titular->complemento}}">
        </div>
    </div>

    <div class="row" style="display: flex; justify-content: space-between;">
        <div class="col-md-4">
            <input type="submit" class="btn btn-info btn-block" value="Atualizar"/>
        </div>
    </div>
</form>

    <hr>
    <div class="row">

        <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-title"><b>Dependentes</b></div>
            <div class="panel-options">
              <a class="btn btn-primary" data-target="#modalTeste" data-toggle="modal"><i class="fa fa-plus"></i> Cadastrar</a>
            </div>
          </div>

          <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr class="active">
                  <th>CÓDIGO</th>
                  <th>FOTO</th>
                  <th>NOME</th>
                  <th>CPF</th>
                  <th>RG</th>
                  <th>NASCIMENTO</th>
                  <th>IDADE</th>
                  <th>AÇÃO</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
        </div>

        </div>
    </div>



    <div class="modal" id="modalTeste">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h4 class="modal-title">Cadastrar</h4>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-xs-6">
                  <label>Nome</label>
                  <input type="text" class="form-control" placeholder="Nome" name="nome" required>
                </div>
                <div class="col-xs-6">
                  <label>CPF</label>
                  <input type="text" class="form-control" placeholder="CPF" name="cpf">
                </div>
                <div class="col-xs-6">
                    <label>RG</label>
                    <input type="text" class="form-control" placeholder="RG" name="rg">
                </div>
                <div class="col-xs-6">
                    <label>Nascimento</label>
                    <input type="date" class="form-control" placeholder="" name="nascimento" required>
                </div>
                <div class="col-xs-6">
                    <label>Tipo parentesco</label>
                    <select type="text" class="form-control" name="tipoparentesco">
                        <option value=""></option>
                        <option value="">Filho(a)</option>
                        <option value="">Esposo(a)</option>
                    </select>
                  </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-success">Send</button>
            </div>
          </div>
        </div>
      </div>

</x-app-layout>
