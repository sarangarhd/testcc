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
     <div class="card text-center" style="width: 30rem; opacity:0.9; margin-left: 30%; margin-top: 150px; opacity:0.8;">
        <div class="card-body">
            <h5 class="card-title">Cure Connect docter channeling</h5>

            <!--  -->
            <form class="form-inline" action="/sendappoinment" method="POST">
            @csrf

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Patient Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputname" placeholder="Ente patient Name" name="p_name">
                    </div>
                </div>


                <div class="form-group row">
                    <label  class="col-sm-3 col-form-label">Select Doctor</label>
                    <div class="col-sm-4">
                    <select class="custom-select my-1 mr-sm-4" id="inlineFormCustomSelectPref" name="select">
                    <option selected>Choose Doctor</option>
                    <option value="1">Dr H.M.C.S.Hennyake</option>
                    <option value="2">Dr M.V.T.Dilshan</option>
                    <option value="3">Dr L.P.S.H.D.Madusha</option>
                    <option value="3">Dr R.B.P.Ranathunga</option>
                    </select>

                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Select Date:</label>
                    <div class="col-sm-4">
                    <input type="date" id="date" name="date">
                        
                    </div>
                </div>



<!--                 
                <label for="birthday"></label>
                <input type="date" id="date" name="date"> -->



                <button type="submit" class="btn btn-primary my-1">Submit</button>
            </form>
            <!--  -->
        </div>
    </div>


</div>
    
</body >


</html>

@endsection
