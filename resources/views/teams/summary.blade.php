@extends('layouts.navbar')
@section('content') 

<main class="team-background">

<div class="team-title">
    
    <div class="top-right"></div>
    <div class="top-left"></div>
    <div class="title-content">
      <h1><span>{{ strtoupper($team[0]->name) }}</span></h1>
      <b><h2>{{ strtoupper($team[0]->nickname) }}</h2></b>
    </div>
    <div class="car-image">
      <img src="/assets/img/{{ $team[0]->constructor_id }}-side.png">
    </div>
    <div class="text-content">
        <h1>{{ strtoupper($team[0]->team_slogan) }} <span></span></h1>
        <h2>{{ $team[0]->team_epigraph }}</h2>

    </div>
</div>

<div class="team-content">
  <div class="bot-left"></div>
  <div class="bot-right"></div>
  <div class="card team-summary">

      <h3>{{ $team[0]->history }}</h3>
    
  </div>
  <div class="team-circuit-show"><h1>Circuito destaque: {{ $team[0]->team_circuit }}</h1></div>
  <div class="team-circuit"><img src="/assets/img/{{ $team[0]->team_circuit }}.avif"></div>
</div>

</main>
<style>
  :root {
    --triangle-color: {{ $team[0]->team_color }};
  }
</style>

@endsection 

@section('css') 
@endsection 

@section('scripts') 
<script src="{{ asset('assets/js/teams/teams.js') }}"></script>
@endsection