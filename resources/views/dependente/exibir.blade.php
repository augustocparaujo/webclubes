<x-app-layout>
<script>
    $('.fichas').addClass('active');
</script>

<div class="row">
    <div class="col-md-4">
        Foto
        <input type="file" class="form-control" id="foto" name="foto" readonly>
    </div>

    <div class="col-md-2">
        Código
        <input type="text" class="form-control" placeholder="Código" name="codigo" readonly>
    </div>

    <div class="col-md-2">
        Título
        <input type="text" class="form-control" placeholder="Título" name="titulo" readonly>
    </div>

    <div class="col-md-4">
        Categoria
        <input type="text" class="form-control" placeholder="Título" name="titulo" readonly>
    </div>

    <div class="col-xs-6">
        <label>Nome</label>
        <input type="text" class="form-control" placeholder="Nome" name="nome" readonly>
    </div>
</div>

<hr>

<div class="col-xs-6">
    <label>Nome</label>
    <input type="text" class="form-control" placeholder="Nome" name="nome" required>
  </div>
  <div class="col-xs-4">
    <label>CPF</label>
    <input type="text" class="form-control" placeholder="CPF" name="cpf">
  </div>
  <div class="col-xs-2">
      <label>RG</label>
      <input type="text" class="form-control" placeholder="RG" name="rg">
  </div>
  <div class="col-xs-4">
      <label>Nascimento</label>
      <input type="date" class="form-control" placeholder="" name="nascimento" required>
  </div>
  <div class="col-xs-4">
      <label>Tipo parentesco</label>
      <select type="text" class="form-control" name="tipoparentesco">
          <option value=""></option>
          <option value="">Filho(a)</option>
          <option value="">Esposo(a)</option>
      </select>
    </div>
</div>
</x-app-layout>
