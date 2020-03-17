{{-- Extender o layout principal --}}
@extends('admin.layouts.principal')

{{-- Section para o titulo --}}
@section('titulo','Oficina de Pintura')

{{-- Section para a acao --}}
@section('acao', 'Materiais utilizados e nossos serviços')

{{-- Section Principal --}}
@section('conteudo-principal') {{-- Tem que colocar o nome do yeild onde quero jogar o conteudo  --}}

<div class="container">
    
    <div class="row">
        <div class="col-md">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://www.aomundodastintas.com.br/wp-content/uploads/2015/08/Tinta-automotiva-600x300.jpg" alt="Imagem de capa do card">
                <div class="card-body">
                <h5 class="card-title">As melhores tintas do mercado</h5>
                <p class="card-text">Utilizamos uma linha de tintas com um nivel bem alto de qualidade , são elas.</p>
                    <a href="http://www.gekar.com.br"  target="_blank">GEKAR</a>
                    <a href="http://www.farben.com.br/"  target="_blank">FARBEN</a>
                    <a href="http://www.brasilux.com.br"  target="_blank">BRASILUX</a>
                    <a href="http://54.69.127.59/pt"  target="_blank">WANDA</a>
                </div>
            </div>
        </div>
        
            
        <div class="col-md">    
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://static.baratocoletivo.com.br/_cps//2017/0809/cp/oferta_15023024748058_Ofertas.jpg" alt="Imagem de capa do card" style="width: 100%;height: 143px;">
                <div class="card-body">
                <h5 class="card-title">Polimentos</h5>
                <p class="card-text">As melhores maquinas e ferramentas para garantir um veículo sem arranhões e brilhando sempre</p>
                <a href="http://www.bosh.com.br"  target="_blank">Site de nossas ferramentas</a>          
                </div>
            </div>
        </div>
        

        <div class="col-md">   
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="https://fronter.com.br/wp-content/uploads/2019/06/266686-como-aumentar-a-satisfacao-do-cliente-em-uma-oficina-mecanica-1920x1200.jpg" alt="Imagem de capa do card" style="width: 100%;height: 143px;">
                <div class="card-body">
                <h5 class="card-title">Atendimento</h5>
                <p class="card-text">Super dedicação com o conforto e bem estar com o cliente<br> Venha realizar seu orçamento e solicitar nossos serviços</p>
                <a href="{{route('oficina.form_adicionar')}}">Orçamento</a>          
                </div>
            </div>
        </div>
</div>
    </div>
</div>


@endsection