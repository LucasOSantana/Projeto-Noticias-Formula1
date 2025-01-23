@extends('layouts.navbar')
@section('content') 


<main class="contentTeams mt-3">
    
    <div class="row justify-content-center mt-5" style="width: 90%">
        @foreach(range(0, 4) as $index)
            <div class="ml-5 col-12 col-sm-4 col-md-3 col-lg-2">
                <div class=" card-team card shadow" onclick="alterarPagina()">
                    <div class="bars-container"></div>
                    <div class="card-team-car-div">
                        <img class="card-team-car align-center" src="/assets/img/{{$teams[$index]['name']}}-front.png" alt="team">  
                    </div>
                    
                    <p class="card-team-name text-center">{{$teams[$index]['name']}}</p>
                    <p class="card-team-extra-text">The Silver Arrows</p>
                    <img class="card-team-logo" src="/assets/img/{{$teams[$index]['name']}}-logo.png" alt="team">  
                  
                </div>
            </div>
        @endforeach
    </div>

    <div class="row justify-content-center mt-4" style="width: 90%">
        @foreach(range(5, 9) as $index)
        <div class="col-12 col-sm-4 col-md-3 col-lg-2">
                <div class=" card-team card shadow" onclick="alterarPagina()">
                    <div class="bars-container"></div>
                    <div class="card-team-car-div">
                        <img class="card-team-car align-center" src="/assets/img/{{$teams[$index]['name']}}-front.png" alt="team">  
                    </div>
                    <p class="card-team-name text-center">{{$teams[$index]['name']}}</p>
                    <p class="card-team-extra-text">The Bulls</p>
                    <img class="card-team-logo" src="/assets/img/{{$teams[$index]['name']}}-logo.png" alt="team">  
                  
                </div>
            </div>
        @endforeach
    </div>
</main>
    

@endsection 

@section('css') 
@endsection 

@section('scripts') 
<script src="{{ asset('assets/js/teams/teams.js') }}"></script>
@endsection