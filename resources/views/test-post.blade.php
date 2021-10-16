<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center><h1>Data Post</h1></center>
    @foreach ($query as $item)
        <h2>{{$item->title}}</h2>
        <p>{{$item->content}}</p>
        <hr>
    @endforeach
</body>
</html>

