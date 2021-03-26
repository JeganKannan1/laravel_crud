<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>
  <title>Document</title>
</head>
<body>
  
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


          <legend style="color: green; font-weight: bold;">LARAVEL 7.X CRUD EXAMPLE - CODECHIEF
           <a href="{{ route('list') }}" style="float: right; display: block;color: white; background-color: green; padding: 1px 5px 1px 5px; text-decoration: none; border-radius: 5px; font-size: 17px;"> CUSTOMER LIST</a>
          </legend>

          <form action="{{ route('update')}}" method="post">
            @csrf
            <div class="form-group">
            <input type="hidden" value="{{$getCustomers->id}}" name="id">
            <div class="form-group">

              <label for="">Name</label>
              <input type="text" name="name" value="{{$getCustomers->name}}">
            </div>
            <div class="form-group">
              <label for="">email</label>
              <input type="email" name="email" value="{{$getCustomers->email}}">

            </div>

            <div class="form-group">
              <label for="">age</label>
              <input type="age" name="age" value="{{$getCustomers->age}}">
            
            <div class="form-group" style="margin-top: 24px;">
              <input type="submit" class="btn btn-success" value="Update">
            </div>

          </form>
        </div>
    </div>
</div>
</body>
</html>
