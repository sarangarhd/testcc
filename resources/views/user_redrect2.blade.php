@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background-image:url('{{asset('images/aaa.jpg')}}') ; 
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
">



    <div class="container">
        <div class="card text-center" style="width: 30rem; opacity:0.9; margin-left: 30%; margin-top: 150px; ">
        @foreach ($user as $appointment)
        <div class="card-body">
                <h5 class="card-title">CURE CONNECT ONLINE DOCTOR CHANNELING</h5>
                
                <p class="card-text">{{ $product->description }}</p>
                <a href="#" class="btn btn-primary">Buy Now</a>
            </div>

        </div>

        @endforeach


    </div>

</body>


</html>

@endsection