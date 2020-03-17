
@extends('admin.layouts.principal')

@section('titulo', 'Oficina')

@section('acao', 'Orçamento')

@section('conteudo-principal')

    <form method="post" action="">

        <div class="form-group">
            <label for="nome">Nome Cliente</label>
            <input id="nome" class="form-control" type="text" name="nome">
            <label for="nome">Fabricante Veiculo</label>
            <input id="nome" class="form-control" type="text" name="nome">
            <label for="nome">Modelo</label>
            <input id="nome" class="form-control" type="text" name="nome">
            <label for="nome">Ano</label>
            <input id="nome" class="form-control" type="text" name="nome">
            <label for="nome">Tipo de Serviço</label>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                <label class="form-check-label" for="inlineCheckbox1">Pintura</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                <label class="form-check-label" for="inlineCheckbox2">Polimento</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                <label class="form-check-label" for="inlineCheckbox3">Cristalização</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option4">
                <label class="form-check-label" for="inlineCheckbox4">Polarização</label>
              </div>

        </div>

        <button class="btn btn-primary">Salvar</button>

    </form>

@endsection