<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Location page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
</head>
<body>

@foreach($errors->all() as $error)
               <div class="alert alert-danger" role="alert">
                  {{$error}}
               </div>
               @endforeach
<form method="post" action="/savetask" >
             {{csrf_field()}}
            <div class="container">
                <h1>Add Locations</h1>
                <hr>

                    <label for="name"><b>Location Name</b></label>
                    <input type="text" class="form-control" placeholder="Enter Hotel name" name="Lname" required></br>
                
                    <label for="Desc"><b>Description</b></label>
                    <textarea class="form-control" placeholder="Enter Description" name="Ldesc" style="height:20px;"></textarea></br>

                    <label for="img"><b>Nearest Hotels</b></label>
                    <input type="text" class="form-control" placeholder="Enter hotels" name="NBH"></br>

                    <label for="img"><b>upload related images</b></label>
                    <input type="file" id="myFile" class="form-control" name="filename" multiple></br>
                <hr>

                <button type="submit" class="btn btn-success btn-lg" value='SAVE' >SAVE</button>
                <button type="reset" class="btn btn-warning btn-lg" >Reset</button>

            </div>
        </form>
        
      
</body>
</html>