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
    @include('partial/navbar')
    <section class="mt-5 mb-5">

        <form action="/test" method="post">
    
            @csrf
    
            Nom :<input type="text" name="nom">
            Age :<input type="number" name="age">
            Genre :<input type="text" name="genre">
        
            <button type="submit"> click</button>
            
        </form>
    
    </section>

</body>
</html>