<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
  <form action="{{ url('user/' .$users->id) }}" method="post">
    @csrf
    @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$users->id}}" id="id" />
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$users->email}}" class="form-control"></br>
        <label>Password</label></br>
        <input type="text" name="password" id="password" value="{{$users->password}}" class="form-control"></br>
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$users->name}}" class="form-control"></br>
        <label>Country</label></br>
        <input type="text" name="coutry" id="coutry" value="{{$users->country}}" class="form-control"></br>
        <label>Sex</label></br>
        <input type="text" name="sex" id="sex" value="{{$users->sex}}" class="form-control"></br>
        <label>Hobby</label></br>
        <input type="text" name="hobby" id="hobby" value="{{$users->hobby}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
</body>
</html>