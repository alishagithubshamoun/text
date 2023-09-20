<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>contact page</h2>
    <form method='post' action="/contact/store">
        @csrf
        <input type="text" name='email' required placeholder='please input field'>
        <input type="text" name='phone' required placeholder='please input field'>
        <button type='submit'>submit</button>
    </form>
</body>
</html>