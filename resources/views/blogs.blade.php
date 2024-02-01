@extends('layout.main')
@section('main')

    <section>
        <div class="request-section">
            <div class="container">
                <div class="row">

                    <div class="attic-card-head">
                        <h4>BLOGS</h4>
                        <p class="mt-4 text-center">Stay cozy all year long, Your guide to attic insulation.</p>



                        <div class="row mt-5">
                            <div class="col-lg-4">
                                <div class="attic-card  rounded shadow-sm d-flex flex-column align-items-center" style="height: auto !important;">
                                    <img class="rounded mb-2" src="{{url('images/mold.jpg')}}" width="320px" height="200px" />
                                    <h3 style="font-weight: 500;" >Why mold in the attic needs to be remediated?</h3>
                                    <p class="mt-3">Animal infestation in the attic is a common problem for homeowners, and it can be a serious
                                        issue if left unaddressed. Not only can it be a health hazard, but it can also cause damage
                                        to your home and property. In this blog, we will explore why animal infestation in the attic
                                        needs to be remediated.</p>
                                        <a href="{{url('/blog/1')}}" class="btn btn-primary" style="width: 50%;" >Read More</a>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-4 mt-md-0 ">
                                <div class="attic-card  rounded shadow-sm d-flex flex-column align-items-center" style="height: auto !important;">
                                    <img class="rounded mb-2" src="{{url('images/c12.jpg')}}" width="320px" height="200px" />
                                    <h3 style="font-weight: 500;" >Why Animal infestation in the attic needs to be remediated?</h3>
                                    <p class="mt-3">Animal infestation in the attic is a common problem for homeowners, and it can be a serious issue if left unaddressed. Not only can it be a health hazard, but it can also cause damage to your home and property. In this blog, we will explore why animal infestation in the attic needs to be remediated.</p>
                                    <a href="{{url('/blog/2')}}" class="btn btn-primary" style="width: 50%;" >Read More</a>
                                </div>
                            </div>

        

                    </div>

                </div>
            </div>
        </div>
    </section>



@endsection