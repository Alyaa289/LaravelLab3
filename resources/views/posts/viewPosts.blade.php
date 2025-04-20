<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>All Posts</title>
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

            .container {
                background-color: #fff;
                border-radius: 15px;
                padding: 20px;
                box-shadow: 0 4px 8px rgb(153, 104, 135);
            }

            .table th,
            .table td {
                vertical-align: middle;
            }

            .table th {
                background-color: #343a40;
                color: white;
            }
            
        </style>
</head>

<body class="bg-dark text-white">

    <div class="container mt-5">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>All Posts</h2>
            <a href="/posts/create" class="btn btn-success"> Add Post</a>
        </div>

        <table class="table table-hover table-bordered table-dark rounded shadow">
            <thead class="table-secondary text-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Created By</th>
                    <th colspan="3" class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post['id'] }}</td>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['body'] }}</td>
                        <td>{{ $post['create_by'] }}</td>
                        <td><a href="/posts/{{ $post['id'] }}" class="btn btn-info btn-sm">View</a></td>
                        <td><a href="/posts/{{ $post['id'] }}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                        <td>
                            <form action="/posts/{{ $post['id'] }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center mt-4">
            {{ $posts->links('pagination::bootstrap-5') }}
        </div>
    </div>

</body>

</html>