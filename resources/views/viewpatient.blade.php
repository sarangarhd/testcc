<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>appoinment</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
    <script src="{{asset('js/app.js')}}"></script>
</head>

<body>
    <div class="card text-center" style="width: 60rem; margin-left: 250px; margin-top :10px;">
        <div class="card-header">
            <h5 style="text-align: center; color:black;">EDIT PATIENT DETAILS</h5>
        </div>
        <div class="card-body">
            <table class="table table-dark ">

                <thead>

                    <tr>

                        <th>Appoinment num</th>
                        <th>patient Name</th>
                        <th>Date</th>
                        <th>Doctor name</th>
                        <th>appoinment status</th>
                        <th>Delete</th>

                    </tr>

                </thead>

                <tbody>

                    @foreach ($user as $appointment)

                    <tr>
                        <td>{{ $appointment->id }}</td>

                        <td>{{ $appointment->p_name }}</td>

                        <td>{{ $appointment->date}}</td>









                        @if($appointment->d_name=='1')

                        <td><b>

                                <p style="color:chartreuse;">Dr H.M.C.S.Hennyake</p>

                            </b></td>

                        @elseif($appointment->d_name=='2')

                        <td><b>

                                <p style="color:blue">Dr M.V.T.Dilshan</p>

                            </b></td>
                        @elseif($appointment->d_name=='3')

                        <td><b>

                                <p style="color:red">Dr L.P.S.H.D.Madusha</p>

                            </b></td>

                        @elseif($appointment->d_name=='4')

                        <td><b>

                                <p style="color:pink">Dr R.B.P.Ranathunga</p>

                            </b></td>



                        @endif

                        @if($appointment->status==0)

                        <td><b>

                                <p style="color:#04db3e;">Pending</p>
                                <a href="confirm/{{$appointment->id}}" class="btn btn-secondary btn-sm">confirm</a></td>

                        </b></td>

                        @else

                        <td><b>

                                <p style="color:#cccc00;">Success</p>

                            </b></td>

                        @endif

                        <td> <a href="deletepatient/{{$appointment->id}}" class="btn btn-danger">Delete</a></td>











                    </tr>

                    @endforeach

                </tbody>

            </table>
            <a href="/user" class="btn btn-primary">Go Back</a>
        </div>
    </div>
</body>

</html>