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
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <form action="" method="POST" style="background:lightgrey; width: 80%; height:300px; margin:100px 0px 0px 50px;align-items:center;" enctype="multipart/form-data">
            <h2 class="text-center">Book Form</h2>
            @csrf
            <div class="row">
                <div class="col">
                    <label for="title" style="margin-left:140px;">Title:</label>
                    <input type="text" class="form-control" name="title" style="width: 300px;margin-left:130px;">
                </div>
                <div class="col">
                    <label for="author">Author:</label>
                    <select class="form-control" name="author" style="width:300px;">
                        <option>Choose Author</option>
                        @foreach ($authors as $author)
                            <option value="{{ $author->id }}"> {{ $author->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="publisher" style="margin-left:140px;">Publisher:</label>
                    <select class="form-control" name="publisher" style="margin-left:130px;width:300px;">
                        <option>Choose Publisher</option>
                        @foreach ($publishers as $publisher)
                            <option value="{{ $publisher->id }}"> {{ $publisher->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="pages">Pages:</label>
                    <input type="text" class="form-control" name="pages" style="width: 300px;margin_top:-30px;">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="addition" style="margin-left:140px;">Addition:</label>

                    <input type="text" class="form-control" name="addition" style="width: 300px;margin-left:130px;">
                </div>
                <div class="col">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" name="price" style="width: 300px;">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="image" style="margin:0 0 0 130px;">Image:</label>
                    <input type="file" class="form-control" name="image" style="width: 300px;margin:0 0 0 130px;">
                </div>
                <div class="col">
                    <button class="btn btn-primary" style="margin:20px 0 0 100px; width:150px;">Submit</button>

                </div>
            </div>
        </form>
    </div>
</body>

</html>
