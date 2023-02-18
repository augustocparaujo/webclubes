<x-app-layout>
    <x-slot name="title">
        {{ __('Parâmetros do sistema') }}
    </x-slot>
<script>
    $('.configuracoes').addClass('in');
    $('.parametros').addClass('active');
</script>

<div class="row">
<div class="col-md-6">
<div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Banco</h3>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead>
                <tr class="active">
                  <th>CÓDIGO</th>
                  <th>DESCRIÇÃO</th>
                  <th>AGÊNCIA</th>
                  <th>CONTA</th>
                  <th>AÇÃO</th>
                </tr>
              </thead>
              <tbody>
                <td>1</td>
                <td>Banco do Brasil</td>
                <td>000</td>
                <td>0000</td>
                <td>Alterar/Excluir/Desativar</td>
              </tbody>
            </table>
        </div>
    </div>
  </div>
</div>

<div class="col-md-6">
    <div class="panel panel-danger">
        <div class="panel-heading">
          <h3 class="panel-title">Categoria</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr class="active">
                      <th>CÓDIGO</th>
                      <th>DESCRIÇÃO</th>
                      <th>VALOR</th>
                      <th>AÇÃO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <td>1</td>
                    <td>TEXTO TEXTO</td>
                    <td>R$ 140,00</td>
                    <td>Alterar/Excluir/Desativar</td>
                  </tbody>
                </table>
            </div>
        </div>
      </div>
</div>
</div>

<div class="row">
<div class="col-md-6">
    <div class="panel panel-success">
        <div class="panel-heading">
          <h3 class="panel-title">Moeda</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr class="active">
                      <th>CÓDIGO</th>
                      <th>DESCRIÇÃO</th>
                      <th>AÇÃO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <td>1</td>
                    <td>DINHEIRO</td>
                    <td>Alterar/Excluir/Desativar</td>
                  </tbody>
                </table>
            </div>
        </div>
      </div>
</div>

<div class="col-md-6">
    <div class="panel panel-warning">
        <div class="panel-heading">
          <h3 class="panel-title">Tipo de parente</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr class="active">
                      <th>CÓDIGO</th>
                      <th>DESCRIÇÃO</th>
                      <th>AÇÃO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <td>1</td>
                    <td>FILHO(A)</td>
                    <td>Alterar/Excluir/Desativar</td>
                  </tbody>
                </table>
            </div>
        </div>
      </div>
</div>
</div>
<div class="row">
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Situação</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr class="active">
                      <th>CÓDIGO</th>
                      <th>DESCRIÇÃO</th>
                      <th>AÇÃO</th>
                    </tr>
                  </thead>
                  <tbody>
                  </tbody>
                </table>
            </div>
        </div>
      </div>
</div>
</div>

<div class="row">
<div class="col-md-8">
    <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Receitas caixa</h3>
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr class="active">
                      <th>CÓDIGO</th>
                      <th>DESCRIÇÃO</th>
                      <th>VALOR</th>
                      <th>JUROS</th>
                      <th>MULTA</th>
                      <th>AÇÃO</th>
                    </tr>
                  </thead>
                  <tbody>
                    <td>1</td>
                    <td>MANUTENÇÃO</td>
                    <td>R$ 140,00</td>
                    <td>0,99</td>
                    <td>1,99</td>
                    <td>Alterar/Excluir/Desativar</td>
                  </tbody>
                </table>
            </div>
        </div>
      </div>
</div>
</div>

</x-app-layout>
