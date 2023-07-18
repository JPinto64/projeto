@extends('layouts.app')

@section('menu')
    @parent
@endsection

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@section('conteudo')
<div class="jumbotron jumbotron-fluid" >
  <div class="container">
    <h1 class="display-4">CCPOH</h1>
    <p class="lead">Clube de Caça e Pesca de Oliveira do Hospital</p>
  </div>
</div>

<hr class="hr hr-blurry" />
<<<<<<< Updated upstream
<!-- 
=======
<<<<<<< HEAD
<!--
=======
<!-- 
>>>>>>> ef01067c5c1fea83e80d5183b7c2630b344bc5d1
>>>>>>> Stashed changes
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{ asset('images/carrosel/1.jpg') }}" alt="1a Noticia">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/carrosel/2.jpg') }}" alt="1a Noticia">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{ asset('images/carrosel/3.jpg') }}" alt="3a Noticia">
    </div>
  </div>
</div>
     -->

    <!-- Blocos -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card">
                <a href="#"><img src="{{ asset('images/homepage/bloco1.jpg') }}" class="card-img-top" alt="Inscrições para Taça de Coimbra 2023" title="Ir para: Inscrições para Taça de Coimbra 2023"/></a>
                    <div class="card-body">
                        <h5 class="card-title">Notícias</h5>
                        <p class="card-text">
                        	<ul class="list-group list-group-flush list-homepage">
  								<li class="list-group-item"><a href="#">Inscrições para Taça de Coimbra 2023</a></li>
  								<li class="list-group-item"><a href="#">Remodelação da Piscina D. Henriques</a></li>
  								<li class="list-group-item"><a href="#">CCP assina memorando com Ministério de Desportos</a></li>
  								<li class="list-group-item"><a href="#">Introdução de novas regras de subida de escalão</a></li>
  								<li class="list-group-item"><a href="#">Construção de Pavilhão Aquático</a></li>
                        </p>
                    </div>
                </div>
            </div>
             <div class="col-md-4 mb-4">
                <div class="card">
                <a href="#"><img src="{{ asset('images/homepage/bloco2.jpg') }}" class="card-img-top" alt="Venda de acessórios de natação desportivos" title="Ir para: Venda de acessórios de natação"/></a>
                    <div class="card-body">
                        <h5 class="card-title">Serviços & Produtos</h5>
                        <p class="card-text">
                        	<ul class="list-group list-group-flush list-homepage">
  								<li class="list-group-item"><a href="#">Venda de acessórios de natação desportivos</a></li>
  								<li class="list-group-item"><a href="#">Aulas de natação </a></li>
  								<li class="list-group-item"><a href="#">Aluguer de piscinas para eventos e competições</a></li>
  								<li class="list-group-item"><a href="#">Exames de certificação de reconhecimento internacional</a></li>
  								<li class="list-group-item"><a href="#">Manutenção e limpeza de piscinas públicas e privadas</a></li>
                        </p>
                    </div>
                </div>
            </div>
               <div class="col-md-4 mb-4">
                <div class="card">
                <a href="#"><img src="{{ asset('images/homepage/bloco3.jpg') }}" class="card-img-top" alt="Exposição de Natação - Coimbra 07/23" title="Ir para: Venda de acessórios de natação"/></a>
                    <div class="card-body">
                        <h5 class="card-title">Eventos</h5>
                        <p class="card-text">
                        	<ul class="list-group list-group-flush list-homepage">
  								<li class="list-group-item"><a href="#">Exposição de Natação - Coimbra 07/23</a></li>
  								<li class="list-group-item"><a href="#">Taça de Coimbra 2023 </a></li>
  								<li class="list-group-item"><a href="#">Feira das Águas e Desportos Aquáticos</a></li>
  								<li class="list-group-item"><a href="#">Torneio de Natação Universitária</a></li>
  								<li class="list-group-item"><a href="#">Campeonato de Natação Velocista. Todos escalões</a></li>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
