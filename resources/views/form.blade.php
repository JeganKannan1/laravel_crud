<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> </script>
</head>
<body>
    <form action='{{route("submit")}}' method="POST">
     @csrf
  <div class="form-group">
    <label>name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="enter your name" require>
  </div>
    <div class="form-group">
    <label>email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="enter your email" require>
  </div> 
  <div class="form-group">
    <label>age</label>
    <input type="number" class="form-control" name="age" id="age" placeholder="enter your age" require>
  </div> 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<br>
<br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if(isset($getCustomers)) 
        <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>age</td>
        

          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody> 
    
        @foreach($getCustomers as $customer)
        <tr>
            <td>{{$customer->id}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->age}}</td>

            <td>
                <a href="{{ route('edit',$customer->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
              <form action="{{ route('delete', $customer->id)}}" method="post"> 
              @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>          
             </td>
        </tr>
        @endforeach
  @endif
    </tbody>
 </table> 
        </div>
    </div>
</div> 

</body>
</html>