@extends("blank")

@section("konten")
<center>
@include("menu")

<p><b>Welcome to my game<b><p>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head> 
    <body>
    
    <a href="<?php echo route("biodata") ?>"biodata<a> 
    <a href="<?php echo route("game") ?>"game<a> 
    <a href="<?php echo route("film") ?>"film<a> 
    <a href="<?php echo route("robotic") ?>"film<a> 
    <a href="<?php echo route("pokemon") ?>"film<a> 


        <p><hi>Welcome to my game<hi></p>
    
    </body>
    </html>
    <center>
    @endsection