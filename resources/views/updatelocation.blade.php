<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update location</title>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 

</head>
<body>
<form method="post" action="/updatetasks" >
        {{csrf_field()}}
            <div class="container">
                <h1>Add Locations</h1>
                <hr>

                    <label for="name"><b>Location Name</b></label>
                    <input type="text" class="form-control" placeholder="Enter Hotel name" name="Lname" value="{{$updatelocation->Lname}}"></br>
                    <input type="hidden" name="id" value="{{$updatelocation->id}}">
                    <label for="Desc"><b>Description</b></label>
                    <textarea class="form-control" placeholder="Enter Description" name="Ldesc" style="height:20px;" value="{{$updatelocation->Ldesc}}"></textarea></br>
                    <input type="hidden" name="Ldesc" value="{{$updatelocation->Ldesc}}">
                    <label for="img"><b>Nearest Hotels</b></label>
                    <input type="text" class="form-control" placeholder="Enter hotels" name="NBH" value="{{$updatelocation->NBH}}"></br>
                    <input type="hidden" name="NBH" value="{{$updatelocation->NBH}}">
                    <label for="img"><b>upload related images</b></label>
                    <input type="file" id="myFile" class="form-control" name="filename" multiple value="{{$updatelocation->filename}}">
                    <input type="hidden" name="filename" value="{{$updatelocation->filename}}"></br>
                <hr>

                <button type="submit" class="btn btn-success btn-lg" value='update' >update</button>
                <button type="reset" class="btn btn-warning btn-lg" >Reset</button>
    
</body>
</html>