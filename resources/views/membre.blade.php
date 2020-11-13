<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

</head>
<body>
    <div class="container">
        <h1>tous les membres</h1>

        <div class="row">
        @foreach ($datas as $element)
        <div class="col-4">
              <h5>{{$element->nom}}</h5>
              <a href="/elem/{{$element->id}}">Bio</a>
        </div>
        @if($loop->iteration % 3 == 0)
        </div>
        <div class="row my-4">
            @endif
        @endforeach
        </div>
        <form action="/destroy" method="post">

            @csrf
    
            <button type="submit">Delete All</button>
        </form>
                
        
</body>
</html>