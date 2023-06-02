<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <script src="{{asset('js/app.js')}}"></script>

</head>

<body style="background-image:url('{{asset('images/aaa.jpg')}}') ; 
 background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
">

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #056636;">


        <div class="collapse navbar-collapse" id="navbarText">
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                <h2> </h2>
                @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="margin-left: 20px;">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                @endif
                @endauth
            </div>
            @endif

        </div>
    </nav>


    <!--  -->

    <div class="card text-center" style="width: 30rem; opacity:0.9; margin-left: 30%; margin-top: 150px; opacity:0.8;">
        <div class="card-body">
            <h5 class="card-title">Cure Connect docter channeling</h5>

            <!--  -->
            <form class="form-inline">

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-3 col-form-label">Patient Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="inputname" placeholder="Ente patient Name">
                    </div>
                </div>


                <div class="form-group row">
                    <label  class="col-sm-3 col-form-label">Select Doctor</label>
                    <div class="col-sm-4">
                    <select class="custom-select my-1 mr-sm-4" id="inlineFormCustomSelectPref">
                    <option selected>Choose Doctor</option>
                    <option value="Dr H.M.C.S.Hennyake">Dr H.M.C.S.Hennyake</option>
                    <option value="Dr M.V.T.Dilshan">Dr M.V.T.Dilshan</option>
                    <option value="Dr L.P.S.H.D.Madusha">Dr L.P.S.H.D.Madusha</option>
                    <option value="Dr R.B.P.Ranathunga">Dr R.B.P.Ranathunga</option>
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



    <!--  -->






</body>

</html>