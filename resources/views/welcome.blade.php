@extends('layouts.master')
@section('title') ServiceBook-An Online Service Provider @endsection
@section('nav-dynamic')
    <li class="nav-item">
        <a  class="nav-link" href="{{ route('login') }}"><i class="fa fa-user top-icon" aria-hidden="true"></i> Login</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-user-plus top-icon" aria-hidden="true"></i> Register</a>
    </li>
@endsection

@section('content')
    @include('layouts.navbar')

    <!-- Masthead -->
    <header class ="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1>ServiceBook</h1>
                    <h3>Nepal's First and Largest Online Service Provider</h3>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">
                                <input type="text" class="form-control form-control-lg" placeholder="Search Services Here...">
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="submit" class="btn btn-block btn-lg btn-primary"><i class="fa fa-search custom-search" aria-hidden="true"></i> Search</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <section class="text-center mt-5 mb-5">
        <div class="container">
            <div class="row max-viewport align-items-center banner">
                <div class="col-12 col-md-2">
                    <i class="fa fa-id-card sb-card" aria-hidden="true"></i>
                </div>

                <div class="col-12 col-md-8">
                    <h3 class="text-danger">Be Our Member <small class="text-dark">to get upto 5% discounts on every listed services</small></h3>
                </div>
                <div class="col-lg-2">
                    <a href="/signUp" class="btn btn-lg btn-primary m-2">SignUp</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">Our Service Domain
                <div class="hr-custom mx-auto"> <hr /></div>
            </h2>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid mb-3" src="{{asset('images/services/hotes_restaurant.jpg')}}" alt="hotels">
                        <h5>Hotels & Restaurant</h5>
                        <p class="font-weight-light mb-0">Service Providers Related to Hotels and Restaurant are Listed Here</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid mb-3" src="{{asset('images/services/house-for-sale.jpg')}}" alt="">
                        <h5>Home/Real Estate</h5>
                        <p class="font-weight-light mb-0">Land, Home or any other Real Estate Service Providers </p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid mb-3" src="{{asset('images/services/car_rental.jpg')}}" alt="">
                        <h5>Car/Taxi Rental</h5>
                        <p class="font-weight-light mb-0">Service Providers Related to Car and Taxi Rental</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mx-auto mb-5 mb-lg-0">
                        <img class="img-fluid mb-3" src="{{asset('images/services/Business-Finance.jpg')}}" alt="">
                        <h5>Business & Finance</h5>
                        <p class="font-weight-light mb-0">Service Providers Related to Business and Financial Activities</p>
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!-- Stories -->
    <section class="testimonials text-center bg-dark">
        <div id="carouselExampleControls" class="carousel slide" data-interval="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h2 class="text-white">Success Stories</h2>
                        <div class="hr-custom mx-auto mb-5"> <hr /></div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mx-auto mb-5 mb-lg-0">
                                    <img class="img-fluid rounded-square mb-3" src="{{asset('images/stories/upendra.jpg')}}" alt="" style="border-radius:25px;">
                                    <h5 class="text-white">Upendra Mahato</h5>
                                    <p class="font-weight-light mb-0 text-white">Representative of NRN </p>
                                </div>
                            </div>
                            <div class="col-lg-8 mt-5">
                                <p class="font-weight-light text-white">Upendra Mahato is a businessman of Nepalese origin living in Russia, where he is the president of the Russia-Nepal Chamber of Commerce and Industry.He is the Honorary Consul General of Nepal in the Republic of Belarus. He was president of Non- Resident Nepalese Association, International Coordination Council (NRNA, ICC).Upendra Mahato was born in 1960 AD in Siraha, Nepal and is renowned to be one of the richest people of Nepal with an estimated net worth of more than 250 million US Dollars as of 2017, also the Honorary Consul General of Nepal in the Republic of Belarus. <a href="/blog/{post_id}">Continue Reading ...</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="..." alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>


    <!-- Partners -->
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2>In association with</h2>
            <div class="hr-custom mx-auto mb-5"> <hr /></div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-3 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{asset('images/partners/ntb.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-3 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{asset('images/partners/NRN.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial-item mx-auto mb-3 mb-lg-0">
                        <img class="img-fluid rounded-circle mb-3" src="{{asset('images/partners/USEmbassy.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h2 class="mb-4">Ready to get started? Sign up now!</h2>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0">
                                <input type="email" class="form-control form-control-lg" placeholder="Enter your email...">
                            </div>
                            <div class="col-12 col-md-3">
                                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.foot')

@endsection


