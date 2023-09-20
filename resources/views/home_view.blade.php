<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Home</h1>
    <table>
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
            @foreach($home as $row)
            <tr>
                <td>{{ $id++ }}</td>
                <td>{{ $row->title }}</td>
                <td>{{ $row->description }}</td>
                <td>
                    <a href="/home/edit/{{$row->id}}">Edit</a>
                    <a href="#">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>