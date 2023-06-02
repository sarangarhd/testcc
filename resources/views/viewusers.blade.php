<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}" type="text/css">
  <script src="{{asset('js/app.js')}}"></script>
</head>

<body>


  <div class="card text-center" style="width: 60rem; margin-left: 250px; margin-top :10px;">

    <div class="card-header">
    <h5 style="text-align: center; color:black;">EDIT USER DETAILS</h5>
    </div>

    <div class="card-body">

      <table class="table table-dark">
        <thead>
          <tr>
            <th>Name</th>
            <th >email</th> 
            <th >delete</th>
          </tr>
        </thead>
        <tbody>
        @foreach($user as $data)
          <tr>
         

            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td> <a href="deleteEmp/{{$data->id}}" class="btn btn-danger">Delete</a></td>
           
          </tr>
          @endforeach
        </tbody>
      </table>
      

      <a href="/user" class="btn btn-primary">Go Back</a>
    </div>
  </div>





  </div>

</body>

</html>