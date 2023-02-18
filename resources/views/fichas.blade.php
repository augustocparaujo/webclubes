<x-app-layout>
    <x-slot name="title">
        {{ __('Fichas') }}
    </x-slot>
    <script>
        $('.fichas').addClass('active');
    </script>

    <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead>
            <tr class="active">
              <th>CÓDIGO</th>
              <th>TÍTULO</th>
              <th>FOTO</th>
              <th>NOME</th>
              <th>CPF/CNPJ</th>
              <th>CONTATO</th>
              <th>AÇÃO</th>
            </tr>
          </thead>
          <tbody>
            @if($titular != '')
                @foreach ($titular as $item)
                <tr>
                    <td>{{ $item->codigo }}</td>
                    <td>{{ $item->titulo }}</td>
                    <td>
                        @if($item->foto != '')
                            <img src="/img/fotos/{{ $item->foto }}" alt="foto" width="100px"/>
                        @else
                            <i>Sem foto</i>
                        @endif</td>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->cpf }}</td>
                    <td>{{ $item->telefone }}</td>
                    <td><a href="/fichas/exibir/{{ $item->id }}">Acessa</a></td>
                </tr>
                @endforeach
            @else
                <h4 class="text-danger">Por favor digite um nome, na área de busca!</h4>
            @endif
          </tbody>
        </table>
    </div>
</x-app-layout>

