@extends('layouts.navbar')


@section('content') 



<main class="dashboard-background mt-3">

  <div class="dashboard-intro vh-60">
    <div class="row">
      <div class="col-5">
        <p class="dashboard-font-title"><i>BEM VINDO AO MUNDO DA FÓRMULA 1</i></p>
        <hr class="dashboard-hr">
        <p class="dashboard-font-subtitle">Risk takers, Late breakers, History makers.</p>
        <p class="dashboard-font-text">
          A maior e mais prestigiada categoria do automobilismo mundial, o lugar em que cada curva é um desafio, cada reta é uma oportunidade, e cada corrida é uma batalha épica que mistura estratégia, adrenalina e precisão.
        </p>
        <button class="mt-4 btn btn-danger dashboard-button">Notícias recentes</button>
      </div>
      <div class="col-7 dashboard-img">
        <img class="img-fluid" src="/assets/img/mp4.png" alt="formula1">
      </div>
    </div>
  </div>
  <div class="dashboard-news">
    <hr>
    <div class="row justify-content-center mt-5" style="width: 100%">
        @foreach(range(1, 3) as $index)
            <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                <div class=" card-team card shadow" onclick="sendToNews(`{{$news['articles'][$index]['url']}}`)">
                    <div class="news-img">
                        <img class="news-card-img align-center" src="{{$news['articles'][$index]['urlToImage']}}">  
                    </div>
                    <div class="news-card-link"><b>● Notícia!</b></div>
                        <p class="news-title dashboard-font-text">{{$news['articles'][$index]['title']}}</p>
                    
                </div>
            </div>
        @endforeach
    </div>
  </div>

  <div class="dashboard-news-2">
    <div class="row justify-content-center mt-5" style="width: 100%">
        @foreach(range(4, 6) as $index)
        <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                <div class=" card-team card shadow" onclick="sendToNews(`{{$news['articles'][$index]['url']}}`)">
                    <div class="news-img">
                        <img class="news-card-img align-center" src="{{$news['articles'][$index]['urlToImage']}}">  
                    </div>
                    <div class="news-card-link"><b>● Notícia!</b></div>
                        <p class="news-title dashboard-font-text">{{$news['articles'][$index]['title']}}</p>
                    
                </div>
            </div>
        @endforeach
    </div>
  </div>
</main>



@endsection 

@section('scripts') 
<script src="{{ asset('assets/js/dashboard/dashboard.js') }}"></script>
@endsection

@section('css') 
@endsection 

