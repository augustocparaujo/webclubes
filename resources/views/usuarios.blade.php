<x-app-layout>
    <x-slot name="title">
        {{ __('Usuários do sistema') }}
    </x-slot>
<script>
    $('.configuracoes').addClass('in');
    $('.usuarios').addClass('active');
</script>

<div class="table-responsive">
    <table class="table table-bordered table-hover">
    <thead>
        <tr class="active">
        <th>CÓDIGO</th>
        <th>NOME</th>
        <th>LOGIN</th>
        <th>SITUAÇÃO</th>
        <th>AÇÃO</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>
                <span class="badge badge-success">Ativo</span>
                <span class="badge badge-danger">Bloqueado</span>
            </td>
            <td>
                <a href=""><i class="fa fa-edit"></i> Alterar</a>&ensp;
                <a href="" class="text-green"><i class="fa fa-check"></i> Ativar</a>&ensp;
                <a href="" class="text-red"><i class="fa fa-ban"></i> Bloquear</a>&ensp;
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</div>

</x-app-layout>
