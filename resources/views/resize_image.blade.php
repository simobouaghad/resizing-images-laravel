<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>resize images</title>
</head>
<body>
    <form action="{{url('resize_image')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <input type="file" name="file" id="file">
        <input type="submit" value="upload">
    </form>
</body>
</html>
