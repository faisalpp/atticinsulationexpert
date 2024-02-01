<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Font Awwesome file-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;1,300;1,400&display=swap"
        rel="stylesheet">
    @vite(['resources/css/style.css'])
</head>

<body>
    <!-- navbar section start  -->
    <nav class="navbar navbar-expand-lg navbar-light" style="border-bottom: 1px solid yellow;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{url('images/logo1.webp')}}" height="80">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{url('/services')}}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{url('/faq')}}">Faq</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{url('/blogs')}}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{url('/about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{url('/contact')}}">Contact</a>
                    </li>
                </ul>
                <div class="get-button">
                    <a href="{{url('/quote')}}">
                        <button>Get a Quote</button>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar section end  -->