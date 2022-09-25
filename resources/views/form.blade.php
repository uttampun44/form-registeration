<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registeration Form</title>

    {{-- *************bootstrap css************ --}}
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

 {{-- **************javascript link*************** --}}
 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <div class="registeration-form" style="text-align: center">
        <h1>Registeration Form</h1>
      </div>
      <form class="w-50 d-grid align-items-center m-auto" style="row-gap: 2em" action="{{url('/')}}/register" method="post">
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Fullname</label>
          <input type="text" class="form-control" id="fullname" aria-describedby="emailHelp" placeholder="FullName" name="fullname">
          <span class="text-danger"> 
            @error('fullname')
              {{$message}}
          @enderror
        </span>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="email" class="form-control" id="email" placeholder="Email" name="email">
          <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
          </span>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="text" class="form-control" id="address" placeholder="Address" name="address">
            <span class="text-danger">
              @error('address')
              {{$message}}
              @enderror
            </span>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
            <span class="text-danger">
              @error('password')
              {{$message}}
              @enderror
            </span>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">ConfirmPassword</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="ConfirmPassword" name="confirm_password">
            <span class="text-danger">
              @error('confirm_password')
              {{$message}}
              @enderror
            </span>
          </div>
        <button type="submit" class="btn btn-primary" style="width: 100px">Submit</button>
      </form>
</body>
</html>