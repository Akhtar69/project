<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customers Data Submit Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" i
    ntegrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <form action="{{route('submitCustomer')}}" method="POST" style="background:lightgrey;width: 80%; height:300px; margin:100px 0px 0px 50px;align-items:center;">
        <h2 class="text-center">Customer Form</h2>
        @csrf
    <div class="row">
        <div class="col">
            <label for="name" style="margin-left:140px;">NAME:</label>

          <input type="text" class="form-control" name="name" style="width: 300px;margin-left:130px;">
        </div>
        <div class="col">
            <label for="phone">PHONE:</label>

          <input type="text" class="form-control" name="phone" style="width: 300px;">
        </div>
      </div>
      <div class="row">
        <div class="col">
            <label for="email" style="margin-left:140px;">EMAIL:</label>
          <input type="text" class="form-control" name="email" style="width: 300px;margin-left:130px;">
        </div>
        <div class="col">
            <label for="gender">GENDER:</label>

          <input type="text" class="form-control" name="gender" style="width: 300px;">
        </div>
      </div>
      <div class="row">
        <div class="col">
            <label for="cnic" style="margin-left:140px;">CNIC:</label>

          <input type="text" class="form-control" name="cnic" style="width: 300px;margin-left:130px;">
        </div>
        <div class="col">
            <label for="address">ADDRESS:</label>

          <input type="text" class="form-control" name="address" style="width: 300px;">
        </div>
      </div>
      <button class="btn btn-primary" style="margin:20px 0 0 200px; width:150px;">Submit</button>
    </form>
</div>
</body>
</html>
