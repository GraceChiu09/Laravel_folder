<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>今天是拉拉日</h3>
    <!-- <a href="/bikes/create">create btn</a> -->

    <a href="{{route('bikes.create')}}">create btn</a>

     <a href="{{route('bikes.edit',['bike' => 1, 'test' => 123])}}">edit btn</a>
     <a href="{{route('student555')}}">student btn</a>
    </body>
</html>