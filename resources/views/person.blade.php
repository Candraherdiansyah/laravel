<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        @foreach($persons as $data)
            id : {{$data['id']}}<br>
            nama : {{$data['nama']}} <br>
            username: {{$data['username']}}<br>
            email: {{$data['email']}} <br>
            alamat: {{$data['alamat']}} <br>
            mata pelajaran :
            @foreach($data['mapel'] as $mapel)
                <li>{{$mapel}}</li>
            @endforeach
            <hr>
        @endforeach
    </ul>

</body>
</html>
