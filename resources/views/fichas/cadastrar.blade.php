<x-app-layout>
    <x-slot name="title">
        {{ __('Cadastrar ficha') }}
    </x-slot>
<script>
    $('.cadastrar').addClass('active');
</script>

    <form action="/fichas" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <input type="file" class="form-control" id="foto" name="foto">
            </div>

            <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Código" name="codigo" readonly>
            </div>

            <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Título" name="titulo">
            </div>

            <div class="col-md-4">
                <select type="text" class="form-control" name="categoria">
                    <option value="">Categoria</option>
                </select>
            </div>
        </div>

        <hr>

        <div class="row">
            <h4>Dados do titular</h4>
        <div class="col-md-2">
            <select type="text" class="form-control" id="tipodepessoa" name="tipodepessoa">
                <option value="Física">Física</option>
                <option value="Jurídica">Jurídica</option>
            </select>
        </div>

        <div class="col-md-6">
            <input type="text" class="form-control" placeholder="Nome completo" name="nome" required>
        </div>

        <div class="col-md-6 juridica">
            <input type="text" class="form-control" placeholder="Fantasia" name="fantasia">
        </div>

        <div class="col-md-4">
            <input type="date" class="form-control" placeholder="Nascimento" name="nascimento">
        </div>

        <div class="col-md-4 fisica">
            <input type="text" class="form-control cpf2" placeholder="CPF" name="cpf">
        </div>

        <div class="col-md-2 fisica">
            <input type="text" class="form-control" placeholder="RG" name="rg">
        </div>

        <div class="col-md-4 fisica">
            <input type="text" class="form-control" placeholder="CNH" name="cnh">
        </div>

        <div class="col-md-4 juridica">
            <input type="text" class="form-control cnpj" placeholder="CNPJ" name="cnpj">
        </div>

        <div class="col-md-4 juridica">
            <input type="text" class="form-control" placeholder="Inscrição Estadual" name="ie">
        </div>

        <div class="col-md-2 fisica">
            <select type="text" class="form-control" name="sexo">
                <option value="">Sexo</option>
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
            </select>
        </div>

        <div class="col-md-4 fisica">
            <select type="text" class="form-control" name="escolaridade">
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

        <div class="col-md-2 fisica">
            <input type="text" class="form-control" placeholder="Tipo de sangue" name="tiposanguineo">
        </div>

        <div class="col-md-4 fisica">
            <input type="text" class="form-control" placeholder="Naturalidade" name="naturalidade">
        </div>

        <div class="col-md-4 fisica">
            <input type="text" class="form-control" placeholder="Nacionalidade" name="nacionalidade">
        </div>

        <div class="col-md-4 fisica">
            <input type="text" class="form-control" placeholder="Profissão" name="profissao">
        </div>

        <div class="col-md-4 fisica">
            <select type="text" class="form-control" name="estadocivil">
                <option value="">Estado civil</option>
                <option value="Casado">Casado</option>
                <option value="Divorciado">Divorciado</option>
                <option value="Solteiro">Solteiro</option>
                <option value="União estável">União estável</option>
                <option value="Viúvo">Viúvo</option>
            </select>
        </div>

        </div>

        <hr>

        <div class="row">
            <h4>Informações financeiras</h4>

            <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Vencimento" name="diavencimento">
            </div>

            <div class="col-md-2">
                <select type="text" class="form-control" name="debitoautomatico">
                    <option value="">Débito</option>
                </select>
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Agência/Digito" name="agenciadigito">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Conta/Digito" name="contadigito">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Id banco" name="idclientebanco">
            </div>

            <div class="col-md-4">
                <input type="date" class="form-control" placeholder="Inicio isenção" name="inicioisencao">
            </div>

            <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Vendedor" name="vendedor">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="N° Cartão" name="cartaocreditonumero">
            </div>

            <div class="col-md-2">
                <input type="text" class="form-control" placeholder="Mês/Ano" name="cartaocreditomesano">
            </div>

            <div class="col-md-2">
                <input type="date" class="form-control" placeholder="Admissão" name="dataadmissao">
            </div>
        </div>

        <hr>


        <div class="row">
            <h4>Informações de contato</h4>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Telefone" name="telefone">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Telefone" name="telefone2">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Telefone" name="telefone3">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="E-mail" name="email">
            </div>
        </div>

        <hr>
        <div class="row">
            <h4>Endereço</h4>
            <div class="col-md-2">
                <input type="text" class="form-control cepBusca" placeholder="CEP" name="cep">
            </div>

            <div class="col-md-6">
                <input type="text" class="form-control enderecoBusca" placeholder="Endereço" name="endereco">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control bairroBusca" placeholder="Bairro" name="bairro">
            </div>

            <div class="col-md-4">
                <input type="text" class="form-control municipioBusca" placeholder="Munícipio" name="municipio">
            </div>

            <div class="col-md-2">
                <input type="text" class="form-control ufBusca" placeholder="UF" name="uf" maxlength="2" minlength="2">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Complemento" name="complemento">
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary btn-block" value="Cadastar"/>
            </div>
        </div>
    </form>
</x-app-layout>
