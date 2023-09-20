<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <h2>contact page</h2>
    @if(Session::has('success'))
          <div class="alert alert-success">
              {{ Session::get('success') }}
          </div>
    @endif
    <a class="btn btn-primary" href="/contact/create">create contact</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Description</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @php 
            $id = 1;
            @endphp
            @foreach($contact as $row)
            <tr>
                <td>{{ $id++ }}</td>
                <td>{{ $row->email }}</td>
                <td>{{ $row->phone }}</td>
                <td>
                    <a href="/contact/edit/{{$row->id}}">Edit</a>
                        <form method='post' action="/contact/delete/{{$row->id}}">
                            @csrf
                            @method('delete')
                            <button onclick='return confirm("are you sure want to delete this?")' type='submit'>Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>