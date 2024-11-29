@extends('layouts.navbar')
@section('content') 

<main class="test">

<div class="content">
    <div class="title-content">
      <h1><span>FERRARI</span></h1>
      <b><h2>THE RED DEVIL</h2></b>
    </div>
    <div class="car-image">
      <img src="/assets/img/ferrari.png" alt="Ferrari">
    </div>
    <div class="text-content">
        <h1>THE BIGGEST <span></span></h1>
        <h2>A maior vencedora da história da fórmula 1</h2>

    </div>
</div>

</main>


@endsection 

@section('css') 
@endsection 

@section('scripts') 
<script src="{{ asset('assets/js/teams/teams.js') }}"></script>
@endsection