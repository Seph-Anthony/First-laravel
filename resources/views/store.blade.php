<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1>Welcome to {{$shopName}}</h1>
<h3>Our Featured Product</h3>
<ul>

@foreach($items as $item)

<li>{{ $item }}</li>

@endforeach

</ul>

</body>
</html>