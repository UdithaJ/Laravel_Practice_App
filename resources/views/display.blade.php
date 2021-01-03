<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
body {
    background-image:url(https://images.unsplash.com/photo-1552313197-93bc4445c270?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1447&q=80);
    }
</style>

</head>
<body>

<div class="row justify-content-center">
<div class = "col-6">
<br>
<a href="/add" class="btn btn-primary">Add New</a>

</div>
</div>
<br>
 
<div class="row justify-content-center">
    <div class = "col-6">
<table class="table table-dark">
<th>First name</th>
<th>Last name</th>
<th>Contact</th>
<th>NIC</th>
<th>Action</th>
<tr>

@foreach($employee as $emp)
    <td>{{$emp->fname}}</td>
    <td>{{$emp->lname}}</td>
    <td>{{$emp->contact}}</td>
    <td>{{$emp->NIC}}</td>
    <td><a href="/view/{{$emp->id}}" class="btn btn-success">View</a></td>
  
</tr>
@endforeach

</table>
</div>
</div>

</body>
</html>