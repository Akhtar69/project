<!DOCTYPE html>
<html lang="en">

<head>
    <title>Welcome Our Digital Library store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" i
        ntegrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</head>

<body>
    {{-- {{dd($customer)}} --}}
    <div class="container">
        <form action="{{ route('bookingSubmit') }}" method="POST" style="background:lightgrey; width: 80%; height:380px; margin:100px 0px 0px 50px;align-items:center;" enctype="multipart/form-data">
            <h2 class="text-center">Booking Form</h2>
            @csrf
            <div class="row">
                <div class="col">
                    <label for="customer" style="margin-left:130px;">Customer Name:</label>
                    <select class="form-control" name="customer" style="width:300px;" value="{{$data->s_classes_id}}>
                        <option>Choose Book</option>
                        @foreach ($customers as $customer)
                            <option value="{{ $customer->id }}"> {{ $customer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="book">Book Name:</label>
                    <select class="form-control" name="book" style="width:300px;">
                        <option>Choose Book</option>
                        @foreach ($bookings as $booking)
                            <option value="{{ $booking->id }}"> {{ $booking->title }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="date" style="margin-left:130px;">Entry Date:</label>
                    <input type="date" class="form-control" name="entry_date" style="width: 300px;margin:0 0 0 130px;">

                </div>
                <div class="col">

                    <label for="from_date">From Date:</label>
                    <input type="date" class="form-control" name="from_date" style="width: 300px;margin_top:-30px;">

                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="to_date" style="margin-left:130px;">To Date:</label>

                    <input type="date" class="form-control" name="to_date" style="width: 300px;margin-left:130px;">
                </div>
            <div class="row">
                <div class="col">
                    <label for="rent" style="margin:0 0 0 130px;">Rent:</label>
                    <input type="number" class="form-control" name="rent" style="width: 300px;margin:0 0 0 130px;">
                </div>
                <div class="col">
                    <label for="totalrent">Total Rent:</label>
                    <input type="number" class="form-control" name="totalrent" style="width: 300px;">
                </div>
                <div class="col">
                    <button class="btn btn-primary" style="margin:20px 0 0 200px; width:150px;">Submit</button>

                </div>
            </div>
        </form>
    </div>
</body>

</html>
