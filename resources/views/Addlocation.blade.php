!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Location page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 

</head>
<body>



               <div class="container">
                    <table class="table table-dark">
                        <th>ID</th>
                        <th>Location Name</th>
                        <th>Description</th>
                        <th>nearest Hotels</th>
                        <th>Gallrey</th>
                        <th>actions</th>
                        @foreach($location as $nl)
                        <tr>
                            <th>{{$nl->id}}</th>
                            <th>{{$nl->location_name}}</th>
                            <th>{{$nl->location_Description}}</th>
                            <th>{{$nl->Nearest_Hotels}}</th>
                            <th>{{$nl->Gallery}}</th>
                            <th>
                            <a href="/deletetask/{{$location->id}}" class="btn btn-outline-danger"> delete</a>
                                <a href="/updatetask/{{$location->id}}" class="btn btn-outline-warning"> Update</a>
                            </th>
                        </tr>
                        @endforeach
                    </table>
                </div>
    
  </body>
</html>