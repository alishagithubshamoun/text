<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>about page</h2>
    <form method='post' action="/about/store">
        @csrf
        <input type="text" name='hi' required placeholder='please input field'>
        <input type="text" name='how' required placeholder='please input field'>
        <button type='sumbit'>submit</button>
    </form>
</body>
</html>       