@extends('layouts.navbar')
@section('content') 

<main class="season-background">

<div class="season-filter">
<div class="row card card-filter-season">
    <div class="col-12 d-flex align-items-center">
        <div class="col-4 pe-2">
            <label for="year">Ano: </label>
            <select id="year" class="select2 col-12" onchange="loadRaces(this.value)">
                <option selected value="">- Selecione um ano -</option>
                @foreach(range(2024, 1970) as $index)
                    <option value="{{$index}}">{{$index}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-4">
            <label for="race">Corrida: </label>
            <select id="race" class="select2 col-12">
                
            </select>
        </div>

        <div class="col-4 text-end">
            <button class="mt-4 btn btn-danger" onclick="loadData()">Carregar dados</button>
            
        </div>
    </div>
</div>

</div>

<div class="card data-container"></div>

</main>


@endsection 

@section('css') 
@endsection 

@section('scripts') 
<script src="{{ asset('assets/js/seasons/seasons.js') }}"></script>
@endsection