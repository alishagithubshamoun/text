<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>Title</td>
                <td>Description</td>
                <td>Action</td>
                <td>Edit</td>
            </tr>
        </thead>
        <tbody>
            @php
            $id= 1;
            @endphp
            @foreach($service as $row)
            <tr>
                <td>{{ $id++}}</td>
                <td>{{ $row->test}}</td>
                <td>{{ $row->essay}}</td>
                <td>
                    <a href="/service/edit/{{$row->id}}">Edit</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>