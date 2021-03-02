<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon S3 Folder Create</title>
</head>
<body>
    
    <form action="{{route('folder')}}" method="post">
    
        @csrf
        <input type="text" name="folder_name">
        <input type="submit" value="Create Folder">

    </form>

</body>
</html>