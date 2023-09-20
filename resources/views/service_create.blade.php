<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method='post' action="/service/store">
        @csrf
        <input type="text" name='test' required placeholder='please input field'>
        <input type="text" name='essay' required placeholder='please input field'>
        <button type='submit'>submit</button>
    </form>
</body>
</html>