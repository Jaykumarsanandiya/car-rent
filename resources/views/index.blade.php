@include('header')
<!-- HOME -->
<section id="home">
    <div class="row">
        <div class="owl-carousel owl-theme home-slider">
            <div class="item item-first">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Get a car for rent here</h1>
                            <h3>Your friends to make your tour easy</h3>
                            <a href="/fleet" class="section-btn btn btn-default">Fleet</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-second">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Make trips better</h1>
                            <h3>We automatically know your need</h3>
                            <a href="/fleet" class="section-btn btn btn-default">Fleet</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="item item-third">
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-sm-12">
                            <h1>Travel hassle-free</h1>
                            <h3>Car rental service with smiling prices</h3>
                            <a href="/fleet" class="section-btn btn btn-default">Fleet</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>







<section class="section-background">
    <div class="container">
    
        @if (session()->has('status'))
        {{-- {{dd(session()->get('status'))}} --}}
            <div class="alert alert-success " role="alert">
                {{ session()->get('status') }}
                
            </div>
        @endif
    
    </div>
    <div class="container">
        <div class="row">

            @foreach ($cars as $car)
                <div class="col-md-4">
                    <div class="courses-thumb courses-thumb-secondary">
                        <div class="courses-top">
                            <div class="courses-image">
    <img src="{{ asset('car-rental/images/' . $car['image_url']) }}" style="max-height:200px;">
                            </div>

                        </div>

                        <div class="courses-detail">
                            <h3 id="{{ $car['model'] }}">{{ $car['company'] . ' ' . $car['model'] }}</h3>
                            <p class="lead"><small>from</small> <strong>Rs .
                                    {{ $car['charge'] }}</strong> <small>per day</small></p>
                            <span>
                                <img
                                    src="https://img.icons8.com/external-those-icons-fill-those-icons/24/000000/external-fuel-cars-components-those-icons-fill-those-icons.png" />

                                {{ $car['fuel'] }}</span><span><img
                                    src="https://img.icons8.com/ios-filled/50/000000/gear-stick.png" />{{ $car['transmission'] }}</span>

                            <span> <img src="https://img.icons8.com/material-outlined/24/000000/flight-seat.png" />
                                {{ $car['seating'] }} seats</span>
                            <h4>Dealer Location : {{ $car['dealer_location'] }}</h4>
                        </div>

                        <div class="courses-info">
                            {{-- data-toggle="modal" data-target=".bs-example-modal" --}}

                            <a href="/form/{{ $car->id }}" class="section-btn btn btn-primary btn-block"> Book
                                Now </a>


                        </div>
                    </div>
                </div>
            @endforeach 

        </div>
    </div>

  
   
</section>

<!-- FOOTER -->

@include('footer')
