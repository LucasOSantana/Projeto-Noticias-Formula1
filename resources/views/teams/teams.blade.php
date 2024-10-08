@extends('layouts.navbar')
@section('content') 


<div id="carouselExample" class="carousel slide" data-interval="false" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-6 bg-red vh-100">
                </div>
                <div class="col-6 bg-black">
                    <div class="team-nickname">
                        <h1 class="color-red team-title">THE RED</h1>
                        <h1 class="color-red team-title">DEVIL</h1>
                    </div>
                </div>
                <img src="/assets/img/ferrari.png" alt="Descrição da Imagem" class="central-image">
            </div>
        </div>
        <div class="carousel-item">
            <div class="row">
                <div class="col-6 bg-silver vh-100"> <!-- Cor de fundo alterada -->
             
                </div>
                <div class="col-6 bg-black">
                    <div class="team-nickname-bt">
                        <h1 class="color-silver team-title ml-5 pl-5">THE SILVER</h1>
                        <h1 class="color-silver team-title">ARROWS</h1>
                    </div>
                </div>
                <img src="/assets/img/mercedes.png" alt="Descrição da Imagem" class="central-image-2">
            </div>
        </div>
        <!-- Adicione mais itens conforme necessário -->
    </div>
    <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


    

@endsection 

@section('css') 
@endsection 

@section('scripts') 
<script src="{{ asset('assets/js/teams/teams.js') }}"></script>
@endsection