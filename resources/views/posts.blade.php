<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    <title>Document</title>
</head>
<body>
        <h1>hola vista</h1>
    @foreach ($posts as $item)
    <div class="">{{ $item->title }}
    <img src="{{$item->image->path}}" alt="foto" class="">

    <p class=""></p>{{ $item->body }}</p>
    </div>
    @endforeach
    
</body>
</html>


