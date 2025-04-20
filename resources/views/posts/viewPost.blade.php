<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Post Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg,rgb(153, 104, 135), #fffcdc); 

            color: #fff;
        }

        .card {
            border: none;
            border-radius: 15px;
            background: white;
            color:rgb(0, 0, 0);
        }

        .btn {
            background-color: rgb(95, 59, 82);
    border:#333;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 16px;
        }

        .btn:hover {
            background-color:rgb(134, 84, 116);
            color: black;
        }
    </style>
</head>

<body>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h4 class="card-title mb-4 text-center">📄 Post {{ $posts['id'] }}</h4>
                        <hr>
                        <p><strong> Title:</strong> {{ $posts['title'] }}</p>
                        <p><strong> Body:</strong> {{ $posts['body'] }}</p>
                        <p><strong> Created By:</strong> {{ $posts['create_by'] }}</p>
                        <div class="d-flex justify-content-between mt-4">
                            <a href="/posts" class="btn btn-light">← Back</a>
                            <a href="/posts/{{ $posts['id'] }}/edit" class="btn btn-warning"> Edit</a>
                            <form action="/posts/{{ $posts['id'] }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">🗑️ Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
