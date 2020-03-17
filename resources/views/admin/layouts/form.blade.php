@extends('admin.oficina.principal')
@section('titulo','oficina')
    

@section('acao','listar')
    
@section('conteudo-principal')
 
<form method="POST" action="">
    <div class ="form-group">
        <label for="nome">Nome</label>
        <input id="nome" class="form-control" type="text" name="nome">

    </div>
    <button class="btn btn-primary">Salvar</button>
</form>


@endsection
@endsection
@endsection