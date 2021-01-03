<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>


<div class = "container">
<div class = "text-center">

<h1>Employee Profile</h1>

<div class = "row justify-content-center ">

@foreach($errors -> all() as $error)
<div class="alert alert-danger" role="alert">
    {{$error}}
</div>
@endforeach

<form method = "post" action = "/update" class="col-4">
{{csrf_field()}}
    <input type = "text" class="form-control" name = "eid" id = "eid" value = "{{$employee->id}}"><br>
    <input type = "text" class="form-control" name = "fname" id = "fname" value = "{{$employee->fname}}"><br>
    <input type = "text" class="form-control" name = "lname" id = "lname" value = "{{$employee->lname}}"><br>
    <input type = "text" class="form-control" name = "phone" id ="phone" value = "{{$employee->contact}}"><br>
    <input type = "text" class="form-control" name = "nic" id ="nic" value = "{{$employee->NIC}}"><br>
    <input type="submit" value="Update" class="btn btn-warning">
    <a href="/delete/{{$employee->id}}" class="btn btn-danger">Delete</a>

</form>

</div>
</div>
</div>


    
</body>
</html>