<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if ($errors->any())

<div class="alert alert-danger">

    <button type="button" class="close" data-dismiss="alert">×</button>    

{{$errors->first()}}
</div>

@endif
    <form method='post' action="/about/update/{{$about->id}}">
        @csrf
        @method('put')
        <input type="text" value='{{$about->hi}}' name='hi'  placeholder='please input field'>
        <input type="text" value='{{$about->how}}' name='how'   placeholder='please input field'>
        <button type='submit'>submit</button>
    </form>
</body>
</html>