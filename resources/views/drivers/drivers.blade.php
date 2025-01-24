@extends('layouts.navbar')
@section('content') 


<main class="contentDrivers mt-3">
    
    <div class="row drivers-background">
        @foreach($drivers as $driver)
            
                <div class="card drivers-card col-6">
                    {{$driver['givenName']}} {{$driver['familyName']}} 
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