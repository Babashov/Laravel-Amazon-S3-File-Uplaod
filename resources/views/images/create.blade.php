<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon S3 Image File Upload</title>
</head>
<body>
    <form action="{{route('images')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <input type="submit" value="Upload">
    </form>
</body>
</html>