<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="card">
  <div class="card-header">User Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Email : {{ $users->email }}</h5>
        <p class="card-text">Password : {{ $users->password }}</p>
        <p class="card-text">Name : {{ $users->name }}</p>
        <p class="card-text">Country : {{ $users->country }}</p>
        <p class="card-text">Sex : {{ $users->sex }}</p>
        <p class="card-text">Hobby : {{ $users->hobby }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
</body>
</html>