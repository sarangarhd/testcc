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




    <!--  -->

    <div class="card text-center" style="width: 30rem; opacity:0.9; margin-left: 30%; margin-top: 150px; opacity:0.8; height:10rem;">


        <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups" style="margin-left: 40px;">
            <div>
                <br>
                
                <b><h3 class="card-title" style="margin-left: 10px;">Cure Connect docter channeling</h3> </b>
                
                <br>
                <div style="margin-top: 10px;">
                <a class="btn btn-dark" type="button" class="btn btn-secondary" href="/login">login</a>
                <a class="btn btn-dark" type="button" class="btn btn-secondary" href="/register">register</a>

                </div>

                <br>

            </div>
        </div>

    </div>



    <!--  -->






</body>

</html>