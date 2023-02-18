<x-app-layout>
    <x-slot name="title">
        {{ __('Almoxarifado') }}
    </x-slot>
<script>
    $('.almoxarifado').addClass('active');
</script>


<div class="table-responsive">
    <table class="table table-bordered table-hover">
      <thead>
        <tr class="active">
          <th>CÓDIGO</th>
          <th>DESCRIÇÃO/PRODUTO</th>
          <th>MÍNIMO</th>
          <th>ATUAL</th>
          <th>SITUAÇÃO</th>
          <th>AÇÃO</th>
        </tr>
      </thead>
      <tbody>
        <td>1</td>
        <td>Saco de cimento</td>
        <td>000</td>
        <td>0000</td>
        <td>0000</td>
        <td>
            <a href=""><i class="fa fa-edit"></i> Alterar</a>&ensp;
            <a href="" class="text-red"><i class="fa fa-trash"></i> Excluir</a>&ensp;
            <a href=""><i class="fa fa-plus"></i> Entrada</a>&ensp;
            <a href="" class="text-red"><i class="fa fa-minus text-red"></i> Saída</a>
        </td>
      </tbody>
    </table>
</div>
</x-app-layout>
