<!DOCTYPE html>
<html>
<head>
    <title>Laravel CRUD - Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Post List</h2>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <div class="mb-3">
        <a class="btn btn-primary" href="{{ route('note#create') }}">Create New Post</a>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th width="250px">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $key => $post)
                <tr>
                    <td>{{ ++$key }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    <td>
                        <a href="{{ route('note#edit', $post->id) }}" class="btn btn-secondary btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{ route('note#destroy', $post->id) }}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                        {{-- <a class="btn btn-info btn-sm" href="{{ route('index.create', $post->id) }}">Show</a>
                        <a class="btn btn-warning btn-sm" href="{{ route('', $post->id) }}">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')">Delete</button>
                        </form> --}}
                    </td>
                </tr>
            @endforeach

            @if ($posts->isEmpty())
                <tr>
                    <td colspan="4" class="text-center">No posts found.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

</body>
</html>
