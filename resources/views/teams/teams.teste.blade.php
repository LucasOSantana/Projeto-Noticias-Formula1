@extends('layouts.navbar')
@section('content') 


<div class="background-all">

    <div class="row">
        <div class="col-10">

            <div class="">
                top
            </div>

            <div class="">
                <img src="/assets/img/ferrari-side.png" alt="Descrição da Imagem" class="central-image">
            </div>

            <div class="">
            bottom
            </div>

            
        </div>
        <div class="col-2">
            DIREITA
        </div>
    </div>
    
</div>


@endsection 

@section('css') 
@endsection 

@section('scripts') 
<script src="{{ asset('assets/js/teams/teams.js') }}"></script>
@endsection