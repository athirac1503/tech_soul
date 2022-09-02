<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0;
    }
</style>
<body>
    @foreach($add  as $post)
<h3>{{post->title}}</h3>


    @endforeach
    <li class="first">
        <h3></h3>
    </li>
</body>
</html>