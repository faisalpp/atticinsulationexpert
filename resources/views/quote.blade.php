@extends('layout.main')
@section('main')
<div class="container contact-form-2 rounded shadow-sm">
    <div class="contact-image">
        <img src="{{url('images/rocket_contact.png')}}" alt="rocket_contact"/>
    </div>
            <form action="{{url('/send-quote')}}" method="post">
                @csrf
                <h3>Get A Quote</h3>
                @if(session()->has('error'))
             <h5 class="text-danger text-center">{{session()->get('error')}}</h5>
            @endif
                @if(session()->has('success'))
                 <h5 style="color:green" class="text-center">{{session()->get('success')}}</h5>
                @endif
       <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    @error('name') 
                     <h8 style="font-size:0.8rem" class="text-danger" >{{$message}}</h8>
                    @enderror
                    <input type="text" name="name" class="form-control" placeholder="Your Name *" value="" />
                </div>
                <div class="form-group">
                @error('email') 
                     <h8 style="font-size:0.8rem" class="text-danger" >{{$message}}</h8>
                    @enderror
                    <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <div class="form-group">
                @error('phone') 
                     <h8 style="font-size:0.8rem" class="text-danger" >{{$message}}</h8>
                    @enderror
                    <input type="number" name="phone" class="form-control" placeholder="Your Phone Number *" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                @error('msg') 
                     <h8 style="font-size:0.8rem" class="text-danger" >{{$message}}</h8>
                    @enderror
                    <textarea name="msg" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;"></textarea>
                </div>
            </div>
        </div>
    </form>
</div>

@endsection