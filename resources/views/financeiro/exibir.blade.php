<x-app-layout>
<script>
    $('.fichas').addClass('active');
</script>
<center>
<div class="row">
<div class="col-md-12">
    <div class="btn-group">
        <a href="/fichas/exibir/{{$titular->id}}" type="button" class="btn btn-primary btn-lg"><i class="fa fa-user"></i> Dados</a>
        <a href="/financeiro/exibir/{{$titular->id}}" type="button" class="btn btn-primary btn-lg"><i class="fa fa-line-chart"></i> Financeiro</a>
        <a href="/historico/exibir/{{$titular->id}}" type="button" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-list-alt"></i> Historico</a>
        <a href="/documento/exibir/{{$titular->id}}" type="button" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-folder-open"></i> Documentos</a>
    </div>
  </div>
</div>
</center>

<div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead>
        <tr class="active">
          <th>RECEITA</th>
          <th>VENCIMENTO</th>
          <th>VALOR</th>
          <th>DIAS VENCIDO</th>
          <th>DATA/PAG.</th>
          <th>VALOR PAGO</th>
          <th>AÇÃO</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>
</div>
</x-app-layout>
