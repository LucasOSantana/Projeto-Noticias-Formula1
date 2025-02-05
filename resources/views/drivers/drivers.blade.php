@extends('layouts.navbar')
@section('content') 


<main class="contentDrivers mt-3">
    
<div class="row drivers-background">
    @foreach($drivers as $driver)
        <div class="col-6">
            <div class="card drivers-card">
                <div class="row align-items-center">
                    <div class="col-6" id="image">
                        <img style="max-height: 100%; max-width: 100%; object-fit: contain;" 
                             src="/assets/img/{{$driver['driverId']}}.avif">
                    </div>
                    <div class="col-6 driver-data">
                        <p class="driver-name">{{$driver['givenName']}} {{$driver['familyName']}}</p>
                        <p class="driver-number">{{$driver['code']}} {{$driver['permanentNumber']}}</p>
                        <p class="driver-nationality">{{$driver['nationality']}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
</main>
    

@endsection 

@section('css') 
@endsection 

@section('scripts') 
<script src="{{ asset('assets/js/drivers/drivers.js') }}"></script>
@endsection