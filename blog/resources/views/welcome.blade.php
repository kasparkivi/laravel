<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>

    <table class="w-full table-auto">
    <thead class="font-bold">
        <tr>
            
            <td>Pealkiri</td>
            <td>Autor</td>
            <td>Aasta</td>
            <td>Lehekülgi</td>
            <td>Hind</td>
            <td>Laoseis</td>
            <td>Tüüp</td>
                
        </tr>
    </thead>
    <tbody class="text-sm">
        @foreach($books as $book)
    
        <tr>
  
            <td>{{ $book->title}}</td>
            <td></td>
            <td> {{$book->release_date}}</td>
            <td> {{$book->pages}}</td>
            <td> {{$book->price}}</td>
            <td> {{$book->stock_saldo}}</td>
            <td> {{$book->type}}</td
  
    </tr>
    @endforeach

