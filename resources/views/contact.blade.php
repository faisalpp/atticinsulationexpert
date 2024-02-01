@extends('layout.main')
@section('main')

    <!-- request section start  -->
    <section>
        <form class="map" action="{{url('/send-msg')}}" method="post" >
            @csrf
            @if(session()->has('error'))
             <h5 class="text-danger text-center">{{session()->get('error')}}</h5>
            @endif
            @if(session()->has('success'))
             <h5 style="color:green" class="text-center">{{session()->get('success')}}</h5>
            @endif
            <div class="container">
                <div class="row mt-3 align-items-center">
                    <div class="col-lg-6 mt-5">
                        <div class="row bg-form">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label bg-form-label">Name *</label>
                                    @error('name') 
                                     <h8 style="font-size:0.8rem" class="text-danger" >{{$message}}</h8>
                                    @enderror
                                    <input type="text" name="name" class="form-control bg-form-input" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter your name">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label bg-form-label">Email *</label>
                                    @error('email') 
                                     <h8 style="font-size:0.8rem" class="text-danger" >{{$message}}</h8>
                                    @enderror
                                    <input type="email" name="email" class="form-control bg-form-input" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter your email">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label bg-form-label">Phone *</label>
                                    @error('phone') 
                                       <h8 style="font-size:0.8rem" class="text-danger" >{{$message}}</h8>
                                    @enderror
                                    <input type="number" name="phone" class="form-control bg-form-input" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter your phone">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label bg-form-label">Subject *</label>
                                    @error('subject') 
                                     <h8 style="font-size:0.8rem" class="text-danger" >{{$message}}</h8>
                                    @enderror
                                    <input type="text" name="subject" class="form-control bg-form-input" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Type the subject">
                                </div>
                            </div>


                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label bg-form-label">Subject *</label>
                                    @error('msg') 
                                     <h8 style="font-size:0.8rem" class="text-danger" >{{$msg}}</h8>
                                    @enderror
                                    <textarea name="msg" class="form-control bg-form-input" id="exampleFormControlTextarea1"
                                        rows="8"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <div class="form-text">
                                        <button>Submit</button>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-lg-6 mt-5">
                        <div class="contact-form">
                            <h1>CONTACT ME</h1>
                            <p class="mt-3">3142 Dundas St W, Toronto, ON M6P 2A1, Canada</p>
                            <a class="mt-3">atticinsulationexperts@gmail.com</a> <br>
                            <p class="a">
                                <a>6474964014</a>
                            </p>
                        </div>
                    </div>

                </div>
            </div>
</form>
    </section>
    <!-- request section end  -->


@endsection