@extends('layout.main')
@section('main')

    <!-- ABOUT section start  -->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="about-section mt-5 bg-white">
                        <h1>ABOUT</h1>
                        <p class="mt-3">
                            We are a leading Insulation Contractor in the Greater Toronto area. I provide my clients
                            with a comprehensive approach to resolving any attic issues they may have and specialize
                            specifically in attic problems. Ever since starting out as a professional Insulation
                            Contractor in 2012, I’ve prioritized serving my clients’ needs and resolving problems for
                            their homes.
                        </p>
                        <p class="mt-3">
                            I take care of all the small details so you don’t have to. Get in touch to see how I can
                            help You today!
                        </p>
                        <button class="mt-3">Learn More</button>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{url('images/about-img.webp')}}" class="mt-5 custom-img rounded shadow-lg" height="500" width="450">
                </div>
            </div>
        </div>
    </section>
    <!-- ABOUT section end -->

@endsection