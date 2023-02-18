@if ($message = Session::get('success'))
<div class="alert alert-success alert-dismissable alert-message">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Sucesso!</strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-dismissable alert-message">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Excluido!</strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-dismissable alert-message">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Sucesso!</strong> {{ $message }}
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-dismissable alert-message">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <strong>Atenção!</strong> {{ $message }}
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissable alert-message" aria-hidden="true">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Erro inesperado :( !</strong>
</div>
@endif
