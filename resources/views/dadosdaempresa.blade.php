<x-app-layout>
    <x-slot name="title">
        {{ __('Dados da empresa') }}
    </x-slot>
<script>
    $('.configuracoes').addClass('in');
    $('.dadosdaempresa').addClass('active');
</script>

<form action="/dadosdaempresa/update" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">

    <div class="col-md-4">
        Logo
        <input type="file" class="form-control" id="foto" name="logo">
    </div>
    <div class="row"></div>

    <div class="col-md-6">
        Nome
        <input type="text" class="form-control" placeholder="Nome" name="nome" required>
    </div>

    <div class="col-md-6">
        Fantasia
        <input type="text" class="form-control" placeholder="Fantasia" name="fantasia">
    </div>

    <div class="col-md-4">
        Criação
        <input type="date" class="form-control" placeholder="Criação" name="criação">
    </div>

    <div class="col-md-4">
        CNPJ
        <input type="text" class="form-control cnpj" placeholder="CNPJ" name="cnpj">
    </div>

    <div class="col-md-4">
        Insc.Estatual
        <input type="text" class="form-control" placeholder="Inscrição Estadual" name="ie">
    </div>

    </div>

    <div class="row">
        <div class="panel-heading panel-primary">
            <div class="panel-title"><b>Informações de contato</b></div>
        </div>

        <div class="col-md-4">
            Telefone
            <input type="text" class="form-control celular" placeholder="Telefone" name="telefone">
        </div>

        <div class="col-md-4">
            Telefone
            <input type="text" class="form-control celular" placeholder="Telefone" name="telefone2">
        </div>

        <div class="col-md-4">
            Telefone
            <input type="text" class="form-control celular" placeholder="Telefone" name="telefone3">
        </div>

        <div class="col-md-4">
            E-mail
            <input type="email" class="form-control" placeholder="E-mail" name="email">
        </div>
    </div>

    <div class="row">
        <div class="panel-heading panel-primary">
            <div class="panel-title"><b>Informações de Endereço</b></div>
        </div>

        <div class="col-md-2">
            CEP
            <input type="text" class="form-control cepBusca" placeholder="CEP" name="cep">
        </div>

        <div class="col-md-6">
            Endereço
            <input type="text" class="form-control enderecoBusca" placeholder="Endereço" name="endereco">
        </div>

        <div class="col-md-4">
            Bairro
            <input type="text" class="form-control bairroBusca" placeholder="Bairro" name="bairro">
        </div>

        <div class="col-md-4">
            Município
            <input type="text" class="form-control municipioBusca" placeholder="Município" name="municipio">
        </div>

        <div class="col-md-2">
            UF
            <input type="text" class="form-control ufBusca" placeholder="UF" name="uf" maxlength="2" minlength="2">
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            Complemento
            <input type="text" class="form-control" placeholder="Complemento" name="complemento">
        </div>
    </div>

    <div class="row" style="display: flex; justify-content: space-between;">
        <div class="col-md-4">
            <input type="submit" class="btn btn-info btn-block" value="Atualizar"/>
        </div>
    </div>
</form>


</x-app-layout>
