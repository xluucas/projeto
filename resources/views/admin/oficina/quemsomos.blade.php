{{-- Extender o layout principal --}}
@extends('admin.layouts.principal')

{{-- Section para o titulo --}}
@section('titulo','Quem Somos')

{{-- Section para a acao --}}
@section('acao', 'Contato')

{{-- Section Principal --}}
@section('conteudo-principal') {{-- Tem que colocar o nome do yeild onde quero jogar o conteudo  --}}
<div class="media">
    <img src="https://ederpintura.com.br/wp-content/uploads/2017/07/logo-eder-printura.png" style="width: 8%;" class="mr-3" alt="...">
    <div class="media-body">
      <h5 class="mt-0">Oficina de Pintura Automotiva</h5>
      <Telefone:><i class="fab fa-whatsapp"></i> 38 991511418</Telefone:>
    </div>
  </div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3202.723162268762!2d-44.92596452912424!3d-17.329961439897062!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xaa0ca0f94af48d%3A0x7ffd07d0b3d39dad!2sR.%20Bonif%C3%A1cio%20Machado%20de%20Miranda%2C%20580%20-%20Nova%20Pirapora%2C%20Pirapora%20-%20MG%2C%2039270-000!5e0!3m2!1spt-BR!2sbr!4v1584486281523!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

@endsection