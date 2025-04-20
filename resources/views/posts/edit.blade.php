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
    color: #333;
    font-family: Arial, sans-serif;
    min-height: 100vh; 
    margin: 0;
    padding: 0;
}

.container {
            background-color: #fff; 
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); 
}
.btn{
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
    <div class="container mt-5">
        <h2 class="mb-4">Edit Post</h2>
        <form action="/posts/{{ $posts['id'] }}" method="post">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="Title" class="form-label">Title</label>
                <input type="text" class="form-control" id="Title" name="title" value="{{ $posts['title'] }}">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <input type="text" class="form-control" id="body" name="body" value="{{ $posts['body'] }}">
            </div>
            <div class="mb-3">
                <label for="create_by" class="form-label">Create By</label>
                <input type="text" class="form-control" id="create_by" name="create_by" value="{{ $posts['create_by'] }}">
            </div>
            <input type="submit" value="Update" class="btn btn-primary">
        </form>
    </div>
</body>
</html>
