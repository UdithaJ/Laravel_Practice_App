<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
body {
    background-image:url(https://images.unsplash.com/photo-1552313197-93bc4445c270?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1447&q=80);
    }
</style>
</head>
<body>


<div class = "container">
<div class = "text-center">

<h1>Login</h1>

<div class = "row justify-content-center ">

<form method = "POST" class="col-4" action="/validate">
{{csrf_field()}}
    <input type = "text" class="form-control" name = "username" id = "username" placeholder="Username"><br>
    <input type = "password" class="form-control" name = "password" id ="password" placeholder="Password"><br>
    <input type="submit">
</form>

</div>
</div>
</div>


    
</body>
</html>